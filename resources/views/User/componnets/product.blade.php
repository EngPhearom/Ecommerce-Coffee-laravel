<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brown Cofe</title>
    <link rel="shortcut icon" href="{{ asset('./User/images/logo.png') }}" type="image/x-icon">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('./User/css/main.css') }}">

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- fontawesome link -->
    <link rel="stylesheet"
        href="{{ asset('./User/Icon fontawesome PRO/fontawesome-6.2.0 icon pro/fontawesome-6.2.0/css/all.css') }}">
</head>

<body>
    <div class="container-fluid p-0">
        <div class="position-relative">
            <div class="section-bannner-about">
                <div class="black-bg"></div>
                <div class="text-banner-about">
                    <h1>Select your coffee</h1>
                </div>
            </div>
            <div class="section-navbar">
                <div class="container d-flex justify-content-between">
                    <div class="logo">
                        <a href="/coffee">
                            <img src="{{ asset('./User/images/logo.png') }}" alt="">
                        </a>
                    </div>
                    <div class="menu">
                        <ul class="d-flex list-unstyled pt-1">
                            <li><a href="/coffee">Home</a></li>
                            <li><a href="/coffee/product">Product</a></li>
                            <li><a href="/coffee/menu">Menu</a></li>
                            <li><a href="/coffee/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="bg-all-cofe">
            <div class="black-bg-cofe">
                <div class="container">
                    <div class="cart-cofe-menu">
                        <h1>All Coffees</h1>
                        <div class="carts-menu">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="row-cart-menu">
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/Coffee.png') }}" alt="">
                                                    <h4>Cappacino</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$8.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/mocha.png') }}" alt="">
                                                    <h4>Mocha</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$4.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/late.png') }}" alt="">
                                                    <h4>Latte</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$2.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/cold-java.png') }}"
                                                        alt="">
                                                    <h4>Cold Java</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$3.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/Coffee.png') }}" alt="">
                                                    <h4>Cappacino</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$8.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/mocha.png') }}" alt="">
                                                    <h4>Mocha</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$4.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/late.png') }}" alt="">
                                                    <h4>Latte</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$2.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/cold-java.png') }}"
                                                        alt="">
                                                    <h4>Cold Java</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$3.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="row-cart-menu">
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/Coffee.png') }}"
                                                        alt="">
                                                    <h4>Cappacino</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$8.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/mocha.png') }}" alt="">
                                                    <h4>Mocha</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$4.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/late.png') }}" alt="">
                                                    <h4>Latte</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$2.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/cold-java.png') }}"
                                                        alt="">
                                                    <h4>Cold Java</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$3.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/Coffee.png') }}"
                                                        alt="">
                                                    <h4>Cappacino</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$8.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/mocha.png') }}" alt="">
                                                    <h4>Mocha</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$4.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/late.png') }}" alt="">
                                                    <h4>Latte</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$2.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/cold-java.png') }}"
                                                        alt="">
                                                    <h4>Cold Java</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$3.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="row-cart-menu">
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/Coffee.png') }}"
                                                        alt="">
                                                    <h4>Cappacino</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$8.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/mocha.png') }}" alt="">
                                                    <h4>Mocha</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$4.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/late.png') }}" alt="">
                                                    <h4>Latte</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$2.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/cold-java.png') }}"
                                                        alt="">
                                                    <h4>Cold Java</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$3.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/Coffee.png') }}"
                                                        alt="">
                                                    <h4>Cappacino</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$8.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/mocha.png') }}" alt="">
                                                    <h4>Mocha</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$4.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/late.png') }}" alt="">
                                                    <h4>Latte</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$2.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/cold-java.png') }}"
                                                        alt="">
                                                    <h4>Cold Java</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$3.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="row-cart-menu">
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/Coffee.png') }}"
                                                        alt="">
                                                    <h4>Cappacino</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$8.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/mocha.png') }}" alt="">
                                                    <h4>Mocha</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$4.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/late.png') }}" alt="">
                                                    <h4>Latte</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$2.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/cold-java.png') }}"
                                                        alt="">
                                                    <h4>Cold Java</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$3.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/Coffee.png') }}"
                                                        alt="">
                                                    <h4>Cappacino</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$8.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/mocha.png') }}" alt="">
                                                    <h4>Mocha</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$4.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/late.png') }}" alt="">
                                                    <h4>Latte</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$2.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-menu-cofe">
                                                <div class="img-cart-menu">
                                                    <img src="{{ asset('./User/images/cold-java.png') }}"
                                                        alt="">
                                                    <h4>Cold Java</h4>
                                                    <div class="price-btn-cart-menu">
                                                        <p>$3.60</p>
                                                        <span>
                                                            <a href=""><i
                                                                    class="fa-duotone fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <footer class="footer">
            <div class="bg-black-footer">
                <div class="container">
                    <div class="row-carts-footer">
                        <div class="cart-footer">
                            <ul>
                                <li><a href="">Home</a></li>
                                <li><a href="">About</a></li>
                                <li><a href="">Menu</a></li>
                                <li><a href="">Product</a></li>
                                <li><a href="">News</a></li>
                                <li><a href="">Location</a></li>
                            </ul>
                        </div>
                        <div class="cart-footer">
                            <ul>
                                <li><a href="">Contact</a></li>
                                <li><a href="">www.Brown.com.kh</a></li>
                                <li><a href="tel:096 6415 153">Tel: 096 6415 153</a></li>
                            </ul>
                        </div>
                        <div class="cart-footer">
                            <ul>
                                <li><a href=""><i class="fa-brands fa-facebook"></i>Facebook</a></li>
                                <li><a href=""><i class="fa-brands fa-instagram"></i>Instagram</a></li>
                                <li><a href=""><i class="fa-brands fa-youtube"></i>Youtube</a></li>
                            </ul>
                        </div>
                        <div class="cart-footer">
                            <a href="">
                                <img class="logo-footer" src="../images/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<!-- script bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function(index, className) {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
            },
        },
    });
</script>

</html>
