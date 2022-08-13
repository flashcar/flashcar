<?php 
/*
        Template Name: Gallery Temaplte
*/
get_header();
?>

<main class="px-10 py-10">
        <div class="">
                <h1 class="text-5xl mb-10 font-normal" style="color: black;">Galeria <b>realizacji</b></h1>
        </div>

        <div class="flex flex-col lg:flex-row">
                <div class="basis-1/4">
                        <img class="pr-1 pb-1" style="" src="<?php echo get_template_directory_uri(); ?>/static/images/GaleriaZdjecia/1.jpeg" alt="Flash Car Detaling" />
                        <img class="pr-1 pb-1"  style="" src="<?php echo get_template_directory_uri(); ?>/static/images/GaleriaZdjecia/3.jpeg" alt="Flash Car Detaling" />
                </div>
                <div class="basis-1/4">
                        <img class="pr-1 pb-1" style="" src="<?php echo get_template_directory_uri(); ?>/static/images/GaleriaZdjecia/2.jpeg" alt="Flash Car Detaling" />
                        <img class="pr-1 pb-1"  style="" src="<?php echo get_template_directory_uri(); ?>/static/images/GaleriaZdjecia/12.jpeg" alt="Flash Car Detaling" />
                </div>  
                <div class="basis-1/4">
                        <img class="pr-1 pb-1"  style="" src="<?php echo get_template_directory_uri(); ?>/static/images/GaleriaZdjecia/9.jpeg" alt="Flash Car Detaling" />
                        <img class="pr-1 pb-1" style="" src="<?php echo get_template_directory_uri(); ?>/static/images/GaleriaZdjecia/10.jpeg" alt="Flash Car Detaling" />
                </div>  
                <div class="basis-1/4">
                        <img class="pr-1 pb-1" style="" src="<?php echo get_template_directory_uri(); ?>/static/images/GaleriaZdjecia/6.jpeg" alt="Flash Car Detaling" />
                        <img class="pr-1 pb-1" style="" src="<?php echo get_template_directory_uri(); ?>/static/images/GaleriaZdjecia/4.jpeg" alt="Flash Car Detaling" />
                </div>  
        </div>
        
        <div class="flex flex-col justify-center items-center py-10">
                <h2 class="text-2xl font-bold">ZADZWOŃ PO WYCENĘ</h2>
                <!-- <h3 class="text-lg md:text-5xl pt-3 text-center">ZAPYTAJ SIĘ O SZCZEGÓŁY SWOJEGO ZLECENIA</h3> -->
                <h3 class="text-lg md:text-3xl pt-3 text-center">Zapytaj się o szczegóły swojego zlecenia</h3>

                <a href="tel:+48530803539">
                        <button class="font-bold mt-10" style="width: 200px; height: 50px; background-color: #FDC10C; color: black;"><i class="fa-solid fa-phone mr-5"></i>Zadzwoń</button>
                </a>
        </div>
        
        <div class="flex flex-row">
                <div class="basis-2/4">
                        <img class="pr-1 pb-1" style="" src="<?php echo get_template_directory_uri(); ?>/static/images/GaleriaZdjecia/11.jpeg" alt="Flash Car Detaling" />
                        <img class="pr-1 pb-1" style="" src="<?php echo get_template_directory_uri(); ?>/static/images/GaleriaZdjecia/5.jpeg" alt="Flash Car Detaling" />
                </div>  
                <div class="basis-2/4">
                        <img class="pr-1 pb-1" style="" src="<?php echo get_template_directory_uri(); ?>/static/images/GaleriaZdjecia/13.jpeg" alt="Flash Car Detaling" />
                        <img class="pr-1 pb-1" style="" src="<?php echo get_template_directory_uri(); ?>/static/images/GaleriaZdjecia/14.jpeg" alt="Flash Car Detaling" />
                </div>   
        </div>
        
</main>


<?php get_footer(); ?>