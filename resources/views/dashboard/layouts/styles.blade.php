<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />

<!--begin::Fonts -->
    <!--script-- src="{{ asset('assets/dashboard/js/webfont.js') }}"></script-->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
<!--end::Fonts -->

<link rel="stylesheet" href="{{ asset('assets/dashboard/css/login-4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dashboard/css/vendors.bundle.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dashboard/css/style.bundle.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dashboard/css/skins/header/base/light.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/skins/header/menu/light.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dashboard/css/skins/brand/dark.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dashboard/css/skins/aside/dark.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dashboard/plugins/datatables/datatables.bundle.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dashboard/plugins/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dashboard/css/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dashboard/css/general-styles.css') }}">
