@extends('backend.layouts.backend-master')

@section('title', 'ui-lists')


@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Lists',
            'page_title_icon' => 'fa fa-arrow-right'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-4">

                    <!-- DEFAULT LIST GROUP -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Default</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group border-bottom">
                                <li class="list-group-item">Lorem ipsum dolor sit amet</li>
                                <li class="list-group-item">Mauris placerat justo ut augue</li>
                                <li class="list-group-item">Donec ac venenatis elit</li>
                                <li class="list-group-item">Maecenas mauris diam</li>
                                <li class="list-group-item">Curabitur porttitor massa justo</li>
                            </ul>
                        </div>
                    </div>
                    <!-- END DEFAULT LIST GROUP -->

                </div>
                <div class="col-md-4">

                    <!-- LIST GROUP WITH BADGES -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">With Badges</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group border-bottom">
                                <li class="list-group-item">Lorem ipsum dolor sit amet<span class="badge">14</span></li>
                                <li class="list-group-item">Mauris placerat justo ut augue<span class="badge badge-danger">8</span></li>
                                <li class="list-group-item">Donec ac venenatis elit<span class="badge badge-info">7</span></li>
                                <li class="list-group-item">Maecenas mauris diam<span class="badge badge-success">25</span></li>
                                <li class="list-group-item">Curabitur porttitor massa justo<span class="badge badge-warning">58</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END LIST GROUP WITH BADGES -->

                </div>

                <div class="col-md-4">

                    <!-- LINKED LIST GROUP-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Linked</h3>
                        </div>
                        <div class="panel-body">
                            <div class="list-group border-bottom">
                                <a href="#" class="list-group-item">Lorem ipsum dolor sit amet</a>
                                <a href="#" class="list-group-item active">Mauris placerat justo ut augue</a>
                                <a href="#" class="list-group-item">Donec ac venenatis elit</a>
                                <a href="#" class="list-group-item">Maecenas mauris diam</a>
                                <a href="#" class="list-group-item">Curabitur porttitor massa justo</a>
                            </div>
                        </div>
                    </div>
                    <!-- END LINKED LIST GROUP-->

                </div>
            </div>

            <div class="row">
                <div class="col-md-4">

                    <!-- CONTACTS -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Contacts</h3>
                            <ul class="panel-controls">
                                <li><a href="#"><span class="fa fa-plus"></span></a></li>
                            </ul>
                        </div>
                        <div class="panel-body list-group list-group-contacts">
                            <a href="#" class="list-group-item">
                                <img src="{{asset('backend/assets/images/users/user2.jpg')}}" class="pull-left" alt="John Doe"/>
                                <span class="contacts-title">John Doe</span>
                                <p>UI/UX Designer</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <img src="{{asset('backend/assets/images/users/user.jpg')}}" class="pull-left" alt="Dmitry Ivaniuk"/>
                                <span class="contacts-title">Dmitry Ivaniuk</span>
                                <p>Web Developer/Designer</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <img src="{{asset('backend/assets/images/users/user3.jpg')}}" class="pull-left" alt="Nadia Ali"/>
                                <span class="contacts-title">Nadia Ali</span>
                                <p>Singer-Songwriter</p>
                            </a>
                        </div>
                    </div>
                    <!-- END CONTACTS -->

                </div>
                <div class="col-md-4">

                    <!-- CONTACTS WITH CONTROLS -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Contacts With Controls</h3>
                        </div>
                        <div class="panel-body list-group list-group-contacts">
                            <a href="#" class="list-group-item">
                                <img src="{{asset('backend/assets/images/users/user3.jpg')}}" class="pull-left" alt="Nadia Ali"/>
                                <span class="contacts-title">Nadia Ali</span>
                                <p>Singer-Songwriter</p>
                                <div class="list-group-controls">
                                    <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <img src="{{asset('backend/assets/images/users/user.jpg')}}" class="pull-left" alt="Dmitry Ivaniuk"/>
                                <span class="contacts-title">Dmitry Ivaniuk</span>
                                <p>Web Developer/Designer</p>
                                <div class="list-group-controls">
                                    <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <img src="{{asset('backend/assets/images/users/user2.jpg')}}" class="pull-left" alt="John Doe"/>
                                <span class="contacts-title">John Doe</span>
                                <p>UI/UX Designer</p>
                                <div class="list-group-controls">
                                    <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END CONTACTS WITH CONTROLS -->

                </div>
                <div class="col-md-4">

                    <!-- CONTACTS WITH STATUS -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Contacts With Status</h3>
                        </div>
                        <div class="panel-body list-group list-group-contacts">
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-online"></div>
                                <img src="{{asset('backend/assets/images/users/user.jpg')}}" class="pull-left" alt="Dmitry Ivaniuk"/>
                                <span class="contacts-title">Dmitry Ivaniuk</span>
                                <p>Web Developer/Designer</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-away"></div>
                                <img src="{{asset('backend/assets/images/users/user3.jpg')}}" class="pull-left" alt="Nadia Ali"/>
                                <span class="contacts-title">Nadia Ali</span>
                                <p>Singer-Songwriter</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-offline"></div>
                                <img src="{{asset('backend/assets/images/users/user2.jpg')}}" class="pull-left" alt="John Doe"/>
                                <span class="contacts-title">John Doe</span>
                                <p>UI/UX Designer</p>
                            </a>
                        </div>
                    </div>
                    <!-- END CONTACTS WITH STATUS -->

                </div>
            </div>

            <div class="row">

                <!-- DEFAULT MESSAGES -->
                <div class="col-md-4">

                    <h4>Default Messages</h4>
                    <div class="messages">
                        <div class="item">
                            <div class="text">
                                <div class="heading">
                                    <a href="#">John Doe</a>
                                    <span class="date">08:33</span>
                                </div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                            </div>
                        </div>
                        <div class="item">
                            <div class="text">
                                <div class="heading">
                                    <a href="#">Dmitry Ivaniuk</a>
                                    <span class="date">08:27</span>
                                </div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END DEFAULT MESSAGES -->

                <!-- MESSAGES WITH IMAGES -->
                <div class="col-md-4">

                    <h4>Messages With Images</h4>
                    <div class="messages messages-img">
                        <div class="item">
                            <div class="image">
                                <img src="{{asset('backend/assets/images/users/user2.jpg')}}" alt="John Doe"/>
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
                                <img src="{{asset('backend/assets/images/users/user.jpg')}}" alt="Dmitry Ivaniuk"/>
                            </div>
                            <div class="text">
                                <div class="heading">
                                    <a href="#">Dmitry Ivaniuk</a>
                                    <span class="date">08:27</span>
                                </div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END MESSAGES WITH IMAGES  -->

                <!-- INCOMING MESSAGES -->
                <div class="col-md-4">

                    <h4>Incoming Messages</h4>
                    <div class="messages messages-img">
                        <div class="item in">
                            <div class="image">
                                <img src="{{asset('backend/assets/images/users/user2.jpg')}}" alt="John Doe"/>
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
                                <img src="{{asset('backend/assets/images/users/user.jpg')}}" alt="Dmitry Ivaniuk"/>
                            </div>
                            <div class="text">
                                <div class="heading">
                                    <a href="#">Dmitry Ivaniuk</a>
                                    <span class="date">08:27</span>
                                </div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END INCOMING MESSAGES  -->

            </div>

            <div class="row">
                <!-- TAGS LIST -->
                <div class="col-md-4">
                    <div class="panel panel-default push-up-20">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tags List</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="list-tags">
                                <li><a href="#"><span class="fa fa-tag"></span> amet</a></li>
                                <li><a href="#"><span class="fa fa-tag"></span> rutrum</a></li>
                                <li><a href="#"><span class="fa fa-tag"></span> nunc</a></li>
                                <li><a href="#"><span class="fa fa-tag"></span> tempor</a></li>
                                <li><a href="#"><span class="fa fa-tag"></span> eros</a></li>
                                <li><a href="#"><span class="fa fa-tag"></span> suspendisse</a></li>
                                <li><a href="#"><span class="fa fa-tag"></span> dolor</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- END TAGS LIST -->
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
        <!-- END PAGE PLUGINS -->        
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
@endpush