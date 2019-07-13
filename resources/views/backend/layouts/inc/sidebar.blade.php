<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="/admin">{{config('app.name')}}</a>
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
                    <a href="/admin/pages-profile" class="profile-control-left"><span class="fa fa-info"></span></a>
                    <a href="/admin/pages-messages" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                </div>
            </div>
        </li>
        <li class="xn-title">Navigation</li>
        <li class="">
            <a href="/admin"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
        </li>
        {{-- Left Menu:- Media --}}
        <li class="xn-openable">
            <a href="#"><span class="fa fa-film"></span> <span class="xn-text">Media</span></a>
            <ul>
                <li><a href="/admin/media"><span class="fa fa-image"></span> Add New Media</a></li>
            </ul>
        </li>













        <li class="xn-openable">
            <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Pages</span></a>
            <ul>
                <li><a href="/admin/pages-gallery"><span class="fa fa-image"></span> Gallery</a></li>
                <li><a href="/admin/pages-profile"><span class="fa fa-user"></span> Profile</a></li>
                <li><a href="/admin/pages-address-book"><span class="fa fa-users"></span> Address Book</a></li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-clock-o"></span> Timeline</a>
                    <ul>
                        <li><a href="/admin/pages-timeline"><span class="fa fa-align-center"></span> Default</a></li>
                        <li><a href="/admin/pages-timeline-simple"><span class="fa fa-align-justify"></span> Full Width</a></li>
                    </ul>
                </li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-envelope"></span> Mailbox</a>
                    <ul>
                        <li><a href="/admin/pages-mailbox-inbox"><span class="fa fa-inbox"></span> Inbox</a></li>
                        <li><a href="/admin/pages-mailbox-message"><span class="fa fa-file-text"></span> Message</a></li>
                        <li><a href="/admin/pages-mailbox-compose"><span class="fa fa-pencil"></span> Compose</a></li>
                    </ul>
                </li>
                <li><a href="/admin/pages-messages"><span class="fa fa-comments"></span> Messages</a></li>
                <li><a href="/admin/pages-calendar"><span class="fa fa-calendar"></span> Calendar</a></li>
                <li><a href="/admin/pages-tasks"><span class="fa fa-edit"></span> Tasks</a></li>
                <li><a href="/admin/pages-content-table"><span class="fa fa-columns"></span> Content Table</a></li>
                <li><a href="/admin/pages-faq"><span class="fa fa-question-circle"></span> FAQ</a></li>
                <li><a href="/admin/pages-search"><span class="fa fa-search"></span> Search</a></li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-file"></span> Blog</a>

                    <ul>
                        <li><a href="/admin/pages-blog-list"><span class="fa fa-copy"></span> List of Posts</a></li>
                        <li><a href="/admin/pages-blog-post"><span class="fa fa-file-o"></span>Single Post</a></li>
                    </ul>
                </li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-sign-in"></span> Login</a>
                    <ul>
                        <li><a href="/admin/pages-login">App Login</a></li>
                        <li><a href="/admin/pages-login-website">Website Login</a></li>
                        <li><a href="/admin/pages-login-website-light"> Website Login Light</a></li>
                    </ul>
                </li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-warning"></span> Error Pages</a>
                    <ul>
                        <li><a href="/admin/pages-error-404">Error 404 Sample 1</a></li>
                        <li><a href="/admin/pages-error-404-2">Error 404 Sample 2</a></li>
                        <li><a href="/admin/pages-error-500"> Error 500</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="xn-openable">
            <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Layouts</span></a>
            <ul>
                <li><a href="/admin/layout-boxed">Boxed</a></li>
                <li><a href="/admin/layout-nav-toggled">Navigation Toggled</a></li>
                <li><a href="/admin/layout-nav-top">Navigation Top</a></li>
                <li><a href="/admin/layout-nav-right">Navigation Right</a></li>
                <li><a href="/admin/layout-nav-top-fixed">Top Navigation Fixed</a></li>
                <li><a href="/admin/layout-nav-custom">Custom Navigation</a></li>
                <li><a href="/admin/layout-frame-left">Frame Left Column</a></li>
                <li><a href="/admin/layout-frame-right">Frame Right Column</a></li>
                <li><a href="/admin/layout-search-left">Search Left Side</a></li>
                <li><a href="/admin/blank">Blank Page</a></li>
            </ul>
        </li>
        <li class="xn-title">Components</li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">UI Kits</span></a>
            <ul>
                <li><a href="/admin/ui-widgets"><span class="fa fa-heart"></span> Widgets</a></li>
                <li><a href="/admin/ui-elements"><span class="fa fa-cogs"></span> Elements</a></li>
                <li><a href="/admin/ui-buttons"><span class="fa fa-square-o"></span> Buttons</a></li>
                <li><a href="/admin/ui-panels"><span class="fa fa-pencil-square-o"></span> Panels</a></li>
                <li><a href="/admin/ui-icons"><span class="fa fa-magic"></span> Icons</a><div class="informer informer-warning">+679</div></li>
                <li><a href="/admin/ui-typography"><span class="fa fa-pencil"></span> Typography</a></li>
                <li><a href="/admin/ui-portlet"><span class="fa fa-th"></span> Portlet</a></li>
                <li><a href="/admin/ui-sliders"><span class="fa fa-arrows-h"></span> Sliders</a></li>
                <li><a href="/admin/ui-alerts-popups"><span class="fa fa-warning"></span> Alerts & Popups</a></li>
                <li><a href="/admin/ui-lists"><span class="fa fa-list-ul"></span> Lists</a></li>
                <li><a href="/admin/ui-tour"><span class="fa fa-random"></span> Tour</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Forms</span></a>
            <ul>
                <li>
                    <a href="/admin/form-layouts-two-column"><span class="fa fa-tasks"></span> Form Layouts</a>
                    <div class="informer informer-danger">New</div>
                    <ul>
                        <li><a href="/admin/form-layouts-one-column"><span class="fa fa-align-justify"></span> One Column</a></li>
                        <li><a href="/admin/form-layouts-two-column"><span class="fa fa-th-large"></span> Two Column</a></li>
                        <li><a href="/admin/form-layouts-tabbed"><span class="fa fa-table"></span> Tabbed</a></li>
                        <li><a href="/admin/form-layouts-separated"><span class="fa fa-th-list"></span> Separated Rows</a></li>
                    </ul>
                </li>
                <li><a href="/admin/form-elements"><span class="fa fa-file-text-o"></span> Elements</a></li>
                <li><a href="/admin/form-validation"><span class="fa fa-list-alt"></span> Validation</a></li>
                <li><a href="/admin/form-wizards"><span class="fa fa-arrow-right"></span> Wizards</a></li>
                <li><a href="/admin/form-editors"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
                <li><a href="/admin/form-file-handling"><span class="fa fa-floppy-o"></span> File Handling</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="/admin/tables"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
            <ul>
                <li><a href="/admin/table-basic"><span class="fa fa-align-justify"></span> Basic</a></li>
                <li><a href="/admin/table-datatables"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>
                <li><a href="/admin/table-export"><span class="fa fa-download"></span> Export Tables</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
            <ul>
                <li><a href="/admin/charts-morris"><span class="xn-text">Morris</span></a></li>
                <li><a href="/admin/charts-nvd3"><span class="xn-text">NVD3</span></a></li>
                <li><a href="/admin/charts-rickshaw"><span class="xn-text">Rickshaw</span></a></li>
                <li><a href="/admin/charts-other"><span class="xn-text">Other</span></a></li>
            </ul>
        </li>
        <li>
            <a href="/admin/maps"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
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