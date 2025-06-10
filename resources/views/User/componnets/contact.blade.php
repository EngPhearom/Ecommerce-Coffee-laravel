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
    <div class="container-fluid p-0 position-absolute">
        <div class="position-relative" style="background: #251913da;">
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

    <div class="container-fluid">
        <div class="container">
            <div class="main-contact-us">
                <h1>Contact Us</h1>
                <div class="description-input">
                    <div class="description">
                        <span>
                            <h4>STORE FEEDBACK</h4>
                            <p>Tell us about an in-store experience, inquire about hiring opportunities, or ask about an
                                order placed through our online order ahead app.</p>
                        </span>
                        <br>
                        <span>
                            <h4>STORE FEEDBACK</h4>
                            <p>Tell us about an in-store experience, inquire about hiring opportunities, or ask about an
                                order placed through our online order ahead app.</p>
                        </span>
                        <br>
                        <span>
                            <h4> <i class="fa-regular fa-phone"></i> 512-588-5770</h4>
                        </span>
                        <br>
                        <span>
                            <h4>STORE FEEDBACK</h4>
                            <p>Tell us about an in-store experience, inquire about hiring opportunities, or ask about an
                                order placed through our online order ahead app.</p>
                        </span>
                    </div>
                    <div class="input-contact">
                        <div class="name">
                            <input type="text" placeholder="Name *">
                        </div>
                        <div class="email">
                            <input type="text" placeholder="Email *">
                        </div>
                        <div class="subject">
                            <input type="text" placeholder="What is your subject of your message?">
                        </div>
                        <div class="message">
                            <textarea name="" id="" rows="15" cols="120" placeholder="Message"></textarea>
                        </div>
                        <div class="btn-send-email">
                            <input type="button" value="Send us an email">
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

</html>
