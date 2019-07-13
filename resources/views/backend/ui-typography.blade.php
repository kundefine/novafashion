@extends('backend.layouts.backend-master')

@section('title', 'ui-typography')


@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Typography',
            'page_title_icon' => 'fa fa-arrow-right'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->



        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <!-- START TYPOGRAPHY -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <!-- START HEADING -->
                            <h1>Header 1 Lorem Ipsum Dolor</h1>
                            <h2>Header 2 Lorem Ipsum Dolor</h2>
                            <h3>Header 3 Lorem Ipsum Dolor</h3>
                            <h4>Header 4 Lorem Ipsum Dolor</h4>
                            <h5>Header 5 Lorem Ipsum Dolor</h5>
                            <h6>Header 6 Lorem Ipsum Dolor</h6>
                            <!-- EOF HEADING -->

                            <p>&nbsp;</p>

                            <h3>One Column</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at tellus sed mauris mollis pellentesque nec a ligula. Quisque ultricies eleifend lacinia. Nunc luctus quam pretium massa semper tincidunt. Praesent vel mollis eros. Fusce erat arcu, feugiat ac dignissim ac, aliquam sed urna. Maecenas scelerisque molestie justo, ut tempor nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse sed dapibus lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                            <p>Curabitur risus lectus, pharetra at mollis at, placerat at orci. Vestibulum tristique tortor quis sapien luctus accumsan. Cras hendrerit, eros vel posuere laoreet, augue arcu varius felis, at tristique mi lorem eu erat. Ut vel ante maximus, pellentesque nunc non, pretium diam. Praesent lacus ipsum, molestie a consequat vitae, tempor pellentesque dolor. Pellentesque eget felis dignissim ex tristique mollis. Integer lacinia vel augue nec feugiat.</p>

                            <h3>Two Column</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at tellus sed mauris mollis pellentesque nec a ligula. Quisque ultricies eleifend lacinia. Nunc luctus quam pretium massa semper tincidunt. Praesent vel mollis eros. Fusce erat arcu, feugiat ac dignissim ac, aliquam sed urna. Maecenas scelerisque molestie justo, ut tempor nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse sed dapibus lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                </div>
                                <div class="col-md-6">
                                    <p>Curabitur risus lectus, pharetra at mollis at, placerat at orci. Vestibulum tristique tortor quis sapien luctus accumsan. Cras hendrerit, eros vel posuere laoreet, augue arcu varius felis, at tristique mi lorem eu erat. Ut vel ante maximus, pellentesque nunc non, pretium diam. Praesent lacus ipsum, molestie a consequat vitae, tempor pellentesque dolor. Pellentesque eget felis dignissim ex tristique mollis. Integer lacinia vel augue nec feugiat.</p>
                                </div>
                            </div>

                            <h3>Three Column</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at tellus sed mauris mollis pellentesque nec a ligula. Quisque ultricies eleifend lacinia. Nunc luctus quam pretium massa semper tincidunt. Praesent vel mollis eros. Fusce erat arcu, feugiat ac dignissim ac, aliquam sed urna. Maecenas scelerisque molestie justo, ut tempor nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse sed dapibus lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                </div>
                                <div class="col-md-4">
                                    <p>Curabitur risus lectus, pharetra at mollis at, placerat at orci. Vestibulum tristique tortor quis sapien luctus accumsan. Cras hendrerit, eros vel posuere laoreet, augue arcu varius felis, at tristique mi lorem eu erat. Ut vel ante maximus, pellentesque nunc non, pretium diam. Praesent lacus ipsum, molestie a consequat vitae, tempor pellentesque dolor. Pellentesque eget felis dignissim ex tristique mollis. Integer lacinia vel augue nec feugiat.</p>
                                </div>
                                <div class="col-md-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at tellus sed mauris mollis pellentesque nec a ligula. Quisque ultricies eleifend lacinia. Nunc luctus quam pretium massa semper tincidunt. Praesent vel mollis eros. Fusce erat arcu, feugiat ac dignissim ac, aliquam sed urna. Maecenas scelerisque molestie justo, ut tempor nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse sed dapibus lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                </div>
                            </div>

                            <h3>Text Styles</h3>
                            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                            <p class="text-muted">Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                            <p class="text-primary">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
                            <p class="text-success">Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                            <p class="text-info">Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                            <p class="text-warning">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
                            <p class="text-danger">Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                            <p><a href="#">This is link example</a></p>

                            <h3>Blockquotes</h3>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            </blockquote>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                            <blockquote class="blockquote-reverse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                            <blockquote class="blockquote-success">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <!-- START TEXT ELEMENTS -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Inline text elements</h3>
                        </div>
                        <div class="panel-body">
                            <h6>Marked text</h6>
                            <p>You can use the mark tag to <mark>highlight</mark> text.</p>

                            <h6>Deleted text</h6>
                            <p><del>This line of text is meant to be treated as deleted text.</del></p>

                            <h6>Inserted text</h6>
                            <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>

                            <h6>Underlined text</h6>
                            <p><u>This line of text will render as underlined</u></p>

                            <h6>Small text</h6>
                            <p><small>This line of text is meant to be treated as fine print.</small></p>

                            <h6>Bold</h6>
                            <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>

                            <h6>Italics</h6>
                            <p>The following snippet of text is <em>rendered as italicized text</em>.</p>

                            <h6>Alignment classes</h6>
                            <p class="text-left">Left aligned text.</p>
                            <p class="text-center">Center aligned text.</p>
                            <p class="text-right">Right aligned text.</p>
                            <p class="text-justify">Justified text.</p>
                            <p class="text-nowrap">No wrap text.</p>

                            <h6>Transformation classes</h6>
                            <p class="text-lowercase">Lowercased text.</p>
                            <p class="text-uppercase">Uppercased text.</p>
                            <p class="text-capitalize">Capitalized text.</p>

                            <h6>Addresses</h6>
                            <address>
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>

                            <address>
                                <strong>Full Name</strong><br>
                                <a href="mailto:#">first.last@example.com</a>
                            </address>
                        </div>
                    </div>
                    <!-- END TEXT ELEMENTS -->
                </div>
                <div class="col-md-6">
                    <!-- START LIST -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Lists</h3>
                        </div>
                        <div class="panel-body">
                            <h6>Unordered</h6>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Nulla volutpat aliquam velit
                                    <ul>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                    </ul>
                                </li>
                                <li>Faucibus porta lacus fringilla vel</li>
                            </ul>

                            <h6>Ordered</h6>
                            <ol>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                                <li>Nulla volutpat aliquam velit</li>
                            </ol>

                            <h6>Unstyled</h6>
                            <ul class="list-unstyled">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                                <li>Nulla volutpat aliquam velit
                                    <ul>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                    </ul>
                                </li>
                                <li>Faucibus porta lacus fringilla vel</li>
                                <li>Aenean sit amet erat nunc</li>
                            </ul>
                        </div>
                    </div>
                    <!-- END LIST -->

                </div>
            </div>
            <!-- END TYPOGRAPHY -->

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





