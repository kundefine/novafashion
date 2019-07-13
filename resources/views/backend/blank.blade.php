@extends('backend.layouts.backend-master')

@section('title', 'blank')


@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Page Title',
            'page_title_icon' => 'fa fa-arrow-circle-o-left'
            ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel Title</h3>
                        </div>
                        <div class="panel-body">
                            Panel body
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- END PAGE CONTENT WRAPPER -->


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
        <script type="text/javascript" src="{{asset('backend/js/plugins/scrolltotop/scrolltopcontrol.js')}}"></script>

        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
@endpush





