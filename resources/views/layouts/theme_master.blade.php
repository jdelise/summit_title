<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Summit Title Company')</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>

    <!-- CSS -->
    <link rel='stylesheet' href='/theme/css/global.css'>
    <link rel='stylesheet' href='/theme/css/structure.css'>
    <link rel='stylesheet' id='style-static' href='/theme/css/be_style.css'>
    <link rel='stylesheet' href='/theme/css/custom.css'>
    @yield('styles')
</head>

<body class="page-parent template-slider color-blue layout-full-width header-fixed subheader-transparent sticky-header sticky-white subheader-title-left">
<div id="Wrapper">
    <div id="Header_wrapper">
        <!-- Header -->
        <header id="Header">
            <!-- Header Top -  Info Area -->
            <div id="Action_bar">
                <div class="container">
                    <div class="column one">
                        <!-- Header - contact info area-->
                        <ul class="contact_details">
                            <li class="slogan">
                                Have any questions?
                            </li>
                            <li class="phone">
                                <i class="icon-phone"></i><a href="tel:+61383766284">+61 383 766 284</a>
                            </li>
                            <li class="mail">
                                <i class="icon-mail-line"></i><a href="mailto:noreply@envato.com">noreply@envato.com</a>
                            </li>
                        </ul>
                        <!--Social info area-->
                        <ul class="social">
                            <li class="skype">
                                <a href="#" title="Skype"><i class="icon-skype"></i></a>
                            </li>
                            <li class="facebook">
                                <a href="https://www.facebook.com/Beantown-Themes-653197714728193" title="Facebook"><i class="icon-facebook"></i></a>
                            </li>
                            <li class="googleplus">
                                <a href="https://plus.google.com/" title="Google+"><i class="icon-gplus"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#" title="Twitter"><i class="icon-twitter"></i></a>
                            </li>
                            <li class="vimeo">
                                <a href="https://vimeo.com/" title="Vimeo"><i class="icon-vimeo"></i></a>
                            </li>
                            <li class="youtube">
                                <a href="#" title="YouTube"><i class="icon-play"></i></a>
                            </li>
                            <li class="flickr">
                                <a href="https://www.flickr.com/" title="Flickr"><i class="icon-flickr"></i></a>
                            </li>
                            <li class="pinterest">
                                <a href="https://www.pinterest.com/" title="Pinterest"><i class="icon-pinterest"></i></a>
                            </li>
                            <li class="dribbble">
                                <a href="https://dribbble.com" title="Dribbble"><i class="icon-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Header -  Logo and Menu area -->
            <div id="Top_bar">
                <div class="container">
                    <div class="column one">
                        <div class="top_bar_left clearfix">
                            <!-- Logo-->
                            <div class="logo">
                                <a id="logo" href="index.html" title="BeTheme - Best Html Theme Ever"><img class="scale-with-grid" src="images/logo1.png" />
                                </a>
                            </div>
                            <!-- Main menu-->
                            <div class="menu_wrapper">
                                <nav id="menu">
                                    <ul id="menu-main-menu" class="menu">
                                        <li>
                                            <a href="#" target="_blank"><span>Layouts</span></a>
                                        </li>
                                        <li>
                                            <a href="features-color-skins.html"><span>Features</span></a>
                                        </li>
                                        <li class="current-menu-item">
                                            <a href="home-modern-header.html"><span>Headers</span></a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="home-modern-header.html"><span>Modern</span></a>
                                                </li>
                                                <li>
                                                    <a href="home-classic-header.html"><span>Classic</span></a>
                                                </li>
                                                <li>
                                                    <a href="home-stack-left-header.html"><span>Stack: Left</span></a>
                                                </li>
                                                <li>
                                                    <a href="home-stack-center-header.html"><span>Stack: Center</span></a>
                                                </li>
                                                <li>
                                                    <a href="home-stack-right-header.html"><span>Stack: Right</span></a>
                                                </li>
                                                <li>
                                                    <a href="home-below-slider-header.html"><span>Below Slider</span></a>
                                                </li>
                                                <li>
                                                    <a href="home-fixed-header.html"><span>Fixed</span></a>
                                                </li>
                                                <li>
                                                    <a href="home-simple-header.html"><span>Simple</span></a>
                                                </li>
                                                <li>
                                                    <a href="home-empty-header.html"><span>Empty</span></a>
                                                </li>
                                                <li>
                                                    <a href="home-transparent-header.html"><span>Transparent </span></a>
                                                </li>
                                                <li>
                                                    <a href="index-bar.html"><span>Split <i class="icon-forward"></i></span></a>
                                                </li>
                                                <li>
                                                    <a href="index-press.html"><span>Magazine <i class="icon-forward"></i></span></a>
                                                </li>
                                                <li>
                                                    <a href="index-webdesign.html"><span>Overlay <i class="icon-forward"></i></span></a>
                                                </li>
                                                <li>
                                                    <a href="index-agency.html"><span>Creative <i class="icon-forward"></i></span></a>
                                                </li>
                                                <li>
                                                    <a href="index-disco.html"><span>Creative: Always Open <i class="icon-forward"></i></span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="typography.html"><span>Shortcodes</span></a>
                                            <ul class="sub-menu mfn-megamenu mfn-megamenu-5 mfn-megamenu-bg flv_menu_bg">
                                                <li class="mfn-megamenu-cols-5">
                                                    <a class="mfn-megamenu-title" href="typography.html"><span>Typography</span></a>
                                                    <ul class="sub-menu mfn-megamenu mfn-megamenu-5 mfn-megamenu-bg flv_menu_bg">
                                                        <li class="scroll">
                                                            <a href="typography.html#basic"><span>Basic</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="typography.html#dropcap"><span>Dropcap &#038; Highlight</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="typography.html#tooltip"><span>Tooltip &#038; Blockquote</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="typography.html#buttons"><span>Buttons</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="typography.html#fancylinks"><span>Fancy links</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="typography.html#image"><span>Image frames</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="typography.html#forms"><span>Forms</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="typography.html#forms"><span>Icon block</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="typography.html#dividers"><span>Dividers</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="typography.html#googlefonts"><span>Google fonts</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="typography.html#alerts"><span>Alerts</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="typography.html#lists"><span>Lists &#038; Bullets lists</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mfn-megamenu-cols-5">
                                                    <a class="mfn-megamenu-title" href="boxes-infographics.html"><span>Boxes &#038; Infographics</span></a>
                                                    <ul class="sub-menu mfn-megamenu mfn-megamenu-5 mfn-megamenu-bg flv_menu_bg">
                                                        <li class="scroll">
                                                            <a href="boxes-infographics.html#iconbox"><span>Icon box</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="boxes-infographics.html#flatbox"><span>Flat box</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="boxes-infographics.html#hoverbox"><span>Hover box</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="boxes-infographics.html#photobox"><span>Photo box</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="boxes-infographics.html#slidingbox"><span>Sliding box</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="boxes-infographics.html#articlebox"><span>Article box</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="boxes-infographics.html#promobox"><span>Promo box</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="boxes-infographics.html#trailerbox"><span>Trailer box</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="boxes-infographics.html#ideabox"><span>Idea box</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="boxes-infographics.html#quickfacts"><span>Quick facts</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="boxes-infographics.html#counter"><span>Counter &#038; Chart</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="boxes-infographics.html#progressbar"><span>Skills</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mfn-megamenu-cols-5">
                                                    <a class="mfn-megamenu-title" href="content-blocks.html"><span>Content blocks</span></a>
                                                    <ul class="sub-menu mfn-megamenu mfn-megamenu-5 mfn-megamenu-bg flv_menu_bg">
                                                        <li class="scroll">
                                                            <a href="content-blocks.html#tabs"><span>Tabs</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-blocks.html#accordion"><span>Accordion</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-blocks.html#accordion"><span>Toggle</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-blocks.html#table"><span>Table</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-blocks.html#faq"><span>FAQ</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-blocks.html#features"><span>Features</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-blocks.html#lists"><span>Lists</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-blocks.html#pricingbox"><span>Pricing boxes</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-blocks.html#pricingtable"><span>Pricing tables</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-blocks.html#contentslider"><span>Content slider</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-blocks.html#offerslider"><span>Offer slider</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-blocks.html#offersliderthumb"><span>Offer slider thumb</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mfn-megamenu-cols-5">
                                                    <a class="mfn-megamenu-title" href="content-elements.html"><span>Content elements</span></a>
                                                    <ul class="sub-menu mfn-megamenu mfn-megamenu-5 mfn-megamenu-bg flv_menu_bg">
                                                        <li class="scroll">
                                                            <a href="content-elements.html#timeline"><span>Timeline</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-elements.html#contentlink"><span>Content link</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-elements.html#howitworks"><span>How it works</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-elements.html#iconbar"><span>Icon &#038; Social bar</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-elements.html#getintouch"><span>Get in touch</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-elements.html#getintouch"><span>Opening hours</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-elements.html#getintouch"><span>Infobox</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-elements.html#mapbig"><span>Map with address box</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-elements.html#team"><span>Team &#038; Team list</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-elements.html#fancyheading"><span>Fancy heading</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-elements.html#calltoaction"><span>Call to action</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="content-elements.html#fancydivider"><span>Fancy divider</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mfn-megamenu-cols-5">
                                                    <a class="mfn-megamenu-title" href="loops.html"><span>Loops</span></a>
                                                    <ul class="sub-menu mfn-megamenu mfn-megamenu-5 mfn-megamenu-bg flv_menu_bg">
                                                        <li class="scroll">
                                                            <a href="loops.html#blogslider"><span>Blog slider</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="loops.html#shopslider"><span>Shop slider</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="loops.html#portfolioslider"><span>Portfolio slider</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="loops.html#portfoliogrid"><span>Portfolio grid</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="loops.html#clients"><span>Clients</span></a>
                                                        </li>
                                                        <li class="scroll">
                                                            <a href="loops.html#testimonials"><span>Testimonials</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about.html"><span>Pages</span></a>
                                            <ul class="sub-menu mfn-megamenu mfn-megamenu-4">
                                                <li class="mfn-megamenu-cols-4">
                                                    <ul class="sub-menu mfn-megamenu mfn-megamenu-4">
                                                        <li>
                                                            <a href="about.html"><span><i class="icon-info"></i> About</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="careers.html"><span><i class="icon-heart-empty-fa"></i> Careers</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="contact.html"><span><i class="icon-address"></i> Contact</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="under-construction.html"><span><i class="icon-traffic-cone"></i> Under Construction</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mfn-megamenu-cols-4">
                                                    <ul class="sub-menu mfn-megamenu mfn-megamenu-4">
                                                        <li>
                                                            <a href="error.html"><span><i class="icon-traffic-cone"></i> Error 404</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="features.html"><span><i class="icon-star-empty"></i> Features</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery.html"><span><i class="icon-picture"></i> Gallery</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="blank-page.html"><span><i class="icon-doc"></i> Blank Page</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mfn-megamenu-cols-4">
                                                    <ul class="sub-menu mfn-megamenu mfn-megamenu-4">
                                                        <li>
                                                            <a href="help-center.html"><span><i class="icon-lifebuoy"></i> Help Center</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="how-it-works.html"><span><i class="icon-graduation-cap"></i> How it works?</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="our-team.html"><span><i class="icon-users"></i> Our team</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-sidebar-classic.html"><span><i class="icon-comment-fa"></i> Blog</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mfn-megamenu-cols-4">
                                                    <ul class="sub-menu mfn-megamenu mfn-megamenu-4">
                                                        <li>
                                                            <a href="press.html"><span><i class="icon-newspaper"></i> Press</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="pricing.html"><span><i class="icon-money-line"></i> Pricing</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="sidebar.html"><span><i class="icon-list-add"></i> Sidebar</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="dual-sidebars.html"><span><i class="icon-pause"></i> Dual Sidebars</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="blog-sidebar-classic.html"><span>Blog</span></a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog-full-classic.html"><span>Full Width</span></a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="blog-full-classic.html"><span>Classic</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-full-masonry.html"><span>Masonry</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-full-timeline.html"><span>Timeline</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="blog-sidebar-classic.html"><span>Blog</span></a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="blog-sidebar-classic.html"><span>Classic</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-sidebar-masonry.html"><span>Masonry</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-sidebar-timeline.html"><span>Timeline</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-object-post">
                                                    <a href="blog-single-content-builder.html"><span>Single Post</span></a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item-object-post">
                                                            <a href="blog-single-content-builder.html"><span>Content Builder</span></a>
                                                        </li>
                                                        <li class="menu-item-object-post">
                                                            <a href="blog-single-vertical-photo.html"><span>Vertical Photo</span></a>
                                                        </li>
                                                        <li class="menu-item-object-post">
                                                            <a href="blog-single-blockquote.html"><span>Blockquote</span></a>
                                                        </li>
                                                        <li class="menu-item-object-post">
                                                            <a href="blog-single-slideshow.html"><span>Revolution Slider</span></a>
                                                        </li>
                                                        <li class="menu-item-object-post">
                                                            <a href="blog-single-html5-video.html"><span>HTML5 Video</span></a>
                                                        </li>
                                                        <li class="menu-item-object-post">
                                                            <a href="blog-single-video.html"><span>YouTube / Vimeo</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="portfolio-full-grid.html"><span>Portfolio</span></a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="portfolio-full-grid.html"><span>Full Width</span></a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="portfolio-full-flat.html"><span>Flat</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="portfolio-full-grid.html"><span>Grid</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="portfolio-full-list.html"><span>List</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="portfolio-full-masonry.html"><span>Masonry</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="portfolio-full-masonry-flat.html"><span>Masonry Flat</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="portfolio-full-filtering.html"><span>jQuery Filtering</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="portfolio-sidebar-grid.html"><span>With Sidebar</span></a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="portfolio-sidebar-flat.html"><span>Flat</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="portfolio-sidebar-grid.html"><span>Grid</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="portfolio-sidebar-list.html"><span>List</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="portfolio-sidebar-masonry.html"><span>Masonry</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-object-portfolio">
                                                    <a href="portfolio-single-content_builder.html"><span>Single Project</span></a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item-object-portfolio">
                                                            <a href="portfolio-single-1.html"><span>Presentation 1</span></a>
                                                        </li>
                                                        <li class="menu-item-object-portfolio">
                                                            <a href="portfolio-single-2.html"><span>Presentation 2</span></a>
                                                        </li>
                                                        <li class="menu-item-object-portfolio">
                                                            <a href="portfolio-single-gallery.html"><span>Gallery</span></a>
                                                        </li>
                                                        <li class="menu-item-object-portfolio">
                                                            <a href="portfolio-single-mixed.html"><span>Mixed</span></a>
                                                        </li>
                                                        <li class="menu-item-object-portfolio">
                                                            <a href="portfolio-single-video.html"><span>Video</span></a>
                                                        </li>
                                                        <li class="menu-item-object-portfolio">
                                                            <a href="portfolio-single-content_builder.html"><span>Content Builder</span></a>
                                                        </li>
                                                        <li class="menu-item-object-portfolio">
                                                            <a href="portfolio-single-slider_sidebar.html"><span>Slider right sidebar</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop.html"><span>Shop</span></a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop.html"><span>Grid 3 Columns</span></a>
                                                </li>
                                                <li>
                                                    <a href="shop-grid-4col.html"><span>Grid 4 Columns</span></a>
                                                </li>
                                                <li>
                                                    <a href="shop-list.html"><span>List</span></a>
                                                </li>
                                                <li>
                                                    <a href="shop-masonry.html"><span>Masonry</span></a>
                                                </li>
                                                <li class="menu-item-object-product">
                                                    <a href="shop-single-product.html"><span>Single Product</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://bit.ly/1M6lijQ"><span><em class="themecolor">Buy</em></span></a>
                                        </li>
                                    </ul>
                                </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
                            </div>
                            <!-- Secondary menu area - only for certain pages -->
                            <div class="secondary_menu_wrapper">
                                <nav id="secondary-menu" class="menu-secondary-menu-container">
                                    <ul id="menu-secondary-menu" class="secondary-menu">
                                        <li>
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Shop</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="#">Shopping Cart</a>
                                                </li>
                                                <li>
                                                    <a href="#">Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="#">My Account</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://bit.ly/1M6lijQ">Buy it now !</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Banner area - only for certain pages-->
                            <div class="banner_wrapper">
                                <a href="#" target="_blank"><img src="images/468x60.gif">
                                </a>
                            </div>
                            <!-- Header Searchform area-->
                            <div class="search_wrapper">
                                <form method="get" action="#">
                                    <i class="icon_search icon-search"></i><a href="#" class="icon_close"><i class="icon-cancel"></i></a>
                                    <input type="text" class="field" name="s" placeholder="Enter your search" />
                                    <input type="submit flv_disp_none" class="submit" value="" />
                                </form>
                            </div>
                        </div>
                        <div class="top_bar_right">
                            <div class="top_bar_right_wrapper">
                                <!-- Shopping cart icon-->
                                <a id="header_cart" href="#"><i class="icon-basket"></i><span>8</span></a><a id="search_button" href="#"><i class="icon-search"></i></a>
                                <!--wpml flags selector-->
                                <div class="wpml-languages enabled">
                                    <a class="active tooltip" href="#" data-tooltip="No translations available for this page"><img src="images/flags/en.png" /><i class="icon-down-open-mini"></i>
                                    </a>
                                    <ul class="wpml-lang-dropdown">
                                        <li>
                                            <a href="#"><img src="images/flags/fr.png" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/flags/de.png" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/flags/pl.png" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Revolution slider area-->
            <div class="mfn-main-slider" id="mfn-rev-slider">
                <div id="rev_slider_34_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container flv_rev_14">
                    <div id="rev_slider_34_2" class="rev_slider fullwidthabanner flv_rev_13">
                        <ul>
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-thumb="images/slide-home-thumb.jpg" data-saveperformance="off">
                                <img src="images/1920x710.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <div class="tp-caption customin flv_rev_9" data-x="center" data-hoffset="300" data-y="center" data-voffset="0" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="500" data-easing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"><img src="images/slide-home-1.png">
                                </div>
                                <div class="tp-caption tp-fade flv_rev_8" data-x="center" data-hoffset="123" data-y="center" data-voffset="67" data-speed="1000" data-start="1300" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"><img src="images/slide-home-3.png">
                                </div>
                                <div class="tp-caption tp-fade flv_rev_7" data-x="center" data-hoffset="541" data-y="center" data-voffset="24" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"><img src="images/slide-home-2.png">
                                </div>
                                <div class="tp-caption sft flv_rev_6" data-x="center" data-hoffset="86" data-y="center" data-voffset="-170" data-speed="800" data-start="2100" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"><img src="images/slide-home-4.png">
                                </div>
                                <div class="tp-caption sfl flv_rev_5" data-x="center" data-hoffset="-89" data-y="center" data-voffset="-99" data-speed="800" data-start="2400" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"><img src="images/slide-home-5.png">
                                </div>
                                <div class="tp-caption randomrotate flv_rev_12" data-x="center" data-hoffset="617" data-y="center" data-voffset="203" data-speed="800" data-start="2700" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"><img src="images/slide-home-6.png">
                                </div>
                                <div class="tp-caption mfnrs_home sft tp-resizeme flv_rev_2" data-x="center" data-hoffset="-378" data-y="center" data-voffset="-79" data-speed="500" data-start="3000" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300">
                                    <span class='themecolor'>1</span> theme
                                    <br>
                                    <span class='themecolor'><i class='icon-infinity'></i></span> opportunities
                                </div>
                                <div class="tp-caption mfnrs_home_small sfl tp-resizeme flv_rev_1" data-x="center" data-hoffset="-383" data-y="center" data-voffset="43" data-speed="500" data-start="3300" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300">
                                    The easiest way to build different sites
                                    <br> without many themes
                                </div>
                                <div class="tp-caption mfnrs_home_small sfr tp-resizeme flv_rev_11" data-x="center" data-hoffset="-391" data-y="center" data-voffset="132" data-speed="500" data-start="3600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300">
                                    <div class="hr_zigzag">
                                        <i class="icon-down-open"></i><i class="icon-down-open"></i><i class="icon-down-open"></i>
                                    </div>
                                </div>
                                <div class="tp-caption mfnrs_home_tiny sfb tp-resizeme flv_rev_10" data-x="center" data-hoffset="-387" data-y="center" data-voffset="196" data-speed="500" data-start="3900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300">
                                    <a class='scroll flv_color_white_1' href='#start'><span class="tooltip" data-tooltip="Click to see more">Check out</span> what we have prepared for you</a>
                                </div>
                            </li>
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-thumb="images/slide-home-thumb.jpg" data-saveperformance="off">
                                <img src="images/slide-home-2-bg.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <div class="tp-caption lft flv_rev_9" data-x="right" data-hoffset="-50" data-y="bottom" data-voffset="240" data-speed="500" data-start="1000" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"><img src="images/slide-home-2-1.png">
                                </div>
                                <div class="tp-caption lft flv_rev_8" data-x="right" data-hoffset="-40" data-y="bottom" data-voffset="190" data-speed="500" data-start="1500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"><img src="images/slide-home-2-2.png">
                                </div>
                                <div class="tp-caption lft flv_rev_7" data-x="right" data-hoffset="-30" data-y="bottom" data-voffset="140" data-speed="500" data-start="2000" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"><img src="images/slide-home-2-3.png">
                                </div>
                                <div class="tp-caption lft flv_rev_6" data-x="right" data-hoffset="-20" data-y="bottom" data-voffset="90" data-speed="500" data-start="2500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"><img src="images/slide-home-2-4.png">
                                </div>
                                <div class="tp-caption lft flv_rev_5" data-x="right" data-hoffset="-10" data-y="bottom" data-voffset="40" data-speed="500" data-start="3000" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"><img src="images/slide-home-2-5.png">
                                </div>
                                <div class="tp-caption large_dark sft tp-resizeme flv_rev_4" data-x="center" data-hoffset="-376" data-y="center" data-voffset="-77" data-speed="500" data-start="3500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300">
                                    <span class='themecolor'>200+</span> layouts
                                    <br> dedicated for you
                                </div>
                                <div class="tp-caption mfnrs_home_small sfl tp-resizeme flv_rev_2" data-x="center" data-hoffset="-387" data-y="center" data-voffset="48" data-speed="500" data-start="3700" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300">
                                        <span class="flv_rev_3">The easiest way to build different sites
												<br>
												without many themes</span>
                                </div>
                                <div class="tp-caption sfb tp-resizeme flv_rev_1" data-x="center" data-hoffset="-481" data-y="center" data-voffset="161" data-speed="500" data-start="4000" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300">
                                    <a href='#' class='tp-button button button_theme'>See all shortcodes</a>
                                </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom flv_vis_hid"></div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div id="Content">
        <div class="content_wrapper clearfix">
            @yield('content')
        </div>
    </div>
