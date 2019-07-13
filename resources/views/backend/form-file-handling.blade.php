@extends('backend.layouts.backend-master')

@section('title', 'form-file-handling')


@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'File Handling',
            'page_title_icon' => 'fa fa-arrow-circle-o-left'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-8">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3><span class="fa fa-mail-forward"></span> File Input</h3>
                            <p>Add class <code>file</code> to file input to get Bootstrap FileInput plugin</p>
                            <form enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Default</label>
                                        <input type="file" multiple class="file" data-preview-file-type="any"/>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Disabled</label>
                                        <input type="file" multiple readonly="true" class="file" data-preview-file-type="any"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Simple</label><br/>
                                        <input type="file" multiple id="file-simple"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3><span class="fa fa-sitemap"></span> File Tree</h3>
                            <p>File Tree is a configurable, AJAX file browser plugin for jQuery.</p>
                            <div id="filetree"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-9">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3><span class="fa fa-download"></span> Dropzone</h3>
                            <p>Add form with class <code>dropzone</code> to get dropzone box</p>
                            <form action="#" class="dropzone"></form>
                        </div>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3><span class="fa fa-download"></span> Mini dropzone</h3>
                            <p>Add form with class <code>dropzone dropzone-mini</code> to get mini dropzone box</p>
                            <form action="#" class="dropzone dropzone-mini"></form>
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

        <script type="text/javascript" src="{{asset('backend/js/plugins/dropzone/dropzone.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/fileinput/fileinput.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/filetree/jqueryFileTree.js')}}"></script>
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>

        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>
        <!-- END TEMPLATE -->
        
        <script>
            $(function(){
                $("#file-simple").fileinput({
                        showUpload: false,
                        showCaption: false,
                        browseClass: "btn btn-danger",
                        fileType: "any"
                });            
                $("#filetree").fileTree({
                    root: '/',
                    script: location.origin + '/backend/assets/filetree/jqueryFileTree.php',
                    expandSpeed: 100,
                    collapseSpeed: 100,
                    multiFolder: false                    
                }, function(file) {
                    alert(file);
                }, function(dir){
                    setTimeout(function(){
                        page_content_onresize();
                    },200);                    
                });                
            });            
        </script>
    <!-- END SCRIPTS -->
@endpush





