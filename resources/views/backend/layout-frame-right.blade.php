@extends('backend.layouts.backend-master')

@section('title', 'layout-frame-right')


@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Layout frame right',
            'page_title_icon' => 'fa fa-arrow-circle-o-left'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->

        <!-- START CONTENT FRAME -->
        <div class="content-frame">

            <!-- START CONTENT FRAME TOP -->
            <div class="content-frame-top">
                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> </h2>
                </div>
                <div class="pull-right">
                    <button class="btn btn-default content-frame-right-toggle"><span class="fa fa-bars"></span></button>
                </div>
            </div>
            <!-- END CONTENT FRAME TOP -->

            <!-- START CONTENT FRAME LEFT -->
            <div class="content-frame-right">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="push-up-0">Right Column</h3>
                        Right side disappear on mobile devices, and can be shown by pressing toggle button.
                    </div>
                </div>
            </div>
            <!-- END CONTENT FRAME LEFT -->

            <!-- START CONTENT FRAME BODY -->
            <div class="content-frame-body content-frame-body-left">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Responsive Body</h3>
                        This is responsive frame body. Can be used for all elements of template.
                    </div>
                </div>
            </div>
            <!-- END CONTENT FRAME BODY -->
        </div>
        <!-- END CONTENT FRAME -->



    </div>
@endsection

@push('footer-scripts')
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{asset('backend/js/plugins/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/bootstrap/bootstrap.min.js')}}"></script>        
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src="{{asset('backend/js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        <!-- END PAGE PLUGINS -->     

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
@endpush




