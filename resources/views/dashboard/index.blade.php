@extends('layout.master')
@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-4">
                <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
            </div>
            <div class="col-md-8 text-end">
                <div>
                    <button class="dt-button" id="csv-download">CSV</button>&nbsp; &nbsp;
                    <button class="dt-button" id="excel-download">Excel</button>&nbsp; &nbsp;
                    <button class="dt-button" id="pdf-download">PDF</button>&nbsp; &nbsp;
                    <button class="dt-button" id="print-page">Print</button>&nbsp; &nbsp;
                    <span class="">
                    <input type="text" class="btn__search" id="search-box" placeholder="Search">
                    </span>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <!-- <span>TO: </span>
                <div class="input-group date datepicker wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
                    <span class="input-group-text input-group-addon bg-transparent border-primary"><i
                            data-feather="calendar" class=" text-primary"></i></span>
                    <input type="text" class="form-control border-primary bg-transparent">
                </div>
                <span>FROM: </span>

                <div class="input-group date datepicker wd-200 me-2 mb-2 mb-md-0" id="EndDate">
                    <span class="input-group-text input-group-addon bg-transparent border-primary"><i
                            data-feather="calendar" class=" text-primary"></i></span>
                    <input type="text" class="form-control border-primary bg-transparent">
                </div>
                <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                    <i class="btn-icon-prepend" data-feather="printer"></i>
                    Print
                </button>
                <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                    <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                    Download Report
                </button> -->
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-12 stretch-card">
                <div class="row flex-grow-1">
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Total Influencers</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="{{ env('BASE_URL') }}influencers"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2 total-influencer">0</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span class="total-influencer-per">+3.3%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-------->
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Popular Influencers</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="{{ env('BASE_URL') }}influencers?status=POPULAR"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2 popular-influencer">0</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span class="popular-influencer-per">+3.3%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------->
                <!-- <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Active Inflfuencers – Now</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center" href="{{ env('BASE_URL') }}influencers?status=ACTIVE"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2 active-influencer">0</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span class="active-influencer-per">+3.3%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!----------------------->

                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Pending for Approval</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="{{ env('BASE_URL') }}influencers?status=PENDING"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2 pending-influencer">0</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span class="pending-influencer-per">+3.3%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------->
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Blocked Influencers</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="{{ env('BASE_URL') }}influencers?status=INACTIVE"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2 block-influencer">0</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span class="block-influencer-per">+3.3%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------->
                <!-- <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Rated Influencers</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center" href="{{ env('BASE_URL') }}influencers?status=RATED"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2 rated-influencer">0</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span class="rated-influencer-per">+3.3%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!----------------------->
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Active Influencers</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="{{ env('BASE_URL') }}influencers?status=ACTIVE"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2 active-influencer">0</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span class="active-influencer-per">+3.3%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!----------------------->
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Influencers Subscription</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="{{ env('BASE_URL') }}influencers"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2 favorite-influencer">0</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span class="favorite-influencer-per">+3.3%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!----------------------->
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Total Brands</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="{{ env('BASE_URL') }}Brands"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2 total-vendor">0</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span class="total-vendor-per">+3.3%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------->
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Popular Brands</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="{{ env('BASE_URL') }}vendors?status=POPULAR"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2 popular-vendor">0</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span class="poplar-vendor-per">+3.3%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------->
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Active Brands</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="{{ env('BASE_URL') }}vendors?status=ACTIVE"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2 active-vendor">0</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span class="active-vendor-per">+3.3%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------->
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Pending for Approval</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="{{ env('BASE_URL') }}vendors?status=PENDING"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2 pending-vendor">0</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span class="pending-vendor-per">+3.3%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------->
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Blocked Brands</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="{{ env('BASE_URL') }}vendors?status=INACTIVE"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2 block-vendor">0</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span class="block-vendor-per">+3.3%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------->
                <!-- <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Rated Vendors</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center" href="{{ env('BASE_URL') }}vendors?status=RATED"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2 rated-vendor">0</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span class="rated-vendor-per">+3.3%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!----------------------->
                <!-- <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Favorite Brands</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="{{ env('BASE_URL') }}vendors?status=FAVORITE"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2 favorite-vendor">0</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span class="favorite-vendor-per">+3.3%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!----------------------->

                <!-- <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Total Vendors</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <a class="dropdown-item d-flex align-items-center" href="{{ env('BASE_URL') }}vendors"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2 total-vendor">0</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-danger">
                                                <span>-2.8%</span>
                                                <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Brand Subscriptions</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton2"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="{{ env('BASE_URL') }}influencers/transactions"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2">89.87%</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span>+2.8%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->

        <div class="row" style="display: none;">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                            <h6 class="card-title mb-0">Revenue</h6>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                    <a class="dropdown-item d-flex align-items-center"
                                       href="{{ env('BASE_URL') }}influencers"><i
                                            data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center"
                                       href="{{ env('BASE_URL') }}influencers"><i
                                            data-feather="edit-2" class="icon-sm me-2"></i> <span
                                            class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center"
                                       href="{{ env('BASE_URL') }}influencers"><i
                                            data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center"
                                       href="{{ env('BASE_URL') }}influencers"><i
                                            data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center"
                                       href="{{ env('BASE_URL') }}influencers"><i
                                            data-feather="download" class="icon-sm me-2"></i> <span
                                            class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col-md-7">
                                <p class="text-muted tx-13 mb-3 mb-md-0">Revenue</p>
                            </div>
                            <div class="col-md-5 d-flex justify-content-md-end">
                                <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-primary">Today</button>
                                    <button type="button" class="btn btn-outline-primary d-none d-md-block">Week
                                    </button>
                                    <button type="button" class="btn btn-primary">Month</button>
                                    <button type="button" class="btn btn-outline-primary">Year</button>
                                </div>
                            </div>
                        </div>
                        <div id="revenueChart"></div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
        <div class="row mb-4">
            <div class="col">
                <select name="" id="" class="form-control">
                    <option value="">Sales</option>
                    <option value="">Brands</option>
                    <option value="">Influencer</option>
                </select>
            </div>
            <div class="col">
                <select name="" id="" class="form-control">
                    <option value="">AED</option>
                    <option value="">$</option>
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control datepicker" id="from_date" placeholder="DD/MM/YYYY"
                       value="{{ \Carbon\Carbon::now()->startOfYear()->format('d/m/Y') }}">
            </div>
            <div class="col">
                <input type="text" class="form-control datepicker" id="to_date"
                       placeholder="DD/MM/YYYY" {{ \Carbon\Carbon::now()->endOfYear()->format('d/m/Y') }}>
            </div>
            {{--            <div class="col">--}}
            {{--                <input type="text" placeholder="Search" class="form-control">--}}
            {{--            </div>--}}
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-2">
                            <h6 class="card-title mb-0">Monthly sales</h6>
                            {{--                            <div class="dropdown mb-2">--}}
                            {{--                                <button class="btn p-0" type="button" id="dropdown  MenuButton4"--}}
                            {{--                                        data-bs-toggle="dropdown"--}}
                            {{--                                        aria-haspopup="true" aria-expanded="false">--}}
                            {{--                                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
                            {{--                                </button>--}}
                            {{--                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">--}}
                            {{--                                    <a class="dropdown-item d-flex align-items-center"--}}
                            {{--                                       href="{{ env('BASE_URL') }}influencers"><i--}}
                            {{--                                            data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>--}}
                            {{--                                    <a class="dropdown-item d-flex align-items-center"--}}
                            {{--                                       href="{{ env('BASE_URL') }}influencers"><i--}}
                            {{--                                            data-feather="edit-2" class="icon-sm me-2"></i> <span--}}
                            {{--                                            class="">Edit</span></a>--}}
                            {{--                                    <a class="dropdown-item d-flex align-items-center"--}}
                            {{--                                       href="{{ env('BASE_URL') }}influencers"><i--}}
                            {{--                                            data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>--}}
                            {{--                                    <a class="dropdown-item d-flex align-items-center"--}}
                            {{--                                       href="{{ env('BASE_URL') }}influencers"><i--}}
                            {{--                                            data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>--}}
                            {{--                                    <a class="dropdown-item d-flex align-items-center"--}}
                            {{--                                       href="{{ env('BASE_URL') }}influencers"><i--}}
                            {{--                                            data-feather="download" class="icon-sm me-2"></i> <span--}}
                            {{--                                            class="">Download</span></a>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                        <p class="text-muted">Sales</p>
                        <div id="monthlySalesChart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.14.3/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.js"></script>
    <script>
        var influencer_counts = '';
        var vendor_counts = '';
        var data = [];
        var colors = {
            primary: "#6571ff",
            secondary: "#7987a1",
            success: "#05a34a",
            info: "#66d1d1",
            warning: "#fbbc06",
            danger: "#ff3366",
            light: "#e9ecef",
            dark: "#060c17",
            muted: "#7987a1",
            gridBorder: "rgba(77, 138, 240, .15)",
            bodyColor: "#000",
            cardBg: "#fff"
        }

        var fontFamily = "'Roboto', Helvetica, sans-serif"

        $(document).ready(function () {
            render_monthly_sale_chart();

            $.ajax({
                url: api_url + 'dashboard',
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    influencer_counts = response.influencer_counts;
                    vendor_counts = response.vendor_counts;

                    $('.total-influencer').html(influencer_counts.total_Influencer_count);
                    $('.popular-influencer').html(influencer_counts.popular_Influencer_count);
                    $('.pending-influencer').html(influencer_counts.pending_Influencer_count);
                    $('.active-influencer').html(influencer_counts.active_Influencer_count);
                    $('.block-influencer').html(influencer_counts.block_Influencer_count);
                    $('.rated-influencer').html(influencer_counts.rated_Influencer_count);
                    $('.favorite-influencer').html(influencer_counts.favorite_Influencer_count);


                    $('.total-vendor').html(vendor_counts.total_vendor_count);
                    $('.popular-vendor').html(vendor_counts.popular_vendor_count);
                    $('.pending-vendor').html(vendor_counts.pending_vendor_count);
                    $('.active-vendor').html(vendor_counts.active_vendor_count);
                    $('.block-vendor').html(vendor_counts.block_vendor_count);
                    $('.rated-vendor').html(vendor_counts.rated_vendor_count);
                    $('.favorite-vendor').html(vendor_counts.favorite_vendor_count);


                    data = [
                        {category: 'Total Influencers', count: influencer_counts.total_Influencer_count},
                        {category: 'Popular Influencers', count: influencer_counts.popular_Influencer_count},
                        {category: 'Pending for Approval', count: influencer_counts.pending_Influencer_count},
                        {category: 'Blocked Influencers', count: influencer_counts.block_Influencer_count},
                        {category: 'Favorite Influencers', count: influencer_counts.favorite_Influencer_count},
                        {category: 'Influencers Subscription', count: 0},
                        {category: 'Total Brands', count: vendor_counts.total_vendor_count},
                        {category: 'Popular Brands', count: vendor_counts.popular_vendor_count},
                        {category: 'Active Brands', count: vendor_counts.active_vendor_count},
                        {category: 'Pending for Approval', count: vendor_counts.pending_vendor_count},
                        {category: 'Blocked Brands', count: vendor_counts.block_vendor_count},
                        {category: 'Favorite Brands', count: vendor_counts.favorite_vendor_count},
                        {category: 'Brand Subscriptions', count: 0},
                    ];
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

        // excel csv pdf etc code start here

        // For CSV
        $(document).on('click', '#csv-download', function (e) {
            e.preventDefault();

            var csvContent = "data:text/csv;charset=utf-8,";
            data.forEach(function (row) {
                csvContent += row.category + "," + row.count + "\r\n";
            });
            var encodedUri = encodeURI(csvContent);
            var link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "my_data.csv");
            document.body.appendChild(link);
            link.click();
        })

        // For Excel, you can use a library like 'xlsx'
        $(document).on('click', '#excel-download', function (e) {
            e.preventDefault();
            var ws = XLSX.utils.json_to_sheet(data);
            var wb = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(wb, ws, "Sheet1");
            XLSX.writeFile(wb, 'my_data.xlsx');
        });

        // For PDF, you can use a library like 'jsPDF'
        $(document).on('click', '#pdf-download', function (e) {
            e.preventDefault();
            var doc = new jsPDF();
            var col = ["Categories", "Counts"];
            var rows = [];
            data.forEach(function (row) {
                var temp = [row.category, row.count];
                rows.push(temp);
            });
            doc.autoTable(col, rows);
            doc.save('my_data.pdf');
        });

        $(document).on('click', '#print-page', function (e) {
            e.preventDefault();
            window.print();
        });

        $(document).on('change', '#from_date, #tod_date', function () {
            render_monthly_sale_chart();
        })


        function render_monthly_sale_chart() {
            $.ajax({
                url: api_url + 'get-chart-data', // Update with your actual endpoint
                method: 'GET',
                data: {
                    from_date: $('#from_date').val(),
                    to_date: $('#to_date').val()
                },
                success: function (data) {

                    // var options = {
                    //     chart: {
                    //         type: 'bar',
                    //         height: '318',
                    //         parentHeightOffset: 0,
                    //         foreColor: colors.bodyColor,
                    //         background: colors.cardBg,
                    //         toolbar: {
                    //             show: false
                    //         },
                    //     },
                    //     theme: {
                    //         mode: 'light'
                    //     },
                    //     tooltip: {
                    //         theme: 'light'
                    //     },
                    //     colors: [colors.primary],
                    //     fill: {
                    //         opacity: .9
                    //     },
                    //     grid: {
                    //         padding: {
                    //             bottom: -4
                    //         },
                    //         borderColor: colors.gridBorder,
                    //         xaxis: {
                    //             lines: {
                    //                 show: true
                    //             }
                    //         }
                    //     },
                    //     series: [{
                    //         name: 'Sales',
                    //         data: data.payment_amount_array
                    //     }],
                    //     xaxis: {
                    //         type: 'datetime',
                    //         categories: data.month_array,
                    //         axisBorder: {
                    //             color: colors.gridBorder,
                    //         },
                    //         axisTicks: {
                    //             color: colors.gridBorder,
                    //         },
                    //     },
                    //     yaxis: {
                    //         title: {
                    //             text: 'Number of Sales',
                    //             style: {
                    //                 size: 9,
                    //                 color: colors.muted
                    //             }
                    //         },
                    //     },
                    //     legend: {
                    //         show: true,
                    //         position: "top",
                    //         horizontalAlign: 'center',
                    //         fontFamily: fontFamily,
                    //         itemMargin: {
                    //             horizontal: 8,
                    //             vertical: 0
                    //         },
                    //     },
                    //     stroke: {
                    //         width: 0
                    //     },
                    //     dataLabels: {
                    //         enabled: true,
                    //         style: {
                    //             fontSize: '10px',
                    //             fontFamily: fontFamily,
                    //         },
                    //         offsetY: -27
                    //     },
                    //     plotOptions: {
                    //         bar: {
                    //             columnWidth: "50%",
                    //             borderRadius: 4,
                    //             dataLabels: {
                    //                 position: 'top',
                    //                 orientation: 'vertical',
                    //             }
                    //         },
                    //     },
                    // }

                    var options = {
                        series: [{
                            name: 'Influencers Sub',
                            data: data.influencer_payment_amount_array
                        }, {
                            name: 'Brands Sub',
                            data: data.brand_payment_amount_array
                        }, {
                            name: 'Total Subs',
                            data: data.payment_amount_array
                        }],
                        chart: {
                            type: 'bar',
                            height: 350
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '55%',
                                endingShape: 'rounded'
                            },
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            show: true,
                            width: 2,
                            colors: ['transparent']
                        },
                        xaxis: {
                            categories: data.month_array,
                        },
                        yaxis: {
                            title: {
                                text: '$ (thousands)'
                            }
                        },
                        fill: {
                            opacity: 1
                        },
                        tooltip: {
                            y: {
                                formatter: function (val) {
                                    return "$ " + val + " thousands"
                                }
                            }
                        }
                    };

                    var apexBarChart = new ApexCharts(document.querySelector("#monthlySalesChart"), options);
                    apexBarChart.render();
                }
            });

        }

        $(document).on('keyup', '#search-box', function () {
            boxSearch();
        });


        function boxSearch() {
            var input = document.getElementById("search-box");
            var filter = input.value.toLowerCase();
            var nodes = document.getElementsByClassName('stretch-card');

            for (i = 0; i < nodes.length; i++) {
                if (nodes[i].innerText.toLowerCase().includes(filter)) {
                    nodes[i].style.display = "block";
                } else {
                    nodes[i].style.display = "none";
                }
            }
        }

    </script>
@endsection