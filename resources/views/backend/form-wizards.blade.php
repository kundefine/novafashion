@extends('backend.layouts.backend-master')

@section('title', 'form-wizards')


@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Form Wizards',
            'page_title_icon' => 'fa fa-arrow-circle-o-left'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->


        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-12">

                    <!-- START DEFAULT WIZARD -->
                    <div class="block">
                        <h4>Default Wizard</h4>
                        <div class="wizard">

                            <ul>
                                <li>
                                    <a href="#step-1">
                                        <span class="stepNumber">1</span>
                                        <span class="stepDesc">Step 1<br /><small>Step 1 description</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-2">
                                        <span class="stepNumber">2</span>
                                        <span class="stepDesc">Step 2<br /><small>Step 2 description</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-3">
                                        <span class="stepNumber">3</span>
                                        <span class="stepDesc">Step 3<br /><small>Step 3 description</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-4">
                                        <span class="stepNumber">4</span>
                                        <span class="stepDesc">Step 4<br /><small>Step 4 description</small></span>
                                    </a>
                                </li>
                            </ul>
                            <div id="step-1">
                                <h4>Step 1 Content</h4>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                            <div id="step-2">
                                <h4>Step 2 Content</h4>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                            <div id="step-3">
                                <h4>Step 3 Content</h4>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                            <div id="step-4">
                                <h4>Step 4 Content</h4>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>

                        </div>
                    </div>
                    <!-- END DEFAULT WIZARD -->

                    <!-- START WIZARD WITH SUBMIT BUTTON -->
                    <div class="block">
                        <h4>Wizard With Submit</h4>
                        <form action="javascript:alert('Submited!');" role="form" class="form-horizontal">
                            <div class="wizard show-submit">
                                <ul>
                                    <li>
                                        <a href="#step-5">
                                            <span class="stepNumber">1</span>
                                            <span class="stepDesc">User<br /><small>Personal data</small></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-6">
                                            <span class="stepNumber">2</span>
                                            <span class="stepDesc">Contact<br /><small>Information</small></span>
                                        </a>
                                    </li>
                                </ul>
                                <div id="step-5">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" placeholder="Your name"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">About</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5" placeholder="Something about you"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div id="step-6">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Phone</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" placeholder="Your phone number"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">E-mail</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" placeholder="Your email"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Adress</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" placeholder="City"/>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" placeholder="Street"/>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END WIZARD WITH SUBMIT BUTTON -->

                    <!-- START WIZARD WITH VALIDATION -->
                    <div class="block">
                        <h4>Wizard with form validation</h4>
                        <form action="javascript:alert('Validated!');" role="form" class="form-horizontal" id="wizard-validation">
                            <div class="wizard show-submit wizard-validation">
                                <ul>
                                    <li>
                                        <a href="#step-7">
                                            <span class="stepNumber">1</span>
                                            <span class="stepDesc">Login<br /><small>Information</small></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-8">
                                            <span class="stepNumber">2</span>
                                            <span class="stepDesc">User<br /><small>Personal data</small></span>
                                        </a>
                                    </li>
                                </ul>

                                <div id="step-7">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Login</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="login" placeholder="Login"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Password</label>
                                        <div class="col-md-10">
                                            <input type="password" class="form-control" name="password" placeholder="Password" id="password"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Re-Password</label>
                                        <div class="col-md-10">
                                            <input type="password" class="form-control" name="repassword" placeholder="Re-Password"/>
                                        </div>
                                    </div>

                                </div>

                                <div id="step-8">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="name" placeholder="Name"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">E-mail</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="email" placeholder="Your email"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Adress</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="adress" placeholder="Your adress"/>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END WIZARD WITH VALIDATION -->

                </div>

            </div>

        </div>
        <!-- PAGE CONTENT WRAPPER -->
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
        
        <script type="text/javascript" src="{{asset('backend/js/plugins/smartwizard/jquery.smartWizard-2.0.min.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/plugins/jquery-validation/jquery.validate.js')}}"></script>
        <!-- END PAGE PLUGINS -->
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
@endpush





