<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The Care Alliances</title>

        <!-- Font Family -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
            rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Slick Slider CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

        <!-- Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

        <!-- AOS CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/3.0.0-beta.6/aos.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('./assets/css/main.css')}}">
    </head>

    <style>
        :root {
  --primary: #001e6c;
  --primary-100: #035397;
  --primary-200: #5089c6;
  --secondary: #ffaa4c;
  --white: #fff;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  transition: all 0.5s;
  z-index: 997;
  background: #fff;
}

#header.header-scrolled,
#header.header-inner-pages {
  padding: 12px 0;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

#header .logo {
  font-size: 32px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 700;
  letter-spacing: 2px;
  /* font-family: "Poppins", sans-serif; */
}

#header .logo a {
  color: #444;
}

#header .logo img {
  max-height: 60px;
}

@media (max-width: 992px) {
  #header {
    padding: 12px 0;
  }
}
/*--------------------------------------------------------------
  # Navigation Menu
  --------------------------------------------------------------*/
/**
  * Desktop Navigation
  */
.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar .dropdown {
  height: 60px;
  display: flex;
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 30px 10px 0px;
  font-size: 17px;
  color: #222;
  font-weight: 500;
  white-space: nowrap;
  transition: 0.3s;
}

.navbar a i,
.navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover > a {
  color: var(--primary-200);
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 0px;
  top: calc(100% + 20px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
  transition: 0.3s;
  border-radius: 4px;
  border-top: 7px solid var(--primary-200);
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 15px;
  text-transform: none;
}

.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover > a {
  color: var(--primary-200);
}

.navbar .dropdown:hover > ul {
  opacity: 1;
  top: 90%;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }
  .navbar .dropdown .dropdown:hover > ul {
    left: -100%;
  }
}
/**
  * Mobile Navigation
  */
.mobile-nav-toggle {
  color: #434175;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

.mobile-nav-toggle.bi-x {
  color: #fff;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }
  .navbar ul {
    display: none;
  }
}
.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(48, 47, 84, 0.9);
  transition: 0.3s;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  border-radius: 10px;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile a,
.navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #434175;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover > a {
  color: var(--primary);
}

.navbar-mobile .getstarted,
.navbar-mobile .getstarted:focus {
  margin: 15px;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover > a {
  color: var(--primary);
}

.navbar-mobile .dropdown > .dropdown-active {
  display: block;
}

.footer-section {
  background: #151414;
  position: relative;
}

.footer-cta {
  border-bottom: 1px solid #373636;
}

.single-cta {
  display: flex;
  align-items: start;
  justify-content: flex-start;
}

.single-cta i {
  color: var(--primary-200);
  font-size: 30px;
  float: left;
}

.cta-text {
  padding-left: 15px;
  display: inline-block;
}

.cta-text h4 {
  color: #e1e1e1;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 7px;
}

.cta-text span {
  color: #eaeaea;
  font-size: 15px;
}

.footer-content {
  position: relative;
  z-index: 2;
}

.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
}

.footer-logo {
  margin-bottom: 30px;
}

.footer-logo img {
  max-width: 200px;
}

.footer-logo a h3 {
  color: var(--white);
  font-weight: 700;
}

.footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
  color: #7e7e7e;
  line-height: 28px;
  width: 70%;
}

.footer-social-icon span {
  color: #fff;
  display: block;
  font-size: 20px;
  font-weight: 500;
  margin-top: 50px;
  margin-bottom: 20px;
}

.footer-social-icon a {
  color: #fff;
  font-size: 16px;
  margin-right: 15px;
}

.footer-social-icon i {
  height: 40px;
  width: 40px;
  font-size: 26px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
  border: 2px solid var(--primary-200);
}

.footer-widget-heading h3 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
}

.footer-widget-heading h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: var(--primary-200);
}

.footer-widget ul {
  padding-left: 10px;
}

.footer-widget ul li {
  list-style: none;
  margin-bottom: 12px;
}

.footer-widget ul li a:hover {
  color: var(--primary-200);
}

.footer-widget ul li a {
  color: var(--white);
  text-transform: capitalize;
}

.subscribe-form {
  position: relative;
  overflow: hidden;
}

.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2e2e2e;
  border: 1px solid #2e2e2e;
  color: #fff;
}

