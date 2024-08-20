@extends('auth.layout.master')
@section('content')

    <div class="page-content d-flex align-items-center justify-content-center">

        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-8 col-xl-6 mx-auto">
                <div class="password-alert bg-success text-white mb-3"
                     style="border-radius:5px;padding:5px;display: none;font-size:13px;">Please check Your Email
                </div>
                <div class="card">
                    <div class="row">
                        <!-- <div class="col-md-4 pe-md-0">
                            <div class="auth-side-wrapper">

                            </div>
                        </div> -->
                        <div class="col-md-11 ps-md-0 mx-auto">
                            <div class="auth-form-wrapper px-4 py-5">
                                <div class="changepassword" style="margin-bottom: 10px;">
                                    <h5 class="text-center">Forgot Password</h5>
                                </div>
                                <!-- login title start -->

                                <form class="forgot-password-form">
                                    <div class="mb-3">
                                        <label for="userEmail" class="form-label">Email address</label>
                                        <input type="email" name="email" class="form-control login-user" id="userEmail"
                                               placeholder="Email" name="email">
                                    </div>

                                    <div class="text-center">
                                        <a href="#" class="btn btn-primary me-2 mb-2 mb-md-0 text-white forgot-submit">Submit</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
