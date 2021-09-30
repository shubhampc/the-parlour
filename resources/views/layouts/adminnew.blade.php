<!DOCTYPE html>
<html lang="en">
    <head>

        {{-- @include("partials/title-meta.html", {"title": "Dashboard"}) --}}
        <!-- Plugins css -->
        <link href="{{ asset('asset-admin/dist/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('asset-admin/dist/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('asset-admin/dist/assets/css/config/default/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{ asset('asset-admin/dist/assets/css/config/default/app.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />
        <link href="{{ asset('asset-admin/dist/assets/css/config/default/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="{{ asset('asset-admin/dist/assets/css/config/default/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

<!-- icons -->
        <link href="{{ asset('asset-admin/dist/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        {{-- @include('./partials/head-css.html') --}}

    </head>

    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">
    @include('layouts.partials.admin-menu')
           

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                
            @yield('content') 
                @include('layouts.partials.admin-footer')

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
        @include('layouts.partials.admin-right-sidebar')

        <!-- Vendor js -->
        <script src="{{ asset('asset-admin/dist/assets/js/vendor.min.js') }}"></script>

        <!-- Plugins js-->
        <script src="{{ asset('asset-admin/dist/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('asset-admin/dist/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

        <script src="{{ asset('asset-admin/dist/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{ asset('asset-admin/dist/assets/js/pages/dashboard-1.init.js') }}"></script>

        <!-- App js-->
        <script src="{{ asset('asset-admin/dist/assets/js/app.min.js') }}"></script>
    </body>
</html>