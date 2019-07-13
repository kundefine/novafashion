@include('backend.layouts.inc.header')

<!-- START PAGE CONTAINER -->
<div class="page-container">

    <!-- START PAGE SIDEBAR -->
    @include('backend.layouts.inc.sidebar')
    <!-- END PAGE SIDEBAR -->

    <!-- PAGE CONTENT -->
    @yield('page-content')
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

@yield('after-page-container')

<!-- MESSAGE BOX-->
@include('backend.layouts.inc.message-box')
<!-- END MESSAGE BOX-->



@stack('footer-scripts')

@include('backend.layouts.inc.footer')