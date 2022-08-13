<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if gte IE 9 ]><html class="no-js ie9" lang="en"> <![endif]-->

    <title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>

	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Specific Metas
  	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/static/images/logo.png">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png">

	<!-- Stylesheets
	================================================== -->
	<script src="https://cdn.tailwindcss.com"></script>
        <script src="https://kit.fontawesome.com/3f25afc5bc.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 

        <style>
                html, body {
                        background-color: #fbfbfb;          
                }
        </style>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><!-- the Body  -->

        <section class="py-2 px-5 md:px-36" style="background-color: #FDC10C;">
                <div class="">
                        <ul type="" class="text-sm">
                                <li style="display: inline;">+48 530 803 539</li>
                                <li style="display: inline;" class="px-10">kontakt@flashcar.pl</li>
                        </ul>
                </div>
                <div class="">

                </div>
        </section>

        <div class="" >
                <nav class="flex flex-row px-10 py-2">
                        <div class="basis-1/4 pt-5">
                                <img style="width: 120px;" src="<?php echo get_template_directory_uri(); ?>/static/images/logo.png" alt="Flash Car Detaling" />
                        </div>   

                        <div class="basis-2/4 hidden lg:block">
                                <div class="flex flex-col justify-center" style="height: 100px;">
                                        <ul type="none" class="inline-block font-bold pt-10" style="color: black;">
                                                <a href="/"><li class="inline-block ml-5">STRONA GŁÓWNA</li></a>
                                                <a href="o-nas/"><li class="inline-block ml-5">O NAS</li></a>
                                                <a href="uslugi/"><li class="inline-block ml-5">USŁUGI</li></a>
                                                <a href="galeria/"><li class="inline-block ml-5">GALERIA</li></a>
                                                <a href="kontakt/"><li class="inline-block ml-5">KONTAKT</li></a>
                                        <ul>
                                </div>
                        </div>  

                        <div class="basis-1/4 hidden lg:block">
                                <div class="px-10 pt-10">
                                        <!-- <ul type="">
                                                <li class="font-bold"><i class="fa-solid fa-phone mr-2" style="color: #FDC10C;"></i> +48 123 123 123</li>
                                                <li class="font-bold"><i class="fa-solid fa-envelope mr-2" style="color: #FDC10C;"></i> kontakt@flashcar.pl</li>
                                        </ul> -->
                                        <a href="kontakt/">
                                                <button class="py-2 px-4 font-bold text-sm button" style="background-color: #FDC10C; color: black;"  >
                                                <!-- data-modal="modalOne" -->
                                                <i class="fa-brands fa-wpforms mr-2"></i>ZAMÓW WYCENĘ
                                                </button>
                                        </a>
                                </div>
                        </div>

                        <div class="basis-2/3 text-right lg:hidden">
                        <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">
                                                                <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                                                </svg>
                                                </button>

                        </div>
                </nav>
        </div>

<div class="sidebar block absolute lg:hidden bg-zinc-500 text-blue-100 w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out" style="z-index: 100;">
  <!-- nav -->
  <nav style="color: white;">
        <a href="/" class="block py-2.5 px-4 rounded transition duration-200 text-white">
        Strona główna
        </a>
        <a href="o-nas/" class="block py-2.5 px-4 rounded transition duration-200 text-white">
        O Nas
        </a>
        <a href="uslugi/" class="block py-2.5 px-4 rounded transition duration-200 text-white">
                Usługi
        </a>
        <a href="galeria/" class="block py-2.5 px-4 rounded transition duration-200 text-white">
        Galeria
        </a>
        <a href="kontakt/" class="block py-2.5 px-4 rounded transition duration-200 text-white" style="color: white;">
                Kontakt
        </a>
  </nav>
        <a href="kontakt/">
        <button class="mt-5 text-sm pt-3 pb-3 pl-2  pr-2 md:pt-3 md:pb-3 md:pl-3 md:pr-3 font-bold rounded-none" style="background-color: #FDC10C;; color: black;">
                        <i class="fa-solid fa-phone mr-2"></i>ZADZWOŃ DO NAS
        </button>
        </a>
</div>