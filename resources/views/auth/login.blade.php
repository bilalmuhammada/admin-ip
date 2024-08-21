@extends('auth.layout.master')
@section('content')

<div class="page-content d-flex align-items-center justify-content-center">

    <div class="row w-100 mx-0 auth-page">
        <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card">
                <div class="row">
                    <!-- <div class="col-md-4 pe-md-0" style="border:2px solid red;">
                        <div class="auth-side-wrapper">

                        </div>
                    </div> -->
                    <div class="col-md-11 ps-md-0 mx-auto">
                        <div class="auth-form-wrapper px-4 py-4">
                            <a href="#" class="noble-ui-logo d-block mb-2 text-center">
                                <img src="{{asset('assets/images/logo/Influencers Pro-01-01.png')}}" alt="logo">
                            </a>
                            <h5 class="text-muted fw-normal mb-4 text-center">Sign in to stay updated on your professional world!</h5>
                            <form class="login-form">
                                <div class="mb-3">
                                    <label for="userEmail" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control login-user" id="userEmail" placeholder="Email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="userPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control login-user" id="userPassword" autocomplete="current-password" placeholder="Password">
                                </div>
                                <div class="mb-3">
                                    <div class="Forgot"><a href="{{env('BASE_URL') . 'forgot-password'}}">Forgot Password</a></div>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary me-2 mb-2 mb-md-0 text-white login-submit-button">Login</a>
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