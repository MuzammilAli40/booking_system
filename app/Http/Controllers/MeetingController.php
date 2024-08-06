<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Meeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MeetingController extends Controller
{
    
    public function index()
    {
        $meetings = Meeting::all();

        $meetingsData = $meetings->map(function ($meeting) {
            return [
                'title' => $meeting->title,
                'start' => $meeting->meeting_time->toIso8601String(),
                'end' => $meeting->meeting_time->addMinutes(30)->toIso8601String(),
                'description' => $meeting->organizer,
            ];
        })->toArray();

        $meetingsJson = json_encode($meetingsData);

        return view('frontend.home', compact('meetingsJson'));
    }



    public function create()
    {
        $employees = Employee::all();
        return view('frontend.book', compact('employees'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'organizer' => 'required|string|max:255',
            'meeting_time' => 'required|date_format:Y-m-d\TH:i',
            'participants' => 'nullable|array',
            'participants.*' => 'exists:employees,id',
        ]);

        $validator->after(function ($validator) use ($request) {
            $existingMeeting = Meeting::where('meeting_time', $request->meeting_time)->exists();

            if ($existingMeeting) {
                $validator->errors()->add('meeting_time', 'There is already a meeting scheduled at this time. Please choose a different time.');
            }
        });

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            Meeting::create([
                'title' => $request->input('title'),
                'organizer' => $request->input('organizer'),
                'meeting_time' => $request->input('meeting_time'),
                'participants' => implode(',', $request->input('participants', [])),
            ]);

            return redirect()->route('booking.create')->with('success', 'Meeting booked successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to book meeting. Please try again.')->withInput();
        }
    }




}