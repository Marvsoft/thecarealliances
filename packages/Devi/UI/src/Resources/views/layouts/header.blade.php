<!-- ======= Header ======= -->
<div class="top-header">
    <div class="container">
        <div class="d-flex py-3 align-items-center justify-content-between">
            <a href="{{ route('ui.front.index') }}" class="logo">
                <!-- <img src="assets/img/logo.png" alt="" class="img-fluid" /> -->
                <h3>The Care Alliances</h3>
            </a>
            <div class="user-btns">
                <a href="">
                    <button class="btn btn-primary">
                        Login
                    </button>
                </a>
                <a href="">
                    <button class="btn btn-primary">
                        Signup
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
<header id="header" class="shadow-sm">
    <div class="container d-flex align-items-center justify-content-between">
        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto active" href="{{ route('ui.front.index') }}">Home</a>
                </li>
                <li><a class="nav-link scrollto" href="">Directory</a></li>
                <!-- <li><a class="nav-link scrollto" href="#services">Coop Education</a></li> -->
                <li class="dropdown">
                    <a href="about-us.html"><span>About us</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="blogs.html">Blogs </a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link scrollto" href="">Services</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="">Programs</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="">Partners</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="">Care Alliances tv</a>
                </li>
                <li class="dropdown">
                    <a href="alliances.html"><span>Alliances</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('ui.front.create-new-community') }}">Community </a></li>
                        <li><a href="{{ route('ui.front.create-plan') }}">Create Your plan</a></li>
                        <li><a href="{{ route('ui.front.create-new-community') }}">Edutainment, Culture and Lifestyle</a>
                        </li>
                        <li><a href="{{ route('ui.front.i-need-help') }}">I Need Help</a></li>
                        <li><a href="{{ route('ui.front.i-can-help') }}">I can help</a></li>
                        <li><a href="{{ route('ui.front.mentoring-portal')}}">Mentoring Portals</a></li>
                        <li><a href="{{ route('ui.front.share-experiences') }}">Share Experiences</a></li>
                        <li><a href="{{ route('ui.front.who-am-i') }}">Who am I</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link scrollto" href="">Contact</a>
                </li>
                <li class="dropdown">
                    <a href="#"><span>Account</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="">User </a></li>
                        <li><a href="">Password Reset</a></li>
                        <li><a href="">Logout</a></li>

                    </ul>
                </li>
                <li>
                    <a class="nav-link scrollto" href="">Add List</a>
                </li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
