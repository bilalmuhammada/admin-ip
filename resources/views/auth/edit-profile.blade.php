@extends('layout.master')
@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <h3 class="card-title text-muted text-center">Add Vendor</h3>
            <ol class="breadcrumb">
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card" style="margin:0px auto;">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" id="form_date">
                            <input type="hidden" name="role" value="vendor">
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Name" value="{{ $admin->name ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Email" value="{{ $admin->email ?? '' }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Mobile</label>
                                <input type="text" class="form-control" name="phone" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Mobile" value="{{ $admin->phone ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input type="file" id="myDropify" name="image"/>
                            </div>
                            {{--                            <div class="mb-3">--}}
                            {{--                                <div class="form-check form-switch mb-2">--}}
                            {{--                                    <input type="checkbox" class="form-check-input" id="formSwitch1" name="status">--}}
                            {{--                                    <label class="form-check-label" for="formSwitch1">Active</label>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
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

        $(document).on('submit', '#form_date', function (e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: api_url + 'edit-profile',
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

                        setTimeout(function () {
                            window.location.reload();
                        }, 500);
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
