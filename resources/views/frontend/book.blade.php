<x-guest-layout>
    <div class="container my-5">
        <h2 class="text-center mb-4">Book a Meeting</h2>

        <form action="{{ route('booking.store') }}" method="POST">
            @csrf
            <div class="form-group my-2">
                <label for="title">Meeting Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter meeting title"
                    required>
            </div>

            <div class="form-group my-2">
                <label for="organizer">Organizer</label>
                <input type="text" class="form-control" id="organizer" name="organizer"
                    placeholder="Enter organizer name" required>
            </div>

            <div class="form-group my-2">
                <label for="meeting_time">Meeting Time</label>
                <input type="datetime-local" class="form-control" id="meeting_time" name="meeting_time" required>
            </div>

            <div class="form-group my-2">
                <label for="participants">Participants (optional)</label>
                <select class="form-select select2" id="participants" name="participants[]" multiple="multiple">
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Book Meeting</button>
        </form>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.select2').select2({
                    placeholder: 'Select participants',
                    allowClear: true
                });
            });
        </script>
    @endpush
</x-guest-layout>
