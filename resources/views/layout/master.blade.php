<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
@include("layout.header")
<!--end::Head-->
<!--begin::Body-->
<body>
{{--@dd(session()->get('user'))--}}
    <div class="main-wrapper">
        @include('layout.sidebar')
        <div class="page-wrapper">
            @include("layout.topbar")
            @yield('content')
        </div>
    </div>
    <!-- footer area start -->
    @include('layout.footer')
    <!-- footer area end -->
    <!-- core:js -->
    <script src="{{ asset('assets/vendors/core/core.js')}}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('assets/vendors/feather-icons/feather.min.js')}}"></script>
    <script src="{{ asset('assets/js/template.js')}}"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/dashboard-light.js')}}"></script>
    <script src="{{ asset('assets/js/datepicker.js')}}"></script>
    <!-- End custom js for this page -->

    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/data-table.js')}}"></script>
    <!-- End custom js for this page -->

    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
    <script src="{{ asset('assets/js/dropify.js')}}"></script>
    <script src="{{ asset('assets/vendors/dropify/dist/dropify.min.js')}}"></script>
    {{--datatable link start--}}
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    {{--datatable link end--}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <script src="{{ asset('assets/js/authenticate.js')}}"></script>



{{--Datetime picker--}}
{{--https://xdsoft.net/jqplugins/datetimepicker/--}}
<link rel="stylesheet" href="{{asset('assets/datetimepicker/build/jquery.datetimepicker.min.css')}}">
<script src="{{asset('assets/datetimepicker/build/jquery.datetimepicker.full.min.js')}}"></script>

    <script>
        var varyingModal = document.getElementById('varyingModal')
        varyingModal.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var recipient = button.getAttribute('data-bs-whatever')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var modalTitle = varyingModal.querySelector('.modal-title')
            var modalBodyInput = varyingModal.querySelector('.modal-body input')

            modalTitle.textContent = 'New message to ' + recipient
            modalBodyInput.value = recipient
        })
    </script>
    @yield('page_scripts')
</body>
</html>