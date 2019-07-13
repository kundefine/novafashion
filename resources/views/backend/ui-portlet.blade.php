@extends('backend.layouts.backend-master')

@section('title', 'ui-portlet')


@section('page-content')
    <div class="page-content sortableContent" id="grid_content_1">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Portlet',
            'page_title_icon' => 'fa fa-arrow-right'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->


        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info push-down-20">
                        <span style="color: #FFF500;">ATENTION!</span> Position of blocks is saving into cookies. After page reload you can see all changes.
                        <button type="button" class="close" data-dismiss="alert">×</button>
                    </div>
                </div>
            </div>

            <!-- START PORTLET -->
            <div class="row scRow">
                <div class="col-md-6 scCol">

                    <div class="panel panel-primary" id="grid_block_1">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sample block #1</h3>
                        </div>
                        <div class="panel-body">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia
                        </div>
                    </div>

                    <div class="panel panel-info" id="grid_block_2">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sample block #2</h3>
                        </div>
                        <div class="panel-body">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia
                        </div>
                    </div>

                </div>
                <div class="col-md-6 scCol">

                    <div class="panel panel-warning" id="grid_block_3">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sample block #3</h3>
                        </div>
                        <div class="panel-body">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia
                        </div>
                    </div>

                    <div class="panel panel-danger" id="grid_block_4">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sample block #4</h3>
                        </div>
                        <div class="panel-body">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia
                        </div>
                    </div>

                </div>
            </div>

            <div class="row scRow">
                <div class="col-md-12 scCol">

                    <div class="panel panel-success" id="grid_block_5">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sample block #5</h3>
                        </div>
                        <div class="panel-body">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia
                        </div>
                    </div>

                </div>
            </div>

            <div class="row scRow">
                <div class="col-md-6 scCol">

                    <div class="panel panel-primary" id="grid_block_6">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sample block #6</h3>
                        </div>
                        <div class="panel-body">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia
                        </div>
                    </div>

                    <div class="panel panel-info" id="grid_block_7">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sample block #7</h3>
                        </div>
                        <div class="panel-body">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia
                        </div>
                    </div>

                </div>
                <div class="col-md-6 scCol">

                    <div class="panel panel-warning" id="grid_block_8">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sample block #8</h3>
                        </div>
                        <div class="panel-body">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia
                        </div>
                    </div>

                    <div class="panel panel-danger" id="grid_block_9">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sample block #9</h3>
                        </div>
                        <div class="panel-body">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia
                        </div>
                    </div>

                </div>
            </div>
            <!-- END PORTLET -->

            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-primary sc-set-default pull-right">Remove saved data</button>
                </div>
                <div class="col-md-12">
                    &nbsp;
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
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src="{{asset('backend/js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>  
        <!-- END PAGE PLUGINS -->        
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>
        <!-- END TEMPLATE -->
        
        <!-- START PAGE PLUGINS -->
        <script type="text/javascript" src="{{asset('backend/js/portlet.js')}}"></script>
        <!-- END PAGE PLUGINS -->        
    <!-- END SCRIPTS -->

@endpush






