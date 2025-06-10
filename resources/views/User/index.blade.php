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
            <div class="section-herobannner">
                <div class="blur-bg">
                    <div class="black-bg"></div>
                    <div class="hero-text">
                        <h1>FRESH COFFEE IN THE MORNING</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, molestiae. Voluptatibus ab
                            non sed aspernatur unde nisi et fuga praesentium.</p>
                        <div class="herobtn">
                            <a href="#">Order Now</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="section-navbar">
                <div class="container d-flex justify-content-between">
                    <div class="logo">
                        <a href="">
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
        <div class="section-banner">
            <div class="text-banner">
                <h1>Welcome to Bartons incredibly</h1>
                <p>Your best local coffee. In addition to delicious sandwiches and cakes and hot dish of the day,</p>
                <div class="bannerbtn">
                    <a href="#">View More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="conatiner-fluid p-0">
        <div class="open-time">
            <div class="text-opentime">
                <h1>Opening Hours</h1>
            </div>
            <div class="time">
                <div class="row-time">
                    <div class="time1">
                        <h3>Mon-Thu</h3>
                        <p>08:00-18:00</p>
                    </div>
                    <div class="time2">
                        <h3>Sun</h3>
                        <p>9:00-18:00</p>
                    </div>
                </div>
                <div class="row-time">
                    <div class="time3">
                        <h3>Fri</h3>
                        <p>08:00-19:00</p>
                    </div>
                    <div class="time4">
                        <h3>Sat</h3>
                        <p>9:00-18:00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="our-menu">
            <div class="container">
                <h2>Our Menu</h2>
                <div class="cart-menu">
                    <h4>Coffee</h4>
                    <div class="cart-menu-auto">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="auto-cart">
                                        <div class="img-auto-cart">
                                            <img src="{{ asset('./User/images/Coffee.png') }}" alt="">
                                        </div>
                                        <div class="text-auto-cart">
                                            <h4>Cappacino</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa, fermentum
                                                id id vitae, integer fermentum tellus. In vitae id nisl quis ornare diam
                                                commodo in vel dolor.</p>
                                        </div>
                                        <div class="price-btn-auto-cart">
                                            <h3>$8.60</h3>
                                            <div class="btn-auto-cart">
                                                <a href="">Order now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="auto-cart">
                                        <div class="img-auto-cart">
                                            <img src="{{ asset('./User/images/mocha.png') }}" alt="">
                                        </div>
                                        <div class="text-auto-cart">
                                            <h4>Mocha</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa, fermentum
                                                id id vitae, integer fermentum tellus. In vitae id nisl quis ornare diam
                                                commodo in vel dolor.</p>
                                        </div>
                                        <div class="price-btn-auto-cart">
                                            <h3>$9.20</h3>
                                            <div class="btn-auto-cart">
                                                <a href="">Order now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="auto-cart">
                                        <div class="img-auto-cart">
                                            <img src="{{ asset('./User/images/late.png') }}" alt="">
                                        </div>
                                        <div class="text-auto-cart">
                                            <h4>Latte</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa, fermentum
                                                id id vitae, integer fermentum tellus. In vitae id nisl quis ornare diam
                                                commodo in vel dolor.</p>
                                        </div>
                                        <div class="price-btn-auto-cart">
                                            <h3>$11.40</h3>
                                            <div class="btn-auto-cart">
                                                <a href="">Order now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="auto-cart">
                                        <div class="img-auto-cart">
                                            <img src="{{ asset('./User/images/cold-java.png') }}" alt="">
                                        </div>
                                        <div class="text-auto-cart">
                                            <h4>Cold Java</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa, fermentum
                                                id id vitae, integer fermentum tellus. In vitae id nisl quis ornare diam
                                                commodo in vel dolor.</p>
                                        </div>
                                        <div class="price-btn-auto-cart">
                                            <h3>$6.40</h3>
                                            <div class="btn-auto-cart">
                                                <a href="">Order now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="auto-cart">
                                        <div class="img-auto-cart">
                                            <img src="{{ asset('./User/images/Coffee.png') }}" alt="">
                                        </div>
                                        <div class="text-auto-cart">
                                            <h4>Cappacino</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa, fermentum
                                                id id vitae, integer fermentum tellus. In vitae id nisl quis ornare diam
                                                commodo in vel dolor.</p>
                                        </div>
                                        <div class="price-btn-auto-cart">
                                            <h3>$8.60</h3>
                                            <div class="btn-auto-cart">
                                                <a href="">Order now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="auto-cart">
                                        <div class="img-auto-cart">
                                            <img src="{{ asset('./User/images/mocha.png') }}" alt="">
                                        </div>
                                        <div class="text-auto-cart">
                                            <h4>Mocha</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa, fermentum
                                                id id vitae, integer fermentum tellus. In vitae id nisl quis ornare diam
                                                commodo in vel dolor.</p>
                                        </div>
                                        <div class="price-btn-auto-cart">
                                            <h3>$9.20</h3>
                                            <div class="btn-auto-cart">
                                                <a href="">Order now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="auto-cart">
                                        <div class="img-auto-cart">
                                            <img src="{{ asset('./User/images/late.png') }}" alt="">
                                        </div>
                                        <div class="text-auto-cart">
                                            <h4>Latte</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa, fermentum
                                                id id vitae, integer fermentum tellus. In vitae id nisl quis ornare diam
                                                commodo in vel dolor.</p>
                                        </div>
                                        <div class="price-btn-auto-cart">
                                            <h3>$11.40</h3>
                                            <div class="btn-auto-cart">
                                                <a href="">Order now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="auto-cart">
                                        <div class="img-auto-cart">
                                            <img src="{{ asset('./User/images/cold-java.png') }}" alt="">
                                        </div>
                                        <div class="text-auto-cart">
                                            <h4>Cold Java</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa, fermentum
                                                id id vitae, integer fermentum tellus. In vitae id nisl quis ornare diam
                                                commodo in vel dolor.</p>
                                        </div>
                                        <div class="price-btn-auto-cart">
                                            <h3>$6.40</h3>
                                            <div class="btn-auto-cart">
                                                <a href="">Order now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="bg-customer">
            <div class="blur-bg">
                <div class="container">
                    <div class="discription-customer">
                        <h2>What our Customers</h2>
                        <div class="row-cart-cutomers">
                            <div class="cart-customer">
                                <div class="pic-customer">
                                    <img src="images/Coffee.png" alt="">
                                </div>
                                <div class="discription-customer">
                                    <div class="start-icon-customer">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <h4>As good as advertised</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, excepturi.</p>
                                </div>
                            </div>
                            <div class="cart-customer">
                                <div class="pic-customer">
                                    <img src="images/Coffee.png" alt="">
                                </div>
                                <div class="discription-customer">
                                    <div class="start-icon-customer">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <h4>As good as advertised</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, excepturi.</p>
                                </div>
                            </div>
                            <div class="cart-customer">
                                <div class="pic-customer">
                                    <img src="images/Coffee.png" alt="">
                                </div>
                                <div class="discription-customer">
                                    <div class="start-icon-customer">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <h4>As good as advertised</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, excepturi.</p>
                                </div>
                            </div>
                            <div class="cart-customer">
                                <div class="pic-customer">
                                    <img src="images/Coffee.png" alt="">
                                </div>
                                <div class="discription-customer">
                                    <div class="start-icon-customer">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <h4>As good as advertised</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, excepturi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="map">
            <div class="container">
                <div class="box-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d368.3006673173802!2d104.89348108941502!3d11.567403840384305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951dbe56851f1%3A0xbc5ec2bf4249a749!2sBROWN%20Coffee%20%7C%20IFL%202!5e0!3m2!1skm!2skh!4v1743175178280!5m2!1skm!2skh"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                <img class="logo-footer" src="{{ asset('./User/images/logo.png') }}" alt="">
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

<script src="{{ asset('./User/js/main.js') }}"></script>

</html>