.subscribe-form button {
  position: absolute;
  right: 0;
  background: var(--primary-100);
  padding: 13px 20px;
  top: 0;
}

.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
}

.copyright-area {
  background: #202020;
  padding: 25px 0;
}

.copyright-text p {
  margin: 0;
  font-size: 14px;
  color: #878787;
}

.copyright-text p a {
  color: #ff5e14;
}

.footer-menu li {
  display: inline-block;
  margin-left: 20px;
}

.footer-menu li:hover a {
  color: #ff5e14;
}

.footer-menu li a {
  font-size: 14px;
  color: #878787;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-size: 16px;
}

a {
  text-decoration: none;
  color: var(--primary-100);
}

.btn-primary {
  font-size: 15px;
  padding: 10px 30px;
  border: transparent;
  background: var(--primary);
  color: white;
  letter-spacing: 0.6px;
  border-radius: 4px;
}
.btn-primary:hover {
  background-color: var(--primary);
}
.btn-primary:focus {
  box-shadow: none;
  background-color: var(--primary);
  border-color: var(--primary);
}

.bg-yellow {
  background: var(--secondary);
}

.bg-grey {
  background: #f5f5f5;
}

.bg-orange {
  background: #daa520;
}

.bg-purple {
  background: #800080;
}

.bg-blue {
  background: #0D00AF;
}

.bg-skyblue {
  background: #0081A7;
}

.bg-pink {
  background: #9A316F;
}

.bg-red {
  background: #B33232;
}

.bg-green {
  background: #47BA80;
}

.bg-bleach {
  background: #E07E00;
}

.bg-rose {
  background: #EC3F3F;
}

.title {
  padding: 10px 0px 40px 0px;
}
.title h3 {
  font-size: 34px;
  line-height: 1.3;
  text-align: center;
  color: var(--primary);
  font-weight: 600;
}
.title p {
  text-align: center;
  margin-top: 30px;
  width: 60%;
  line-height: 1.6;
  margin: 0 auto;
}
.title span {
  display: block;
}

.top-header {
  background: var(--primary-100);
  color: #fff;
  padding: 5px 0px;
}
.top-header .logo {
  color: #fff;
}
.top-header .btn {
  margin-left: 20px;
}

.search-bar {
  position: absolute;
  background-color: var(--white);
  left: 50%;
  transform: translate(-50%, 0%);
  top: 20%;
  width: -moz-fit-content;
  width: fit-content;
  padding: 10px 20px;
  width: 80%;
  border-radius: 10px;
  z-index: 20;
}
.search-bar .container {
  padding: 5px 0px;
}
.search-bar label {
  margin-bottom: 7px;
  font-size: 14px;
}
.search-bar .btn {
  margin-top: 17px;
}
.search-bar .search-row {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
}
.search-bar .search-item {
  margin: 10px;
}
.search-bar label {
  display: block;
  margin-bottom: 5px;
}
.search-bar select,
.search-bar button {
  width: 100%;
  padding: 10px;
  border: 2px solid var(--primary-100);
}

.hero {
  background: url("../imgs/hero-bg.jpg");
  padding: 200px 0px 170px 0px;
  background-position: top;
  background-repeat: no-repeat;
  background-size: cover;
  color: var(--white);
  text-align: center;
  position: relative;
}
.hero::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background: rgba(34, 34, 34, 0.6);
  z-index: 0;
}
.hero .text {
  width: 60%;
  margin: 0 auto;
  margin-top: 8%;
  z-index: 10;
  position: relative;
}
.hero .text h1 {
  font-weight: 700;
  font-size: 54px;
}
.hero .text p {
  font-weight: 400;
}

.about {
  padding: 60px 0px 70px 0px;
}

.img-card {
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  color: #ffffff;
  font-size: 16px;
  margin: 10px 1%;
  border-radius: 10px;
  min-width: 250px;
  overflow: hidden;
  position: relative;
  text-align: left;
  width: 100%;
}
.img-card * {
  box-sizing: border-box;
  transition: all 0.25s ease;
}
.img-card img {
  max-width: 100%;
  width: 100%;
  vertical-align: top;
  position: relative;
}
.img-card figcaption {
  padding: 15px 10px;
  bottom: 0;
  z-index: 1;
  border-top: 4px solid #fff;
}
.img-card figcaption h4 {
  font-size: 17px;
  letter-spacing: 0.3px;
  text-align: center;
}
.img-card figcaption:before {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: var(--primary-100);
  content: "";
  opacity: 0.8;
  z-index: -1;
}

