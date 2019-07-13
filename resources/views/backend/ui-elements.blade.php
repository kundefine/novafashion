@extends('backend.layouts.backend-master')

@section('title', 'ui-elements')


@section('page-content')
    <div class="page-content">
        <!-- PAGE CONTENT COMMON -->
        @component('backend.components.page-content-common', [
            'page_title' => 'Elements',
            'page_title_icon' => 'fa fa-arrow-right'
        ]);
        @endcomponent
        <!-- END PAGE CONTENT COMMON -->


        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">

                <div class="col-md-6">

                    <!-- START MODALS -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Basic Modals</h3>
                        </div>
                        <div class="panel-body">
                            <p>This is basic examples of bootstrap modals usage</p>
                            <button class="btn btn-default" data-toggle="modal" data-target="#modal_basic">Basic</button>
                            <button class="btn btn-default" data-toggle="modal" data-target="#modal_no_head">No Head</button>
                            <button class="btn btn-default" data-toggle="modal" data-target="#modal_no_footer">No Footer</button>
                        </div>
                    </div>
                    <!-- END MODALS -->

                </div>

                <div class="col-md-6">

                    <!-- START MODAL SIZES -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Modal Sizes</h3>
                        </div>
                        <div class="panel-body">
                            <p>All you need is add class <code>modal-lg,modal-sm</code> to <code>modal-dialog</code> to get other size.</p>
                            <button class="btn btn-default" data-toggle="modal" data-target="#modal_small">Small</button>
                            <button class="btn btn-default" data-toggle="modal" data-target="#modal_basic">Basic</button>
                            <button class="btn btn-default" data-toggle="modal" data-target="#modal_large">Large</button>
                        </div>
                    </div>
                    <!-- END MODAL SIZES -->

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <!-- START LABELS -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Labels</h3>
                            <ul class="panel-controls">
                                <li class="label-control"><span class="label label-info">Some label text</span></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <span class="label label-default">Default</span>
                            <span class="label label-primary">Primary</span>
                            <span class="label label-success">Success</span>
                            <span class="label label-info">Info</span>
                            <span class="label label-warning">Warning</span>
                            <span class="label label-danger">Danger</span>
                        </div>
                        <div class="panel-body">
                            <span class="label label-default label-form">Default</span>
                            <span class="label label-primary label-form">Primary</span>
                            <span class="label label-success label-form">Success</span>
                            <span class="label label-info label-form">Info</span>
                            <span class="label label-warning label-form">Warning</span>
                            <span class="label label-danger label-form">Danger</span>
                        </div>
                    </div>
                    <!-- END LABELS -->

                    <!-- START PAGINATION -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Pagination</h3>
                            <ul class="pagination pagination-sm pull-right">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                        <div class="panel-body">

                            <ul class="pagination pagination-lg">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>


                            <ul class="pagination">
                                <li class="disabled"><a href="#">&laquo;</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>

                            <ul class="pagination pagination-sm">
                                <li class="disabled"><a href="#">&laquo;</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>

                        </div>
                        <div class="panel-footer">
                            <ul class="pagination pagination-sm pull-right">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li class="active"><a href="#">8</a></li>
                                <li class="disabled"><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END PAGINATION -->

                    <!-- START SCROLLBAR -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Custom Content Scroller</h3>
                        </div>
                        <div class="panel-body scroll" style="height: 150px;">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis rhoncus dolor a porta. Sed fermentum tincidunt convallis. Donec magna orci, fringilla in laoreet sit amet, lobortis quis sem. Nulla lacinia suscipit lectus non convallis. Morbi in condimentum urna. Cras porta hendrerit dapibus. Sed efficitur urna in dictum luctus.</p>
                            <p>Sed sollicitudin velit vel purus finibus porttitor. Ut a felis ullamcorper, bibendum risus lobortis, bibendum ex. Nulla rutrum nunc ipsum. Nullam sed nibh non leo condimentum sollicitudin. Etiam sagittis dui sed dolor pharetra, et efficitur felis luctus. Mauris eu arcu maximus, lacinia purus quis, tempor magna. Suspendisse sit amet quam in mi aliquam hendrerit nec eget ante. Fusce bibendum imperdiet efficitur. Mauris facilisis ligula nec dolor dapibus convallis eget vitae velit. Nunc egestas metus neque, nec fermentum enim facilisis eu. Aliquam sagittis pharetra ante, sit amet luctus sem efficitur sed.</p>
                            <p>Quisque ac diam et enim maximus laoreet. Nulla et venenatis orci. Ut viverra, neque ac euismod iaculis, est libero rutrum augue, sed fermentum risus sapien id lectus. Quisque hendrerit ex ac felis malesuada finibus non ac justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sagittis tortor at diam dapibus lobortis. Pellentesque sed ornare nisl. Nunc in viverra eros. Integer faucibus sed nunc vitae laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas vestibulum imperdiet ante non mattis. Vivamus sapien risus, aliquet sed fermentum id, commodo ac felis. Proin sollicitudin varius tortor eu luctus.</p>
                        </div>
                    </div>
                    <!-- END SCROLLBAR -->

                </div>

                <div class="col-md-6">

                    <!-- START PROGRESSBARS -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Progressbars</h3>
                        </div>
                        <div class="panel-body">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                            </div>

                            <h5>Colors</h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    40%
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                    20%
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    60%
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    80%
                                </div>
                            </div>

                            <div class="progress">
                                <div class="progress-bar progress-bar-colorful" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    75%
                                </div>
                            </div>

                            <h5>Features</h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    40% Complete (success)
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">45% Complete</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" style="width: 30%">
                                    30% (success)
                                </div>
                                <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 30%">
                                    30% (warning)
                                </div>
                                <div class="progress-bar progress-bar-danger" style="width: 40%">
                                    40% (danger)
                                </div>
                            </div>

                            <h5>Small</h5>
                            <div class="progress progress-small">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                            </div>
                            <div class="progress progress-small">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 33%;">33%</div>
                            </div>
                            <div class="progress progress-small">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                            </div>
                            <div class="progress progress-small">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                            </div>
                            <div class="progress progress-small">
                                <div class="progress-bar progress-bar-colorful" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                            </div>
                        </div>
                    </div>
                    <!-- END PROGRESSBARS -->

                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <!-- START ACCORDION -->
                    <div class="panel-group accordion">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#accOneColOne">
                                        Collapsible Group Item #1
                                    </a>
                                </h4>
                            </div>
                            <div class="panel-body panel-body-open" id="accOneColOne">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#accOneColTwo">
                                        Collapsible Group Item #2
                                    </a>
                                </h4>
                            </div>
                            <div class="panel-body" id="accOneColTwo">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#accOneColThree">
                                        Collapsible Group Item #3
                                    </a>
                                </h4>
                            </div>
                            <div class="panel-body" id="accOneColThree">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <!-- END ACCORDION -->
                </div>

                <div class="col-md-6">

                    <!-- START ACCORDION -->
                    <div class="panel-group accordion accordion-dc">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#accTwoColOne">
                                        Collapsible Group Item #1
                                    </a>
                                </h4>
                            </div>
                            <div class="panel-body panel-body-open" id="accTwoColOne">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#accTwoColTwo">
                                        Collapsible Group Item #2
                                    </a>
                                </h4>
                            </div>
                            <div class="panel-body" id="accTwoColTwo">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#accTwoColThree">
                                        Collapsible Group Item #3
                                    </a>
                                </h4>
                            </div>
                            <div class="panel-body" id="accTwoColThree">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <!-- END ACCORDION -->

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <!-- START TABS -->
                    <div class="panel panel-default tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">First</a></li>
                            <li><a href="#tab-second" role="tab" data-toggle="tab">Second</a></li>
                            <li><a href="#tab-third" role="tab" data-toggle="tab">Third</a></li>
                            <li><a href="#tab-fourth" role="tab" data-toggle="tab">Fourth</a></li>
                        </ul>
                        <div class="panel-body tab-content">
                            <div class="tab-pane active" id="tab-first">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dolor sem, quis pharetra dui ultricies vel. Cras non pulvinar tellus, vel bibendum magna. Morbi tellus nulla, cursus non nisi sed, porttitor dignissim erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis commodo lectus. Vivamus vel tincidunt enim, non vulputate ipsum. Ut pellentesque consectetur arcu sit amet scelerisque. Fusce commodo leo eros, ut eleifend massa congue at.</p>
                            </div>
                            <div class="tab-pane" id="tab-second">
                                <p>Donec tristique eu sem et aliquam. Proin sodales elementum urna et euismod. Quisque nisl nisl, venenatis eget dignissim et, adipiscing eu tellus. Sed nulla massa, luctus id orci sed, elementum consequat est. Proin dictum odio quis diam gravida facilisis. Sed pharetra dolor a tempor tristique. Sed semper sed urna ac dignissim. Aenean fermentum leo at posuere mattis. Etiam vitae quam in magna viverra dictum. Curabitur feugiat ligula in dui luctus, sed aliquet neque posuere.</p>
                            </div>
                            <div class="tab-pane" id="tab-third">
                                <p>Vestibulum cursus augue sed leo tempor, at aliquam orci dictum. Sed mattis metus id velit aliquet, et interdum nulla porta. Etiam euismod pellentesque purus, in fermentum eros venenatis ut. Praesent vitae nibh ac augue gravida lacinia non a ipsum. Aenean vestibulum eu turpis eu posuere. Sed eget lacus lacinia, mollis urna et, interdum dui. Donec sed diam ut metus imperdiet malesuada. Maecenas tincidunt ultricies ipsum, lobortis pretium dolor sodales ut. Donec nec fringilla nulla. In mattis sapien lorem, nec tincidunt elit scelerisque tempus.</p>
                            </div>
                            <div class="tab-pane" id="tab-fourth">
                                <p>In mattis sapien lorem, nec tincidunt elit scelerisque tempus. Quisque nisl nisl, venenatis eget dignissim et, adipiscing eu tellus. Sed nulla massa, luctus id orci sed, elementum consequat est. Proin dictum odio quis diam gravida facilisis. Sed pharetra dolor a tempor tristique. Sed semper sed urna ac dignissim. Aenean fermentum leo at posuere mattis. Etiam vitae quam in magna viverra dictum. Curabitur feugiat ligula in dui luctus, sed aliquet neque posuere.</p>
                            </div>
                        </div>
                    </div>
                    <!-- END TABS -->
                </div>

                <div class="col-md-6">
                    <!-- START JUSTIFIED TABS -->
                    <div class="panel panel-default tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#tab8" data-toggle="tab">First</a></li>
                            <li><a href="#tab9" data-toggle="tab">Second</a></li>
                            <li><a href="#tab10" data-toggle="tab">Third</a></li>
                        </ul>
                        <div class="panel-body tab-content">
                            <div class="tab-pane active" id="tab8">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dolor sem, quis pharetra dui ultricies vel. Cras non pulvinar tellus, vel bibendum magna. Morbi tellus nulla, cursus non nisi sed, porttitor dignissim erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis commodo lectus. Vivamus vel tincidunt enim, non vulputate ipsum. Ut pellentesque consectetur arcu sit amet scelerisque. Fusce commodo leo eros, ut eleifend massa congue at.</p>
                            </div>
                            <div class="tab-pane" id="tab9">
                                <p>Donec tristique eu sem et aliquam. Proin sodales elementum urna et euismod. Quisque nisl nisl, venenatis eget dignissim et, adipiscing eu tellus. Sed nulla massa, luctus id orci sed, elementum consequat est. Proin dictum odio quis diam gravida facilisis. Sed pharetra dolor a tempor tristique. Sed semper sed urna ac dignissim. Aenean fermentum leo at posuere mattis. Etiam vitae quam in magna viverra dictum. Curabitur feugiat ligula in dui luctus, sed aliquet neque posuere.</p>
                            </div>
                            <div class="tab-pane" id="tab10">
                                <p>Vestibulum cursus augue sed leo tempor, at aliquam orci dictum. Sed mattis metus id velit aliquet, et interdum nulla porta. Etiam euismod pellentesque purus, in fermentum eros venenatis ut. Praesent vitae nibh ac augue gravida lacinia non a ipsum. Aenean vestibulum eu turpis eu posuere. Sed eget lacus lacinia, mollis urna et, interdum dui. Donec sed diam ut metus imperdiet malesuada. Maecenas tincidunt ultricies ipsum, lobortis pretium dolor sodales ut. Donec nec fringilla nulla. In mattis sapien lorem, nec tincidunt elit scelerisque tempus.</p>
                            </div>
                        </div>
                    </div>
                    <!-- END JUSTIFIED TABS -->
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <!-- START VERTICAL TABS WITH HEADING -->
                    <div class="panel panel-default nav-tabs-vertical">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tabs with heading</h3>
                        </div>
                        <div class="tabs">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab19" data-toggle="tab">First</a></li>
                                <li><a href="#tab20" data-toggle="tab">Second</a></li>
                                <li><a href="#tab21" data-toggle="tab">Third</a></li>
                            </ul>
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab19">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dolor sem, quis pharetra dui ultricies vel. Cras non pulvinar tellus, vel bibendum magna. Morbi tellus nulla, cursus non nisi sed, porttitor dignissim erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis commodo lectus. Vivamus vel tincidunt enim, non vulputate ipsum. Ut pellentesque consectetur arcu sit amet scelerisque. Fusce commodo leo eros, ut eleifend massa congue at.</p>
                                    <p>Nam a nisi et nisi tristique lacinia non sit amet orci. Duis blandit leo odio, eu varius nulla fringilla adipiscing. Praesent posuere blandit diam, sit amet suscipit justo consequat sed. Duis cursus volutpat ante at convallis. Integer posuere a enim eget imperdiet. Nulla consequat dui quis purus molestie fermentum. Donec faucibus sapien eu nisl placerat auctor. Pellentesque quis justo lobortis, tempor sapien vitae, dictum orci.</p>
                                </div>
                                <div class="tab-pane" id="tab20">
                                    <p>Donec tristique eu sem et aliquam. Proin sodales elementum urna et euismod. Quisque nisl nisl, venenatis eget dignissim et, adipiscing eu tellus. Sed nulla massa, luctus id orci sed, elementum consequat est. Proin dictum odio quis diam gravida facilisis. Sed pharetra dolor a tempor tristique. Sed semper sed urna ac dignissim. Aenean fermentum leo at posuere mattis. Etiam vitae quam in magna viverra dictum. Curabitur feugiat ligula in dui luctus, sed aliquet neque posuere.</p>
                                    <p>Nam a nisi et nisi tristique lacinia non sit amet orci. Duis blandit leo odio, eu varius nulla fringilla adipiscing. Praesent posuere blandit diam, sit amet suscipit justo consequat sed. Duis cursus volutpat ante at convallis. Integer posuere a enim eget imperdiet. Nulla consequat dui quis purus molestie fermentum. Donec faucibus sapien eu nisl placerat auctor. Pellentesque quis justo lobortis, tempor sapien vitae, dictum orci.</p>
                                </div>
                                <div class="tab-pane" id="tab21">
                                    <p>Vestibulum cursus augue sed leo tempor, at aliquam orci dictum. Sed mattis metus id velit aliquet, et interdum nulla porta. Etiam euismod pellentesque purus, in fermentum eros venenatis ut. Praesent vitae nibh ac augue gravida lacinia non a ipsum. Aenean vestibulum eu turpis eu posuere. Sed eget lacus lacinia, mollis urna et, interdum dui. Donec sed diam ut metus imperdiet malesuada. Maecenas tincidunt ultricies ipsum, lobortis pretium dolor sodales ut. Donec nec fringilla nulla. In mattis sapien lorem, nec tincidunt elit scelerisque tempus.</p>
                                    <p>Nam a nisi et nisi tristique lacinia non sit amet orci. Duis blandit leo odio, eu varius nulla fringilla adipiscing. Praesent posuere blandit diam, sit amet suscipit justo consequat sed. Duis cursus volutpat ante at convallis. Integer posuere a enim eget imperdiet. Nulla consequat dui quis purus molestie fermentum. Donec faucibus sapien eu nisl placerat auctor. Pellentesque quis justo lobortis, tempor sapien vitae, dictum orci.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END VERTICAL TABS WITH HEADING -->
                </div>
                <div class="col-md-6">
                    <!-- START VERTICAL TABS -->
                    <div class="panel panel-default tabs nav-tabs-vertical">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab22" data-toggle="tab">First</a></li>
                            <li><a href="#tab23" data-toggle="tab">Second</a></li>
                            <li><a href="#tab24" data-toggle="tab">Third</a></li>
                        </ul>
                        <div class="panel-body tab-content">
                            <div class="tab-pane active" id="tab22">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dolor sem, quis pharetra dui ultricies vel. Cras non pulvinar tellus, vel bibendum magna. Morbi tellus nulla, cursus non nisi sed, porttitor dignissim erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis commodo lectus. Vivamus vel tincidunt enim, non vulputate ipsum. Ut pellentesque consectetur arcu sit amet scelerisque. Fusce commodo leo eros, ut eleifend massa congue at.</p>
                                <p>Nam a nisi et nisi tristique lacinia non sit amet orci. Duis blandit leo odio, eu varius nulla fringilla adipiscing. Praesent posuere blandit diam, sit amet suscipit justo consequat sed. Duis cursus volutpat ante at convallis. Integer posuere a enim eget imperdiet. Nulla consequat dui quis purus molestie fermentum. Donec faucibus sapien eu nisl placerat auctor. Pellentesque quis justo lobortis, tempor sapien vitae, dictum orci.</p>
                            </div>
                            <div class="tab-pane" id="tab23">
                                <p>Donec tristique eu sem et aliquam. Proin sodales elementum urna et euismod. Quisque nisl nisl, venenatis eget dignissim et, adipiscing eu tellus. Sed nulla massa, luctus id orci sed, elementum consequat est. Proin dictum odio quis diam gravida facilisis. Sed pharetra dolor a tempor tristique. Sed semper sed urna ac dignissim. Aenean fermentum leo at posuere mattis. Etiam vitae quam in magna viverra dictum. Curabitur feugiat ligula in dui luctus, sed aliquet neque posuere.</p>
                                <p>Nam a nisi et nisi tristique lacinia non sit amet orci. Duis blandit leo odio, eu varius nulla fringilla adipiscing. Praesent posuere blandit diam, sit amet suscipit justo consequat sed. Duis cursus volutpat ante at convallis. Integer posuere a enim eget imperdiet. Nulla consequat dui quis purus molestie fermentum. Donec faucibus sapien eu nisl placerat auctor. Pellentesque quis justo lobortis, tempor sapien vitae, dictum orci.</p>
                            </div>
                            <div class="tab-pane" id="tab24">
                                <p>Vestibulum cursus augue sed leo tempor, at aliquam orci dictum. Sed mattis metus id velit aliquet, et interdum nulla porta. Etiam euismod pellentesque purus, in fermentum eros venenatis ut. Praesent vitae nibh ac augue gravida lacinia non a ipsum. Aenean vestibulum eu turpis eu posuere. Sed eget lacus lacinia, mollis urna et, interdum dui. Donec sed diam ut metus imperdiet malesuada. Maecenas tincidunt ultricies ipsum, lobortis pretium dolor sodales ut. Donec nec fringilla nulla. In mattis sapien lorem, nec tincidunt elit scelerisque tempus.</p>
                                <p>Nam a nisi et nisi tristique lacinia non sit amet orci. Duis blandit leo odio, eu varius nulla fringilla adipiscing. Praesent posuere blandit diam, sit amet suscipit justo consequat sed. Duis cursus volutpat ante at convallis. Integer posuere a enim eget imperdiet. Nulla consequat dui quis purus molestie fermentum. Donec faucibus sapien eu nisl placerat auctor. Pellentesque quis justo lobortis, tempor sapien vitae, dictum orci.</p>
                            </div>
                        </div>
                    </div>
                    <!-- END VERTICAL TABS -->
                </div>

            </div>

        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
@endsection

@section('after-page-container')
    <!-- MODALS -->
    <div class="modal" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Basic Modal</h4>
                </div>
                <div class="modal-body">
                    Some content in modal example
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="modal_no_head" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h3>Modal without head</h3>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="modal_no_footer" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Modal Without Footer</h4>
                </div>
                <div class="modal-body">
                    <p>Some content in modal example</p>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="modal_large" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="largeModalHead">Large Modal</h4>
                </div>
                <div class="modal-body">
                    Some content in modal example
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="modal_small" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="smallModalHead">Small Modal</h4>
                </div>
                <div class="modal-body">
                    Some content in modal example
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- EOF MODALS -->
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





