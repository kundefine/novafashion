@extends('backend.layouts.backend-master')

@section('title', 'pages-messages')


@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Messages',
            'page_title_icon' => 'fa fa-comments'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->

        <!-- START CONTENT FRAME -->
        <div class="content-frame">
            <!-- START CONTENT FRAME TOP -->
            <div class="content-frame-top">
                <div class="pull-right">
                    <button class="btn btn-danger"><span class="fa fa-book"></span> Contacts</button>
                    <button class="btn btn-default content-frame-right-toggle"><span class="fa fa-bars"></span></button>
                </div>
            </div>
            <!-- END CONTENT FRAME TOP -->

            <!-- START CONTENT FRAME RIGHT -->
            <div class="content-frame-right">

                <div class="list-group list-group-contacts border-bottom push-down-10">
                    <a href="#" class="list-group-item">
                        <div class="list-group-status status-online"></div>
                        <img src="{{asset('backend/assets/images/users/user.jpg')}}" class="pull-left" alt="Dmitry Ivaniuk">
                        <span class="contacts-title">Dmitry Ivaniuk</span>
                        <p>Hello my friend, how are...</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <div class="list-group-status status-online"></div>
                        <img src="{{asset('backend/assets/images/users/user3.jpg')}}" class="pull-left" alt="Nadia Ali">
                        <span class="contacts-title">Nadia Ali</span>
                        <p>Wanna se my photos?</p>
                    </a>
                    <a href="#" class="list-group-item active">
                        <div class="list-group-status status-online"></div>
                        <img src="{{asset('backend/assets/images/users/user2.jpg')}}" class="pull-left" alt="John Doe">
                        <div class="contacts-title">John Doe <span class="label label-danger">5</span></div>
                        <p>This project is awesome</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <div class="list-group-status status-away"></div>
                        <img src="{{asset('backend/assets/images/users/user4.jpg')}}" class="pull-left" alt="Brad Pitt">
                        <span class="contacts-title">Brad Pitt</span>
                        <p>ok</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <div class="list-group-status status-offline"></div>
                        <img src="{{asset('backend/assets/images/users/no-image.jpg')}}" class="pull-left" alt="Darth Vader">
                        <span class="contacts-title">Darth Vader</span>
                        <p>We should win this war!!!1</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <div class="list-group-status status-offline"></div>
                        <img src="{{asset('backend/assets/images/users/no-image.jpg')}}" class="pull-left" alt="Kim Kardashian">
                        <span class="contacts-title">Kim Kardashian</span>
                        <p>You received a letter from Darth?</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <div class="list-group-status status-offline"></div>
                        <img src="{{asset('backend/assets/images/users/no-image.jpg')}}" class="pull-left" alt="Jason Statham">
                        <span class="contacts-title">Jason Statham</span>
                        <p>Lets play chess...</p>
                    </a>
                </div>

                <div class="block">
                    <h4>Status</h4>
                    <div class="list-group list-group-simple">
                        <a href="#" class="list-group-item"><span class="fa fa-circle text-success"></span> Online</a>
                        <a href="#" class="list-group-item"><span class="fa fa-circle text-warning"></span> Away</a>
                        <a href="#" class="list-group-item"><span class="fa fa-circle text-muted"></span> Offline</a>
                    </div>
                </div>

            </div>
            <!-- END CONTENT FRAME RIGHT -->

            <!-- START CONTENT FRAME BODY -->
            <div class="content-frame-body content-frame-body-left">

                <div class="messages messages-img">
                    <div class="item in">
                        <div class="image">
                            <img src="{{asset('backend/assets/images/users/user2.jpg')}}" alt="John Doe">
                        </div>
                        <div class="text">
                            <div class="heading">
                                <a href="#">John Doe</a>
                                <span class="date">08:33</span>
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{asset('backend/assets/images/users/user.jpg')}}" alt="Dmitry Ivaniuk">
                        </div>
                        <div class="text">
                            <div class="heading">
                                <a href="#">Dmitry Ivaniuk</a>
                                <span class="date">08:39</span>
                            </div>
                            Integer et ipsum vitae urna mattis dictum. Sed eu sollicitudin nibh, in luctus velit.
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{asset('backend/assets/images/users/user.jpg')}}" alt="Dmitry Ivaniuk">
                        </div>
                        <div class="text">
                            <div class="heading">
                                <a href="#">Dmitry Ivaniuk</a>
                                <span class="date">08:42</span>
                            </div>
                            In dapibus ex ut nisl laoreet aliquam. Donec in mollis leo. Aenean nec suscipit neque, non iaculis justo. Quisque eget odio efficitur, porta risus vitae, sagittis neque.
                        </div>
                    </div>
                    <div class="item in">
                        <div class="image">
                            <img src="{{asset('backend/assets/images/users/user2.jpg')}}" alt="John Doe">
                        </div>
                        <div class="text">
                            <div class="heading">
                                <a href="#">John Doe</a>
                                <span class="date">08:58</span>
                            </div>
                            Curabitur et euismod urna?
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{asset('backend/assets/images/users/user.jpg')}}" alt="Dmitry Ivaniuk">
                        </div>
                        <div class="text">
                            <div class="heading">
                                <a href="#">Dmitry Ivaniuk</a>
                                <span class="date">09:11</span>
                            </div>
                            Fusce ultricies erat quis massa interdum, eu elementum urna iaculis
                        </div>
                    </div>
                    <div class="item in">
                        <div class="image">
                            <img src="{{asset('backend/assets/images/users/user2.jpg')}}" alt="John Doe">
                        </div>
                        <div class="text">
                            <div class="heading">
                                <a href="#">John Doe</a>
                                <span class="date">09:22</span>
                            </div>
                            Vestibulum cursus ipsum ut dolor vulputate dapibus. Donec elementum est vel vulputate malesuada?
                        </div>
                    </div>
                </div>

                <div class="panel panel-default push-up-10">
                    <div class="panel-body panel-body-search">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button class="btn btn-default"><span class="fa fa-camera"></span></button>
                                <button class="btn btn-default"><span class="fa fa-chain"></span></button>
                            </div>
                            <input type="text" class="form-control" placeholder="Your message..."/>
                            <div class="input-group-btn">
                                <button class="btn btn-default">Send</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END CONTENT FRAME BODY -->
        </div>
        <!-- END PAGE CONTENT FRAME -->
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
    <!-- END SCRIPTS -->
@endpush





