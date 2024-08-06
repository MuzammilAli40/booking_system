<x-auth-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="auth-full-page-content d-flex min-vh-100 py-2">
                    <div class="w-100">
                        <div class="d-flex flex-column justify-content-center h-100 py-0 py-xl-4">
                            <div class="row g-0">
                                <div class="col-lg-6 mx-auto">
                                    <div class="card my-auto overflow-hidden border-1 shadow-lg"
                                        style="background-color: rgba(231, 230, 230, 0.8)">
                                        <div class="p-lg-5 p-4">
                                            <div class="text-center mb-3">
                                                <a href="">
                                                    <span class="logo-lg">
                                                        <img src="{{ asset('images/BKO_LOGO.png') }}" alt=""
                                                            width="100">
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="text-center">
                                                <h3 class="mb-0">Welcome!</h3>
                                            </div>

                                            <div class="mt-4">
                                                <form action="{{ route('login') }}" class="auth-input" method="POST"
                                                    id="loginform">
                                                    @csrf
                                                    <div class="form-group mb-2">
                                                        <label for="username" class="form-label">Email
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="email"
                                                            name="email" placeholder="Enter Email"
                                                            value="{{ old('email') }}" autofocus
                                                            autocomplete="username">
                                                    </div>

                                                    <div class="form-group mb-2">
                                                        <label for="userpassword" class="form-label">Password
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                            <input type="password"
                                                                class="form-control pe-5 password-input" name="password"
                                                                placeholder="Enter Password" id="userpassword"
                                                                autocomplete="current-password">
                                                            <button
                                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                                type="button" id="password-addon"><i
                                                                    class="las la-eye align-middle fs-18"></i></button>
                                                        </div>
                                                    </div>

                                                    <div class="mt-2">
                                                        <button class="btn btn-dark rounded-0 w-100" type="submit"
                                                            id="loginbutton">Log
                                                            In</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </section>
</x-auth-layout>
