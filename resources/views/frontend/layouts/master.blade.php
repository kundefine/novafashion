@include('frontend.layouts.inc.header')
<div class="banner-imag">
    <img src="{{asset('frontend/images/desktop_1_M_1_f5080eb0-ef45-4952-8034-88fd719b1e29.jpg')}}">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-12">
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="clock-celter">
                <p>HURRY! SALE ENDS IN:</p>
                <div class="clock"></div>
                <script type="text/javascript">
                    var clock = $('.clock').FlipClock(3600 * 24 * 3, {
                        clockFace: 'DailyCounter',
                        countdown: true
                    });
                </script>
            </div>
        </div>
        <div class="col-md-2 col-sm-12 col-xs-12">
        </div>
    </div>
</div>
<div class="col-sm-12 col-xs-12 head-in-mobile">
    <div class="banner1 text-in-left">
        <a class="fancybox fancybox.iframe" href=""><div class="video"></div></a>
    </div>
</div>
<div class="head-in-mobile tab-non">
    <div class="manu-grad">
        <a href="Dresses.html">Dresses</a>
    </div>
    <div class="manu-grad">
        <a href="Jeans.html">Jeans</a>
    </div>
    <div class="manu-grad">
        <a href="Shoes.html">Shoes</a>
    </div>
    <div class="manu-grad">
        <a href="Swimsuits.html">Swimsuits</a>
    </div>
    <div class="manu-grad">
        <a href="Plus.html">Plus</a>
    </div>
    <div class="manu-grad">
        <a href="Mens.html">Mens</a>
    </div>

</div>
<div class="promo-area">
    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="banner1 text-in-left">
            <a href="#">
                <img src="{{asset('frontend/images/desktop_2_M_1.jpg')}}">
            </a>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="banner1 text-in-left">
            <a href="#">
                <img src="{{asset('frontend/images/desktop_3_M_498fa744-ecea-4412-8596-76a7bd0ed256.gif')}}">
            </a>
        </div>
    </div>
</div>
<div class="flu-width-img">
    <a href="#">
        <img src="{{asset('frontend/images/desktop_4_M_51456769-fc77-48f9-bb8d-e2d2b2594175.jpg')}}">
    </a>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-6">
            <img src="{{asset('frontend/images/buttons_1_M_6.jpg')}}">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
            <img src="{{asset('frontend/images/buttons_2_M_6.jpg')}}">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
            <img src="{{asset('frontend/images/buttons_3_M_5.jpg')}}">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
            <img src="{{asset('frontend/images/buttons_4_M_2.jpg')}}">
        </div>
    </div>
