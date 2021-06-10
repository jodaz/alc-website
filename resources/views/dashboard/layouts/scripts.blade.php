<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
  var KTAppOptions = {"colors":{"state":{"brand":"#5d78ff","dark":"#282a3c","light":"#ffffff","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
</script>
<!-- end::Global Config -->

{{-- Scripts --}}
 <script src="{{ asset('assets/dashboard/js/vendors.bundle.js') }}"></script>
 <script src="{{ asset('assets/dashboard/js/scripts.bundle.js') }}"></script>
 <script src="{{ asset('assets/dashboard/plugins/datatables/datatables.bundle.js') }}"></script>
 <script src="{{ asset('assets/dashboard/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
 <script src="{{ asset('assets/dashboard/js/login-general.js') }}"></script>
 <script src="{{ asset('assets/dashboard/js/dashboard.js') }}"></script>
 <script src="{{ asset('assets/dashboard/js/select2.js') }}"></script>
 <script src="{{ asset('assets/dashboard/js/input-mask.js') }}"></script>
 <script src="{{ asset('assets/dashboard/js/bootstrap-datepicker.js') }}"></script>
 <script src="{{ asset('assets/dashboard/js/profile.js') }}"></script>
 <script src="{{ asset('assets/dashboard/js/summernote-bs4.min.js') }}"></script>
 <script src="{{ asset('assets/dashboard/js/summernote-es-ES.js') }}"></script>
 <script src="{{ asset('assets/dashboard/js/scripts.js') }}"></script>
 @include('sweetalert::alert')
