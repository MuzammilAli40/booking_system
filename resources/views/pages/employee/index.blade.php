<x-app-layout>
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Employees</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Employees</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Employees List</h3>
                        </div>
                        <div class="card-body">
                            <table id="employee_table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>City</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $employee->name }}</td>
                                            <td>{{ $employee->email }}</td>
                                            <td>{{ $employee->department }}</td>
                                            <td>{{ $employee->city }}</td>
                                            <td>{{ $employee->phone }}</td>
                                            <td align="center">
                                                <div class="d-flex flex-row gap-2">
                                                    <a class="btn btn-soft-info btn-sm d-inline-block edit-button"
                                                        href="{{ route('employee.edit', $employee->id) }}"
                                                        title="Edit employee">
                                                        <i class="las la-pen fs-17 align-middle"></i>
                                                    </a>
                                                    <form action="{{ route('employee.destroy', $employee->id) }}"
                                                        method="post" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="javascript::void(0)"
                                                            onclick="confirm_form_delete(this)"
                                                            class="btn btn-icon btn-soft-danger btn-sm d-flex flex-column justify-content-center remove-btn">
                                                            <i class="las la-trash fs-17 align-middle"></i>
                                                        </a>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>City</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
</x-app-layout>
