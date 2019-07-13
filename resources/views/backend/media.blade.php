@extends('backend.layouts.backend-master')

@section('title', 'media')


@section('page-content')
    <div class="page-content">
        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Upload Media',
            'page_title_icon' => 'fa fa-cloud-upload'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->


    <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3><span class="fa fa-download"></span> Dropzone</h3>
                            <p>Add form with class <code>dropzone</code> to get dropzone box</p>
                            <div action="#" class="dropzone" id="myDropzone"></div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0;">0% Complete</div>
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
    <script type="text/javascript" src="{{asset('backend/kassets/js/kdropzone.js')}}"></script>
    <!-- END TEMPLATE -->


    <!-- END SCRIPTS -->
@endpush





