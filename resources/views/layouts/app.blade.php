<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/blog/mi/font/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('/blog/mi/css/style.css') }}">

    <title>Mi {{ $title ?? '' }}</title>
</head>

<body>
    <section class="sticky-back sign-back colCenter">
        <section class="ham-menu-container colCenter">
            <ul class="ham-menu-ul">
                <li><a href="#" onclick="hamCloseHandler()">
                        <h4>مقالات تخصصی</h4>
                    </a></li>
                <li><a href="#" onclick="hamCloseHandler()">
                        <h4>تماس با ما</h4>
                    </a></li>
                <li><a href="#" onclick="hamCloseHandler()">
                        <h4>درباره ما</h4>
                    </a></li>
                <li class="license-wrapper">
                    <a href="#">
                        <img src="{{ asset('/blog/mi/img/brand_value-002.png') }}" alt="license">
                    </a>
                </li>
                <li class="license-wrapper">
                    <a href="#" onclick="hamCloseHandler()">
                        <img src="{{ asset('/blog/mi/img/menu.png') }}" alt="license">
                    </a>
                </li>
                <li class="license-wrapper">
                    <a href="#" onclick="hamCloseHandler()">
                        <img src="{{ asset('/blog/mi/img/jav5.png') }}" alt="license">
                    </a>
                </li>
                <li class="license-wrapper">
                    <a href="#" onclick="hamCloseHandler()">
                        <img src="{{ asset('/blog/mi/img/jav4.png') }}" alt="license">
                    </a>
                </li>
                <li class="license-wrapper">
                    <a href="#" onclick="hamCloseHandler()">
                        <img src="{{ asset('/blog/mi/img/jav3.png') }}" alt="license">
                    </a>
                </li>
                <li class="license-wrapper">
                    <a href="#" onclick="hamCloseHandler()">
                        <img src="{{ asset('/blog/mi/img/jav2.png') }}" alt="license">
                    </a>
                </li>
                <li class="license-wrapper">
                    <a href="#" onclick="hamCloseHandler()">
                        <img src="{{ asset('/blog/mi/img/jav1.png') }}" alt="license">
                    </a>
                </li>
            </ul>
        </section>
        <!-- Header -->
        <header class="header-container rowBetCenter">
            <i class="las la-bars" onclick="menuClickHandler(this)"></i>
            <nav class="header-nav">
                <ul>
                    <li><a href="#">
                            <h4>مقالات تخصصی</h4>
                        </a></li>
                    <li><a href="#">
                            <h4>تماس با ما</h4>
                        </a></li>
                    <li><a href="#">
                            <h4>درباره ما</h4>
                        </a></li>
                </ul>
            </nav>
            <ul class="license-container rowBetCenter">
                <li class="license-wrapper">
                    <a href="#">
                        <img src="{{ asset('/blog/mi/img/brand_value-002.png') }}" alt="license">
                    </a>
                </li>
                <li class="license-wrapper">
                    <a href="#">
                        <img src="{{ asset('/blog/mi/img/menu.png') }}" alt="license">
                    </a>
                </li>
                <li class="license-wrapper">
                    <a href="#">
                        <img src="{{ asset('/blog/mi/img/jav5.png') }}" alt="license">
                    </a>
                </li>
                <li class="license-wrapper">
                    <a href="#">
                        <img src="{{ asset('/blog/mi/img/jav4.png') }}" alt="license">
                    </a>
                </li>
                <li class="license-wrapper">
                    <a href="#">
                        <img src="{{ asset('/blog/mi/img/jav3.png') }}" alt="license">
                    </a>
                </li>
                <li class="license-wrapper">
                    <a href="#">
                        <img src="{{ asset('/blog/mi/img/jav2.png') }}" alt="license">
                    </a>
                </li>
                <li class="license-wrapper">
                    <a href="#">
                        <img src="{{ asset('/blog/mi/img/jav1.png') }}" alt="license">
                    </a>
                </li>
            </ul>
            <div class="logo-wrapper">
                <img src="{{ asset('/blog/mi/img/logotop.png') }}" alt="logo">
            </div>
        </header>

        
        {{ $slot }}

    </section>
    <!-- Footer -->
    <footer class="footer-container rowBetStart">
        <section class="ul-link-container colStart">
            <ul>
                <li><a href="#">لورم ایپسوم متن ساختگی با تولید</a></li>
                <li><a href="#">لورم ایپسوم متن ساختگی با تولید</a></li>
                <li><a href="#">لورم ایپسوم متن ساختگی با تولید</a></li>
                <li><a href="#">لورم ایپسوم متن ساختگی با تولید</a></li>
                <li><a href="#">لورم ایپسوم متن ساختگی با تولید</a></li>
            </ul>
        </section>
        <section class="footer-license-container colCenter">
            <div class="footer-license-img rowBetCenter">
                <div class="footer-license-imgs-wrapper colStart">
                    <a href="#" class="lic1">
                        <img src="{{ asset('/blog/mi/img/javaz1.png') }}" alt="javaz">
                    </a>
                    <a href="#" class="lic1">
                        <img src="{{ asset('/blog/mi/img/javaz2.png') }}" alt="javaz">
                    </a>
                    <a href="#" class="lic1">
                        <img src="{{ asset('/blog/mi/img/javaz3.png') }}" alt="javaz">
                    </a>
                </div>
                <a href="#" class="footer-logo">
                    <img src="{{ asset('/blog/mi/img/logo.png') }}" alt="logo">
                </a>
            </div>
            <input type="text" name="search" id="input-srch" placeholder="جستجو کنید ...">
        </section>
        <p class="footer-p">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و لخصوص طراحان خلاقی و فرهنگ
            پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام</p>
    </footer>
    <script src="{{ asset('/blog/mi/js/Scripts.js') }}"></script>
    <script src="{{ asset('/blog/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('/blog/js/js.js') }}"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>-->
    <script>
        function toggleUserDropdown() {
            document.getElementById('dropdown-user').classList.toggle('open')
        }

        function logoutUser() {
            document.getElementById('logout-form').submit();
        }
    </script>
    {{ $scripts ?? '' }}
</body>

</html>