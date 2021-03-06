<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn real-life skills, share your achievements and earn Badges! Better Being is a site that rewards self improvement in a visual and satisfying way.">
    <link rel="apple-touch-icon" sizes="152x152" href="/resources/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/resources/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/resources/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/resources/favicons/manifest.json">
    <link rel="mask-icon" href="/resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/resources/favicons/favicon.ico">
    <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <script src="resources/js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/Grid.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="tooltipster/dist/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-light.min.css">
    <link rel="stylesheet" type="text/css" href="tooltipster/dist/css/tooltipster.bundle.css">
    
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    <link rel="stylesheet" type="text/css" href="vendors/fonts/Sploopy.ttf">
    
    <link href="https://fonts.googleapis.com/css?family=Overpass:100,200,300,400,500,600,700,800" rel="stylesheet">
    
    <title>

        @yield('browsertitle')
    
    </title>

    
    <script>
        $('body').css('overflow-y', 'hidden');
        
        $(document).ready(function() {
            
            $('.tooltip2').tooltipster({
                theme: 'tooltipster-light-customized',
                animation: 'dropdown',
                delay: 0,
                trigger: 'click',
                interactive: true,
                side: ['bottom'],
                animationDuration: 400,
                contentCloning: true,
                zIndex: 98
                
            });
            
            $('.tooltip').tooltipster({
                theme: 'tooltipster-light-customized-menu',
                animation: 'dropdown',
                delay: 0,
                trigger: 'click',
                interactive: true,
                side: ['bottom'],
                animationDuration: 400,
                contentCloning: true,
                zIndex: 98
                
            });
            

            
        });
        


            //$('html, body').stop().animate({scrollTop: $(this).offset().top-200}, 600);

        
    </script>
    

    
    <div class="tooltip_templates">
        <span id="tooltip_content">
            <i class="ion-paintbrush badge-border badge-tooltip ">
            <div id="#tooltip_scroll"></div>
            </i>
            
            <p>Art and Design</p>
            <p2>Traditional drawing and painting skills, graphic design, sculpture, photography and more.</p2>
            <a class="btn btn-ghost badge-dropdown" href="#">
                <span class="innerButton">
                    Go to badge
                </span>
            </a>
        </span>
        
        <span id="tooltip_menu">
            <form method="post" action="#" class="login-form">
                    <div class="row">

                            <label for="">Username</label>
                            <input type="text" name="login-username" id="login-username" placeholder="" required>
                    </div>

                    <div class="row">
                            <label for="">Password</label>
                            <input type="password" name="login-password" id="login-password" placeholder="" required>
                    </div>

                    <div class="row">
                            
                            <input type="submit" value="Log In">
                    </div>
                
                    <div class="row">
                            
                            <p>Not registered?<br> Click&nbsp;<a href="/register">here</a>&nbsp;to sign up&#33;</p>
                    </div>


                </form>
        </span>
    </div>
    
</head>

<body>
    <header>
        <nav class="js--header">
            <div class="row">
                <div class="nav-bar-full">
                    <div class="logo-and-title"> <a href="/" class="nostyle"><i class="ion-ios-body logo"></i></a>
                        <div class="logo-text"> <a href="/">BETTER BEING</a> </div>
                    </div>
                    <input id="toggle-dropdown" class = "dropdown" type="checkbox" checked>

                    <label class="mobile-nav-icon js--nav-icon dropdown" for="toggle-dropdown"><i class="ion-navicon-round"></i></label>
                    <div class="main-nav js--main-nav">
                        <li> <a href="/">
                                    Home
                                </a> </li>
                        <li> <a href="#">
                                    Leaderboards
                                </a> </li>
                        <li> <a href="#">
                                    About
                                </a> </li>
                        <li class="sign-up tooltip" data-tooltip-content="#tooltip_menu"> <a href="#">
                                    Log in
                                </a> </li>
                        <div class="social-links-box">
                            <div class="social-links">
                                <li> <a href="#"><i class="ion-social-facebook"></i></a> </li>
                                <li> <a href="http://twitter.com/betterbeing"><i class="ion-social-twitter"></i></a> </li>
                                <li> <a href="#"><i class="ion-social-googleplus"></i></a> </li>
                                <li> <a href="#"><i class="ion-social-instagram-outline"></i></a> </li>
                            </div>
                        </div>
                    </div>
                    
                    <div class="dropdown" id="expand-dropdown">
                    
                    <div class="main-nav-sticky js--main-nav">
                        <li> <a href="#">
                                    Home
                                </a> </li>
                        <li> <a href="#">
                                    Leaderboards
                                </a> </li>
                        <li> <a href="#">
                                    About
                                </a> </li>
                        <li class="sign-up tooltip" data-tooltip-content="#tooltip_menu"> <a href="#">
                                    Log in
                                </a> </li>

                    </div>
                    

                    
                   
                    
                </div>
            </div>
            </div>
        </nav>
        <div class="hero-text-box">
            <h1>Be better, be the best, become a better being!</h1>
            <div class="two-buttons-container">
                <div class="two-buttons">
                    <a class="btn btn-full" href="/"> <span class="innerButton">
                                Home
                            </span> </a>
                    <a class="btn btn-ghost" href="#"> <span class="innerButton">
                                My Profile
                            </span> </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        
        <div class="container">
        
            @include('errormessage')
        
        </div>

        
        @yield('content')
        
    </div>
    
    <footer>
        <div class="row">
            <div class="footer-bar">
                <div class="footer-nav">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#" target="_blank">iOS App</a></li>
                    <li><a href="#" target="_blank">Android App</a></li>
                    <li><a href="#">Privacy</a></li>
                </div>
                <div class="social-links">
                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="http://twitter.com/betterbeing" target="_blank"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="ion-social-googleplus"></i></a></li>
                    <li><a href="#" target="_blank"><i class="ion-social-instagram-outline"></i></a></li>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="extra-footer"> </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/3.1.1/jquery-ui.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/scripts.js"></script>
    
    <link rel="stylesheet" type="text/css" href="tooltipster/dist/css/tooltipster.bundle.min.css" />
    <script type="text/javascript" src="tooltipster/dist/js/tooltipster.bundle.min.js"></script>
    <script type="text/javascript" src="vendors/js/jquery.scrollIntoView.min.js"></script>
    
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-91833428-1', 'auto');
        ga('send', 'pageview');
    </script>

    @yield('bottomjs')
    
</body>

</html>