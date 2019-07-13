<?php


Route::get('/', function(){ return view('frontend.index'); })->name('home');
Route::get('/home2', function(){ return view('frontend.index2'); })->name('home2');
Route::get('/home3', function(){ return view('frontend.index3'); })->name('home3');
Route::get('/about-us', function(){ return view('frontend.about-us'); })->name('about-us');
Route::get('/blog-grid', function(){ return view('frontend.blog-grid'); })->name('blog-grid');
Route::get('/blog-list', function(){ return view('frontend.blog-list'); })->name('blog-list');
Route::get('/blog-single', function(){ return view('frontend.blog-single'); })->name('blog-single');
Route::get('/checkout', function(){ return view('frontend.checkout'); })->name('checkout');
Route::get('/contact-us', function(){ return view('frontend.contact-us'); })->name('contact-us');
Route::get('/detail', function(){ return view('frontend.detail'); })->name('detail');
Route::get('/grid-product', function(){ return view('frontend.grid-product'); })->name('grid-product');
Route::get('/grid-product-right', function(){ return view('frontend.grid-product-right'); })->name('grid-product-right');
Route::get('/list-product', function(){ return view('frontend.list-product'); })->name('list-product');
Route::get('/list-product-right', function(){ return view('frontend.list-product-right'); })->name('list-product-right');
Route::get('/login', function(){ return view('frontend.login'); })->name('login');
Route::get('/shopping-cart', function(){ return view('frontend.shopping-cart'); })->name('shopping-cart');



// admin route
Route::group([
    'prefix' => 'admin'
], function() {
    Route::get('/', function(){ return view('backend.index'); });

    Route::group([
        'namespace' => 'Backend\Media'
    ], function(){
        Route::get('/media', 'MediaController@index');
        Route::post('/upload-media', 'MediaController@uploadMedia');
    });




    Route::get('/blank', function(){ return view('backend.blank'); });
    Route::get('/charts-morris', function(){ return view('backend.charts-morris'); });
    Route::get('/charts-nvd3', function(){ return view('backend.charts-nvd3'); });
    Route::get('/charts-other', function(){ return view('backend.charts-other'); });
    Route::get('/charts-rickshaw', function(){ return view('backend.charts-rickshaw'); });
    Route::get('/form-editors', function(){ return view('backend.form-editors'); });
    Route::get('/form-elements', function(){ return view('backend.form-elements'); });
    Route::get('/form-file-handling', function(){ return view('backend.form-file-handling'); });
    Route::get('/form-layouts-one-column', function(){ return view('backend.form-layouts-one-column'); });
    Route::get('/form-layouts-separated', function(){ return view('backend.form-layouts-separated'); });
    Route::get('/form-layouts-tabbed', function(){ return view('backend.form-layouts-tabbed'); });
    Route::get('/form-layouts-two-column', function(){ return view('backend.form-layouts-two-column'); });
    Route::get('/form-validation', function(){ return view('backend.form-validation'); });
    Route::get('/form-wizards', function(){ return view('backend.form-wizards'); });
    Route::get('/layout-boxed', function(){ return view('backend.layout-boxed'); });
    Route::get('/layout-frame-left', function(){ return view('backend.layout-frame-left'); });
    Route::get('/layout-frame-right', function(){ return view('backend.layout-frame-right'); });
    Route::get('/layout-nav-custom', function(){ return view('backend.layout-nav-custom'); });
    Route::get('/layout-nav-right', function(){ return view('backend.layout-nav-right'); });
    Route::get('/layout-nav-toggled', function(){ return view('backend.layout-nav-toggled'); });
    Route::get('/layout-nav-top', function(){ return view('backend.layout-nav-top'); });
    Route::get('/layout-nav-top-fixed', function(){ return view('backend.layout-nav-top-fixed'); });
    Route::get('/layout-search-left', function(){ return view('backend.layout-search-left'); });
    Route::get('/maps', function(){ return view('backend.maps'); });
    Route::get('/pages-address-book', function(){ return view('backend.pages-address-book'); });
    Route::get('/pages-blog-list', function(){ return view('backend.pages-blog-list'); });
    Route::get('/pages-blog-post', function(){ return view('backend.pages-blog-post'); });
    Route::get('/pages-calendar', function(){ return view('backend.pages-calendar'); });
    Route::get('/pages-content-table', function(){ return view('backend.pages-content-table'); });
    Route::get('/pages-error-404', function(){ return view('backend.pages-error-404'); });
    Route::get('/pages-error-404-2', function(){ return view('backend.pages-error-404-2'); });
    Route::get('/pages-error-500', function(){ return view('backend.pages-error-500'); });
    Route::get('/pages-faq', function(){ return view('backend.pages-faq'); });
    Route::get('/pages-gallery', function(){ return view('backend.pages-gallery'); });
    Route::get('/pages-login', function(){ return view('backend.pages-login'); });
    Route::get('/pages-login-website', function(){ return view('backend.pages-login-website'); });
    Route::get('/pages-login-website-light', function(){ return view('backend.pages-login-website-light'); });
    Route::get('/pages-mailbox-compose', function(){ return view('backend.pages-mailbox-compose'); });
    Route::get('/pages-mailbox-inbox', function(){ return view('backend.pages-mailbox-inbox'); });
    Route::get('/pages-mailbox-message', function(){ return view('backend.pages-mailbox-message'); });
    Route::get('/pages-messages', function(){ return view('backend.pages-messages'); });
    Route::get('/pages-profile', function(){ return view('backend.pages-profile'); });
    Route::get('/pages-search', function(){ return view('backend.pages-search'); });
    Route::get('/pages-tasks', function(){ return view('backend.pages-tasks'); });
    Route::get('/pages-timeline', function(){ return view('backend.pages-timeline'); });
    Route::get('/pages-timeline-simple', function(){ return view('backend.pages-timeline-simple'); });
    Route::get('/table-basic', function(){ return view('backend.table-basic'); });
    Route::get('/table-datatables', function(){ return view('backend.table-datatables'); });
    Route::get('/table-export', function(){ return view('backend.table-export'); });
    Route::get('/ui-alerts-popups', function(){ return view('backend.ui-alerts-popups'); });
    Route::get('/ui-buttons', function(){ return view('backend.ui-buttons'); });
    Route::get('/ui-elements', function(){ return view('backend.ui-elements'); });
    Route::get('/ui-icons', function(){ return view('backend.ui-icons'); });
    Route::get('/ui-lists', function(){ return view('backend.ui-lists'); });
    Route::get('/ui-panels', function(){ return view('backend.ui-panels'); });
    Route::get('/ui-portlet', function(){ return view('backend.ui-portlet'); });
    Route::get('/ui-sliders', function(){ return view('backend.ui-sliders'); });
    Route::get('/ui-tour', function(){ return view('backend.ui-tour'); });
    Route::get('/ui-typography', function(){ return view('backend.ui-typography'); });
    Route::get('/ui-widgets', function(){ return view('backend.ui-widgets'); });


});