</div>
<!-- Main Content -->


<!-- Popup contact form -->
<div id="popup_contact">
    <a class="button button_js" href="#"><i class="icon-mail-line"></i></a>
    <div class="popup_contact_wrapper">

        <div id="contactWrapper_popup">
            <form id="contactform_popup">
                <h4>Send us a message</h4>
                <p>
                        <span>
								<input type="text" name="name_popup" id="name_popup" size="40" aria-required="true" aria-invalid="false" placeholder="Your name" />
							</span><span>
								<input type="email" name="email_popup" id="email_popup" size="40" aria-required="true" aria-invalid="false" placeholder="Your email" />
							</span><span>
								<input type="text" name="subject_popup" id="subject_popup" size="40" aria-required="true" aria-invalid="false" placeholder="Subject" />
							</span><span> 								<textarea name="body_popup" cols="40" id="body_popup" rows="2" aria-required="true" aria-invalid="false" placeholder="Message"></textarea></span>

                    <input type="button" value="Send Message" id="submit_popup" onClick="return check_values_popup();">
                </p>
            </form>
            <div id="confirmation_popup"></div>
        </div>

        <span class="arrow"></span>
    </div>
</div>

<!-- JS -->

<script src="/theme/js/jquery-3.6.0.min.js"></script>
<script src="/theme/js/jquery-migrate-3.4.0.min.js"></script>

<script src="/theme/js/mfn.menu.js"></script>
<script src="/theme/js/jquery.plugins.js"></script>
<script src="/theme/js/jquery.jplayer.min.js"></script>
<script src="/theme/js/animations/animations.js"></script>
<script src="/theme/js/email.js"></script>
<script src="/theme/js/scripts.js"></script>

<script>
    jQuery(window).on('load', function () {
        var retina = window.devicePixelRatio> 1 ? true : false;
        if (retina) {
            var retinaEl = jQuery("#logo img");
            var retinaLogoW = retinaEl.width();
            var retinaLogoH = retinaEl.height();
            retinaEl.attr("src","images/logo-retina.png").width(retinaLogoW).height(retinaLogoH)
        }
    });
</script>
@yield('scripts')
</body>

</html>
