<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <!-- OG -->
        <meta property="og:site_name" content=""/>
        <meta property="og:title" content=""/>
        <meta property="og:description" content="@yield('description')" />
        <meta property="og:image" content=""/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content=""/>
        <!-- OG -->

        <link rel="shortcut icon" href="/img/favicon.png" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <a id="backToTop">
            <img src="img/top.svg" alt="Back to top">
        </a>
        <header class="header">
            <div class="container">
                <div class="left">
                    <figure>
                        <a href="/"><img src="img/robson-lopes-martins.png" alt="Robson Lopes Martins" width="51" height="51"></a>
                    </figure>
                    <a href="/"><span>rob-ux.design</span></a>
                </div>
                <div class="right">
                    <a href="assets/robson-ux-resume-2021.pdf" download>
                        <img src="img/download.svg" alt="Download my resume">
                        <span>Download my resume</span>
                    </a>
                </div>
            </div>

        </header>
        @yield('content')
        <footer class="footer">
            <div class="container flex-footer">
                <div class="left">
                    <a href="https://br.linkedin.com/in/robson-ux" title="Follow me on LinkedIn" target="_blank"><img src="img/linkedin.svg" alt="Follow me on LinkedIn">Follow me on LinkedIn</a>
                </div>
                <span class="right-footer">Designed and developed by me</span>
            </div>
        </footer>
        <script type="text/javascript" src="/assets/js/jquery-2.2.4.js"></script>
        <script type="text/javascript" src="/js/script.js"></script>
    </body>
</html>