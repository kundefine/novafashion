@extends('backend.layouts.backend-master')

@section('title', 'charts-rickshaw')


@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Rickshaw Charts',
            'page_title_icon' => 'fa fa-arrow-circle-o-left'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->


        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Lineplot</h3>
                        </div>
                        <div class="panel-body">
                            <div id="charts-lineplot"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Lines</h3>
                        </div>
                        <div class="panel-body">
                            <div id="charts-lines"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Column</h3>
                        </div>
                        <div class="panel-body">
                            <div id="charts-column"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Legend</h3>
                        </div>
                        <div class="panel-body">
                            <div id="charts-legend"></div>
                            <div class="chart-legend">
                                <div id="legend"></div>
                            </div>
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
        
        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="{{asset('backend/js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins/rickshaw/d3.v3.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/rickshaw/rickshaw.min.js')}}"></script>     
        <!-- END THIS PAGE PLUGINS-->        
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/demo_charts_rickshaw.js')}}"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
@endpush





