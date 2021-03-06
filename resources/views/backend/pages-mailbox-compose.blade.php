@extends('backend.layouts.backend-master')

@section('title', 'pages-mailbox-compose')


@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Compose',
            'page_title_icon' => 'fa fa-pencil'
        ]);
    @endcomponent
    <!-- END PAGE CONTENT COMMON -->

        <!-- START CONTENT FRAME -->
        <div class="content-frame">
            <!-- START CONTENT FRAME TOP -->
            <div class="content-frame-top">
                 <div class="pull-right">
                    <button class="btn btn-default"><span class="fa fa-cogs"></span> Settings</button>
                    <button class="btn btn-default"><span class="fa fa-floppy-o"></span> Save</button>
                    <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
                </div>
            </div>
            <!-- END CONTENT FRAME TOP -->

            <!-- START CONTENT FRAME LEFT -->
            <div class="content-frame-left">
                <div class="block">
                    <div class="list-group border-bottom">
                        <a href="#" class="list-group-item"><span class="fa fa-inbox"></span> Inbox <span class="badge badge-success">3</span></a>
                        <a href="#" class="list-group-item"><span class="fa fa-star"></span> Starred <span class="badge badge-warning">6</span></a>
                        <a href="#" class="list-group-item"><span class="fa fa-rocket"></span> Sent</a>
                        <a href="#" class="list-group-item"><span class="fa fa-flag"></span> Flagged</a>
                        <a href="#" class="list-group-item"><span class="fa fa-trash-o"></span> Deleted <span class="badge badge-default">1.4k</span></a>
                    </div>
                </div>
                <div class="block">
                    <h4>Labels</h4>
                    <div class="list-group list-group-simple">
                        <a href="#" class="list-group-item"><span class="fa fa-circle text-success"></span> Clients</a>
                        <a href="#" class="list-group-item"><span class="fa fa-circle text-warning"></span> Social</a>
                        <a href="#" class="list-group-item"><span class="fa fa-circle text-danger"></span> Work</a>
                        <a href="#" class="list-group-item"><span class="fa fa-circle text-info"></span> Family</a>
                        <a href="#" class="list-group-item"><span class="fa fa-circle text-primary"></span> Friends</a>
                    </div>
                </div>
            </div>
            <!-- END CONTENT FRAME LEFT -->

            <!-- START CONTENT FRAME BODY -->
            <div class="content-frame-body">
                <div class="block">
                    <form role="form" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <button class="btn btn-default"><span class="fa fa-trash-o"></span> Delete Draft</button>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-danger"><span class="fa fa-envelope"></span> Send Message</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">From:</label>
                            <div class="col-md-10">
                                <select class="form-control select">
                                    <option>Dmitry (dmitryivaniuk@domain.com)</option>
                                    <option>Incognito (otheremail@domain.com)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">To:</label>
                            <div class="col-md-9">
                                <input type="text" class="tagsinput" value="John (johndoe@domain.com)" data-placeholder="add email"/>
                            </div>
                            <div class="col-md-1">
                                <button class="btn btn-link toggle" data-toggle="mail-cc">Cc</button>
                            </div>
                        </div>
                        <div class="form-group hidden" id="mail-cc">
                            <label class="col-md-2 control-label">Cc:</label>
                            <div class="col-md-10">
                                <input type="text" class="tagsinput" value="" data-placeholder="add email"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Subject:</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" value="Re: Lorem ipsum dolor sit amet"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Attachments:</label>
                            <div class="col-md-10">
                                <input type="file" class="file" data-filename-placement="inside"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                    <textarea class="summernote_email"><p>Hello Dmitry,</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ligula risus, viverra sit amet purus id, ullamcorper venenatis leo. Ut vitae semper neque. Nunc vel lacus vel erat sodales ultricies sed sed massa. Duis non elementum velit. Nunc quis molestie dui. Nullam ullamcorper lectus in mattis volutpat. Nunc egestas felis sit amet ultrices euismod. Donec lacinia neque vel quam pharetra, non dignissim arcu semper. Donec ultricies, neque ut vehicula ultrices, ligula velit sodales purus, eget eleifend libero risus sed turpis. Fusce hendrerit vel dui ut pulvinar. Ut sed tristique ante, sed egestas turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p>Fusce sit amet dui at nunc laoreet facilisis. Proin consequat orci sollicitudin sem cursus, quis vehicula eros ultrices. Cras fermentum justo at nibh tincidunt, consectetur elementum est aliquam.</p>
<p>Nam dignissim convallis nulla, vitae porta purus fringilla ac. Praesent consectetur ex eu dui efficitur sollicitudin. Mauris libero est, aliquam a diam maximus, dignissim laoreet lacus.</p>
<p>Nulla ac nisi sodales, auctor dui et, consequat turpis. Cras dolor turpis, sagittis vel elit in, varius elementum arcu. Mauris aliquet lorem ac enim blandit, nec consequat tortor auctor. Sed eget nunc at justo congue mollis eget a urna. Phasellus in mauris quis tortor porta tristique at a risus.</p>
<p><strong>Best Regards<br/>John Doe</strong></p>
                                    </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <button class="btn btn-default"><span class="fa fa-trash-o"></span> Delete Draft</button>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-danger"><span class="fa fa-envelope"></span> Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
        
        <script type="text/javascript" src="{{asset('backend/js/plugins/summernote/summernote.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>       
        <script type="text/javascript" src="{{asset('backend/js/plugins/bootstrap/bootstrap-select.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/plugins/bootstrap/bootstrap-file-input.js')}}"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
@endpush





