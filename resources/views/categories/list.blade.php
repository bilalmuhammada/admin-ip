@extends('layout.master')
@section('content')

    <div class="page-content">
        <nav class="page-breadcrumb">
            <h6 class="card-title">All Categories</h6>
            <ol class="breadcrumb">
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- <h6 class="card-title">All Transactions</h6> -->
                        <div style="margin-bottom:10px;">
                            <button class="btn btn-primary btn-icon-text mb-2 mb-md-0" data-bs-toggle="modal"
                                    data-bs-target="#addcategory"><i width="15" class="link-icon text-white"
                                                                     data-feather="plus-circle"></i> Add New
                                Category
                            </button>
                            @include('modals.add-category')
                            @include('modals.edit-category')
                        </div>
                        <div class="table-responsive">
                            <table id="table" class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Photo</th>
                                    <th>Category</th>
                                    <th>Slug</th>
                                    <th>Status</th>
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
                                <td> ${Number(count++)} </td>
                                <td>
                                    <img class="wd-30 ht-30 rounded-circle" src="${value.image_url}" alt="Image">
                                </td>
                                <td> ${value.name} </td>
                                <td> ${value.id} </td>
                                <td class='td-toggle'>
                                    <label class="c-toggle">
                                        <input type="checkbox" name="change-status" ${checked} class="change-status" category-id='${value.id}' state='${checked}'>
                                        <span class="c-slider"></span>
                                        <span class="c-labels" data-on="Active" data-off="Inactive"></span>
                                    </label>
                                </td>
                                <td>
                                    <a href='#' id='edit-category-btn'  category-id='${value.id}' class='open-popup mr-2' data-bs-toggle="modal" data-bs-target="#editcategory"><i class='fa fa-edit'></i> Edit</a>
                                    <a href='#' id='delete-category-btn' category-id='${value.id}' class='remove-user text-danger'><i class='fa fa-trash'></i> Delete</a>
                                </td>
                               </tr>`;
            });

            $('.t-body').html(table_body);
            initializeDatatable('#table');
        }

        function fetchRecords() {
            $.ajax({
                url: api_url + 'categories/list',
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
                url: api_url + 'categories/change-status',
                data: {
                    status: status,
                    category_id: $(this).attr('category-id')
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

        $(document).on('click', '#edit-category-btn', function () {
            var category_id = $(this).attr('category-id');
            $.ajax({
                url: api_url + 'categories/edit/' + category_id,
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        $('.category_id').val(response.data.id);
                        $('.name').val(response.data.name);
                        $('.slug').val(response.data.slug);
                        $('.image').attr('src', response.data.image_url);
                        if (response.data.status === 'active') {
                            $('.status').prop('checked', true);
                        } else {
                            $('.status').prop('checked', false);
                        }
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

        $(document).on('click', '#edit-category-submit', function (e) {
            e.preventDefault();
            $('#editcategory').modal('hide');
            var formData = new FormData($("#edit-category-form")[0]);
            $.ajax({
                url: api_url + 'categories/update',
                type: 'post',
                data: formData,
                dataType: "JSON",
                processData: false,
                contentType: false,
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

        $(document).on('click', '#add-category-submit', function (e) {
            e.preventDefault();
            $('#addcategory').modal('hide');
            var formData = new FormData($("#add-category-form")[0]);
            $.ajax({
                url: api_url + 'categories/store',
                type: 'post',
                data: formData,
                dataType: "JSON",
                processData: false,
                contentType: false,
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

        $(document).on('click', '#delete-category-btn', function () {
            var category_id = $(this).attr('category-id');
            var url = api_url + 'categories/delete/' + category_id;
            deleteRecord(url, $(this));
        });
    </script>
@endsection
