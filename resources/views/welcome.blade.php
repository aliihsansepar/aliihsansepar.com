<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Hi, My name is Ali İhsan Şepar and i'm the web developer. This is what i am using technologies for development">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, Larave, VueJS">
    <meta name="author" content="Ali İhsan Şepar">
    <title>Ali İhsan Şepar | Web Developer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
</head>
<body>
<div class="bg"></div>

<div class="page">
    <div class="page-content">
        <section class="bio">
            <div class="header-content">
                <div class="header-photo">
                    <img src="{{ asset('assets/images/me.jpeg') }}" alt="Ali İhsan Şepar">
                </div>
                <div class="header-titles">
                    <h2>Ali İhsan Şepar</h2>
                    <h4>Web Backend Developer</h4>
                </div>
            </div>

            <div class="social-links">
                <ul>
                    <li><a href="https://www.linkedin.com/in/aliihsansepar/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://github.com/aliihsansepar" target="_blank"><i class="fab fa-github"></i></a></li>
                    <li><a href="https://twitter.com/Aliihsanse" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>

            <div class="header-buttons">
                <a href="{{ asset('assets/docs/cv.pdf') }}" target="_blank" class="cv">Download CV</a>
            </div>

            <div class="copyrights">© {{ now()->year }} All rights reserved.</div>
        </section>
        <div class="content-area">
            <section class="home">
                <div class="section-content center">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="title-block">
                                <h1>Ali İhsan Şepar</h1>
                                <div class="sp-subtitle">Web Backend Developer</div>
                                <div class="sp-subtitle">&lt;/building&gt;</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>
</div>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
