<?php

/**

 * The template for displaying the header

 *

 * Displays all of the head element and everything up until the "site-content" div.

 *

 * @package WordPress

 * @subpackage Twenty_Sixteen

 * @since Twenty Sixteen 1.0

 */



?><!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php endif; ?>

	<?php wp_head(); ?>

    

	<link rel="preload" href="https://www.lmaclinic.com/wp-content/themes/lmaclinic/fonts/fontawesome-webfont.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="preload" href="https://www.lmaclinic.com/wp-content/themes/lmaclinic/fonts/glyphicons-halflings-regular.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="preload" href="https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVZ0bf8pkAg.woff2" as="font" type="font/woff2" crossorigin>

    

<!-- Bootstrap -->

    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

    <?php if ( is_page('home-test-2')) : ?>

    <link href="<?php echo get_template_directory_uri(); ?>/css/custom-menu.css" rel="stylesheet">

    <?php else: ?>

    <link href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet">

    <?php endif; ?>

    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">



<!-- MD Slider CSS -->

<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/md-slider/css/animate.css" media="all" />

<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/md-slider/css/md-slider.css" media="all" />

<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/md-slider/css/md-slider-style.css" media="all" />



<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon" />



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

      <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>

      <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>

    <![endif]-->    

 



<!-- Global site tag (gtag.js) - Google Ads: 1068436790 -->

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1068436790"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'AW-1068436790');

</script> 



<!-- TrustBox script -->

<script src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>

<!-- End TrustBox script -->



<!-- Facebook Pixel Code -->

<!--<script>

  !function(f,b,e,v,n,t,s)

  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?

  n.callMethod.apply(n,arguments):n.queue.push(arguments)};

  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

  n.queue=[];t=b.createElement(e);t.async=!0;

  t.src=v;s=b.getElementsByTagName(e)[0];

  s.parentNode.insertBefore(t,s)}(window, document,'script',

  'https://connect.facebook.net/en_US/fbevents.js');

  fbq('init', '520202191519256');

  fbq('track', 'PageView');

</script>

<noscript><img height="1" width="1" style="display:none"

  src="https://www.facebook.com/tr?id=520202191519256&ev=PageView&noscript=1"

/></noscript>-->

<!-- End Facebook Pixel Code -->

  

</head>



<body <?php body_class(); ?>>

<?php if ( is_page( 'home-test-2' )) : ?>


<div class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="lma-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>"></a>                    
                </div><!-- END .lma-logo -->
            </div>
            <div class="col-md-7">
                <div class="header-navigation">
                <nav class="navbar navbar-default">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            </button>

        </div>

        <div id="navbar1" class="navbar-collapse collapse">

            <ul class="nav navbar-nav">

                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">

                <svg class="icon icon-home" width="16" height="16" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 93.6 92.4" style="enable-background:new 0 0 93.6 92.4;" xml:space="preserve">
<path d="M46.7,92.4c-12.2,0-24.3,0-36.5,0C2.4,92.4,0,90.1,0,82.4c0-14.1,0.1-28.3,0-42.4c0-4,1.3-6.9,4.5-9.4
    c12.3-9.4,24.6-18.8,36.8-28.3c3.9-3.1,7.4-2.9,11.2,0.1c12.1,9.4,24.2,18.8,36.4,28c3.4,2.5,4.8,5.6,4.7,9.8
    c-0.2,14-0.1,28-0.1,41.9c0,8.2-2.1,10.2-10.4,10.3C71,92.4,58.8,92.4,46.7,92.4C46.7,92.4,46.7,92.4,46.7,92.4z M27.7,84.5
    c0.1-1.9,0.2-3.5,0.2-5.1c0-7-0.1-14,0-21c0.1-5.9,2.7-8.4,8.6-8.5c1,0,2,0,3,0c29.3,0.2,26.1-3.7,26.2,26c0,2.9,0,5.8,0,8.6
    c7.2,0,13.4,0,20.1,0c0-15.1,0-29.9-0.1-44.7c0-1.1-0.8-2.6-1.7-3.3C71.8,26.9,59.4,17.4,46.8,7.6C34.3,17.3,21.9,26.8,9.6,36.5
    c-1.1,0.9-1.7,3.1-1.7,4.7c-0.1,11.5-0.1,23-0.1,34.5c0,2.9,0,5.8,0,8.8C14.9,84.5,21.1,84.5,27.7,84.5z M36,57.9c0,9,0,17.7,0,26.6
    c7.3,0,14.4,0,21.7,0c0-9,0-17.7,0-26.6C50.3,57.9,43.3,57.9,36,57.9z"/>
