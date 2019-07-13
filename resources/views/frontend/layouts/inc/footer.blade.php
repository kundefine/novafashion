
<footer id="footer">
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="title">FASHION NOVA</div>
                        <ul class="footerul">

                            <li class="first animation">
                                <a href="">About Us</a>
                            </li>

                            <li class=" animation">
                                <a href="" >Careers</a>
                            </li>

                            <li class=" animation">
                                <a href="">Wanna Collab?</a>
                            </li>

                            <li class=" animation">
                                <a href="">Suppliers</a>
                            </li>

                            <li class=" animation">
                                <a href="">Fashion Nova Cares</a>
                            </li>

                            <li class=" animation">
                                <a href="" >Privacy Policy</a>
                            </li>

                            <li class=" animation">
                                <a href="">Terms of Service</a>
                            </li>

                            <li class=" animation">
                                <a href="">CA Supply Chains Act</a>
                            </li>

                            <li class="last animation">
                                <a href="">Promo T&amp;Cs</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="title">CUSTOMER CARE</div>
                        <ul class="footerul">

                            <li class="first animation">
                                <a href="" class="animation">Need Help?</a>
                            </li>

                            <li class=" animation">
                                <a href="">Shipping Info</a>
                            </li>

                            <li class=" animation">
                                <a href="">Track My Order</a>
                            </li>

                            <li class=" animation">
                                <a href="">Easy Returns</a>
                            </li>

                            <li class=" animation">
                                <a href="">FAQ</a>
                            </li>

                            <li class="last animation">
                                <a href="">Contact Us!</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="title">QUICK LINKS</div>
                        <ul class="footerul">

                            <li class="first animation">
                                <a href="">Gift Cards</a>
                            </li>

                            <li class=" animation">
                                <a href="">Reviews</a>
                            </li>

                            <li class=" animation">
                                <a href="">My Account</a>
                            </li>

                            <li class=" animation">
                                <a href="">Size Guide</a>
                            </li>

                            <li class=" animation">
                                <a href="">Store Locations</a>
                            </li>

                            <li class="last animation">
                                <a href="">Get $30</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="grid">
                        <div class="contact grid__item">
                            <div class="title">FOLLOW US</div>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>

                                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="title">Be the first to know about the latest deals, secret sales, style updates &amp; more!</div>
                        <div class="clearfix">
                            <form action="" method="post" target="_blank">

                                <div class="left three-quarters">
                                    <input id="email-label" class="email required" name="email" type="text" placeholder="Email">
                                </div>
                                <div class="left one-quarter">
                                    <input type="submit" name="subscribe" value="SIGN UP" class="btn">
                                </div>
                            </form>
                        </div>
                        <div class="payment-method display-tab-none ">  Payment Methods </div>
                        <div class="text-left medium-down--hide clearfix display-tab-none">
                            <div class="left">
                                <div id="payment-methods">
                                    <img width="50" src="{{asset('frontend/images/american.svg')}}">
                                    <img width="50" src="{{asset('frontend/images/maestro.svg')}}">
                                    <img width="50" src="{{asset('frontend/images/maste.svg')}}">
                                    <img width="50" src="{{asset('frontend/images/paypal.svg')}}">
                                    <img width="50" src="{{asset('frontend/images/visa.svg')}}">
                                    <img width="50" src="{{asset('frontend/images/amazon_card.svg')}}" >
                                    <img width="50" src="{{asset('frontend/images/apple-pay.svg')}}" class="apple">
                                </div>
                            </div>
                            <div class="right">
                                <select class="currency-picker select2-hidden-accessible" >
                                    <option value="USD" selected="selected">$ USD USD</option>
                                    <option value="INR">Rs.  INR</option>
                                    <option value="GBP">£ GBP</option>
                                    <option value="CAD">$ CAD</option>
                                    <option value="AUD">$ AUD</option>
                                    <option value="EUR">€ EUR</option>
                                    <option value="JPY">¥ JPY</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</footer>



<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:3
            },
            600:{
                items:4
            },
            1000:{
                items:5
            }
        }
    })
</script>
<script src="{{asset('frontend/js/jquery.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('frontend/js/price-range.js')}}"></script>
<script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>