</div>
<div class="promo-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="banner1 text-in-left">
                    <a href="#">
                        <img src="{{asset('frontend/images/link_3_banner.jpg')}}">
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 display-mobi-none">
                <div class="banner1 text-in-left">
                    <a class="fancybox fancybox.iframe" href=""><div class="video"></div></a>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="demos">

    <div>
        <h2 class="nosto-heading">CUSTOMER FAVORITES</h2>
    </div>
    <div class="owl-carousel owl-theme">

        <div class="item">
            <img src="{{asset('frontend/images/05-08-18_Lightbox_HSCH-102-24_2357_750x750.jpg')}}">
            <div class="wishlist"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
            <div class="info nosto-product-info">
                <a href="">
                    <div class="nosto-product-name">Big Gold Chain Necklace - Gold</div>
                </a>
                <div class="price clearfix">
                    $29.99 USD
                </div>
                <div class="product-atc">
                    Add to bag
                </div>
            </div>
            <div class="nosto-rating">
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-reviews">(32 reviews)</span>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('frontend/images/09-24-18_Studio_3_10-09-55_KNB3057_Black_4983_AJ_750x750.jpg')}}">
            <div class="wishlist"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
            <div class="info nosto-product-info">
                <a href="">
                    <div class="nosto-product-name">Point Of View Skinny Jeans - Black</div>
                </a>
                <div class="price clearfix">
                    $44.99 USD
                </div>
                <div class="product-atc">
                    <span>Add to bag</span>
                    <span class="select-aro"><i class="fa fa-caret-down" aria-hidden="true"></i></span>

                    <select class="product-main-option">
                        <option  selected="" value="0">ADD TO BAG</option>
                        <option value="">30</option>
                        <option value="">32</option>
                        <option value="">34</option>
                        <option value="">36</option>
                        <option value="">38</option>
                    </select>
                </div>
            </div>
            <div class="nosto-rating">
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-reviews">(32 reviews)</span>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('frontend/images/man-3.jpg')}}">
            <div class="wishlist"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
            <div class="info nosto-product-info">
                <a href="">
                    <div class="nosto-product-name">Two Tone Denim Jacket - Black/Combo</div>
                </a>
                <div class="price clearfix">
                    $37.99 USD
                </div>
                <div class="product-atc">
                    <span>Add to bag</span>
                    <span class="select-aro"><i class="fa fa-caret-down" aria-hidden="true"></i></span>

                    <select class="product-main-option">
                        <option  selected="" value="0">ADD TO BAG</option>
                        <option value="">30</option>
                        <option value="">32</option>
                        <option value="">34</option>
                        <option value="">36</option>
                        <option value="">38</option>
                    </select>
                </div>
            </div>
            <div class="nosto-rating">
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-reviews">(32 reviews)</span>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('frontend/images/man-4.jpg')}}">
            <div class="wishlist"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
            <div class="info nosto-product-info">
                <a href="">
                    <div class="nosto-product-name">Hennything Is Possible Short Sleeve Crew Tee - Black</div>
                </a>
                <div class="price clearfix">
                    $37.99 USD
                </div>
                <div class="product-atc">
                    <span>Add to bag</span>
                    <span class="select-aro"><i class="fa fa-caret-down" aria-hidden="true"></i></span>

                    <select class="product-main-option">
                        <option  selected="" value="0">ADD TO BAG</option>
                        <option value="">30</option>
                        <option value="">32</option>
                        <option value="">34</option>
                        <option value="">36</option>
                        <option value="">38</option>
                    </select>
                </div>
            </div>
            <div class="nosto-rating">
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-reviews">(32 reviews)</span>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('frontend/images/man-5.jpg')}}">
            <div class="wishlist"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
            <div class="info nosto-product-info">
                <a href="">
                    <div class="nosto-product-name">Retro Track Pant - Black</div>
                </a>
                <div class="price clearfix">
                    $37.99 USD
                </div>
                <div class="product-atc">
                    <span>Add to bag</span>
                    <span class="select-aro"><i class="fa fa-caret-down" aria-hidden="true"></i></span>

                    <select class="product-main-option">
                        <option  selected="" value="0">ADD TO BAG</option>
                        <option value="">30</option>
                        <option value="">32</option>
                        <option value="">34</option>
                        <option value="">36</option>
                        <option value="">38</option>
                    </select>
                </div>
            </div>
            <div class="nosto-rating">
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-reviews">(32 reviews)</span>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('frontend/images/man-6.jpg')}}">
            <div class="wishlist"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
            <div class="info nosto-product-info">
                <a href="">
                    <div class="nosto-product-name">Hennything Is Possible Short Sleeve Crew Tee - Black</div>
                </a>
                <div class="price clearfix">
                    $37.99 USD
                </div>
                <div class="product-atc">
                    <span>Add to bag</span>
                    <span class="select-aro"><i class="fa fa-caret-down" aria-hidden="true"></i></span>

                    <select class="product-main-option">
                        <option  selected="" value="0">ADD TO BAG</option>
                        <option value="">30</option>
                        <option value="">32</option>
                        <option value="">34</option>
                        <option value="">36</option>
                        <option value="">38</option>
                    </select>
                </div>
            </div>
            <div class="nosto-rating">
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-reviews">(32 reviews)</span>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('frontend/images/man-4.jpg')}}">
            <div class="wishlist"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
            <div class="info nosto-product-info">
                <a href="">
                    <div class="nosto-product-name">Hennything Is Possible Short Sleeve Crew Tee - Black</div>
                </a>
                <div class="price clearfix">
                    $37.99 USD
                </div>
                <div class="product-atc">
                    <span>Add to bag</span>
                    <span class="select-aro"><i class="fa fa-caret-down" aria-hidden="true"></i></span>

                    <select class="product-main-option">
                        <option  selected="" value="0">ADD TO BAG</option>
                        <option value="">30</option>
                        <option value="">32</option>
                        <option value="">34</option>
                        <option value="">36</option>
                        <option value="">38</option>
                    </select>
                </div>
            </div>
            <div class="nosto-rating">
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-reviews">(32 reviews)</span>
            </div>
        </div>

    </div>

</section>