</svg>

                </a></li>

                <li><a href="#"><span>Surgery</span></a></li>
                

                <!-- START Mega Menu -->

                <li class="dropdown mega-dd"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><span>Non-Surgical</span> <b class="caret"></b></a>

                    <ul class="dropdown-menu mega-dd-box">

                        <div class="mega-dd-table">

                        <li class="dropdown dropdown-submenu mega-dd-cell"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Face</a>

                            <ul class="dropdown-menu">

                                <li><a href="<?php echo get_site_url(); ?>/anti-wrinkle-injections">Anti Wrinkle Injections</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/aquamid">Aquamid</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/biorevitalization">Biorevitalization</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/co2-laser">CO2 Laser</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/cosmelan">Cosmelan</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/scar-treatment">Deep Acne Scars</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/dermal-fillers">Dermal Fillers</a></li>

                                <div class="moremenu1">
                                <li class="moremenu-item"><a href="<?php echo get_site_url(); ?>/ellanse">Ellanse</a></li>                                

                                <li><a href="<?php echo get_site_url(); ?>/blepharoplasty-eyelid-surgery">Eyelid Surgery</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/eyelight">Eyelight</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/exilis-ultra-360">Exilis Ultra 360</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/facelift-surgery">Facelift</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/fillers-under-eyes">Fillers Under Eyes</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/julaine">Julaine</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/lanluma-face">Lanluma</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/plasma-face-lift">Plasma Face Lift - PRP</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/led-laser-mask">LED Laser Mask</a></li>

                                </div>

                            </ul>
                            <a href="#" class="viewmenu1">View All</a>

                        </li>

                        <li class="dropdown dropdown-submenu mega-dd-cell"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Body</a>

                            <ul class="dropdown-menu">

                                <li><a href="<?php echo get_site_url(); ?>/bodytite">BodyTite</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/brazilian-butt-lift">Brazilian Butt Lift</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/breast-augmentation">Breast Augmentation</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/cellulaze">Cellulaze</a></li>                           

                                <li><a href="<?php echo get_site_url(); ?>/exilis-ultra-360">Exilis Ultra 360</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/freezing-fat">Fat Freezing</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/genefill">Genefill</a></li>                                

                                <div class="moremenu2">                                    

                                <li class="moremenu-item"><a href="<?php echo get_site_url(); ?>/aging-hands">Hand Rejuvenation</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/hifu">HIFU</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/hyacorp">HYAcorp Buttock</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/intimate-lightening">Intimate Lightening</a></li>                                                              

                                <li><a href="<?php echo get_site_url(); ?>/laser-assisted-liposuction-lal-smartlipo-suction">Non-Surgical Liposuction</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/polynucleotide-body">Polynucleotide Body</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/profhilo">Profhilo Body</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/breast-augmentation">Sculptra Breast Lift</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/sculptra-butt-lift">Sculptra Buttock Lift</a></li>

                                
                                </div>
                            </ul>
                            <a href="#" class="viewmenu2">View All</a>

                        </li>

                        <li class="dropdown dropdown-submenu mega-dd-cell"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Conditions</a>

                            <ul class="dropdown-menu">

                                <li><a href="<?php echo get_site_url(); ?>/scar-treatment">Acne Scars</a></li>                                

                                <li><a href="<?php echo get_site_url(); ?>/aging-hands">Aging Hand</a></li>                                

                                <li><a href="<?php echo get_site_url(); ?>/cellulite">Cellulite</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/dark-circles">Dark Circles Under Eyes</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/smartlipo">Double Chin</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/anti-wrinkle-injections-excessive-sweating">Excessive Sweating</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/anti-wrinkle-injections">Facial Wrinkles</a></li>

                                <div class="moremenu3">    

                                <li class="moremenu-item"><a href="<?php echo get_site_url(); ?>/hair-transplant">Hair Loss</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/sculptra-butt-lift">Hollow Buttock</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/under-eye-treatments">Hollow Under Eyes</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/intimate-lightening">Intimate Lightening</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/scars">Keloid Scars</a></li> 

                                <li><a href="<?php echo get_site_url(); ?>/sculptra">Loss Of Facial Volume</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/hydrafacial">Melasma</a></li>

                                </div>

                            </ul>
                            <a href="#" class="viewmenu3">View All</a>

                        </li>
                        

                        </div><!-- END .mega-dd-table -->

                    </ul>

                </li>

                <!-- END Mega Menu -->

                <li><a href="<?php echo get_site_url(); ?>/photo-gallery"><span>Lasers</span></a></li>
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><span>Cellulaze</span> <b class="caret"></b></a>

                    <ul class="dropdown-menu">

                        <li><a href="<?php echo get_site_url(); ?>/cellulaze">Cellulaze</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/photos-cellulaze">Before and After Photos</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/videos#cellulaze">Videos</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/how-does-cellulaze-work">Step by step Cellulaze</a></li>

                    </ul>

                </li>
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><span>Smartlipo</span> <b class="caret"></b></a>

                    <ul class="dropdown-menu">

                        <li><a href="<?php echo get_site_url(); ?>/smartlipo">Smartlipo</a></li>
                        

                        <li><a href="<?php echo get_site_url(); ?>/photos-smartlipo">Before and After Photos</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/videos#smartlipo" title="Videos">Videos</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/smartlipo-laser-assisted-liposuction-all-types" title="All Types of Smartlipo">All Types of Smartlipo</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/step-step-smartlipo">Step by step Smartlipo</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/smartlipo-for-men">Smartlipo for Men</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/smartlipo-gynaecomastia">Smartlipo Gynaecomastia</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/smartlipo-laser-excessive-sweating">Smartlipo for sweating</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/laser-breast-lifting">Smartlipo Breast Lifting</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/smartlipo-e-book">Mr Ayoubi's Smartlipo E-Book</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/smartlipo-related-articles">Smartlipo Related Medical Articles</a></li>

                    </ul>

                </li>

                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><span>Sculptra</span> <b class="caret"></b></a>

                    <ul class="dropdown-menu">

                        <li><a href="<?php echo get_site_url(); ?>/sculptra">Sculptra</a></li>                                

                        <li><a href="<?php echo get_site_url(); ?>/photos-sculptra">Before and After Photos</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/videos#sculptra">Videos</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/sculptra-butt-lift">Sculptra Butt Lift</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/sculptra-hip-dips">Sculptra Hip Dips</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/aging-hands">Sculptra for Aging Hands</a></li>

                        

                    </ul>

                </li>                         
                

                <li><a href="<?php echo get_site_url(); ?>/photo-gallery"><span>Before & After</span></a></li>

                <li><a href="<?php echo get_site_url(); ?>/videos"><span>Videos</span></a></li>

                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><span>Media</span> <b class="caret"></b></a>

                  <ul class="dropdown-menu">

                    <li><a href="https://www.lmaclinic.com/lma/dr-ayoubi-blog">Blog</a></li>

                    <li><a href="https://www.lmaclinic.com/lma/us-in-media">Media</a></li>

                    <li><a href="https://www.lmaclinic.com/lma/news-events">Events </a></li>

                    <li><a href="https://www.lmaclinic.com/lma/testimonials">Testimonials</a></li>

                  </ul>

                </li>

                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><span>About</span> <b class="caret"></b></a>

                    <ul class="dropdown-menu">

                        <li><a href="<?php echo get_site_url(); ?>/ayham-al-ayoubi">Meet Mr Ayoubi</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/consultants">Consultants</a></li>

                        <li><a href="https://www.lmaclinic.com/lma/dr-ayoubi-blog" target="_blank">Blog</a></li>

                        <li><a href="https://www.lmaclinic.com/lma/us-in-media" target="_blank">Media</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/medical-links">Memberships</a></li>

                        <li><a href="https://www.lmaclinic.com/lma/news-events" target="_blank">News & Events</a></li>

                        <li><a href="https://www.lmaclinic.com/lma/testimonials" target="_blank">Testimonials</a></li>

                    </ul>

                </li>

            </ul>

        </div>

    </nav><!-- END .navbar -->

