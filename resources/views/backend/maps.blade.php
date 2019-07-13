@extends('backend.layouts.backend-master')

@section('title', 'maps')


@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Maps',
            'page_title_icon' => 'fa fa-map-marker'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->


        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-6">
                    <!-- START GOOGLE WORLD MAP -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Google World Map</h3>
                        </div>
                        <div class="panel-body panel-body-map">
                            <div id="google_world_map" style="width: 100%; height: 300px;"></div>
                        </div>
                    </div>
                    <!-- END GOOGLE WORLD MAP-->
                </div>
                <div class="col-md-6">
                    <!-- START GOOGLE EUROPE MAP -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Google Europe Map</h3>
                        </div>
                        <div class="panel-body panel-body-map">
                            <div id="google_eu_map" style="width: 100%; height: 300px;"></div>
                        </div>
                    </div>
                    <!-- END GOOGLE EUROPE MAP -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <!-- START GOOGLE MAP WITH MARKER -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Google Map With Markers</h3>
                        </div>
                        <div class="panel-body panel-body-map">
                            <div id="google_ptm_map" style="width: 100%; height: 300px;"></div>
                        </div>
                    </div>
                    <!-- END GOOGLE MAP WITH MARKER -->
                </div>
                <div class="col-md-6">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Google Map Search</h3>
                            <div class="pull-right" style="width: 200px;">
                                <input type="text" id="target" class="form-control"/>
                            </div>
                        </div>
                        <div class="panel-body panel-body-map">
                            <div id="google_search_map" style="width: 100%; height: 300px;"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- START jVectorMap World -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">jVectorMap World</h3>
                            <div class="pull-right" style="width: 200px;">
                                <input type="text" class="form-control" placeholder="Select country" id="vector_world_map_value"/>
                            </div>
                        </div>
                        <div class="panel-body panel-body-map">
                            <div id="vector_world_map" style="width: 100%; height: 300px"></div>
                        </div>
                    </div>
                    <!-- END jVectorMap World -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- START jVectorMap Europe -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">jVectorMap Europe</h3>

                        </div>
                        <div class="panel-body panel-body-map">
                            <div id="vector_europe_map" style="width: 100%; height: 300px;"></div>
                        </div>
                    </div>
                    <!-- END jVectorMap Europe -->
                </div>
                <div class="col-md-6">
                    <!-- START jVectorMap USA -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">jVectorMap USA</h3>
                            <div class="pull-right" style="width: 200px;">
                                <input type="text" class="form-control" placeholder="Select state" id="vector_usa_map_value"/>
                            </div>
                        </div>
                        <div class="panel-body panel-body-map">
                            <div id="vector_usa_map" style="width: 100%; height: 300px;"></div>
                        </div>
                    </div>
                    <!-- END jVectorMap USA -->
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
        <script src="{{asset('backend/https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places')}}"></script>

        <script type='text/javascript' src="{{asset('backend/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script type='text/javascript' src="{{asset('backend/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script type='text/javascript' src="{{asset('backend/js/plugins/jvectormap/jquery-jvectormap-europe-mill-en.js')}}"></script>
        <script type='text/javascript' src="{{asset('backend/js/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>

        <script type='text/javascript' src="{{asset('backend/js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>       
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/demo_maps.js')}}"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
@endpush




