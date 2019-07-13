@extends('backend.layouts.backend-master')

@section('title', 'pages-blog-list')


@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Posts',
            'page_title_icon' => 'fa fa-arrow-circle-o-left'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-9">

                    <div class="panel panel-default">
                        <div class="panel-body posts">

                            <div class="row">
                                <div class="col-md-6">

                                    <div class="post-item">
                                        <div class="post-title">
                                            <a href="pages-blog-post.html">Outer space</a>
                                        </div>
                                        <div class="post-date"><span class="fa fa-calendar"></span> October 23, 2014 / <a href="pages-blog-post.html#comments">3 Comments</a> / <a href="pages-profile.html">by Dmitry Ivaniuk</a></div>
                                        <div class="post-text">
                                            <img src="{{asset('backend/assets/images/blog/post_1.jpg')}}" class="img-responsive img-text"/>
                                            <p>Outer space, or simply space, is the void that exists between celestial bodies, including the Earth. It is not completely empty, but consists of a hard vacuum containing a low density of particles: predominantly a plasma of hydrogen and helium.</p>
                                        </div>
                                        <div class="post-row">
                                            <div class="post-info">
                                                <span class="fa fa-thumbs-up"></span> 15 - <span class="fa fa-eye"></span> 15,332 - <span class="fa fa-star"></span> 322
                                            </div>
                                            <button class="btn btn-default btn-rounded pull-right">Read more &RightArrow;</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="post-item">
                                        <div class="post-title">
                                            <a href="pages-blog-post.html">Nature</a>
                                        </div>
                                        <div class="post-date"><span class="fa fa-calendar"></span> October 22, 2014 / <a href="pages-blog-post.html#comments">5 Comments</a> / <a href="pages-profile.html">by Dmitry Ivaniuk</a></div>
                                        <div class="post-text">
                                            <div class="post-video">
                                                <iframe width="560" height="315" src="www.youtube.com/embed/kguSGXP3-_E" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <p>Nature, in the broadest sense, is equivalent to the natural, physical, or material world or universe. "Nature" refers to the phenomena of the physical world, and also to life in general. It ranges in scale from the subatomic to the cosmic.</p>
                                        </div>
                                        <div class="post-row">
                                            <div class="post-info">
                                                <span class="fa fa-thumbs-up"></span> 15 - <span class="fa fa-eye"></span> 15,332 - <span class="fa fa-star"></span> 322
                                            </div>
                                            <button class="btn btn-default btn-rounded pull-right">Read more &RightArrow;</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="post-item">
                                        <div class="post-title">
                                            <a href="pages-blog-post.html">Womans</a>
                                        </div>
                                        <div class="post-date"><span class="fa fa-calendar"></span> October 21, 2014 / <a href="pages-blog-post.html#comments">3 Comments</a> / <a href="pages-profile.html">by Dmitry Ivaniuk</a></div>
                                        <div class="post-text">
                                            <img src="{{asset('backend/assets/images/blog/post_2.jpg')}}" class="img-responsive img-text"/>
                                            <p>A woman is a female human. The term woman is usually reserved for an adult, with the term girl being the usual term for a female child or adolescent. However, the term woman is also sometimes used to identify a female human.</p>
                                        </div>
                                        <div class="post-row">
                                            <div class="post-info">
                                                <span class="fa fa-thumbs-up"></span> 15 - <span class="fa fa-eye"></span> 15,332 - <span class="fa fa-star"></span> 322
                                            </div>
                                            <button class="btn btn-default btn-rounded pull-right">Read more &RightArrow;</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="post-item">
                                        <div class="post-title">
                                            <a href="pages-blog-post.html">History</a>
                                        </div>
                                        <div class="post-date"><span class="fa fa-calendar"></span> October 20, 2014 / <a href="pages-blog-post.html#comments">5 Comments</a> / <a href="pages-profile.html">by Dmitry Ivaniuk</a></div>
                                        <div class="post-text">
                                            <p>History (from Greek ἱστορία, historia, meaning "inquiry, knowledge acquired by investigation") is the study of the past, specifically how it relates to humans. It is an umbrella term that relates to past events as well as the memory, discovery, collection, organization, presentation, and interpretation of information about these events.</p>
                                            <ol>
                                                <li>Demographic history</li>
                                                <li>Black history</li>
                                                <li>History of education</li>
                                                <li>Ethnic history</li>
                                                <li>Family history</li>
                                                <li>Labor history</li>
                                                <li>Rural history</li>
                                                <li>Urban history</li>
                                            </ol>
                                            <p>Stories common to a particular culture, but not supported by external sources (such as the tales surrounding King Arthur) are usually classified as cultural heritage or legends, because they do not support the "disinterested investigation" required of the discipline of history.[10][11] Herodotus, a 5th-century BC Greek historian is considered within the Western tradition to be the "father of history", and, along with his contemporary Thucydides, helped form the foundations for the modern study of human history.</p>
                                        </div>
                                        <div class="post-row">
                                            <div class="post-info">
                                                <span class="fa fa-thumbs-up"></span> 15 - <span class="fa fa-eye"></span> 15,332 - <span class="fa fa-star"></span> 322
                                            </div>
                                            <button class="btn btn-default btn-rounded pull-right">Read more &RightArrow;</button>
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>

                    <ul class="pagination pagination-sm pull-right push-down-20">
                        <li class="disabled"><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">»</a></li>
                    </ul>

                </div>
                <div class="col-md-3">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Categories</h3>
                            <div class="links">
                                <a href="#">Front-end <span class="label label-default">195</span></a>
                                <a href="#">Back-end <span class="label label-default">278</span></a>
                                <a href="#">Frameworks <span class="label label-default">48</span></a>
                                <a href="#">Programming <span class="label label-default">311</span></a>
                                <a href="#">Management <span class="label label-default">94</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Recent</h3>
                            <div class="links small">
                                <a href="#">Vestibulum porttitor neque vitae odio vulputate molestie</a>
                                <a href="#">Etiam tellus mi, interdum id nulla in</a>
                                <a href="#">Cras eu tincidunt quam</a>
                                <a href="#">Donec rhoncus quam tortor, id pulvinar erat elementum eu</a>
                                <a href="#">Nunc lorem est, suscipit bibendum</a>
                                <a href="#">Fusce sollicitudin quis turpis eget mollis</a>
                                <a href="#">Cras eget sagittis dui, et mollis tortor</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Tags</h3>
                            <ul class="list-tags push-up-10">
                                <li><a href="#"><span class="fa fa-tag"></span> Donec</a></li>
                                <li><a href="#"><span class="fa fa-tag"></span> Bibendum</a></li>
                                <li><a href="#"><span class="fa fa-tag"></span> Praesent</a></li>
                                <li><a href="#"><span class="fa fa-tag"></span> Fusce</a></li>
                                <li><a href="#"><span class="fa fa-tag"></span> Nam quis</a></li>
                                <li><a href="#"><span class="fa fa-tag"></span> Maecenas</a></li>
                                <li><a href="#"><span class="fa fa-tag"></span> Nulla facilisi</a></li>
                                <li><a href="#"><span class="fa fa-tag"></span> Donec</a></li>
                                <li><a href="#"><span class="fa fa-tag"></span> Nam vitae</a></li>
                                <li><a href="#"><span class="fa fa-tag"></span> Malesuada</a></li>
                            </ul>
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