</div>
                
            </div>
            <div class="col-md-3">
                <div class="phone-header">
                    <a href="tel:+442083421100" class="cta-phone">+44 (0) 208 342 1100</a>
                    <a href="<?php echo get_site_url(); ?>/contact" class="cta-button">Get in Touch</a>
                </div><!-- END .phone-header -->                
            </div>
        </div>
    </div><!-- END .container -->

</div><!-- END .header-section -->


<?php else: ?>
    



<div class="header-section">

    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <div class="lma-logo">

                	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>"></a>                    

                </div><!-- END .lma-logo -->

            </div>

            <div class="col-md-6">

                <div class="lma-phone">

                    <a href="tel:+442083421100">+44 (0) 208 342 1100</a>

                </div><!-- END .phone-header -->

                <div class="button-header">

                    <ul>

                        <li><a href="<?php echo get_site_url(); ?>/contact">Make a Booking</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/contact">Make An Enquiry</a></li>

                    </ul>

                </div> <!-- END .button-header -->

            </div>

        </div>

    </div><!-- END .container -->

    <div class="container-fluid header-navigation">

    <div class="row">

    <nav class="navbar navbar-default">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            </button>

        </div>

        <div id="navbar1" class="navbar-collapse collapse">

            <ul class="nav navbar-nav">

                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">

                <svg class="icon icon-home" width="20" height="17" aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 17">

    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

        <g id="Rounded" transform="translate(-816.000000, -289.000000)">

            <g id="Action" transform="translate(100.000000, 100.000000)">

                <g id="-Round-/-Action-/-home" transform="translate(714.000000, 186.000000)">

                    <g transform="translate(0.000000, 0.000000)">

                        <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>

                        <path d="M10,19 L10,14 L14,14 L14,19 C14,19.55 14.45,20 15,20 L18,20 C18.55,20 19,19.55 19,19 L19,12 L20.7,12 C21.16,12 21.38,11.43 21.03,11.13 L12.67,3.6 C12.29,3.26 11.71,3.26 11.33,3.6 L2.97,11.13 C2.63,11.43 2.84,12 3.3,12 L5,12 L5,19 C5,19.55 5.45,20 6,20 L9,20 C9.55,20 10,19.55 10,19 Z" id="🔹Icon-Color" fill="#1D1D1D"></path>

                    </g>

                </g>

            </g>

        </g>

    </g>

