<ul class="breadcrumb">
    <?php $breadcrumb = GlobalService::getBreadcum(); ?>
    @foreach($breadcrumb as $breadcrumbTitle => $breadcrumbLink)
        <li><a href="{{$breadcrumbLink}}">{{ucfirst($breadcrumbTitle)}}</a></li>
    @endforeach
</ul>