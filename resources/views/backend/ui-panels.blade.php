@extends('backend.layouts.backend-master')

@section('title', 'ui-panels')


@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Panels',
            'page_title_icon' => 'fa fa-arrow-right'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->
        

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <!-- START PANELS WITH CONTROLS -->
            <div class="row">
                <div class="col-md-6">

                    <!-- START PANEL WITH STATIC CONTROLS -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel with static controls</h3>
                            <ul class="panel-controls">
                                <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span> Refresh</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            Controls always available
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary pull-right">Button</button>
                        </div>
                    </div>
                    <!-- END PANEL WITH STATIC CONTROLS -->

                    <!-- START PANEL WITH HIDDEN CONTROLS -->
                    <div class="panel panel-success panel-hidden-controls">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel with hidden controls</h3>
                            <ul class="panel-controls">
                                <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span> Refresh</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            Use <code>.panel-hidden-controls</code> class on .panel to active this feature.
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary pull-right">Button</button>
                        </div>
                    </div>
                    <!-- END PANEL WITH HIDDEN CONTROLS -->

                    <!-- START PANEL WITH CONTROL CLASSES -->
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel control classes</h3>
                            <ul class="panel-controls">
                                <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            Use <code>.panel-collapse</code>,<code>.panel-remove</code>,<code>.panel-refresh</code> classes inside panel to get all features.
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary pull-right">Button</button>
                        </div>
                    </div>
                    <!-- END PANEL WITH CONTROL CLASSES -->

                </div>
                <div class="col-md-6">

                    <!-- START PANEL WITH REFRESH CALLBACKS -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel refresh callbacks</h3>
                        </div>
                        <div class="panel-body">
                            Refresh function has two event callbacks <code>shown</code> and <code>hidden</code>.
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-default" id="pc_refresh">Refresh</button>
                        </div>
                    </div>
                    <!-- END PANEL WITH REFRESH CALLBACKS -->

                    <!-- START PANEL WITH COLLAPSE CALLBACKS -->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel collapse callbacks</h3>
                        </div>
                        <div class="panel-body">
                            Collapse function has two event callbacks <code>shown</code> and <code>hidden</code>.
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-default" id="pc_collapse">Collapse</button>
                        </div>
                    </div>
                    <!-- END PANEL WITH REMOVE CALLBACKS -->

                    <!-- START PANEL WITH REMOVE CALLBACKS -->
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel remove callbacks</h3>
                        </div>
                        <div class="panel-body">
                            Remove function has two event callbacks <code>before</code> and <code>after</code>.
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-default" id="pc_remove">Remove</button>
                        </div>
                    </div>
                    <!-- END PANEL WITH REMOVE CALLBACKS -->

                </div>
            </div>
            <!-- END PANELS WITH CONTROLS -->

            <!-- START SIMPLE PANELS -->
            <div class="row">
                <div class="col-md-4">

                    <!-- START PRIMARY PANEL -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Primary</h3>
                        </div>
                        <div class="panel-body">
                            <p>Fusce imperdiet neque at lectus faucibus, eu dapibus nibh imperdiet. Cras porttitor magna ut justo iaculis feugiat. Aliquam semper in dolor nec mattis.</p>
                            <p>Duis varius arcu in quam laoreet scelerisque. Aenean porta mi et massa congue, sit amet eleifend dui dignissim. Ut venenatis, tortor ac egestas fringilla, nisi mauris rhoncus nibh, facilisis lacinia mi ligula a est.</p>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-default">Back</button>
                            <button class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </div>
                    <!-- END PRIMARY PANEL -->

                    <!-- START COLORFUL PANEL -->
                    <div class="panel panel-colorful">
                        <div class="panel-heading">
                            <h3 class="panel-title">Colorful</h3>
                        </div>
                        <div class="panel-body">
                            <p>Fusce imperdiet neque at lectus faucibus, eu dapibus nibh imperdiet. Cras porttitor magna ut justo iaculis feugiat. Aliquam semper in dolor nec mattis.</p>
                            <p>Duis varius arcu in quam laoreet scelerisque. Aenean porta mi et massa congue, sit amet eleifend dui dignissim. Ut venenatis, tortor ac egestas fringilla, nisi mauris rhoncus nibh, facilisis lacinia mi ligula a est.</p>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-default">Back</button>
                            <button class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </div>
                    <!-- END COLORFUL PANEL -->
                </div>

                <div class="col-md-4">

                    <!-- START SUCCESS PANEL -->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Success</h3>
                        </div>
                        <div class="panel-body">
                            <p>Fusce imperdiet neque at lectus faucibus, eu dapibus nibh imperdiet. Cras porttitor magna ut justo iaculis feugiat. Aliquam semper in dolor nec mattis.</p>
                            <p>Duis varius arcu in quam laoreet scelerisque. Aenean porta mi et massa congue, sit amet eleifend dui dignissim. Ut venenatis, tortor ac egestas fringilla, nisi mauris rhoncus nibh, facilisis lacinia mi ligula a est.</p>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-default">Back</button>
                            <button class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </div>
                    <!-- END SUCCESS PANEL -->

                    <!-- START INFO PANEL -->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">lorem ipsum dolor</h3>
                        </div>
                        <div class="panel-body">
                            <p>Fusce imperdiet neque at lectus faucibus, eu dapibus nibh imperdiet. Cras porttitor magna ut justo iaculis feugiat. Aliquam semper in dolor nec mattis.</p>
                            <p>Duis varius arcu in quam laoreet scelerisque. Aenean porta mi et massa congue, sit amet eleifend dui dignissim. Ut venenatis, tortor ac egestas fringilla, nisi mauris rhoncus nibh, facilisis lacinia mi ligula a est.</p>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-default">Back</button>
                            <button class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </div>
                    <!-- END INFO PANEL -->

                </div>
                <div class="col-md-4">

                    <!-- START WARNING PANEL -->
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Warning</h3>
                        </div>
                        <div class="panel-body">
                            <p>Fusce imperdiet neque at lectus faucibus, eu dapibus nibh imperdiet. Cras porttitor magna ut justo iaculis feugiat. Aliquam semper in dolor nec mattis.</p>
                            <p>Duis varius arcu in quam laoreet scelerisque. Aenean porta mi et massa congue, sit amet eleifend dui dignissim. Ut venenatis, tortor ac egestas fringilla, nisi mauris rhoncus nibh, facilisis lacinia mi ligula a est.</p>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-default">Back</button>
                            <button class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </div>
                    <!-- END DEFAULT PANEL -->

                    <!-- START DANGER PANEL -->
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Danger</h3>
                        </div>
                        <div class="panel-body">
                            <p>Fusce imperdiet neque at lectus faucibus, eu dapibus nibh imperdiet. Cras porttitor magna ut justo iaculis feugiat. Aliquam semper in dolor nec mattis.</p>
                            <p>Duis varius arcu in quam laoreet scelerisque. Aenean porta mi et massa congue, sit amet eleifend dui dignissim. Ut venenatis, tortor ac egestas fringilla, nisi mauris rhoncus nibh, facilisis lacinia mi ligula a est.</p>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-default">Back</button>
                            <button class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </div>
                    <!-- END DEFAULT PANEL -->

                </div>
            </div>
            <!-- END SIMPLE PANELS -->

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
        
        <script>
            $("#pc_refresh").click(function(){                                        
                function p_refresh_shown(){
                    alert("shown");
                    panel_refresh($("#pc_refresh").parents(".panel"),"hidden",function(){alert("hidden")});
                }
                panel_refresh($("#pc_refresh").parents(".panel"),"shown",p_refresh_shown);

            });                         
            
            $("#pc_collapse").click(function(){                                        
                function p_collapse_hidden(){                                            
                    alert("hidden");                                            
                    panel_collapse($("#pc_collapse").parents(".panel"),"shown",function(){alert('shown')});
                }
                panel_collapse($("#pc_collapse").parents(".panel"),"hidden",p_collapse_hidden);
            });           
            
            $("#pc_remove").click(function(){                                        
                function p_remove_before(){
                    alert("before");
                    panel_remove($("#pc_remove").parents(".panel"),"after",function(){alert("after")});
                }
                panel_remove($("#pc_remove").parents(".panel"),"before",p_remove_before);

            });                 
        </script>         
        
    <!-- END SCRIPTS -->
@endpush