</svg>

                </a></li>

                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>

                    <ul class="dropdown-menu">

                        <li><a href="<?php echo get_site_url(); ?>/ayham-al-ayoubi">Meet Mr Ayoubi</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/consultants">Consultants</a></li>

                        <li><a href="https://www.lmaclinic.com/lma/dr-ayoubi-blog" target="_blank">Blog</a></li>

                        <li><a href="https://www.lmaclinic.com/lma/us-in-media" target="_blank">Media</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/medical-links">Memberships</a></li>

                        <li><a href="https://www.lmaclinic.com/lma/news-events" target="_blank">News & Events</a></li>

                        <li><a href="https://www.lmaclinic.com/lma/testimonials" target="_blank">Testimonials</a></li>

                    </ul>

                </li>

                <!-- START Mega Menu -->

                <li class="dropdown mega-dd"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Treatments <b class="caret"></b></a>

                    <ul class="dropdown-menu mega-dd-box">

                    	<div class="mega-dd-table">

                        <li class="dropdown dropdown-submenu mega-dd-cell"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Face</a>

                        	<ul class="dropdown-menu">

                                <li><a href="<?php echo get_site_url(); ?>/anti-wrinkle-injections">Anti Wrinkle Injections</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/aquamid">Aquamid</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/biorevitalization">Biorevitalization</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/co2-laser">CO2 Laser</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/cosmelan">Cosmelan</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/scar-treatment">Deep Acne Scars</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/dermal-fillers">Dermal Fillers</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/ellanse">Ellanse</a></li>  
                                <li><a href="<?php echo get_site_url(); ?>/emsculpt">Emsculpt</a></li>                              

                                <li><a href="<?php echo get_site_url(); ?>/blepharoplasty-eyelid-surgery">Eyelid Surgery</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/eyelight">Eyelight</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/exilis-ultra-360">Exilis Ultra 360</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/facelift-surgery">Facelift</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/fillers-under-eyes">Fillers Under Eyes</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/julaine">Julaine</a></li>                                
                                <li><a href="<?php echo get_site_url(); ?>/lanluma-face">Lanluma</a></li>                                
                                <li><a href="<?php echo get_site_url(); ?>/co2-laser">Laser Acne Scars</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/led-laser-mask">LED Laser Mask</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/lip-enhancement">Lip Enhancement</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/mesotherapy-face">Mesotherapy</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/skinpen-microneedling">Microneedling</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/morpheus8">Morpheus8</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/neauvia">Neauvia</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/non-surgical-rhinoplasty">Non-Surgical Nose Job</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/plasma-face-lift">Plasma Face Lift - PRP</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/polynucleotide">Polynucleotide</a></li>                                
                                <li><a href="<?php echo get_site_url(); ?>/profhilo">Profhilo Face</a></li>

                                

                                <li><a href="<?php echo get_site_url(); ?>/relfydess">Relfydess</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/sculptra">Sculptra</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/silhouette-soft-face-lift">Silhouette Soft</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/thread-lift">Threadlift</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/velashape">VelaShape</a></li>

                            </ul>

                        </li>

                        <li class="dropdown dropdown-submenu mega-dd-cell"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Body</a>

                        	<ul class="dropdown-menu">

                                <li><a href="<?php echo get_site_url(); ?>/bodytite">BodyTite</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/brazilian-butt-lift">Brazilian Butt Lift</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/breast-augmentation">Breast Augmentation</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/cellulaze">Cellulaze</a></li>

                                <!--<li><a href="<?php echo get_site_url(); ?>/decollette">Decollette</a></li>-->
                                <li><a href="<?php echo get_site_url(); ?>/emsculpt">Emsculpt</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/emsculpt-neo">Emsculpt Neo</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/exilis-ultra-360">Exilis Ultra 360</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/freezing-fat">Fat Freezing</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/genefill">Genefill</a></li>                                

                                <li><a href="<?php echo get_site_url(); ?>/aging-hands">Hand Rejuvenation</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/hifu">HIFU</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/hyacorp">HYAcorp Buttock</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/intimate-lightening">Intimate Lightening</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/lanluma">Lanluma</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/lanluma-bum-lift">Lanluma Bum Lift</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/laser-breast-lifting">Laser Breast Lift</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/laser-liposuction">Laser Liposuction</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/liposuction">Liposuction</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/liquid-bbl">Liquid BBL</a></li>                                
                                <li><a href="<?php echo get_site_url(); ?>/morpheus8">Morpheus8</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/laser-assisted-liposuction-lal-smartlipo-suction">Non-Surgical Liposuction</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/polynucleotide-body">Polynucleotide Body</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/profhilo">Profhilo Body</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/sculptra-butt-lift">Sculptra Buttock Lift</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/sculptra-decollete">Sculptra Decollete</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/aging-hands">Sculptra Hands</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/sculptra-hip-dips">Sculptra Hip Dips</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/smartlipo">Smartlipo</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/buttock-lift">Buttock Lift</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/calf-implants">Calf Implant</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/trilipo">TriLipo Laser</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/tummy-tuck">Tummy Tuck </a></li>

                                <li><a href="<?php echo get_site_url(); ?>/vaser-lipo">Vaser Lipo</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/velashape">VelaShape</a></li>

                            </ul>

                        </li>

                        <li class="dropdown dropdown-submenu mega-dd-cell"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Conditions</a>

                        	<ul class="dropdown-menu">

                                <li><a href="<?php echo get_site_url(); ?>/scar-treatment">Acne Scars</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/ageing-decollete">Ageing Decollete</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/aging-hands">Aging Hand</a></li>                                

                                <li><a href="<?php echo get_site_url(); ?>/cellulite">Cellulite</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/dark-circles">Dark Circles Under Eyes</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/smartlipo">Double Chin</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/anti-wrinkle-injections-excessive-sweating">Excessive Sweating</a></li>                                

                                <li><a href="<?php echo get_site_url(); ?>/anti-wrinkle-injections">Facial Wrinkles</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/hair-transplant">Hair Loss</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/sculptra-butt-lift">Hollow Buttock</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/under-eye-treatments">Hollow Under Eyes</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/intimate-lightening">Intimate Lightening</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/scars">Keloid Scars</a></li> 

                                <li><a href="<?php echo get_site_url(); ?>/sculptra">Loss Of Facial Volume</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/hydrafacial">Melasma</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/co2-laser">Pigmentation</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/laser-thread-vein-removal">Rosacea</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/silhouette-soft-face-lift">Sagging Neck</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/scar-treatment">Scars</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/laser-thread-vein-removal">Spider Veins</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/co2-laser">Stretch Marks</a></li>                               

                            </ul>

                        </li>

                        <li class="dropdown dropdown-submenu mega-dd-cell"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Skin Treatments</a>

                        	<ul class="dropdown-menu">

                                <li><a href="<?php echo get_site_url(); ?>/biorevitalization">Biorevitalization</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/chemical-peels">Chemical Peels</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/co2-laser">CO2 Laser Resurfacing</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/cosmelan">Cosmelan</a></li>                                
                                <li><a href="<?php echo get_site_url(); ?>/dermaquest">Dermaquest</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/hifu">HIFU</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/hydrafacial">Hydrafacial</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/intraceuticals">Intraceuticals</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/anti-wrinkle-injections-excessive-sweating">Laser For Excessive Sweating</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/laser-hair-removal">Laser Hair Removal</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/led-laser-mask">LED Laser Mask</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/mesotherapy-face">Mesotherapy</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/mesotherapy-hair-care">Mesotherapy Hair</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/microdermabrasion">Microdermabrasion</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/skinpen-microneedling">Microneedling</a></li>                                
                                <li><a href="<?php echo get_site_url(); ?>/obagi-blue-skin-peel">Obagi</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/phenol-skin-peel">Phenol Skin Peel</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/polynucleotide-body">Polynucleotide Body</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/profhilo">Profhilo</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/sculptra">Sculptra For Scars</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/skin-peel">VI Skin Peel</a></li>

                                <li><a href="<?php echo get_site_url(); ?>/zo-skin-health">ZO Skin Health</a></li>                                   

                            </ul>

                        </li>

                        </div><!-- END .mega-dd-table -->

                    </ul>

                </li>

                <!-- END Mega Menu -->

                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Smartlipo <b class="caret"></b></a>

                    <ul class="dropdown-menu">

                        <li><a href="<?php echo get_site_url(); ?>/smartlipo">Smartlipo</a></li>


                        <li><a href="<?php echo get_site_url(); ?>/photos-smartlipo">Before and After Photos</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/videos#smartlipo" title="Videos">Videos</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/smartlipo-laser-assisted-liposuction-all-types" title="All Types of Smartlipo">All Types of Smartlipo</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/step-step-smartlipo">Step by step Smartlipo</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/smartlipo-for-men">Smartlipo for Men</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/smartlipo-gynaecomastia">Smartlipo Gynaecomastia</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/smartlipo-laser-excessive-sweating">Smartlipo for sweating</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/laser-breast-lifting">Smartlipo Breast Lifting</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/smartlipo-e-book">Mr Ayoubi's Smartlipo E-Book</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/smartlipo-related-articles">Smartlipo Related Medical Articles</a></li>

                    </ul>

                </li>

                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Cellulaze <b class="caret"></b></a>

                    <ul class="dropdown-menu">

                        <li><a href="<?php echo get_site_url(); ?>/cellulaze">Cellulaze</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/photos-cellulaze">Before and After Photos</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/videos#cellulaze">Videos</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/how-does-cellulaze-work">Step by step Cellulaze</a></li>

                    </ul>

                </li> 

                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Sculptra <b class="caret"></b></a>

                    <ul class="dropdown-menu">

                        <li><a href="<?php echo get_site_url(); ?>/sculptra">Sculptra</a></li>                                

                        <li><a href="<?php echo get_site_url(); ?>/photos-sculptra">Before and After Photos</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/videos#sculptra">Videos</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/sculptra-butt-lift">Sculptra Butt Lift</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/sculptra-decollete">Sculptra Decollete</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/sculptra-hip-dips">Sculptra Hip Dips</a></li>

                        <li><a href="<?php echo get_site_url(); ?>/aging-hands">Sculptra for Aging Hands</a></li>
                        

                    </ul>

                </li>

                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">CO2 Laser <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo get_site_url(); ?>/co2-laser">CO2 Laser</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/c02-laser-before-and-after">Before & After</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/co2-laser-acne-scars">CO2 Laser for Acne Scar</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/co2-laser-scar">C02 Laser for Scar Revision</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/co2-laser-stretch-marks">CO2 Laser for Stretch Marks</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/co2-laser-wrinkles">CO2 Laser for Wrinkles</a></li>
                    </ul>
                </li>

                
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Lanluma <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo get_site_url(); ?>/lanluma">Lanluma</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/lanluma-abdomen">Lanluma Abdomen</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/lanluma-bum-lift">Lanluma Bum Lift</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/lanluma-face">Lanluma Face</a></li>                        
                        <li><a href="<?php echo get_site_url(); ?>/lanluma-hip-dips">Lanluma for Hip Dips</a></li>
                    </ul>
                </li>
                                         

                <li><a href="<?php echo get_site_url(); ?>/photo-gallery">Before & After</a></li>

                

                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Videos & Media <b class="caret"></b></a>

                  <ul class="dropdown-menu">

                    <li><a href="https://www.lmaclinic.com/lma/dr-ayoubi-blog">Blog</a></li>
                    <li><a href="https://www.lmaclinic.com/lma/news-events">Events </a></li>
                    <li><a href="https://www.lmaclinic.com/lma/us-in-media">Media</a></li>
                    <li><a href="https://www.lmaclinic.com/lma/testimonials">Testimonials</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/videos">Videos</a></li>
                  </ul>

                </li>

                <li><a href="<?php echo get_site_url(); ?>/contact">Contact</a></li>

            </ul>

        </div>

    </nav><!-- END .navbar -->

    </div>

    </div><!-- END .container -->

