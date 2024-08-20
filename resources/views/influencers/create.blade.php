@extends('layout.master')
@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <h3 class="card-title text-muted text-center">Add Influencer</h3>
            <ol class="breadcrumb">
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-8 grid-margin stretch-card" style="margin:0px auto;">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" id="form_date">
                            <input type="hidden" name="role" value="influencer">
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="First Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Last Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Mobile</label>
                                <input type="text" class="form-control" name="phone" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Mobile">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Country</label>
                                <select class="js-example-basic-single form-select country_id" id="country_id" data-width="100%"
                                        name="country_id">
                                    <option value="">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Influencer State</label>
                                <select class="js-example-basic-single form-select state_id" data-width="100%"
                                        name="state_id">
                                    <option value="" disabled>Select State</option>

                                </select>
                            </div> -->
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">City</label>
                                <select class="js-example-basic-single form-select city_id" data-width="100%" id="city_id"
                                        name="city_id">
                                    <option value="" disabled>Select City</option>

                                </select>
                            </div>
                            <div class="mb-3">
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
                            </div>
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
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-danger">Cancel</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_scripts')
    <script type="text/javascript">

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
        })
    </script>
@endsection
