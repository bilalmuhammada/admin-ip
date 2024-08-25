@extends('layout.master')
@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <h6 class="card-title" style="color: blue !important;">Admins</h6>
            <ol class="breadcrumb">
            </ol>
        </nav>
        @include('modals.edit-admin-users')
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- <h6 class="card-title">All Transactions</h6> -->
                        <div class="table-responsive">
                            <table id="table" class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    {{--<th>Action</th>--}}
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
                if (value.status === 'ACTIVE') {
                    checked = 'checked';
                }
                table_body += `<tr>

                                <td> ${Number(count++)} </td>
                                <td>
                                    <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
                                </td>
                                <td> ${value.name} </td>
                                <td> ${value.id} </td>

                                <td> ${value.email} </td>
                                <td class='td-toggle'>
                                    <label class="c-toggle">
                                        <input type="checkbox" name="change-status" ${checked} class="change-status" admin-id='${value.id}' state='${checked}'>
                                        <span class="c-slider"></span>
                                        <span class="c-labels" data-on="Active" data-off="Inactive"></span>
                                    </label>
                                </td>
                               </tr>`;
                // <td>
                //     <i width="15" class="link-icon text-success" data-feather="edit" data-bs-toggle="modal" data-bs-target="#editvendor"></i>
                //         <span id='edit-admin-btn' admin-id='${value.id}'  class="text-success"> Edit</span>
                //         <i width="15" class="link-icon text-danger" data-feather="trash-2" onclick="showSwal('passing-parameter-execute-cancel')"></i>
                //         <span id='delete-admin-btn' admin-id='${value.id}' class="text-danger"> Delete</span>
                //         </td>
            });

            $('.t-body').html(table_body);
            initializeDatatable('#table');
        }

        function fetchRecords() {
            $.ajax({
                url: api_url + 'admins/list',
                type: 'post',
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

        $(document).on('change', '.change-status', function () {
            var status = 'off';
            if ($(this).attr('state') === '') {
                status = 'on'
            }

            $.ajax({
                url: api_url + 'admins/change-status',
                data: {
                    status: status,
                    admin_id: $(this).attr('admin-id')
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

        $(document).on('click', '#edit-role-btn', function () {
            var role_id = $(this).attr('role-id');
            $.ajax({
                url: api_url + 'roles/edit/' + role_id,
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        $('.role_id').val(response.data.id);
                        $('.name').val(response.data.name);
                        $('.notes').val(response.data.notes);
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

        $(document).on('click', '#edit-role-submit', function () {
            var role_id = $(this).attr('role-id');
            $('#edit-role').modal('hide');
            setTimeout($.ajax({
                url: api_url + 'roles/update',
                type: 'post',
                data: $('.edit-role-form').serialize(),
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
            }), 1000);
        });

        $(document).on('click', '#add-role-submit', function () {
            $('#add-role').modal('hide');
            $.ajax({
                url: api_url + 'roles/store',
                type: 'post',
                data: $('.add-role-form').serialize(),
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

        $(document).on('click', '#delete-role-btn', function () {
            var role_id = $(this).attr('role-id');
            var url = api_url + 'roles/delete/' + role_id;
            deleteRecord(url, $(this));
        });
    </script>
@endsection
