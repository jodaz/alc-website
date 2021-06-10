<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('assets/website/images/favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') || Alcaldía de Bermúdez</title>
    @include('dashboard.layouts.styles')
</head>
<body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

  <input type="hidden" id="base_url" value="{{ url('/') }}">

  <div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
      @include('dashboard.layouts.nav.aside')
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
        {{-- Top Bar --}}
        @include('dashboard.layouts.nav.top')
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
          <!-- begin:: Breadcrumbs -->
          @yield('breadcrumbs')
          <!-- end:: Breadcrumbs -->
          <!-- begin:: Content -->
          <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
            @yield('content')
          </div>
          <!-- end:: Content -->
        </div>
        @include('dashboard.layouts.nav.footer')
      </div>
    </div>
  </div>
  <!-- begin::Scrolltop -->
  <div id="kt_scrolltop" class="kt-scrolltop">
      <i class="fa fa-arrow-up"></i>
  </div>
  <!-- end::Scrolltop -->

  @include('dashboard.layouts.scripts')
</body>
</html>