</div><!-- END .header-section -->

	
<?php endif; ?>


<div class="marketing-area mobile-banner">

	<div id="md-slider-2-block" class="md-slide-items">

    

    	<?php /*?><div class="md-slide-item slide-1" data-transition="strip-down-left,right-curtain,bottom-curtain">

            <div class="md-mainimg">

                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mobile-banners/notice-banner-mobile.jpg" alt="notice-banner-mobile" />

            </div>

        </div><!-- END .md-slide-item --><?php */?>

        

        <div class="md-slide-item slide-1" data-transition="left-curtain,slide-in-left">

            <div class="md-mainimg">

                <a href="https://www.lmaclinic.com/lma/us-in-media" target="_blank">

                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mobile-banners/the-times.webp" alt="Sarah Vine for THE TIMES">

                </a>

            </div>

        </div><!-- END .md-slide-item -->

        

        <div class="md-slide-item slide-2" data-transition="strip-down-left,right-curtain,bottom-curtain">

            <div class="md-mainimg">

            	<a href="sculptra">

                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mobile-banners/princess.webp" alt="HRH Princess">

                </a>

            </div>

        </div><!-- END .md-slide-item -->

        

        <div class="md-slide-item slide-3" data-transition="top-curtain">

            <div class="md-mainimg">

            	<a href="sculptra">

                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mobile-banners/ayoubi.webp" alt="Mr Ayham Al-Ayoubi">

                </a>

            </div>

        </div><!-- END .md-slide-item -->

        

        <?php /*?><div class="md-slide-item slide-4" data-transition="top-curtain">

            <div class="md-mainimg">

                <a href="laser-hair-removal"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mobile-banners/gabriella.jpg" alt="gabriella" /></a>

            </div>

        </div><!-- END .md-slide-item -->

        <div class="md-slide-item slide-5" data-transition="strip-down-left,right-curtain,bottom-curtain">

            <div class="md-mainimg">

                <a href="consultants"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mobile-banners/surgeons.jpg" alt="surgeons" /></a>

            </div>

        </div><!-- END .md-slide-item -->

        <div class="md-slide-item slide-6" data-transition="top-curtain">

            <div class="md-mainimg">

                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mobile-banners/contact.jpg" alt="contact" />

            </div>

        </div><!-- END .md-slide-item --><?php */?>

  

	</div><!-- END #md-slider-1-block -->

    

