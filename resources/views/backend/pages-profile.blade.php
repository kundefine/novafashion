<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Atlant - Responsive Bootstrap Admin Template</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="{{asset('backend/favicon.ico')}}" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="{{asset('backend/css/theme-default.css')}}"/>
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">ATLANT</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="{{asset('backend/assets/images/users/avatar.jpg')}}" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="{{asset('backend/assets/images/users/avatar.jpg')}}" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">John Doe</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="xn-title">Navigation</li>
                    <li>
                        <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                    <li class="xn-openable active">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Pages</span></a>
                        <ul>
                            <li><a href="pages-gallery.html"><span class="fa fa-image"></span> Gallery</a></li>
                            <li class="active"><a href="pages-profile.html"><span class="fa fa-user"></span> Profile</a></li>
                            <li><a href="pages-address-book.html"><span class="fa fa-users"></span> Address Book</a></li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-clock-o"></span> Timeline</a>
                                <ul>
                                    <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span> Default</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span> Full Width</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-envelope"></span> Mailbox</a>
                                <ul>
                                    <li><a href="pages-mailbox-inbox.html"><span class="fa fa-inbox"></span> Inbox</a></li>
                                    <li><a href="pages-mailbox-message.html"><span class="fa fa-file-text"></span> Message</a></li>
                                    <li><a href="pages-mailbox-compose.html"><span class="fa fa-pencil"></span> Compose</a></li>
                                </ul>
                            </li>
                            <li><a href="pages-messages.html"><span class="fa fa-comments"></span> Messages</a></li>
                            <li><a href="pages-calendar.html"><span class="fa fa-calendar"></span> Calendar</a></li>
                            <li><a href="pages-tasks.html"><span class="fa fa-edit"></span> Tasks</a></li>
                            <li><a href="pages-content-table.html"><span class="fa fa-columns"></span> Content Table</a></li>
                            <li><a href="pages-faq.html"><span class="fa fa-question-circle"></span> FAQ</a></li>
                            <li><a href="pages-search.html"><span class="fa fa-search"></span> Search</a></li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-file"></span> Blog</a>

                                <ul>
                                    <li><a href="pages-blog-list.html"><span class="fa fa-copy"></span> List of Posts</a></li>
                                    <li><a href="pages-blog-post.html"><span class="fa fa-file-o"></span>Single Post</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-sign-in"></span> Login</a>
                                <ul>
                                    <li><a href="pages-login.html">App Login</a></li>
                                    <li><a href="pages-login-website.html">Website Login</a></li>
                                    <li><a href="pages-login-website-light.html"> Website Login Light</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-warning"></span> Error Pages</a>
                                <ul>
                                    <li><a href="pages-error-404.html">Error 404 Sample 1</a></li>
                                    <li><a href="pages-error-404-2.html">Error 404 Sample 2</a></li>
                                    <li><a href="pages-error-500.html"> Error 500</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Layouts</span></a>
                        <ul>
                            <li><a href="layout-boxed.html">Boxed</a></li>
                            <li><a href="layout-nav-toggled.html">Navigation Toggled</a></li>
                            <li><a href="layout-nav-top.html">Navigation Top</a></li>
                            <li><a href="layout-nav-right.html">Navigation Right</a></li>
                            <li><a href="layout-nav-top-fixed.html">Top Navigation Fixed</a></li>
                            <li><a href="layout-nav-custom.html">Custom Navigation</a></li>
                            <li><a href="layout-frame-left.html">Frame Left Column</a></li>
                            <li><a href="layout-frame-right.html">Frame Right Column</a></li>
                            <li><a href="layout-search-left.html">Search Left Side</a></li>
                            <li><a href="blank.html">Blank Page</a></li>
                        </ul>
                    </li>
                    <li class="xn-title">Components</li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">UI Kits</span></a>
                        <ul>
                            <li><a href="ui-widgets.html"><span class="fa fa-heart"></span> Widgets</a></li>
                            <li><a href="ui-elements.html"><span class="fa fa-cogs"></span> Elements</a></li>
                            <li><a href="ui-buttons.html"><span class="fa fa-square-o"></span> Buttons</a></li>
                            <li><a href="ui-panels.html"><span class="fa fa-pencil-square-o"></span> Panels</a></li>
                            <li><a href="ui-icons.html"><span class="fa fa-magic"></span> Icons</a><div class="informer informer-warning">+679</div></li>
                            <li><a href="ui-typography.html"><span class="fa fa-pencil"></span> Typography</a></li>
                            <li><a href="ui-portlet.html"><span class="fa fa-th"></span> Portlet</a></li>
                            <li><a href="ui-sliders.html"><span class="fa fa-arrows-h"></span> Sliders</a></li>
                            <li><a href="ui-alerts-popups.html"><span class="fa fa-warning"></span> Alerts & Popups</a></li>
                            <li><a href="ui-lists.html"><span class="fa fa-list-ul"></span> Lists</a></li>
                            <li><a href="ui-tour.html"><span class="fa fa-random"></span> Tour</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Forms</span></a>
                        <ul>
                            <li>
                                <a href="form-layouts-two-column.html"><span class="fa fa-tasks"></span> Form Layouts</a>
                                <div class="informer informer-danger">New</div>
                                <ul>
                                    <li><a href="form-layouts-one-column.html"><span class="fa fa-align-justify"></span> One Column</a></li>
                                    <li><a href="form-layouts-two-column.html"><span class="fa fa-th-large"></span> Two Column</a></li>
                                    <li><a href="form-layouts-tabbed.html"><span class="fa fa-table"></span> Tabbed</a></li>
                                    <li><a href="form-layouts-separated.html"><span class="fa fa-th-list"></span> Separated Rows</a></li>
                                </ul>
                            </li>
                            <li><a href="form-elements.html"><span class="fa fa-file-text-o"></span> Elements</a></li>
                            <li><a href="form-validation.html"><span class="fa fa-list-alt"></span> Validation</a></li>
                            <li><a href="form-wizards.html"><span class="fa fa-arrow-right"></span> Wizards</a></li>
                            <li><a href="form-editors.html"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
                            <li><a href="form-file-handling.html"><span class="fa fa-floppy-o"></span> File Handling</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
                        <ul>
                            <li><a href="table-basic.html"><span class="fa fa-align-justify"></span> Basic</a></li>
                            <li><a href="table-datatables.html"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>
                            <li><a href="table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
                        <ul>
                            <li><a href="charts-morris.html"><span class="xn-text">Morris</span></a></li>
                            <li><a href="charts-nvd3.html"><span class="xn-text">NVD3</span></a></li>
                            <li><a href="charts-rickshaw.html"><span class="xn-text">Rickshaw</span></a></li>
                            <li><a href="charts-other.html"><span class="xn-text">Other</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="maps.html"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Navigation Levels</span></a>
                        <ul>
                            <li class="xn-openable">
                                <a href="#">Second Level</a>
                                <ul>
                                    <li class="xn-openable">
                                        <a href="#">Third Level</a>
                                        <ul>
                                            <li class="xn-openable">
                                                <a href="#">Fourth Level</a>
                                                <ul>
                                                    <li><a href="#">Fifth Level</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                    </li>
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="{{asset('backend/assets/images/users/user2.jpg')}}" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="{{asset('backend/assets/images/users/user.jpg')}}" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="{{asset('backend/assets/images/users/user3.jpg')}}" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="{{asset('backend/assets/images/users/user6.jpg')}}" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>
                        </div>
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>
                        </div>
                    </li>
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Profile</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-3">

                            <div class="panel panel-default">
                                <div class="panel-body profile" style="background: url('assets/images/gallery/music-4.jpg') center center no-repeat;">
                                    <div class="profile-image">
                                        <img src="{{asset('backend/assets/images/users/user3.jpg')}}" alt="Nadia Ali"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Nadia Ali</div>
                                        <div class="profile-data-title" style="color: #FFF;">Singer-Songwriter</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="#" class="profile-control-left twitter"><span class="fa fa-twitter"></span></a>
                                        <a href="#" class="profile-control-right facebook"><span class="fa fa-facebook"></span></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn btn-info btn-rounded btn-block"><span class="fa fa-check"></span> Following</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-primary btn-rounded btn-block"><span class="fa fa-comments"></span> Chat</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body list-group border-bottom">
                                    <a href="#" class="list-group-item active"><span class="fa fa-bar-chart-o"></span> Activity</a>
                                    <a href="#" class="list-group-item"><span class="fa fa-coffee"></span> Groups <span class="badge badge-default">18</span></a>
                                    <a href="#" class="list-group-item"><span class="fa fa-users"></span> Friends <span class="badge badge-danger">+7</span></a>
                                    <a href="#" class="list-group-item"><span class="fa fa-folder"></span> Apps</a>
                                    <a href="#" class="list-group-item"><span class="fa fa-cog"></span> Settings</a>
                                </div>
                                <div class="panel-body">
                                    <h4 class="text-title">Friends</h4>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">
                                            <a href="#" class="friend">
                                                <img src="{{asset('backend/assets/images/users/user.jpg')}}"/>
                                                <span>Dmitry Ivaniuk</span>
                                            </a>
                                        </div>
                                        <div class="col-md-4 col-xs-4">
                                            <a href="#" class="friend">
                                                <img src="{{asset('backend/assets/images/users/user2.jpg')}}"/>
                                                <span>John Doe</span>
                                            </a>
                                        </div>
                                        <div class="col-md-4 col-xs-4">
                                            <a href="#" class="friend">
                                                <img src="{{asset('backend/assets/images/users/user4.jpg')}}"/>
                                                <span>Brad Pit</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">
                                            <a href="#" class="friend">
                                                <img src="{{asset('backend/assets/images/users/user5.jpg')}}"/>
                                                <span>John Travolta</span>
                                            </a>
                                        </div>
                                        <div class="col-md-4 col-xs-4">
                                            <a href="#" class="friend">
                                                <img src="{{asset('backend/assets/images/users/user6.jpg')}}"/>
                                                <span>Darth Vader</span>
                                            </a>
                                        </div>
                                        <div class="col-md-4 col-xs-4">
                                            <a href="#" class="friend">
                                                <img src="{{asset('backend/assets/images/users/user7.jpg')}}"/>
                                                <span>Samuel Leroy Jackson</span>
                                            </a>
                                        </div>
                                    </div>

                                    <h4 class="text-title">Photos</h4>
                                    <div class="gallery" id="links">
                                        <a href="assets/images/gallery/music-1.jpg" title="Music Image 1" class="gallery-item" data-gallery>
                                            <div class="image">
                                                <img src="{{asset('backend/assets/images/gallery/music-1.jpg')}}" alt="Music Image 1"/>
                                            </div>
                                        </a>
                                        <a href="assets/images/gallery/music-2.jpg" title="Music Image 2" class="gallery-item" data-gallery>
                                            <div class="image">
                                                <img src="{{asset('backend/assets/images/gallery/music-2.jpg')}}" alt="Music Image 2"/>
                                            </div>
                                        </a>
                                        <a href="assets/images/gallery/music-3.jpg" title="Music Image 3" class="gallery-item" data-gallery>
                                            <div class="image">
                                                <img src="{{asset('backend/assets/images/gallery/music-3.jpg')}}" alt="Music Image 3"/>
                                            </div>
                                        </a>
                                        <a href="assets/images/gallery/nature-1.jpg" title="Nature Image 1" class="gallery-item" data-gallery>
                                            <div class="image">
                                                <img src="{{asset('backend/assets/images/gallery/nature-1.jpg')}}" alt="Nature Image 1"/>
                                            </div>
                                        </a>
                                        <a href="assets/images/gallery/nature-2.jpg" title="Nature Image 2" class="gallery-item" data-gallery>
                                            <div class="image">
                                                <img src="{{asset('backend/assets/images/gallery/nature-2.jpg')}}" alt="Nature Image 2"/>
                                            </div>
                                        </a>
                                        <a href="assets/images/gallery/nature-3.jpg" title="Nature Image 3" class="gallery-item" data-gallery>
                                            <div class="image">
                                                <img src="{{asset('backend/assets/images/gallery/nature-3.jpg')}}" alt="Nature Image 3"/>
                                            </div>
                                        </a>
                                        <a href="assets/images/gallery/nature-4.jpg" title="Nature Image 4" class="gallery-item" data-gallery>
                                            <div class="image">
                                                <img src="{{asset('backend/assets/images/gallery/nature-4.jpg')}}" alt="Nature Image 4"/>
                                            </div>
                                        </a>
                                        <a href="assets/images/gallery/nature-5.jpg" title="Nature Image 5" class="gallery-item" data-gallery>
                                            <div class="image">
                                                <img src="{{asset('backend/assets/images/gallery/nature-5.jpg')}}" alt="Nature Image 5"/>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-9">

                            <!-- START TIMELINE -->
                            <div class="timeline timeline-right">

                                <!-- START TIMELINE ITEM -->
                                <div class="timeline-item timeline-main">
                                    <div class="timeline-date">Today</div>
                                </div>
                                <!-- END TIMELINE ITEM -->

                                <!-- START TIMELINE ITEM -->
                                <div class="timeline-item timeline-item-right">
                                    <div class="timeline-item-info">21:37</div>
                                    <div class="timeline-item-icon"><span class="fa fa-users"></span></div>
                                    <div class="timeline-item-content">
                                        <div class="timeline-heading" style="padding-bottom: 10px;">
                                            <img src="{{asset('backend/assets/images/users/user3.jpg')}}"/>
                                            <a href="#">Nadia Ali</a> added to friends
                                            <img src="{{asset('backend/assets/images/users/user.jpg')}}"/>
                                            <img src="{{asset('backend/assets/images/users/user2.jpg')}}"/>
                                            <img src="{{asset('backend/assets/images/users/user4.jpg')}}"/>
                                        </div>
                                        <div class="timeline-body comments">
                                            <div class="comment-item">
                                                <img src="{{asset('backend/assets/images/users/user.jpg')}}"/>
                                                <p class="comment-head">
                                                    <a href="#">Dmitry Ivaniuk</a> <span class="text-muted">@Aqvatarius</span>
                                                </p>
                                                <p>Thank you so much... I would like to meet you :)</p>
                                                <small class="text-muted">15min ago</small>
                                            </div>
                                            <div class="comment-item">
                                                <img src="{{asset('backend/assets/images/users/user3.jpg')}}"/>
                                                <p class="comment-head">
                                                    <a href="#">Nadia Ali</a> <span class="text-muted">@nadiaAli</span>
                                                </p>
                                                <p>Sure, i will contact you ;)</p>
                                                <small class="text-muted">16min ago</small>
                                            </div>
                                            <div class="comment-write">
                                                <textarea class="form-control" placeholder="Write a comment" rows="1"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END TIMELINE ITEM -->

                                <!-- START TIMELINE ITEM -->
                                <div class="timeline-item timeline-item-right">
                                    <div class="timeline-item-info">20:23</div>
                                    <div class="timeline-item-icon"><span class="fa fa-reply"></span></div>
                                    <div class="timeline-item-content">
                                        <div class="timeline-heading padding-bottom-0">
                                            <img src="{{asset('backend/assets/images/users/user2.jpg')}}"/> <a href="#">John Doe</a> posted article <a href="#">How to...?</a>
                                        </div>
                                        <div class="timeline-body">
                                            <img src="{{asset('backend/assets/images/gallery/nature-6.jpg')}}" width="200" class="img-text" align="left"/>
                                            <h4>Lorem ipsum dolor</h4>
                                            <p>Aenean ultricies condimentum pellentesque. Maecenas pulvinar arcu vel tortor aliquet commodo. Phasellus dapibus nisl quis nunc pharetra, id lobortis arcu sagittis. Nunc facilisis nibh non diam dictum, vitae iaculis tellus egestas. Curabitur vitae dui tempus, tempus metus vitae, cursus nunc. In cursus odio vitae metus commodo, in posuere ante varius.</p>
                                            <p>Mauris sodales faucibus est, eu consequat dolor tristique in. Quisque at lacus sed ligula semper iaculis. In eu imperdiet ipsum. Ut vestibulum ornare venenatis.</p>
                                            <ul class="list-tags push-up-10">
                                                <li><a href="#"><strong>#</strong>tempor</a></li>
                                                <li><a href="#"><strong>#</strong>eros</a></li>
                                                <li><a href="#"><strong>#</strong>suspendisse</a></li>
                                                <li><a href="#"><strong>#</strong>dolor</a></li>
                                            </ul>
                                        </div>
                                        <div class="timeline-footer">
                                            <a href="#">Details</a>
                                            <div class="pull-right">
                                                <a href="#"><span class="fa fa-comments"></span> 35</a>
                                                <a href="#"><span class="fa fa-eye"></span> 1,432</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END TIMELINE ITEM -->

                                <!-- START TIMELINE ITEM -->
                                <div class="timeline-item timeline-main">
                                    <div class="timeline-date">Yesterday</div>
                                </div>
                                <!-- END TIMELINE ITEM -->

                                <!-- START TIMELINE ITEM -->
                                <div class="timeline-item timeline-item-right">
                                    <div class="timeline-item-info">20:23</div>
                                    <div class="timeline-item-icon"><span class="fa fa-info-circle"></span></div>
                                    <div class="timeline-item-content">
                                        <div class="timeline-heading padding-bottom-0">
                                            <img src="{{asset('backend/assets/images/users/user3.jpg')}}"/> <a href="#">Nadia Ali</a> changed status to:
                                        </div>
                                        <div class="timeline-body">
                                            <i>Peace Will Come, This World Will Rest, Once We Have Togetherness</i>
                                        </div>
                                    </div>
                                </div>
                                <!-- END TIMELINE ITEM -->

                                <!-- START TIMELINE ITEM -->
                                <div class="timeline-item timeline-item-right">
                                    <div class="timeline-item-info">18:34</div>
                                    <div class="timeline-item-icon"><span class="fa fa-photo"></span></div>
                                    <div class="timeline-item-content">
                                        <div class="timeline-heading">
                                            <img src="{{asset('backend/assets/images/users/user3.jpg')}}"/> <a href="#">Nadia Ali</a> added images to gallery
                                        </div>
                                        <div class="timeline-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a href="#">
                                                        <img src="{{asset('backend/assets/images/gallery/music-2.jpg')}}" class="img-responsive img-text"/>
                                                    </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="#">
                                                        <img src="{{asset('backend/assets/images/gallery/music-3.jpg')}}" class="img-responsive img-text"/>
                                                    </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="#">
                                                        <img src="{{asset('backend/assets/images/gallery/space-1.jpg')}}" class="img-responsive img-text"/>
                                                    </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="#">
                                                        <img src="{{asset('backend/assets/images/gallery/space-2.jpg')}}" class="img-responsive img-text"/>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="list-tags push-up-10">
                                                <li><a href="#"><strong>#</strong>tempor</a></li>
                                                <li><a href="#"><strong>#</strong>eros</a></li>
                                                <li><a href="#"><strong>#</strong>suspendisse</a></li>
                                                <li><a href="#"><strong>#</strong>dolor</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- END TIMELINE ITEM -->

                                <!-- START TIMELINE ITEM -->
                                <div class="timeline-item timeline-item-right">
                                    <div class="timeline-item-info">15:21</div>
                                    <div class="timeline-item-icon"><span class="fa fa-users"></span></div>
                                    <div class="timeline-item-content">
                                        <div class="timeline-heading" style="padding-bottom: 10px;">
                                            <img src="{{asset('backend/assets/images/users/user3.jpg')}}"/>
                                            <a href="#">Nadia Ali</a> added to friends
                                            <img src="{{asset('backend/assets/images/users/user5.jpg')}}"/>
                                            <img src="{{asset('backend/assets/images/users/user6.jpg')}}"/>
                                            <img src="{{asset('backend/assets/images/users/user7.jpg')}}"/>
                                        </div>
                                        <div class="timeline-body comments">
                                            <div class="comment-item">
                                                <img src="{{asset('backend/assets/images/users/user6.jpg')}}"/>
                                                <p class="comment-head">
                                                    <a href="#">Darth Vader</a> <span class="text-muted">@darthvader</span>
                                                </p>
                                                <p>Hello, honey!</p>
                                                <small class="text-muted">15min ago</small>
                                            </div>
                                            <div class="comment-write">
                                                <textarea class="form-control" placeholder="Write a comment" rows="1"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END TIMELINE ITEM -->


                                <!-- START TIMELINE ITEM -->
                                <div class="timeline-item timeline-main">
                                    <div class="timeline-date"><a href="#"><span class="fa fa-ellipsis-h"></span></a></div>
                                </div>
                                <!-- END TIMELINE ITEM -->
                            </div>
                            <!-- END TIMELINE -->

                        </div>

                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- BLUEIMP GALLERY -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
        <!-- END BLUEIMP GALLERY -->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="{{asset('backend/audio/alert.mp3')}}" preload="auto"></audio>
        <audio id="audio-fail" src="{{asset('backend/audio/fail.mp3')}}" preload="auto"></audio>
        <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{asset('backend/js/plugins/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/bootstrap/bootstrap.min.js')}}"></script>
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="{{asset('backend/js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins/blueimp/jquery.blueimp-gallery.min.js')}}"></script>        
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>        
        <!-- END TEMPLATE -->

        <script>            
            document.getElementById('links').onclick = function (event) {
                event = event || window.event;
                var target = event.target || event.srcElement,
                    link = target.src ? target.parentNode : target,
                    options = {index: link, event: event,onclosed: function(){
                        setTimeout(function(){
                            $("body").css("overflow","");
                        },200);                        
                    }},
                    links = this.getElementsByTagName('a');
                blueimp.Gallery(links, options);
            };
        </script>        
        
    <!-- END SCRIPTS -->
    </body>
</html>






