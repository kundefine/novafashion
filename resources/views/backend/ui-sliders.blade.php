@extends('backend.layouts.backend-master')

@section('title', 'ui-sliders')


@section('page-content')
    <div class="page-content sortableContent" id="grid_content_1">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Sliders',
            'page_title_icon' => 'fa fa-arrow-right'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->



        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-12">

                    <!-- START RANGE SLIDER -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Range Slider</h3>
                            <ul class="panel-controls">
                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-2">Default</label>
                                    <div class="col-md-10">
                                        <div class="defaultSlider" data-min="20" data-max="180"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Date slider</label>
                                    <div class="col-md-10">
                                        <div class="dateSlider" data-min="2010-01-01" data-max="2015-01-01"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Range</label>
                                    <div class="col-md-10">
                                        <div class="rangeSlider" data-min="80" data-max="120"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Step</label>
                                    <div class="col-md-10">
                                        <div class="stepSlider" data-min="50" data-max="150"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END RANGE SLIDER -->

                    <!-- START KNOB SLIDER -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Knob Slider</h3>
                            <ul class="panel-controls">
                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                            </ul>
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
        
        <script type="text/javascript" src="{{asset('backend/js/plugins/rangeslider/jQAllRangeSliders-min.js')}}"></script>       
        <script type="text/javascript" src="{{asset('backend/js/plugins/knob/jquery.knob.min.js')}}"></script>
        <!-- END THIS PAGE PLUGINS-->      
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>                
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->

@endpush





