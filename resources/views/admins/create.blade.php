@extends('layout.master')
<style>
       .form-control{
    border-color: #997045 !important;
    /* text-align: center; */
}
.form-control:hover{
    border-color: blue;
    
}
.form-control:focus{
    border-color: blue !important;
    
}
.form-control::placeholder{
    
    color: blue !important;
    font-size: 12px !important;
}

.form-control::placeholder {
            color: transparent;
        }

        /* When the input is focused, display the placeholder */
        .form-control:focus::placeholder {
            color: #999;
        }

        /* Style the label */
        .focus-label {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        /* When the input is focused, move the label up */
        .form-control:focus + .focus-label {
            top: -10px;
            font-size: 12px;
            /* color: #007bff; */
        }

</style>
@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <h3 class="card-title text-muted text-center" style="color: blue !important;">Add Admins</h3>
            <ol class="breadcrumb">
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-5 grid-margin stretch-card" style="margin:-32px auto;">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" id="form_date">
                            <input type="hidden" name="role" value="admin">
                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="First Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Last Name">
                            </div> --}}

                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating name" name="first_name">
                                {{-- <div class="invalid-feedback">
                                    Please provide a valid First Name.
                                </div> --}}
                                <label class="focus-label">First Name </label>
                            </div>
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" name="last_name">
                                {{-- <div class="invalid-feedback">
                                    Please provide a valid Last Name.
                                </div> --}}
                                <label class="focus-label">Last Name </label>
                            </div>




                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Mobile</label>
                                <input type="text" class="form-control" name="phone" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Mobile">
                            </div> --}}
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating phone " name="phone"  pattern="\+?\d*"  oninput="validateInput(this)"  
                            
                                {{-- placeholder="Please enter a valid Mobile" --}}
                                 >
                                {{-- <div class="invalid-feedback">
                                    {{-- Please provide a valid Mobile. --}}
                                {{-- </div> --}} 
                                <label class="inner_label focus-label">Mobile</label>
                            </div>

                            <div class="form-group form-focus">
                                                
                                <input type="email" class="form-control floating inputbg email" name="email"
                                       {{-- placeholder="Please provide a valid Email." --}}
                                        >
                                {{-- <label class="inner_label focus-label">Email33 </label> --}}
                                <label for="username" class="inner_label focus-label" style="margin-left: 0px;">Email</label>

                            </div>
                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Email">
                            </div> --}}
                            <div class="form-group form-focus">
                                                
                                <select name="gender" class="form-control floating gender" id="gender">
                                    {{-- <option selected value=" "> select Gender</option> --}}
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                {{-- <div class="invalid-feedback">
                                    Please provide a valid Gender.
                                </div> --}}
                                <label class="focus-label">Gender</label>
                            </div>
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating age" name="age"   pattern="\+?\d*" oninput="validateInput(this)">
                                {{-- <div class="invalid-feedback">
                                    {{-- Please provide a valid Age. --}}
                                {{-- </div>  --}}
                                <label class="focus-label">Age</label>
                            </div>
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating addedby" name="addedby"   >
                                {{-- <div class="invalid-feedback">
                                    {{-- Please provide a valid Age. --}}
                                {{-- </div>  --}}
                                <label class="focus-label">Added By</label>
                            </div>

                            <div class="form-group form-focus">
                                <select name="country_id" class="form-control floating country_id" id="country_id">
                                    @foreach(getCountries() as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Country.
                                </div>
                                <label class="focus-label">Country </label>
                            </div>
                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Country</label>
                                <select class="js-example-basic-single form-select country_id" id="country_id" data-width="100%"
                                        name="country_id">
                                    <option value="">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <!-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Influencer State</label>
                                <select class="js-example-basic-single form-select state_id" data-width="100%"
                                        name="state_id">
                                    <option value="" disabled>Select State</option>

                                </select>
                            </div> -->
                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">City</label>
                                <select class="js-example-basic-single form-select city_id" data-width="100%" id="city_id"
                                        name="city_id">
                                    <option value="" disabled>Select City</option>

                                </select>
                            </div> --}}
                            <div class="form-group form-focus">
                                <select name="city_id" class="form-control floating city_id" id="city_id">
                                    <option value="">Select City</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid City.
                                </div>
                                <label class="focus-label">City </label>
                            </div>
                            <div class="form-group form-focus">
                                <input type="password" class="form-control floating" name="password"
                                       id="influencer_password"
                                {{-- placeholder="8 Characters - 1 Capital, 1 Number, 1 Special" --}}
                                 >
                                <i class="fa fa-eye" id="eye"
                                   onclick="togglePassword('influencer_password')"></i>

                                <label class="focus-label">Password</label>
                            </div>
                            <div class="form-group form-focus mb-0">
                                <input type="password" class="form-control floating"
                                       name="confirm_password" id="influencer_confirm_password">
                                <i class="fa fa-eye" id="eye"
                                   onclick="togglePassword('influencer_confirm_password')"></i>
                                <div class="invalid-feedback">
                                    Please provide a valid Confirm Password.
                                </div>
                                <label class="focus-label">Confirm Password</label>
                            </div>

                            {{-- <div class="mb-3">
                                <label for="password_influencer" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password_influencer"
                                       autocomplete="off" placeholder="Password">
                                       <i class="fa fa-eye one" id="togglePassword" style="position: absolute;top: 75%;right: 5%;cursor: pointer;color: lightgray;" onclick="togglePassword('password_influencer')"></i>
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password_infl" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password_infl"
                                       autocomplete="off" placeholder="Confirm Password">
                                       <i class="fa fa-eye two" id="togglePassword" style="position: absolute;top: 86%;right: 5%;cursor: pointer;color: lightgray;" onclick="togglePassword('confirm_password_infl')"></i>
                            </div> --}}
                            <!-- <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Influencer Type</label>
                                <select class="js-example-basic-single form-select" name="type" data-width="100%">
                                    <option value="">Select Type</option>
                                    <option value="BUYER">Buyer</option>
                                    <option value="SELLER">Seller</option>
                                </select>
                            </div> -->
                            <!-- <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Influencer Image</label>
                                <input type="file" id="myDropify" name="image"/>
                            </div> -->
                            <!-- <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Description</label>
                                <textarea id="maxlength-textarea" name="description" class="form-control"
                                          id="defaultconfig-4"
                                          maxlength="100" rows="8"
                                          placeholder="This textarea has a limit of 100 chars."></textarea>
                            </div> -->
                            <!-- <div class="mb-3">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="formSwitch1" name="status">
                                    <label class="form-check-label" for="formSwitch1">Active</label>
                                </div>
                            </div> -->
                            <div class="text-center font-bold" style="margin-top: 14px;">
                                <button type="submit" class="btn btn-primary me-2">Register</button>
                            </div>
                            
                            {{-- <button class="btn btn-danger">Cancel</button> --}}
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_scripts')
    <script type="text/javascript">
    function validateInputtext(input) {
    // Remove any character that is not a letter or space
    input.value = input.value.replace(/[^A-Za-z\s]/g, '');
}
        function validateInput(input) {
            
    // Allow only digits and the '+' sign, and ensure '+' is only at the beginning
    input.value = input.value.replace(/[^\d+]/g, '').replace(/(?!^)\+/g, '');
}
$(document).ready(function() {
        if ($('.floating').length > 0) {
            // alert($('.floating').length);
            $('.floating').on('focus blur', function(e) {
                $(this).parents('.form-focus').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
            }).trigger('blur');
        }else{
            
        }

        // Toggle Password Visibility
        $('#togglePassword').on('click', function() {
            let input = $(this).siblings('input');
            let type = input.attr('type') === 'password' ? 'text' : 'password';
            input.attr('type', type);
            $(this).toggleClass('fa-eye fa-eye-slash');
        });
});
    

        

        $(document).on('change', '#country_id', function () {
            getCitiesByCountry($(this).val());
        });
       

        function togglePassword(inputId, iconId) {
            var passwordInput = document.getElementById(inputId);
            // var toggleIcon = document.getElementById(iconId);

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                // toggleIcon.src = 'https://img.icons8.com/material-outlined/24/000000/invisible.png';
            } else {
                passwordInput.type = 'password';
                // toggleIcon.src = 'https://img.icons8.com/material-outlined/24/000000/visible.png';
            }
        }

        $(document).on('submit', '#form_date', function (e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: api_url + 'users/store',
                type: 'post',
                dataType: "JSON",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.status == true) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                        })
                    } else {
                        Swal.fire({
                            title: 'Problem!',
                            text: response.message,
                            icon: 'warning',
                        })
                    }
                },
                error: function (response) {
                    Swal.fire({
                        title: 'Problem!',
                        text: 'Unexpected error',
                        icon: 'warning',
                    })
                }
            });
        });

        $(document).on('change', '#country_id', function () {
            var nationality_id = $(this).val();
            if (nationality_id) {
                $.ajax({
                    url: api_url + 'get-cities-by-country',
                    type: "POST",
                    dataType: "json",
                    data: {
                        "nationality_id": nationality_id
                    },
                    success: function (response) {
                        if (response.data.length > 0) {
                            var states = response.data;
                            $("#city_id").empty();
                            $("#brand_city_id").empty();

                            if (states) {
                                $.each(states, function (index, value) {
                                    $("#city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                    $("#brand_city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                });
                            }
                        } else {
                            $("#city_id").empty();
                            $("#brand_city_id").empty();
                        }
                    }
                });
            }
        });
    </script>
@endsection