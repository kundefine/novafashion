@extends('backend.layouts.backend-master')

@section('title', 'charts-nvd3')





@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'NVD3 Charts',
            'page_title_icon' => 'fa fa-arrow-circle-o-left'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->


        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-6">

                    <!-- START SIMPLE LINE CHART -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Simple Line Chart</h3>
                        </div>
                        <div class="panel-body">
                            <div id="chart-1" style="height: 300px;"><svg></svg></div>
                        </div>
                    </div>
                    <!-- END SIMPLE LINE CHART -->

                </div>
                <div class="col-md-6">

                    <!-- START SCATTER CHART -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Scatter / Bubble Chart</h3>
                        </div>
                        <div class="panel-body">
                            <div id="chart-2" style="height: 300px;"><svg></svg></div>
                        </div>
                    </div>
                    <!-- END SCATTER CHART -->

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <!-- START STACKED AREA CHART -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Stacked Area Chart</h3>
                        </div>
                        <div class="panel-body">
                            <div id="chart-3" style="height: 300px;"><svg></svg></div>
                        </div>
                    </div>
                    <!-- END STACKED AREA CHART -->

                </div>
                <div class="col-md-6">

                    <!-- START DISCRETE CHART -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Discrete Bar Chart</h3>
                        </div>
                        <div class="panel-body">
                            <div id="chart-4" style="height: 300px;"><svg></svg></div>
                        </div>
                    </div>
                    <!-- END DISCRETE CHART -->

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <!-- START STACKED CHART -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Horizontal Multi-Bar Chart</h3>
                        </div>
                        <div class="panel-body">
                            <div id="chart-5" style="height: 300px;"><svg></svg></div>
                        </div>
                    </div>
                    <!-- END STACKED CHART -->

                </div>
                <div class="col-md-6">

                    <!-- START DISCRETE CHART -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Line Plus Bar Chart</h3>
                        </div>
                        <div class="panel-body">
                            <div id="chart-6" style="height: 300px;"><svg></svg></div>
                        </div>
                    </div>
                    <!-- END DISCRETE CHART -->

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <!-- START LINE AND BAR CHART -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Cumulative Line Chart</h3>

                        </div>
                        <div class="panel-body">
                            <div id="chart-7" style="height: 300px;"><svg></svg></div>
                        </div>
                    </div>
                    <!-- END LINE AND BAR CHART -->

                </div>
                <div class="col-md-6">

                    <!-- START CUMULATIVE CHART -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Line Chart with View Finder</h3>
                        </div>
                        <div class="panel-body">
                            <div id="chart-8" style="height: 300px;"><svg></svg></div>
                        </div>
                    </div>
                    <!-- END CUMULATIVE CHART -->

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <!-- START REGULAR PIE CHART -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Regular pie chart</h3>

                        </div>
                        <div class="panel-body">
                            <div id="chart-9" style="height: 300px;"><svg></svg></div>
                        </div>
                    </div>
                    <!-- END REGULAR PIE CHART -->

                </div>
                <div class="col-md-6">

                    <!-- START DOUNT CHART -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Donut chart</h3>
                        </div>
                        <div class="panel-body">
                            <div id="chart-10" style="height: 300px;"><svg></svg></div>
                        </div>
                    </div>
                    <!-- END DOUNT CHART -->

                </div>
            </div>


        </div>
        <!-- PAGE CONTENT WRAPPER -->

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
        
        <script type="text/javascript" src="{{asset('backend/js/plugins/nvd3/lib/d3.v3.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/plugins/nvd3/nv.d3.min.js')}}"></script>
        <!-- END THIS PAGE PLUGINS-->        
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/demo_charts_nvd3.js')}}"></script>
        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
@endpush