</div><!-- END .marketing-area -->

    





<div class="marketing-area desktop-banner">

	<div id="md-slider-1-block" class="md-slide-items" data-thumb-width='80' data-thumb-height='55'>

    

    	<?php /*?><div class="md-slide-item slide-1" data-transition="strip-down-left,right-curtain,bottom-curtain" data-thumb-type='image' data-thumb-alt='' data-thumb='https://www.lmaclinic.com/wp-content/themes/lmaclinic/images/notice-banner.jpg'>

            <div class="md-mainimg" style="">

              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/notice-banner.jpg" alt="" />

            </div>            

            <div class="md-objects"></div>

        </div><!-- END .md-slide-item --><?php */?>

        

        <div class="md-slide-item slide-1" data-transition="left-curtain,slide-in-left" data-thumb-type='image' data-thumb-alt='' data-thumb='https://www.lmaclinic.com/wp-content/uploads/2017/01/newspaper.jpg'>

            <div class="md-mainimg">

                <img src="https://www.lmaclinic.com/wp-content/uploads/2017/01/newspaper.jpg" alt="Sarah Vine for THE TIMES"/>

            </div>

            <div class="btn-overlay btn-position01"><a href="https://www.lmaclinic.com/lma/us-in-media" target="_blank" class="btn-banner">Read More</a></div>

            <div class="md-objects"></div>

        </div><!-- END .md-slide-item -->

        

        <div class="md-slide-item slide-2" data-transition="strip-down-left,right-curtain,bottom-curtain" data-thumb-type='image' data-thumb-alt='' data-thumb='https://www.lmaclinic.com/wp-content/uploads/2017/01/1-3.jpg'>

            <div class="md-mainimg" style="">

              <img src="https://www.lmaclinic.com/wp-content/uploads/2017/01/1-3.jpg" alt="HRH Princess"/>

            </div>

            <div class="btn-overlay btn-position02"><a href="sculptra" class="btn-banner">Read More</a></div>

            <div class="md-objects"></div>

        </div><!-- END .md-slide-item -->

        

        <div class="md-slide-item slide-3" data-transition="top-curtain" data-thumb-type='image' data-thumb-alt='' data-thumb='https://www.lmaclinic.com/wp-content/themes/lmaclinic/images/banner-ayoubi.jpg'>

            <div class="md-mainimg" style="">

              <img src="https://www.lmaclinic.com/wp-content/themes/lmaclinic/images/banner-ayoubi.jpg" alt="Mr Ayham Al-Ayoubi"  />

            </div>

            <div class="btn-overlay btn-position03"><a href="ayham-al-ayoubi" class="btn-banner">Read More</a></div>

            <div class="md-objects"></div>

        </div><!-- END .md-slide-item -->

                

        

        <?php /*?>

		

		<div class="md-slide-item slide-4" data-transition="top-curtain" data-thumb-type='image' data-thumb-alt='' data-thumb='https://www.lmaclinic.com/wp-content/themes/lmaclinic/images/banner4.jpg'>

            <div class="md-mainimg" style="">

              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner4.jpg" alt="" />

            </div>

            <div class="btn-overlay btn-position03"><a href="laser-hair-removal" class="btn-banner">Read More</a></div>

            <div class="md-objects"></div>

        </div><!-- END .md-slide-item -->     

        

        <div class="md-slide-item slide-5" data-transition="strip-down-left,right-curtain,bottom-curtain" data-thumb-type='image' data-thumb-alt='' data-thumb='https://www.lmaclinic.com/wp-content/uploads/2017/01/3-1.jpg'>

            <div class="md-mainimg" style="">

                <img src="https://www.lmaclinic.com/wp-content/uploads/2017/01/3-1.jpg" alt="" />

            </div>

            <div class="btn-overlay btn-position04"><a href="consultants" class="btn-banner">Read More</a></div>

            <div class="md-objects"></div>

        </div><!-- END .md-slide-item -->

        

        <div class="md-slide-item slide-6" data-transition="top-curtain" data-thumb-type='image' data-thumb-alt='' data-thumb='https://www.lmaclinic.com/wp-content/uploads/2017/01/8.jpg'>

            <div class="md-mainimg" style="">

                <img src="https://www.lmaclinic.com/wp-content/uploads/2017/01/8.jpg" alt="" />

            </div>

            <div class="md-objects"></div>

        </div><!-- END .md-slide-item -->

		

		<?php */?>   

  

	</div><!-- END #md-slider-1-block -->

    