<section id="demos">

    <div>
        <h2 class="nosto-heading">CUSTOMER FAVORITES</h2>
    </div>
    <div class="owl-carousel owl-theme">

        <div class="item">
            <img src="{{asset('frontend/images/05-08-18_Lightbox_HSCH-102-24_2357_750x750.jpg')}}">
            <div class="wishlist"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
            <div class="info nosto-product-info">
                <a href="">
                    <div class="nosto-product-name">Big Gold Chain Necklace - Gold</div>
                </a>
                <div class="price clearfix">
                    $29.99 USD
                </div>
                <div class="product-atc">
                    Add to bag
                </div>
            </div>
            <div class="nosto-rating">
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-reviews">(32 reviews)</span>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('frontend/images/09-24-18_Studio_3_10-09-55_KNB3057_Black_4983_AJ_750x750.jpg')}}">
            <div class="wishlist"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
            <div class="info nosto-product-info">
                <a href="">
                    <div class="nosto-product-name">Point Of View Skinny Jeans - Black</div>
                </a>
                <div class="price clearfix">
                    $44.99 USD
                </div>
                <div class="product-atc">
                    <span>Add to bag</span>
                    <span class="select-aro"><i class="fa fa-caret-down" aria-hidden="true"></i></span>

                    <select class="product-main-option">
                        <option  selected="" value="0">ADD TO BAG</option>
                        <option value="">30</option>
                        <option value="">32</option>
                        <option value="">34</option>
                        <option value="">36</option>
                        <option value="">38</option>
                    </select>
                </div>
            </div>
            <div class="nosto-rating">
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-reviews">(32 reviews)</span>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('frontend/images/man-3.jpg')}}">
            <div class="wishlist"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
            <div class="info nosto-product-info">
                <a href="">
                    <div class="nosto-product-name">Two Tone Denim Jacket - Black/Combo</div>
                </a>
                <div class="price clearfix">
                    $37.99 USD
                </div>
                <div class="product-atc">
                    <span>Add to bag</span>
                    <span class="select-aro"><i class="fa fa-caret-down" aria-hidden="true"></i></span>

                    <select class="product-main-option">
                        <option  selected="" value="0">ADD TO BAG</option>
                        <option value="">30</option>
                        <option value="">32</option>
                        <option value="">34</option>
                        <option value="">36</option>
                        <option value="">38</option>
                    </select>
                </div>
            </div>
            <div class="nosto-rating">
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-reviews">(32 reviews)</span>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('frontend/images/man-4.jpg')}}">
            <div class="wishlist"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
            <div class="info nosto-product-info">
                <a href="">
                    <div class="nosto-product-name">Hennything Is Possible Short Sleeve Crew Tee - Black</div>
                </a>
                <div class="price clearfix">
                    $37.99 USD
                </div>
                <div class="product-atc">
                    <span>Add to bag</span>
                    <span class="select-aro"><i class="fa fa-caret-down" aria-hidden="true"></i></span>

                    <select class="product-main-option">
                        <option  selected="" value="0">ADD TO BAG</option>
                        <option value="">30</option>
                        <option value="">32</option>
                        <option value="">34</option>
                        <option value="">36</option>
                        <option value="">38</option>
                    </select>
                </div>
            </div>
            <div class="nosto-rating">
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-reviews">(32 reviews)</span>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('frontend/images/man-5.jpg')}}">
            <div class="wishlist"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
            <div class="info nosto-product-info">
                <a href="">
                    <div class="nosto-product-name">Retro Track Pant - Black</div>
                </a>
                <div class="price clearfix">
                    $37.99 USD
                </div>
                <div class="product-atc">
                    <span>Add to bag</span>
                    <span class="select-aro"><i class="fa fa-caret-down" aria-hidden="true"></i></span>

                    <select class="product-main-option">
                        <option  selected="" value="0">ADD TO BAG</option>
                        <option value="">30</option>
                        <option value="">32</option>
                        <option value="">34</option>
                        <option value="">36</option>
                        <option value="">38</option>
                    </select>
                </div>
            </div>
            <div class="nosto-rating">
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-reviews">(32 reviews)</span>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('frontend/images/man-6.jpg')}}">
            <div class="wishlist"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
            <div class="info nosto-product-info">
                <a href="">
                    <div class="nosto-product-name">Hennything Is Possible Short Sleeve Crew Tee - Black</div>
                </a>
                <div class="price clearfix">
                    $37.99 USD
                </div>
                <div class="product-atc">
                    <span>Add to bag</span>
                    <span class="select-aro"><i class="fa fa-caret-down" aria-hidden="true"></i></span>

                    <select class="product-main-option">
                        <option  selected="" value="0">ADD TO BAG</option>
                        <option value="">30</option>
                        <option value="">32</option>
                        <option value="">34</option>
                        <option value="">36</option>
                        <option value="">38</option>
                    </select>
                </div>
            </div>
            <div class="nosto-rating">
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-reviews">(32 reviews)</span>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('frontend/images/man-4.jpg')}}">
            <div class="wishlist"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
            <div class="info nosto-product-info">
                <a href="">
                    <div class="nosto-product-name">Hennything Is Possible Short Sleeve Crew Tee - Black</div>
                </a>
                <div class="price clearfix">
                    $37.99 USD
                </div>
                <div class="product-atc">
                    <span>Add to bag</span>
                    <span class="select-aro"><i class="fa fa-caret-down" aria-hidden="true"></i></span>

                    <select class="product-main-option">
                        <option  selected="" value="0">ADD TO BAG</option>
                        <option value="">30</option>
                        <option value="">32</option>
                        <option value="">34</option>
                        <option value="">36</option>
                        <option value="">38</option>
                    </select>
                </div>
            </div>
            <div class="nosto-rating">
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-star-full"><i class="fa fa-star" aria-hidden="true"></i></span>
                <span class="nosto-reviews">(32 reviews)</span>
            </div>
        </div>

    </div>

