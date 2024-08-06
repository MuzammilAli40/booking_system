<x-app-layout>
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create Employee</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Create Employee</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row gutters">
                <div class="col-12">
                    <div class="card p-lg-5 p-4">
                        <form action="{{ route('employee.store') }}" method="post" id="employeeform"
                            class="auth-input">
                            @csrf
                            {{-- Name --}}
                            <div class="row">
                                <div class="col-lg-6 form-group mb-2">
                                    <label for="name" class="form-label">Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Name" autofocus autocomplete="name"
                                        value="{{ old('name') }}">
                                </div>
                                {{-- Email --}}
                                <div class="col-lg-6 form-group mb-2">
                                    <label for="email" class="form-label">Email
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter Email" autocomplete="email" value="{{ old('email') }}">
                                </div>
                                {{-- Department --}}
                                <div class="col-lg-6 form-group mb-2">
                                    <label for="department" class="form-label">Department
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="department" name="department"
                                        placeholder="Enter Department" value="{{ old('department') }}">
                                </div>
                                {{-- City --}}
                                <div class="col-lg-6 form-group mb-2">
                                    <label for="city" class="form-label">City
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="city" name="city"
                                        placeholder="Enter City" value="{{ old('city') }}">
                                </div>
                                {{-- Phone --}}
                                <div class="col-lg-6 form-group mb-2">
                                    <label for="phone" class="form-label">Phone
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Enter Phone Number" value="{{ old('phone') }}">
                                </div>
                                <div class="col-lg-12 form-group mt-2">
                                    <button class="btn btn-primary" id="createbutton" type="submit">
                                        Create Employee
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
</x-app-layout>
