@extends('layout.master')
@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <h6 class="card-title">All Brands</h6>
            <ol class="breadcrumb">
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- <h6 class="card-title">All Transactions</h6> -->
                        <div style="margin-bottom:10px;">
                            <a href="{{ env('BASE_URL') . 'vendors/create' }}">
                                <button class="btn btn-primary btn-icon-text mb-2 mb-md-0"><i width="15"
                                                                                              class="link-icon text-white"
                                                                                              data-feather="plus-circle"></i>
                                    Add New Brand
                                </button>
                            </a>
                            @include('modals.edit-vendor')
                            @include('modals.edit-vendor-and-influencer-status-modal')
                        </div>
                        <div class="table-responsive">
                            <table id="datatable" class="table">
                                <thead>
                                <tr>
                                    <!-- <th>Sr.No</th>
                                    <th>Image</th>
                                    <th>Vendor.Id</th>
                                    <th>Vendor.Name</th>
                                    <th>Vendor.Type</th>
                                    <th>Member.Since</th>
                                    <th>Number.of.Outlets</th>
                                    <th>Number.of.Deals</th>
                                    <th>Pending.Deals</th>
                                    <th>Amount.Paid</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Rating.by.InfluencerPro</th>
                                    <th>Submitted Files</th>
                                    <th>Vendor’s.User.Person.Name</th>
                                    <th>Status</th>
                                    <th>Action</th> -->
                                    <th>No.</th>
                                    <th>Photo</th>
                                    <th>ID</th>
                                    <th>Brand Name</th>
                                    <th>Company Name</th>
                                    <th>Website</th>
                                    <th>Business Email</th>
                                    <th>User Name</th>
                                    <th>Mobile</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Member</th>
                                    <th>Subscription</th>
                                    <th>Amount</th>
{{--                                    <th>Status</th>--}}
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="t-body"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_scripts')
    <script type="text/javascript">
        function makeTableBody(data) {
            var table_body = '';
            var count = 1;
            data.forEach(function (value, key) {
                var checked = '';
                if (value.status === 'active') {
                    checked = 'checked';
                }

                table_body += `<tr>
                                    <td>${count++}</td>
                                    <td>
                                        <img class="wd-30 ht-30 rounded-circle" src="${value.image_url}" alt="profile">
                                    </td>
                                    <td>${value.id}</td>
                                    <td>${value.brand_name ?? '-'}</td>
                                    <td>${value.company_name ?? '-'}</td>
                                    <td> ${value.website ?? '-'}</td>
                                    <td>${value.email ?? '-'}</td>
                                    <td>${value.name} ${value.last_name ?? '-'}</td>
                                    <td>${value.phone ?? '-'}</td>
                                    <td>${value.country_name}</td>
                                    <td>${value.city_name}</td>
                                    <td>${value.member_since}</td>
                                    <td>${value.amount_received}</td>
                                    <td>${value.plan ? value.plan.name : '-'}</td>
                                    <td>
                                    <a href='#'  edit-id='${value.id}' class='open-popup mr-2 edit-btn'><i class='fa fa-edit'></i> Edit</a>
                                    <a href='#' id='delete-btn' vendor-id='${value.id}' class='remove-user text-danger'><i class='fa fa-trash'></i> Delete</a>
                                    </td>
                                </tr>`;


            // <td><i width="15" class="link-icon text-success" data-feather="check-square"></i> <span class="text-success">${value.status_formatted}</span></td>
            //     <td>
            });

            $('.t-body').html(table_body);
            initializeDatatable('#datatable');
        }

        function fetchRecords() {
            $.ajax({
                url: api_url + 'users',
                type: 'post',
                data: {'role': 'vendor', 'status': "{{ request()->status }}"},
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        makeTableBody(response.data);
                    } else {
                        $('.t-body').html("<tr><td class='text-center' colspan='6'>No Record Found</td></tr>");
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
        }

        $(document).ready(function () {
            fetchRecords();
        });

        $(document).on('submit', '#edit-status-form-data', function (e) {
            e.preventDefault();
            $.ajax({
                url: api_url + 'users/change-status',
                data: {
                    status: $("#editStatusModal .status").val(),
                    id: $("#editStatusModal .id").val(),
                },
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                        }).then((result) => {
                            destroyDatatable();
                            fetchRecords();
                            $("#editStatusModal").modal('hide')
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

        $(document).on('click', '.status-change-btn', function (e) {
            e.preventDefault();
            let id = $(this).attr('edit-id');
            let old_status = $(this).attr('old-status');
            $("#editStatusModal .id").val(id)
            $("#editStatusModal .status").val(old_status)
            $("#editStatusModal").modal('show')
        })

        $(document).on('click', '.edit-btn', function () {
            var id = $(this).attr('edit-id');
            $.ajax({
                url: api_url + 'users/' + id + '/show',
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        $('.id').val(response.data.id);
                        $('.category_id').val(response.data.id);
                        $('.brand_name').val(response.data.brand_name);
                        $('.first_name').val(response.data.name);
                        $('.last_name').val(response.data.last_name);
                        $('.email').val(response.data.email);
                        $('.description').val(response.data.description);
                        $('.phone').val(response.data.phone);
                        $('.position').val(response.data.position);
                        $('.country').val(response.data.country);
                        $('.city').val(response.data.city);
                        $('.nationality').val(response.data.nationality);
                        $('.type').val(response.data.type);
                        $('.company_name').val(response.data.company_name);
                        $('.website').val(response.data.website);
                        $('.image-show').attr('src', response.data.image_url);

                        getCitiesByCountry(response.data.country_id);

                        setTimeout(function () {

                            $('.country_id').val(response.data.country_id);
                            $('.state_id').val(response.data.state_id);
                            $('.city_id').val(response.data.city_id);
                        }, 200)

                        if (response.data.status == 1) {
                            $("#formSwitch1").prop('checked', true);
                        }

                        $("#editvendor").modal('show')
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

        $(document).on('submit', '#edit-vendor-form-data', function (e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            setTimeout($.ajax({
                url: api_url + 'users/update',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                        }).then((result) => {
                            destroyDatatable();
                            fetchRecords();
                            $("#editvendor").modal('hide')
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
            }), 1000);
        });

        $(document).on('click', '#add-category-submit', function () {
            $('#addCategory').modal('hide');
            $.ajax({
                url: api_url + 'categories/store',
                type: 'post',
                data: $('.add-category-form').serialize(),
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                        }).then((result) => {
                            destroyDatatable();
                            fetchRecords();
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

        $(document).on('click', '#delete-btn', function () {
            var id = $(this).attr('vendor-id');
            var url = api_url + 'users/' + id + '/delete';
            deleteRecord(url, $(this));
        });
    </script>
@endsection
