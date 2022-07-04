
@extends('layouts.app')

@section('content')

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />

    
    
    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/mdbgo.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7"}};
        !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>

		<style type="text/css">
            img.wp-smiley,
            img.emoji
            {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
	<link rel='stylesheet' id='wp-block-library-css'  href='https://mdbgo.com/wp-includes/css/dist/block-library/style.min.css?ver=5.7' type='text/css' media='all' />
    <link rel='stylesheet' id='mdb.min.css-css'  href='https://mdbgo.com/wp-content/themes/mdbgotheme/assets/css/mdb.min.css?ver=5.7' type='text/css' media='all' />
    <link rel='stylesheet' id='prism.css-css'  href='https://mdbgo.com/wp-content/themes/mdbgotheme/assets/css/prism.css?ver=5.7' type='text/css' media='all' />


    <style>
      body {
        background-color: hsl(0, 0%, 98.4%);
      }
      .text-theme {
        color: hsl(257, 64.7%, 40.4%);
      }
      .btn-theme,
      .bg-theme {
        background-color: hsl(257, 64.7%, 40.4%);
      }
      .btn-theme:hover {
        background-color: hsl(257, 64.7%, 30.4%);
      }
      .btn-theme:active,
      .btn-theme:focus {
        background-color: hsl(257, 64.7%, 20.4%);
      }

      .card > a {
        color: inherit !important;
      }

      .hover-shadow:hover {
        box-shadow: 0 8px 17px 0 rgb(0 0 0 / 7%), 0 6px 20px 0 rgb(0 0 0 / 7%);
      }
      .card {
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
          0 2px 4px -1px rgba(0, 0, 0, 0.06);
      }
    </style>
    <style type="text/css" media="screen">
        html { margin-top: 0 !important; }
        * html body { margin-top: 0 !important; }
        @media screen and ( max-width: 782px ) {
            html { margin-top: 0 !important; }
            * html body { margin-top: 0 !important; }
        }
        #wpadminbar {
            top: auto;
            bottom: 0; }

        @media screen and (max-width: 600px) {
            #wpadminbar {
                position: fixed;
            }
        }
        #wpadminbar .menupop .ab-sub-wrapper,
        #wpadminbar .shortlink-input {
            bottom: 32px;
        }

        @media screen and (max-width: 782px) {
            #wpadminbar .menupop .ab-sub-wrapper,
            #wpadminbar .shortlink-input {
                bottom: 46px;
            }
        }
        @media screen and (min-width: 783px) {
            .admin-bar.masthead-fixed .site-header {
                top: 0;
            }
        }
    </style>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T6DPGHB');</script>
    <!-- End Google Tag Manager -->

    </head>

    <body class="" data-mdb-spy="scroll" data-mdb-target="#section-scrollspy" data-mdb-offset="250">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T6DPGHB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <header>
            <style>
        @media (min-width: 1440px) {
            .pl-240px {
                padding-left: 240px;
            }
        }

        @media (min-width: 1440px) {
            .hide-content {
                display: none;
            }
        }
        </style>

        <!-- Navbar -->

        <nav id="mdb-navbar" class="navbar navbar-expand-lg navbar-light fixed-top " style="background-color:#0E4C92;">

            <!-- Container wrapper -->

            <div class="container-fluid">

                
                <!-- Navbar brand -->
                <a class="navbar-brand me-2" href="https://mdbgo.com/">
                    <img src="{{asset('assets/images/plane.png')}}" height="30" alt="" loading="lazy" style="margin-top: -1px" />
                </a>
                            <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link d-none d-lg-inline-block" href="https://mdbgo.com/" style="color: #fff;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-none d-lg-inline-block" href="https://mdbgo.com/getting-started/" style="color: #fff;">Get started</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-none d-lg-inline-block" href="https://mdbgo.com/pricing/" style="color: #fff;">Pricing</a>
                    </li>
                    
                </ul>

                <!-- Left links -->

                <div class="d-flex align-items-center">

                    <style>
                        .btn :hover{
                            background-color: #000;
                        }
                    </style>

                    <a type="button" class=" px-3 mb-1 me-2 text-theme" data-mdb-toggle="modal" data-mdb-target="#loginModal" style="color: #fff;">
                        Login
                    </a>

                    <a type="button" class=" px-3 mb-1 me-2 text-theme" data-mdb-toggle="modal" data-mdb-target="#registerModal" style="color: #fff;">
                        Sign up
                    </a>

                    
                </div>

                
                
            </div>

            
        </nav>

            


        <main class="mt-5" style="padding-top: 58px">

            <div class="container-fluid">
                <!-- Section: Intro -->
                <section class="mt-md-4">

                    <div class="row">

                        <div class="col-md-6 mb-4 mb-md-0 d-flex align-items-center">
                            <div>
                                <img src="{{asset('assets/images/gg.jpg')}}" alt="" height="400" width="600" alt="" loading="lazy" style="margin-top: -1px">
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 mb-md-0 d-flex align-items-center">

                            <div   class="bg-image hover-overlay ripple card ripple-surface ripple-surface-light" data-ripple-color="light">
                           
                            
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <section class="l-guide-section _text-collection">
                                <div class="l-guide-section__inner">
                                    <div class="o-content ">

                                        <p>Cet aéroport présente une architecture contemporaine qui peut accueillir jusqu’à 5 millions de passagers par an.</p>

                                        <p>En moins d'une année, l’aéroport de DagDag a battu son record en enregistrant  près d'un millions de voyageurs.
                                        </p>
