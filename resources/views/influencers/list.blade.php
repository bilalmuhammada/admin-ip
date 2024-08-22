@extends('layout.master')
<style>
    .dt-button:hover{
    background-color: blue !important;
    color: white !important;
}
.dt-button{
    border-color: #997045 !important;

}

.dataTables_filter{
    
    padding: 9px !important ;
    margin-right: 161px !important;

}
</style>
@section('content')

    <div class="page-content">
        <nav class="page-breadcrumb">
            <h6 class="card-title">All Influencers</h6>
            <ol class="breadcrumb">
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- <h6 class="card-title">All Transactions</h6> -->
                        <div class="table-responsive">
                            <table id="datatable" class="table">
                                <div style="margin-bottom:10px;">
                                    <a href="{{ env('BASE_URL') . 'influencers/create'}}">
                                        {{-- <button class="btn btn-primary btn-icon-text mb-2 mb-md-0"><i width="15"
                                                                                                      class="link-icon text-white"
                                                                                                      data-feather="plus-circle"></i>
                                            Add New Influencer
                                        </button> --}}

                                          <button class="btn btn-primary btn-icon-text mb-2 mb-md-0"><i width="15"
                                                                                                      class="link-icon text-white"
                                                                                                      data-feather="plus-circle"></i>
                                            Add Admin
                                        </button>
                                    </a>
                                    @include('modals.edit-influencer')

                                    @include('modals.edit-vendor-and-influencer-status-modal')
                                </div>
                                <thead>
                                <tr>
                                    <!-- <th>Sr.No</th>
                                    <th>Image</th>
                                    <th>influencer.Id</th>
                                    <th>influencer.Name</th>
                                    <th>influencer.Type</th>
                                    <th>Member.Since</th>
                                    <th>Number.of.Deals</th>
                                    <th>Pending.Deals</th>
                                    <th>Cencelled.Deals</th>
                                    <th>Amount.Received</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Rating.by.InfluencerPro</th>
                                    <th>Rating.by.Vendors</th>
                                    <th>Submitted Files</th>
                                    <th>Status</th>
                                    <th>Action</th> -->
                                    <th>#</th>
                                    <th>ID#</th>
                                    <th>Photo</th>
                                    {{-- <th>Type</th> --}}
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Member</th>
                                    <th>Added By</th>
                                  
                                    <th>City</th>
                                    <th>Country</th>
                                    {{-- <th>Subscription</th>
                                    <th>Amount</th> --}}
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
                // <td>${value.type}</td>
                    // <td>${value.plan ? value.plan.name : '-'}</td>
                                    // <td>${value.amount_received}</td>
                table_body += `<tr>
                                    <td>${count++}</td>
                                      <td>${value.id}</td>
                                    <td>
                                        <img class="wd-30 ht-30 rounded-circle" src="${value.image_url}" alt="profile">
                                    </td>
                                  <td>${value.name}</td>
                                    <td>${value.email ?? '-'}</td>
                                      
                                    
                                    <td>${value.phone ?? '-'}</td>
                                    <td>${value.personal_information ? value.personal_information.gender : '-'}</td>
                                    <td>${ value.personal_information ? value.personal_information.age :'-'}</td>
                                    <td>${value.member_since}</td>
                                   <td>--</td> 
                                  <td>${value.city_name}</td>
                                    <td>${value.country_name}</td>
                                    
                                 
                                
                                    <td><i width="15" class="link-icon text-success" data-feather="check-square"></i> <span class="text-success">${value.status_formatted}</span></td>
                                    <td>
                                    {{--<a href='#'  edit-id='${value.id}' old-status="${value.status}" class='open-popup mr-2 status-change-btn'><i class='fa fa-check-square'></i> Status</a>--}}
                                    <a href='#'  influencer-id='${value.id}' class='open-popup mr-2 edit-btn'><i class='fa fa-edit'></i> Edit</a>
                                    <a href='#' id='delete-btn' influencer-id='${value.id}' class='remove-user text-danger'><i class='fa fa-trash'></i> Delete</a>
                                </td>

                                </tr>`;
            });

            $('.t-body').html(table_body);
            initializeDatatable('#datatable');
        }

        function fetchRecords() {
            $.ajax({
                url: api_url + 'users',
                type: 'post',
                data: {'role': 'influencer', 'status': "{{ request()->status }}"},
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


        $(document).on('click', '.edit-btn', function () {
            var id = $(this).attr('influencer-id');
            $.ajax({
                url: api_url + 'users/' + id + '/show',
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        $('.id').val(response.data.id);
                        $('.category_id').val(response.data.id);
                        $('.first_name').val(response.data.name);
                        $('.last_name').val(response.data.last_name);
                        $('.email').val(response.data.email);
                        $('.description').text(response.data.description);
                        $('.phone').val(response.data.phone);
                        $('.country').val(response.data.country);
                        $('.city').val(response.data.city);
                        $('.nationality').val(response.data.nationality);
                        $('.type').val(response.data.type);
                        $('.image-show').attr('src', response.data.image_url);

                        getCitiesByCountry(response.data.country_id);

                        setTimeout(function () {

                            $('.country_id').val(response.data.country_id);
                            $('.state_id').val(response.data.state_id);
                            $('.city_id').val(response.data.city_id);
                        }, 200)

                        if (response.data.status == 1) {
                            $("#formSwitch1").prop('checked', true);
                        } else {
                            $("#formSwitch1").prop('checked', false);
                        }

                        $("#editinfluencer").modal('show')
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

        $(document).on('submit', '#edit-influence-form-data', function (e) {
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
                            $("#editinfluencer").modal('hide')
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

        $(document).on('click', '#delete-btn', function () {
            var id = $(this).attr('influencer-id');
            var url = api_url + 'users/' + id + '/delete';
            deleteRecord(url, $(this));
        });
    </script>
@endsection
