@extends('backend.layouts.backend-master')

@section('title', 'form-validation')


@section('page-content')
    <div class="page-content">

        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Form Validation',
            'page_title_icon' => 'fa fa-arrow-circle-o-left'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->


        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-6">

                    <!-- START VALIDATIONENGINE PLUGIN -->
                    <div class="block">
                        <h4>Validation Engine</h4>
                        <form id="validate" role="form" class="form-horizontal" action="javascript:alert('Form #validate submited');">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Login:</label>
                                <div class="col-md-9">
                                    <input type="text" class="validate[required,maxSize[8]] form-control"/>
                                    <span class="help-block">Required, max size = 8</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Password:</label>
                                <div class="col-md-9">
                                    <input type="password" class="validate[required,minSize[5],maxSize[10]] form-control" id="password"/>
                                    <span class="help-block">Required, min size = 5, max size = 10</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Confirm:</label>
                                <div class="col-md-9">
                                    <input type="password" class="validate[required,equals[password]] form-control"/>
                                    <span class="help-block">Required, equals Password</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Age:</label>
                                <div class="col-md-9    ">
                                    <input type="text" class="validate[required,custom[integer],min[18],max[120]] form-control"/>
                                    <span class="help-block">Required, integer, min value = 18, max = 120</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Gender:</label>
                                <div class="col-md-3">
                                    <select class="validate[required] select" id="formGender">
                                        <option value="">Choose option</option>
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                    </select>
                                    <span class="help-block">Required</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Date of birth:</label>
                                <div class="col-md-9">
                                    <input type="text" class="validate[required,custom[date]] form-control"/>
                                    <span class="help-block">Required, date YYYY-MM-DD</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Credit card:</label>
                                <div class="col-md-9">
                                    <input type="text" class="validate[required,creditCard] form-control"/>
                                    <span class="help-block">Required, credit card number</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Site:</label>
                                <div class="col-md-9">
                                    <input type="text" value="http://" class="validate[required,custom[url]] form-control"/>
                                    <span class="help-block">Required, url</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="checkbox">
                                        <label>
                                            <input type="checkbox" class="validate[required]" name="terms" value="1"/> Yes, I accept your terms and conditions.
                                        </label>
                                    </label>
                                </div>
                            </div>
                            <div class="btn-group pull-right">
                                <button class="btn btn-primary" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- END VALIDATIONENGINE PLUGIN -->

                </div>
                <div class="col-md-6">

                    <!-- START JQUERY VALIDATION PLUGIN -->
                    <div class="block">
                        <h4>jQuery Validation</h4>
                        <form id="jvalidate" role="form" class="form-horizontal" action="javascript:alert('Form #validate2 submited');">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Login:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="login"/>
                                        <span class="help-block">min size = 2, max size = 8</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Password:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" id="password2"/>
                                        <span class="help-block">min size = 5, max size = 10</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Confirm Password:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="re-password"/>
                                        <span class="help-block">required same value as Password</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">E-mail:</label>
                                    <div class="col-md-9">
                                        <input type="text" value="" name="email" class="form-control"/>
                                        <span class="help-block">required email</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Age:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="age"/>
                                        <span class="help-block">min size = 18, max size = 100</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Date of birth:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control datepicker" name="date"/>
                                        <span class="help-block">required date</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Credit card:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="credit"/>
                                        <span class="help-block">required credit card</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Site:</label>
                                    <div class="col-md-9">
                                        <input type="text" value="http://" name="site" class="form-control"/>
                                        <span class="help-block">required url</span>
                                    </div>
                                </div>
                                <div class="btn-group pull-right">
                                    <button class="btn btn-primary" type="button" onClick="jvalidate.resetForm();$('#gender').next('.bootstrap-select').removeClass('error').removeClass('valid')">Hide prompts</button>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                        <!-- END JQUERY VALIDATION PLUGIN -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <!-- START MASKED INPUT PLUGIN -->
                    <div class="block">
                        <h4>Masked Input</h4>
                        <form class="form-horizontal" role="form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Date:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="mask_date form-control" value=""/>
                                        <span class="help-block">Example: 2012-12-21</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Phone:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="mask_phone form-control" value=""/>
                                        <span class="help-block">Example: 98 (765) 432-10-98</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Phone + Ext:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="mask_phone_ext form-control" value=""/>
                                        <span class="help-block">Example: 98 (765) 432-10-98 x9999</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Credit:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="mask_credit form-control" value=""/>
                                        <span class="help-block">Example: 9876-5432-1098-7654</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">TIN:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="mask_tin form-control" value=""/>
                                        <span class="help-block">Example: 98-7654321</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">SSN:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="mask_ssn form-control" value=""/>
                                        <span class="help-block">Example: 987-65-4321</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Product:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="mask_product form-control" value=""/>
                                        <span class="help-block">Example: A1-234-B567</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Percent:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="mask_percent form-control" value=""/>
                                        <span class="help-block">Example: 50%</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END MASKED INPUT PLUGIN -->

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
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src="{{asset('backend/js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        
        <script type='text/javascript' src="{{asset('backend/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>        
        <script type='text/javascript' src="{{asset('backend/js/plugins/bootstrap/bootstrap-select.js')}}"></script>        

        <script type='text/javascript' src="{{asset('backend/js/plugins/validationengine/languages/jquery.validationEngine-en.js')}}"></script>
        <script type='text/javascript' src="{{asset('backend/js/plugins/validationengine/jquery.validationEngine.js')}}"></script>        

        <script type='text/javascript' src="{{asset('backend/js/plugins/jquery-validation/jquery.validate.js')}}"></script>                

        <script type='text/javascript' src="{{asset('backend/js/plugins/maskedinput/jquery.maskedinput.min.js')}}"></script>
        <!-- END THIS PAGE PLUGINS -->               

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('backend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('backend/js/plugins.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/actions.js')}}"></script>
        <!-- END TEMPLATE -->
        
        <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {                                            
                        login: {
                                required: true,
                                minlength: 2,
                                maxlength: 8
                        },
                        password: {
                                required: true,
                                minlength: 5,
                                maxlength: 10
                        },
                        're-password': {
                                required: true,
                                minlength: 5,
                                maxlength: 10,
                                equalTo: "#password2"
                        },
                        age: {
                                required: true,
                                min: 18,
                                max: 100
                        },
                        email: {
                                required: true,
                                email: true
                        },
                        date: {
                                required: true,
                                date: true
                        },
                        credit: {
                                required: true,
                                creditcard: true
                        },
                        site: {
                                required: true,
                                url: true
                        }
                    }                                        
                });                                    

        </script>

    <!-- END SCRIPTS -->
@endpush