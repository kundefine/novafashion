@extends('backend.layouts.backend-master')

@section('title', 'pages-error-404')


@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Page error 404',
            'page_title_icon' => 'fa fa-arrow-circle-o-left'
        ]);
    @endcomponent
    <!-- END PAGE CONTENT COMMON -->

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-12">

                    <div class="error-container">
                        <div class="error-code">404</div>
                        <div class="error-text">page not found</div>
                        <div class="error-subtext">Unfortunately we're having trouble loading the page you are looking for. Please wait a moment and try again or use action below.</div>
                        <div class="error-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-info btn-block btn-lg" onClick="document.location.href = 'index.html';">Back to dashboard</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-primary btn-block btn-lg" onClick="history.back();">Previous page</button>
                                </div>
                            </div>
                        </div>
                        <div class="error-subtext">Or you can use search to find anything you need.</div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <input type="text" placeholder="Search..." class="form-control"/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><span class="fa fa-search"></span></button>
                                    </div>
                                </div>
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
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>        
        <!-- END TEMPLATE -->

    <!-- END SCRIPTS -->
@endpush





