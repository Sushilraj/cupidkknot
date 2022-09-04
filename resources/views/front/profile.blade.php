<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="template" content="greeny">
    <meta name="title" content="greeny - Ecommerce Food Store HTML Template">
    <meta name="keywords" content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, products, farm, grocery, natural, online">
    <title>Profile</title>
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/icofont/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/venobox/venobox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/slickslider/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/niceselect/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head>

<body>
    <section class="inner-section shop-part">
        <div class="container">
            <div class="row content-reverse">
                <div class="col-lg-3">
                    <form id="profileShorting" method="post">
                        <div class="shop-widget">
                            <h6 class="shop-widget-title">Filter by Age</h6>
                            <ul class="shop-widget-list">
                                <li>
                                    <div class="shop-widget-content">
                                        <input name="fage" id="fage" type="radio" value="20">
                                        <label for="fage">Less 20</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input name="fage" id="fage" type="radio" value="30">
                                        <label for="fage">Less 30</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input name="fage" id="fage" type="radio" value="40">
                                        <label for="fage">Less 40</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-widget">
                            <h6 class="shop-widget-title">Filter by Anula Income</h6>
                            <ul class="shop-widget-list">
                                <li>
                                    <div class="shop-widget-content">
                                        <input name="fincome" id="fincome" type="radio" value="100">
                                        <label for="fincome">Less 1 Hundred</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input name="fincome" id="fincome" type="radio" value="100000">
                                        <label for="fincome">Less 1 Lack</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input name="fincome" id="fincome" type="radio" value="500000">
                                        <label for="fincome">Less 5 Lack</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-lg-9">
                    <div class="row" id="fiterUser">
                        @include('front.filter-profile')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('assets/vendor/bootstrap/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendor/countdown/countdown.min.js')}}"></script>
    <script src="{{asset('assets/vendor/niceselect/nice-select.min.js')}}"></script>
    <script src="{{asset('assets/vendor/slickslider/slick.min.js')}}"></script>
    <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('assets/js/nice-select.js')}}"></script>
    <script src="{{asset('assets/js/countdown.js')}}"></script>
    <script src="{{asset('assets/js/accordion.js')}}"></script>
    <script src="{{asset('assets/js/venobox.js')}}"></script>
    <script src="{{asset('assets/js/slick.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>