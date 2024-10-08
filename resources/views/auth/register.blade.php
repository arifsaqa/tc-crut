<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>Register</title>
        <!-- plugins:css -->
        <link
            rel="stylesheet"
            href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('vendors/css/vendor.bundle.base.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}"
        />
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <!-- End layout styles -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    </head>

    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="row w-100">
                    <div
                        class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg"
                    >
                        <div class="card col-lg-4 mx-auto">
                            <div class="card-body px-5 py-5">
                                <h3 class="card-title text-start mb-3">
                                    Register | TC-Crut
                                </h3>
                                <form
                                    method="POST"
                                    action="{{
                                        route('register.adminRegister')
                                    }}"
                                >
                                    @csrf
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input
                                            type="text"
                                            id="name"
                                            name="name"
                                            class="form-control @error('name') is invalid @enderror p_input"
                                        />
                                        @error('name')
                                        <small class="btn btn-danger">{{
                                            $message
                                        }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input
                                            type="email"
                                            id="email"
                                            name="email"
                                            class="form-control @error('email') is invalid @enderror p_input"
                                        />
                                        @error('email')
                                        <small class="btn btn-danger">{{
                                            $message
                                        }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input
                                            type="password"
                                            id="password"
                                            name="password"
                                            class="form-control @error('password') is invalid @enderror p_input"
                                        />
                                        @error('password')
                                        <small class="btn btn-danger">{{
                                            $message
                                        }}</small>
                                        @enderror
                                    </div>

                                    <div
                                        class="form-group d-flex align-items-center justify-content-between"
                                    >
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input
                                                    type="checkbox"
                                                    class="form-check-input"
                                                />
                                                Remember me
                                            </label>
                                        </div>
                                        <a href="#" class="forgot-pass"
                                            >Forgot password</a
                                        >
                                    </div>

                                    <div class="text-center d-grid gap-2">
                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-block enter-btn"
                                        >
                                            Register
                                        </button>
                                    </div>
                                    <p class="sign-up text-center">
                                        Already have an Account?<a
                                            href="{{ route('login') }}"
                                        >
                                            Sign Up</a
                                        >
                                    </p>
                                    <p class="terms">
                                        By creating an account you are accepting
                                        our<a href="#"> Terms & Conditions</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                </div>
                <!-- row ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('js/off-canvas.js') }}"></script>
        <script src="{{ asset('js/misc.js') }}"></script>
        <script src="{{ asset('js/settings.js') }}"></script>
        <script src="{{ asset('js/todolist.js') }}"></script>
        <!-- endinject -->
    </body>
</html>