</div><!-- END .marketing-area -->

<div class="doctify-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <iframe id="0kv3s509" class="doctify-widget" src="https://www.doctify.com/wv2/average-category-rating-widget?containerId=0kv3s509&language=en&profileType=specialist&slugs=mr-ayham-al-ayoubi&tenantId=athena-uk&theme=lightBlue&widgetName=average-category-rating-widget" width="100%" frameborder="0" scrolling="no" name="average-category-rating-widget">Browser doesn't support frames</iframe>
<script type="text/javascript" src="https://www.doctify.com/wv2/doctify-widget-autoresize-plugin.js?tenantId=athena-uk&widgetName=average-category-rating-widget&containerId=0kv3s509"></script>

            </div>
        </div>
    </div>
</div><!-- END .doctify-section -->



<!--<div class="trustpilot-footer">

<div class="container">

<div class="row">

	<div class="col-md-12">



<div class="trustpilot-widget" data-locale="en-GB" data-template-id="53aa8912dec7e10d38f59f36" data-businessunit-id="5829b7750000ff0005977ce3" data-style-height="140px" data-style-width="100%" data-theme="light" data-stars="4,5" data-review-languages="en">

  <a href="https://uk.trustpilot.com/review/www.lmaclinic.com" target="_blank" rel="noopener">Trustpilot</a>

</div>



    </div>

</div>

</div>

</div>--><!-- END .trustpilot-footer -->