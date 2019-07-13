<!-- START X-NAVIGATION VERTICAL -->
@include('backend.layouts.inc.x-navigation-vertical')
<!-- END X-NAVIGATION VERTICAL -->

<!-- START BREADCRUMB -->
@breadcrumb() @endbreadcrumb
<!-- END BREADCRUMB -->

<!-- PAGE TITLE -->
<div class="page-title">
    <h2><span class="{{$page_title_icon}}"></span> <a class="current-url" href="{{url()->current()}}">{{$page_title}}</a></h2>
</div>
<!-- END PAGE TITLE -->