.img-card:hover img,
.img-card.hover img {
  transform: scale(1.1);
}

.tv-show {
  background: #f3f4f6;
  background: #f3f4f6;
  padding: 40px 0px 140px 0px;
}
.tv-show h3 {
  margin-bottom: 50px;
}
.tv-show iframe {
  width: 100%;
  height: 230px;
}
.tv-show a {
  display: block;
}

.forms {
  padding: 60px 0px 90px 0px;
}
.forms .form-custom {
  padding: 40px;
}
.forms .form-custom .wrapper {
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
  padding-bottom: 10px;
  border-radius: 10px;
}
.forms .form-custom .heading {
  background: var(--primary-200);
  color: #fff;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}
.forms .form-custom .form-group {
  margin-bottom: 0px;
  padding: 10px 10px;
  padding-left: 20px;
}
.forms .form-custom .form-group input[type=checkbox] {
  margin-right: 7px;
  height: 15px;
  width: 15px;
  cursor: pointer;
}
.forms .form-custom .form-group input[type=checkbox] textarea {
  min-height: 1300px;
}
.forms .form-custom .form-group label {
  font-size: 16px;
  margin-bottom: 10px;
}
.forms .helper-form {
  border-radius: 10px;
  background: var(--white);
  width: 70%;
  padding: 20px;
  padding-top: 30px;
  margin: 0 auto;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
  font-size: 400;
}
.forms .helper-form h4 {
  border-bottom: 1px solid var(--primary);
  padding-bottom: 15px;
  margin-bottom: 10px;
}
.forms .helper-form .form-group {
  margin-top: 5px;
}
.forms .helper-form .form-group label {
  font-weight: 500;
  color: #404040;
}
.forms .helper-form .form-check label {
  font-weight: 400;
}

.resource-portal {
  padding: 70px 0px 90px 0px;
}
.resource-portal h1 {
  text-align: center;
  font-weight: 700;
  color: var(--primary);
}
.resource-portal .box {
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 20px 20px;
  min-height: 280px;
  border-radius: 10px;
  color: var(--white);
}
.resource-portal .box i {
  font-size: 54px;
  color: var(--white);
}
.resource-portal .box h3 {
  font-weight: 700;
  font-size: 24px;
  margin-top: 35px;
  margin-bottom: 20px;
}

.home-about .row a {
  display: block;
}

.about h5 {
  font-size: 24px;
  font-weight: 600;
  color: var(--primary);
  margin-top: 50px;
  margin-bottom: 10px;
}
.about h6 {
  margin-top: 26px;
  margin-bottom: 10px;
  font-size: 20px;
  font-weight: 600;
}
.about a {
  display: inline-block;
  margin-bottom: 10px;
}
.about p {
  line-height: 1.7;
  text-align: justify;
  font-size: 15px;
}
.about .sidebar {
  padding-left: 30px;
}
.about .sidebar .text {
  background: #f3f4f6;
  padding: 10px;
  border-radius: 10px;
  text-align: center;
}
.about .yt-video {
  background: #f3f4f6;
  padding: 10px;
  border-radius: 10px;
  text-align: center;
  margin-top: 60px;
}
.about .yt-video iframe {
  height: 250px;
  width: 100%;
}/*# sourceMappingURL=main.css.map */
    </style>

    <body style="scroll-behavior: smooth;">
        <div id="app">
            @include('ui::layouts.header')

            @include('ui::layouts.search')

            @yield('content-wrapper')

            @include('ui::layouts.footer')
        </div>

        <!-- Jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
        integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <!-- Slick Slider JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

        <!-- AOS JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/3.0.0-beta.6/aos.js"></script>

        <!-- Custom JS -->
        <script>
            $(document).ready(function () {
                $('.slick-slider').slick({
                    autoplay: true,
                    dots: true,
                    prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                    nextArrow: '<button type="button" class="slick-next">Next</button>',
                });
            });

            // Initialize AOS
            AOS.init();
        </script>
    </body>
</html>
