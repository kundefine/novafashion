@extends('backend.layouts.backend-master')

@section('title', 'charts-other')


@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Other Charts',
            'page_title_icon' => 'fa fa-arrow-circle-o-left'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->


        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">

                <div class="col-md-12">

                    <!-- START SPARKLINE CHARTS -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sparkline Charts</h3>
                        </div>
                        <div class="block-content">
                            <table class="table">
                                <tr>
                                    <td width="100"><strong>Line</strong></td>
                                    <td><span class="sparkline" sparkFillColor="#FFF" sparkLineWidth="2" sparkLineColor="#9FD468" sparkWidth="100" sparkHeight="45" >5,4,3,2,4,5,6,7,8,6,4,5</span></td>
                                    <td>Line charts are the default chart type, but to specify the type explicitly set an option called "type" to "line".</td>
                                </tr>
                                <tr>
                                    <td><strong>Bar</strong></td>
                                    <td><span class="sparkline" sparkType="bar" sparkBarColor="#4FC0E8" sparkWidth="100" sparkHeight="45" sparkBarWidth="5">5,4,3,2,4,5,6,7,8,6,4,5</span></td>
                                    <td>Set the "type" option to "bar" to generate bar charts. </td>
                                </tr>
                                <tr>
                                    <td width="100"><strong>Discrete</strong></td>
                                    <td><span class="sparkline" sparkType="discrete" sparkLineColor="#F6BB43" sparkWidth="100" sparkHeight="45" >5,4,3,2,4,5,6,7,8,6,4,5</span></td>
                                    <td>Set the "type" option to "discrete" to generate discrete charts.</td>
                                </tr>
                                <tr>
                                    <td width="100"><strong>Pie</strong></td>
                                    <td><span class="sparkline" sparkType="pie" sparkWidth="50" sparkHeight="50" >5,4,3,2</span></td>
                                    <td>Set the "type" option to "pie" to generate pie charts.</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- END SPARKLINE CHARTS -->

                    <!-- START KNOB SLIDER -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Knob Slider</h3>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <h5>Disable display input</h5>
                                    <input class="knob" data-width="150" data-fgColor="#33414E" data-displayInput=false value="35"/>
                                </div>
                                <div class="col-md-4 text-center">
                                    <h5>'cursor' mode</h5>
                                    <input class="knob" data-width="150" data-cursor=true data-fgColor="#81C500" value="29"/>
                                </div>
                                <div class="col-md-4 text-center">
                                    <h5>Display previous value</h5>
                                    <input class="knob" data-width="150" data-min="-100" data-fgColor="#FD421C" data-displayPrevious=true value="44"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <h5>Angle offset</h5>
                                    <input class="knob" data-width="150" data-angleOffset="90" data-linecap="round" data-fgColor="#61C0E6" value="35"/>
                                </div>
                                <div class="col-md-4 text-center">
                                    <h5>Angle offset and arc</h5>
                                    <input class="knob" data-width="150" data-cursor=true data-fgColor="#FEC558" value="29"/>
                                </div>
                                <div class="col-md-4 text-center">
                                    <h5>5-digit values, step 1000</h5>
                                    <input class="knob" data-width="150" data-min="-15000" data-displayPrevious=true data-max="15000" data-step="1000" value="-11000" data-fgColor="#81C500"/>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END KNOB SLIDER -->

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
        
        <script type="text/javascript" src="{{asset('backend/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/knob/jquery.knob.min.js')}}"></script>
        <!-- END THIS PAGE PLUGINS-->        
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
@endpush