</p>
                                      
                                        <h2>Comment se rendre à Kayes depuis l’aéroport ?</h2>

                                        <h3>Taxi</h3>

                                        <p><strong>La manière la plus économique</strong> de se rendre à Kayes ville depuis l’aéroport est de prendre le <strong><a href="#">Taxi</a></strong>.
                                         En 20 ou 30 minutes, vous arriverez en centre-ville en prenant la RN 12. Le trajet en taxi depuis l’aéroport jusqu’au centre-ville peut coûter aux alentours de <strong>25 <bdi>€</bdi> (26,30 <span><bdi>US$</bdi></span>).</strong></p>
                                        
                                        <h3>Service de transfert</h3>

                                        <p>Il s’agit de l’option la plus pratique pour ceux qui ne souhaitent pas se compliquer. En réservant le service à l’aéroport, <strong>u</strong><strong>n chauffeur vous attendra dans le hall des arrivées de l’aéroport avec une pancarte portant votre nom</strong> et vous conduira à votre hôtel le plus vite possible. Vous pouvez <a href="/transferts" title="Transfert à Porto"><strong>réserver en ligne le service de transfert sur Visitons Porto</strong></a>. <strong>Le prix est semblable à celui du taxi</strong>.</p>

                                        <h2>Un conseil</h2>

                                        <p><strong>Si vous pensez acheter la <a href="/carte-porto-card" title="Carte Porto Card">Porto Card</a>, le mieux est de l’acheter à l’aéroport</strong>. Ainsi, vous pourrez l’utiliser pour de le trajet en métro ou en bus pour aller jusqu’en centre-ville. À partir du moment où vous la validez, vous pourrez l’utiliser pendant 24 heures.</p>

                                    </div>   

                                </div>
                            </section>
                                                    

                        </div>

                            <div class="col-md-6">



                            </div>
                    </div>


                    
                </section>

                

                <section class="text-center my-4 py-4 my-md-5 py-md-5">


                </section>

               
                
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <div class="card rounded-3">
                            <a href="#custom-app" class="ripple" data-mdb-smooth-scroll="smooth-scroll" data-mdb-offset="50">
                                <div class="card-body hover-shadow">
                                    <i class="fas fa-rocket fa-2x mb-3 text-theme"></i>

                                    <p class="mb-0">Custom app</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card rounded-3">
                            <a href="https://mdbgo.com/wordpress-shop/">
                                <div class="card-body hover-shadow">
                                    <i class="fas fa-cart-plus fa-2x mb-3 text-theme"></i>

                                    <p class="mb-0">eCommerce</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card rounded-3">
                            <a href="https://mdbgo.com/wordpress-blog/" class="ripple">
                                <div class="card-body hover-shadow">
                                    <i class="fas fa-pen-nib fa-2x mb-3 text-theme"></i>

                                    <p class="mb-0">Blog</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </main>

        <footer id="mdb-footer" class="mt-5" style="background-color: hsl(216, 25%, 95.1%)">

            <style>
                #mdb-footer {
                    padding-left: 0px;
                }

                @media (max-width: 1439px) {
                    #mdb-footer {
                        padding-left: 0;
                    }
                }
            </style>

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1)">

                © 2022 Copyright:
                <a class="" href="https://mdbootstrap.com/"> <strong>Dag-Dag-airport.com</strong></a>
            </div>
            <!-- Fin copyright -->

        </footer>
                
                
        <script type='text/javascript' src='https://mdbgo.com/wp-content/themes/mdbgotheme/assets/js/auth.js?ver=5.7' id='auth.js-js'></script>
        <script type='text/javascript' src='https://mdbgo.com/wp-content/themes/mdbgotheme/assets/js/mdb.min.js?ver=5.7' id='mdb.min.js-js'></script>
        <script type='text/javascript' src='https://mdbgo.com/wp-content/themes/mdbgotheme/assets/js/prism.js?ver=5.7' id='prism.js-js'></script>
        <script type='text/javascript' src='https://mdbgo.com/wp-includes/js/wp-embed.min.js?ver=5.7' id='wp-embed-js'></script>

    </body>

</html>

@endsection
