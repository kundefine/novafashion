@extends('backend.layouts.backend-master')

@section('title', 'charts-morris')



@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Morris Charts',
            'page_title_icon' => 'fa fa-arrow-circle-o-left'
            ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->


        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-6">

                    <!-- START LINE CHART -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Line Chart</h3>
                        </div>
                        <div class="panel-body">
                            <div id="morris-line-example" style="height: 300px;"></div>
                        </div>
                    </div>
                    <!-- END LINE CHART -->

                </div>
                <div class="col-md-6">

                    <!-- START Area CHART -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Area Chart</h3>
                        </div>
                        <div class="panel-body">
                            <div id="morris-area-example" style="height: 300px;"></div>
                        </div>
                    </div>
                    <!-- END Area CHART -->

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <!-- START BAR CHART -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Bar Chart</h3>
                        </div>
                        <div class="panel-body">
                            <div id="morris-bar-example" style="height: 300px;"></div>
                        </div>
                    </div>
                    <!-- END BAR CHART -->

                </div>
                <div class="col-md-6">

                    <!-- START DONUT CHART -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Donut Chart</h3>
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-example" style="height: 300px;"></div>
                        </div>
                    </div>
                    <!-- END DONUT CHART -->

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
        
        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="{{asset('backend/js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins/morris/raphael-min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/morris/morris.min.js')}}"></script>
        <!-- END THIS PAGE PLUGINS-->        
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/demo_charts_morris.js')}}"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
@endpush





