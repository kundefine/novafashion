@extends('backend.layouts.backend-master')

@section('title', 'pages-calendar')


@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Pages calendar',
            'page_title_icon' => 'fa fa-calendar'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->

        <!-- START CONTENT FRAME -->
        <div class="content-frame">
            <!-- START CONTENT FRAME TOP -->
            <div class="content-frame-top">
                <div class="pull-right">
                    <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
                </div>
            </div>
            <!-- END CONTENT FRAME TOP -->

            <!-- START CONTENT FRAME LEFT -->
            <div class="content-frame-left">
                <h4>New Event</h4>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" id="new-event-text" placeholder="Event text..."/>
                        <div class="input-group-btn">
                            <button class="btn btn-primary" id="new-event">Add</button>
                        </div>
                    </div>
                </div>

                <h4>External Events</h4>
                <div class="list-group border-bottom" id="external-events">
                    <a class="list-group-item external-event">Lorem ipsum dolor</a>
                    <a class="list-group-item external-event">Nam a nisi et nisi</a>
                    <a class="list-group-item external-event">Donec tristique eu</a>
                    <a class="list-group-item external-event">Vestibulum cursus</a>
                    <a class="list-group-item external-event">Etiam euismod</a>
                    <a class="list-group-item external-event">Sed pharetra dolor</a>
                </div>

                <div class="push-up-10">
                    <label class="check">
                        <input type="checkbox" class="icheckbox" id="drop-remove"/> Remove after drop
                    </label>
                </div>

                <div class="panel panel-default push-up-10">
                    <div class="panel-body padding-top-0">
                        <h4>Fullcalendar</h4>
                        <p>FullCalendar is a jQuery plugin that provides a full-sized, drag & drop event calendar like the one below. It uses AJAX to fetch events on-the-fly and is easily configured to use your own feed format. It is visually customizable with a rich API.</p>
                    </div>
                </div>
            </div>
            <!-- END CONTENT FRAME LEFT -->

            <!-- START CONTENT FRAME BODY -->
            <div class="content-frame-body padding-bottom-0">

                <div class="row">
                    <div class="col-md-12">
                        <div id="alert_holder"></div>
                        <div class="calendar">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END CONTENT FRAME BODY -->

        </div>
        <!-- END CONTENT FRAME -->

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
        
        <script type="text/javascript" src="{{asset('backend/js/plugins/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
@endpush






