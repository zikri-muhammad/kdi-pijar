<script src="{{ asset('assets/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/vendor/dom-factory.js') }}"></script>
<script src="{{ asset('assets/vendor/material-design-kit.js') }}"></script>
<script src="{{ asset('assets/vendor/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="{{ asset('assets/vendor/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/js/ion-rangeslider.js') }}"></script>
<script src="{{ asset('assets/js/toggle-check-all.js') }}"></script>
<script src="{{ asset('assets/js/check-selected-row.js') }}"></script>
<script src="{{ asset('assets/js/dropdown.js') }}"></script>
<script src="{{ asset('assets/js/select2.js') }}"></script>
<script src="{{ asset('assets/js/sidebar-mini.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>
<script src="{{ asset('assets/js/parsley.min.js') }}"></script>
<script src="{{ asset('assets/vendor/toastr.min.js') }}"></script>

<!-- Flatpickr -->
<script src="{{ asset('assets/vendor/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/vendor/flatpickr/flatpickr.js') }}"></script>

<!-- Chart.js -->
<script src="{{ asset('assets/vendor/Chart.min.js') }}"></script>

<!-- UI Charts Page JS -->
<script src="{{ asset('assets/js/chartjs-rounded-bar.js') }}"></script>
<script src="{{ asset('assets/js/charts.js') }}"></script>

<!-- Chart.js Samples -->
 <script src="{{ asset('assets/js/page.ui-charts.js') }}"></script>

<!-- Data table -->
<script src="{{ asset('assets/vendor/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatable/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('assets/js/eModal.min.js') }}"></script>


<!-- Custom  -->
<script>
    var currentUrl = window.location.href;
</script>
<script src="{{ asset('assets/js/table-helper.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

@stack('scripts')
@yield('add_js', '')
