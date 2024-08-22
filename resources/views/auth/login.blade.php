@extends('auth.layout.master')
@section('content')
<style>
    
        .invalid-feedback {
            margin-top: 0;
        }
        input:focus {
    border: 1px solid blue !important;
}
::-webkit-scrollbar {
  width: 12px; /* You can adjust this value based on your preference */
}

/* Define the scrollbar thumb */
::-webkit-scrollbar-thumb {
  background-color: #997045;
  border-radius: 34px;
}

/* Define the scrollbar track */
::-webkit-scrollbar-track {
  background: transparent;
}
    
</style>
<div class="page-content d-flex align-items-center justify-content-center">

    <div class="row w-100 mx-0 auth-page">
        <div class="col-md-8 col-xl-4 mx-auto">
            <div class="card">
                <div class="row">
                    <!-- <div class="col-md-4 pe-md-0" style="border:2px solid red;">
                        <div class="auth-side-wrapper">

                        </div>
                    </div> -->
                    <div class="col-md-11 ps-md-0 mx-auto">
                        <div class="auth-form-wrapper px-4 py-4">
                            <h3 style="text-align: center;">Welcome Back!</h3>
                            {{-- <a href="#" class="noble-ui-logo d-block mb-2 text-center">
                                <img src="{{asset('assets/images/logo/Influencers Pro-01-01.png')}}" alt="logo">
                            </a> --}}
                            <h5 class="text-muted fw-normal mb-4 text-center">Sign in to stay updated on your professional world!</h5>
                            <form class="login-form">
                                {{-- <div class="mb-3">
                                    <label for="userEmail" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control login-user" id="userEmail" placeholder="Email" name="email">
                                </div> --}}
                                <div class="form-group form-focus">
                                    <input type="email" class="form-control floating email" id="userEmail" placeholder="Email" name="email">
                                    <div class="invalid-feedback">
                                        Please provide a valid email.
                                    </div>
                                    <label class="focus-label">Email</label>
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="userPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control login-user" id="userPassword" autocomplete="current-password" placeholder="Password">
                                </div> --}}
                                <div class="form-group form-focus" style="margin-top:14px;">
                                    <input type="password" name="password"class="form-control floating password login-user" id="userPassword" autocomplete="current-password" placeholder="Password">
                                    <i class="fa-solid fa-eye" id="eye" onclick="togglePassword()"></i>
                                    <div class="invalid-feedback">
                                        Please provide a correct password.
                                    </div>
                                    <label class="focus-label">Password</label>
                                </div>
                                <div class="form-group" style="margin-top: 15px;">
                                    <label class="custom_check">
                                        <input type="checkbox" name="rem_password">
                                        {{-- <span class="checkmark"></span>  --}}
                                        Remember password
                                    </label>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary me-2 mb-2 mb-md-0 text-white login-submit-button" style="padding:10px 30px;">Login</a>
                                </div>
                                {{-- <div class="mb-3">
                                    <div class="Forgot"><a href="{{env('BASE_URL') . 'forgot-password'}}">Forgot Password</a></div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <a class="forgot-link" href="{{ env('BASE_URL') }}/forgot-password" style="color:#0504aa;">Forgot
                                            Password?</a>
                                    </div>
                                    {{-- <div class="col-6 text-end dont-have">New to InfluencerPro? <a
                                            href="{{ env('BASE_URL') }}/register?role=influencer" style="color:#0504aa;">Click
                                            here</a></div> --}}
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