</section>

<section class="last-se">
    <div class="header1">
        <h2>Shop Our 'Gram &amp; Join Our 1+ Million Followers</h2>
        <p>take a pic of how dope you look wearing our clothes</p>
        <p>+ use the hashtag <strong>#FashionNovaMen</strong> to get featured here!</p>
    </div>
    <div class="project-wrapper">

        <figure class="mix work-item branding" style="display: inline-block;">
            <img src="{{asset('frontend/images/1.jpg')}}" alt="">
            <figcaption class="overlay">
                <div class="fancybox"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                <div class="fs-has-links"><a href="">Shop it</a></div>
            </figcaption>
        </figure>

        <figure class="mix work-item web" style="display: inline-block;">
            <img src="{{asset('frontend/images/2.jpg')}}" alt="">
            <figcaption class="overlay">
                <div class="fancybox"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                <div class="fs-has-links"><a href="">Shop it</a></div>
            </figcaption>
        </figure>

        <figure class="mix work-item logo-design" style="display: inline-block;">
            <img src="{{asset('frontend/images/3.jpg')}}" alt="">
            <figcaption class="overlay">
                <div class="fancybox"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                <div class="fs-has-links"><a href="">Shop it</a></div>
            </figcaption>
        </figure>

        <figure class="mix work-item photography" style="display: inline-block;">
            <img src="{{asset('frontend/images/4.jpg')}}" alt="">
            <figcaption class="overlay">
                <div class="fancybox"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                <div class="fs-has-links"><a href="">Shop it</a></div>
            </figcaption>
        </figure>

        <figure class="mix work-item branding" style="display: inline-block;">
            <img src="{{asset('frontend/images/5.jpg')}}" alt="">
            <figcaption class="overlay">
                <div class="fancybox"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                <div class="fs-has-links"><a href="">Shop it</a></div>
            </figcaption>
        </figure>

        <figure class="mix work-item web" style="display: inline-block;">
            <img src="{{asset('frontend/images/6.jpg')}}" alt="">
            <figcaption class="overlay">
                <div class="fancybox"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                <div class="fs-has-links"><a href="">Shop it</a></div>
            </figcaption>
        </figure>

        <figure class="mix work-item logo-design" style="display: inline-block;">
            <img src="{{asset('frontend/images/7.jpg')}}" alt="">
            <figcaption class="overlay">
                <div class="fancybox"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                <div class="fs-has-links"><a href="">Shop it</a></div>
            </figcaption>
        </figure>

        <figure class="mix work-item photography" style="display: inline-block;">
            <img src="{{asset('frontend/images/8.jpg')}}" alt="">
            <figcaption class="overlay">
                <div class="fancybox"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                <div class="fs-has-links"><a href="">Shop it</a></div>
            </figcaption>
        </figure>

    </div>
</section>




@include('frontend.layouts.inc.footer')