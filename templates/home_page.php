<?php
/*
        Template Name: Home page
*/
get_header(); ?>

<!-- <div id="modalOne" class="modal">
        <div class="modal-content">
                <div class="contact-form">
                        <a class="close">&times;</a>
                                <form action="/">
                                        <h2 class="font-bold text-xl py-4" stye="color: black;">Zamów wycenę</h2>
                                                <div class=w-2/3>
                                                        <input class="py-2 px-2" type="text" name="name" placeholder="Imię i nazwisko" />
                                                        <input type="text" name="name" placeholder="Adres e-mail" />
                                                        <input type="text" name="name" placeholder="Numer telefonu" />
                                                </div>
                                                <span>Czego potrzebujesz?</span>
                                                <div>
                                                        <textarea class="py-2 px-3" rows="4" placeholder="Wpisz szczegóły swojego zlecenia"></textarea>
                                                </div>
                                                <button type="submit" href="/" class="px-4 py-2 mt-1 mb-1" style="background-color: #FDC10C; color: white;">Wyślij zapytanie</button>
                                </form>
                 </div>
         </div>
</div> -->

<header class="flex flex-col sm:flex-row px-5 w-full h-full justify-center items-center py-6" style="height: 100vh; background:  url('<?php echo get_template_directory_uri(); ?>/static/images/baner.jpg'); background-size: cover;">
                <div class="1/2 text-center" style="color: white; position:relative;">
                        <h1 class="text-3xl lg:text-6xl font-bold py-2" style="color: #FDC10C;">AutoDetaling Kielce</h1>
                        <h2 class="text-xl py-2" style="color: white;">Oklejanie PPF, Przyciemnianie szyb oraz lamp, polerowanie, mycie detalingowe i wiele więcej.</h2>
                        <a href="tel:+48530803539">
                                <button class="py-2 px-4 mt-5 font-bold" style="background-color: #FDC10C;">ZADZWOŃ I ZAPYTAJ</button>
                        </a>
                </div>
</header>


<main class=" z-0">        
        <!-- <header class="flex flex-col sm:flex-row px-5" style="background: url('<?php echo get_template_directory_uri(); ?>/static/images/Galeria/3.jpg')">
                <div class="basis-1/2" style="color: black;">
                        <h1 class="text-5xl pt-5 pb-5 font-bold leading-snug">U NAS KOMPLEKSOWO ZADBASZ O SWÓJ SAMOCHÓD<h1>
                        <h4 class="text-xl font-light pt-2 pb-5">Oklejanie PPF, Przyciemnianie szyb oraz lamp, polerowanie, mycie detalingowe i wiele więcej.</h4>
                        <button class="font-bold" style="width: 200px; height: 50px; background-color: white; color:#FDC10C; border: solid 2px #FDC10C;">Zadzwoń i zapytaj</button>
                </div>

                <div class="basis-1/2 hidden md:d-block">
                        <img style="" src="<?php echo get_template_directory_uri(); ?>/static/images/banner/banner3.jpg" alt="Flash Car Detaling" />
                </div>
        </header> -->
        <div class="text-center" style="color: black;">
        <!-- <i class="fa-solid fa-circle-chevron-down pt-5" style="font-size: 50px; color: #FDC10C;"></i> -->
        </div>

        <!-- <section class="py-8 px-8" style="background-color: black;">
                <div class="flex flex-row justify-around">
                        <div class="basis-1/5">
                                <div class="flex flex-col items-center py-2 px-2" style="border: solid 2px #FDC10C; color: white;">
                                        <div class="text-center">
                                                <img class="text-center" style="width: 30px; height: 30px;" src="<?php echo get_template_directory_uri(); ?>/static/images/icon.png" alt="Flash Car Detaling" />
                                        </div>
                                        <h3 class="text-2xl font-bold py-4">Jakość</h3>
                                        <p class="text-center">
                                                Akcesoria i kosmetyki najwyższej jakości
                                        </p>
                                </div>
                        </div>
                        <div class="basis-1/5">
                                <div class="flex flex-col items-center py-2 px-2" style="border: solid 2px #FDC10C; color: white;">
                                        <div class="text-center">
                                                <img class="text-center" style="width: 30px; height: 30px;" src="<?php echo get_template_directory_uri(); ?>/static/images/icon.png" alt="Flash Car Detaling" />
                                        </div>
                                        <h3 class="text-2xl font-bold py-4">Bezpieczeństwo</h3>
                                        <p class="text-center">
                                                Gwarancja profesjonalnego podejścia.
                                        </p>
                                </div>
                        </div>
                        <div class="basis-1/5">
                                <div class="flex flex-col items-center py-2 px-2" style="border: solid 2px #FDC10C; color: white;">
                                        <div class="text-center">
                                                <img class="text-center" style="width: 30px; height: 30px;" src="<?php echo get_template_directory_uri(); ?>/static/images/icon.png" alt="Flash Car Detaling" />
                                        </div>
                                        <h3 class="text-2xl font-bold py-4">Gwarancja</h3>
                                        <p class="text-center">
                                                Gwarancja jakości wykonanej usługi.
                                        </p>
                                </div>
                        </div>
                        <div class="basis-1/5">
                                <div class="flex flex-col items-center py-2 px-2" style="border: solid 2px #FDC10C; color: white;">
                                        <div class="text-center">
                                                <img class="text-center" style="width: 30px; height: 30px;" src="<?php echo get_template_directory_uri(); ?>/static/images/icon.png" alt="Flash Car Detaling" />
                                        </div>
                                        <h3 class="text-2xl font-bold py-4">Folia PPF</h3>
                                        <p class="text-center">
                                                Zabezpiecz swój samochód przed środowiskiem zewnętrznym. 
                                        </p>
                                </div>
                        </div>
                </div>
        </section> --> 

        <section class="px-10 py-14">
                <div class="text-center py-6">
                        <h2 class="text-4xl py-4 mb-6">Nasze <b>usługi</b></h2>
                </div>
        <section class="flex flex-col md:flex-row">
                        <div class="basis-1/4">
                                <div class="w-3/4" style="height: 250px;">
                                        <div class="" style="width: 350px; height: 190px; background-color: black; background: url('<?php echo get_template_directory_uri(); ?>/static/images/wosk.jpg'); background-size: cover;">

                                        </div>

                                        <div class="flex flex-row justify-center items-center" style="width: 350px; height: 60px; background-color: #f4f4f4; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                                <h3 class="font-bold">Aplikacje ceramiczne</h3>
                                        </div>
                                </div>
                        </div>
                        <div class="basis-1/4 mt-5 lg:mt-0">
                                <div class="" style="height: 250px;">
                                        <div class="" style="width: 350px; height: 190px; background-color: black; background: url('<?php echo get_template_directory_uri(); ?>/static/images/uslugi/4.jpg'); background-size: cover;">

                                        </div>

                                        <div class="flex flex-row justify-center items-center" style="width: 350px; height: 60px; background-color: #f4f4f4; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                                <h3 class="font-bold">Detaling wnętrza</h3>
                                        </div>
                                </div>
                        </div>
                        <div class="basis-1/4 mt-5 lg:mt-0">
                                <div class="" style="height: 250px;">
                                        <div class="" style="width: 350px; height: 190px; background-color: black; background: url('<?php echo get_template_directory_uri(); ?>/static/images/uslugi/6.jpg'); background-size: cover;">

                                        </div>

                                        <div class="flex flex-row justify-center items-center" style="width: 350px; height: 60px; background-color: #f4f4f4; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                                <h3 class="font-bold">Woski</h3>
                                        </div>
                                </div>
                        </div>
                        <div class="basis-1/4 mt-5 lg:mt-0">
                                <div class="" style="height: 250px;">
                                        <div class="" style="width: 350px; height: 190px; background-color: black; background: url('<?php echo get_template_directory_uri(); ?>/static/images/wosk.jpg'); background-size: cover;">

                                        </div>

                                        <div class="flex flex-row justify-center items-center" style="width: 350px; height: 60px; background-color: #f4f4f4; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                                <h3 class="font-bold">Wosk premium</h3>
                                        </div>
                                </div>
                        </div>
                </section>

                <section class="flex flex-col md:flex-row lg:mt-10">
                        <div class="basis-1/4">
                                <div class="w-3/4" style="height: 250px;">
                                        <div class="" style="width: 350px; height: 190px; background-color: black; background: url('<?php echo get_template_directory_uri(); ?>/static/images/uslugi/1.jpg'); background-size: cover;">

                                        </div>

                                        <div class="flex flex-row justify-center items-center" style="width: 350px; height: 60px; background-color: #f4f4f4; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                                <h3 class="font-bold">Ochronna folia PPF</h3>
                                        </div>
                                </div>
                        </div>
                        <div class="basis-1/4 mt-5 lg:mt-0">
                                <div class="" style="height: 250px;">
                                        <div class="" style="width: 350px; height: 190px; background-color: black; background: url('<?php echo get_template_directory_uri(); ?>/static/images/uslugi/2.jpg'); background-size: cover;">

                                        </div>

                                        <div class="flex flex-row justify-center items-center" style="width: 350px; height: 60px; background-color: #f4f4f4; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                                <h3 class="font-bold">Mycie detalingowe</h3>
                                        </div>
                                </div>
                        </div>
                        <div class="basis-1/4 mt-5 lg:mt-0">
                                <div class="" style="height: 250px;">
                                        <div class="" style="width: 350px; height: 190px; background-color: black; background: url('<?php echo get_template_directory_uri(); ?>/static/images/uslugi/3.jpg'); background-size: cover;">

                                        </div>

                                        <div class="flex flex-row justify-center items-center" style="width: 350px; height: 60px; background-color: #f4f4f4; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                                <h3 class="font-bold">Przyciemnienie lamp</h3>
                                        </div>
                                </div>
                        </div>
                        <div class="basis-1/4 mt-5 lg:mt-0">
                                <div class="" style="height: 250px;">
                                        <div class="" style="width: 350px; height: 190px; background-color: black; background: url('<?php echo get_template_directory_uri(); ?>/static/images/uslugi/2.jpg'); background-size: cover;">

                                        </div>

                                        <div class="flex flex-row justify-center items-center" style="width: 350px; height: 60px; background-color: #f4f4f4; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                                <h3 class="font-bold">Zewnętrzne mycie detalingowe</h3>
                                        </div>
                                </div>
                        </div>
                </section>
                <div class="basis-full pt-10 pb-5 text-center">
							<a href="uslugi/">
                                <button class="font-bold" style="width: 200px; height: 50px; background-color: #FDC10C; color: black;">Więcej usług</button>
							</a>
                        </div>
        </section>
        <!-- Koniec Usług -->

        <!-- Galeria realizacji -->
        <section class="px-5 pt-10 mt-10">
                <div class="text-center">
                        <h2 class="mb-10 text-3xl font-normal" style="color: black;">Galeria <b>Realizacji</b></h2>
                </div>
                <div class="flex flex-col">
                        <div class="basis-full mb-1">
                                <div class="flex flex-col md:flex-row">
                                        <div class="basis-full md:basis-1/4 pl-1 pr-1 mt-2 sm:mt-0">
                                                <img style="" class=" rounded-lg" src="<?php echo get_template_directory_uri(); ?>/static/images/Galeria/1.jpg" alt="Flash Car Detaling" />

                                        </div>
                                        <div class="basis-1/4 pl-1 pr-1  mt-2 sm:mt-0">
                                                <img style="" class=" rounded-lg" src="<?php echo get_template_directory_uri(); ?>/static/images/Galeria/2.jpg" alt="Flash Car Detaling" />

                                        </div>
                                        <div class="basis-1/4 pl-1 pr-1  mt-2 sm:mt-0">
                                                <img style="" class=" rounded-lg" src="<?php echo get_template_directory_uri(); ?>/static/images/Galeria/3.jpg" alt="Flash Car Detaling" />

                                        </div>
                                        <div class="basis-1/4 pl-1 pr-1  mt-2 sm:mt-0">
                                                <img style="" class=" rounded-lg" src="<?php echo get_template_directory_uri(); ?>/static/images/Galeria/4.jpg" alt="Flash Car Detaling" />

                                        </div>
                                </div>
                        </div>
                        <div class="basis-full">
                                <div class="flex flex-col md:flex-row">
                                        <div class="basis-1/4 pl-1 pr-1  mt-2 sm:mt-0">
                                                <img style="" class=" rounded-lg" src="<?php echo get_template_directory_uri(); ?>/static/images/GaleriaZdjecia/1.jpeg" alt="Flash Car Detaling" />

                                        </div>
                                        <div class="basis-1/4 pl-1 pr-1  mt-2 sm:mt-0">
                                                <img style="" class=" rounded-lg" src="<?php echo get_template_directory_uri(); ?>/static/images/GaleriaZdjecia/2.jpeg" alt="Flash Car Detaling" />

                                        </div>
                                        <div class="basis-1/4 pl-1 pr-1  mt-2 sm:mt-0">
                                                <img style="" class=" rounded-lg" src="<?php echo get_template_directory_uri(); ?>/static/images/GaleriaZdjecia/3.jpeg" alt="Flash Car Detaling" />

                                        </div>
                                        <div class="basis-1/4 pl-1 pr-1  mt-2 sm:mt-0">
                                                <img style="" class=" rounded-lg " src="<?php echo get_template_directory_uri(); ?>/static/images/GaleriaZdjecia/4.jpeg" alt="Flash Car Detaling" />

                                        </div>
                                </div>
                        </div>
                        
                        <div class="basis-full pt-10 pb-5 text-center">
							<a href="galeria/">
                                <button class="font-bold" style="width: 200px; height: 50px; background-color: #FDC10C; color: black;">Pokaż więcej realizacji</button>
							</a>
                        </div>
                </div>
        </section>
        <!-- Koniec galerii -->

        <!-- Dlaczego właśnie my? -->
        <section class="pt-10 pb-10">

        </section>
        <!-- Koniec Dlaczego właśnie my? -->

        <!-- About FlashCar      -->
        <!-- <section class="pt-10 pb-10 px-16">
                <div class="flex flex-col">
                        <div class="basis-1/4">
                                <img style="width: 200px; heigt: 150px;" src="<?php echo get_template_directory_uri(); ?>/static/images/logo.png" alt="Flash Car Detaling" />
                        </div>
                        <div class="basis-1/4 mt-8 mb-4">
                                <h3 style="color: #FDC10C;" class="text-4xl font-bold">FlashCar Detaling Kielce</h3>
                        </div>
                        <div class="basis-1/4 mb-4">
                                <h4 class="text-2xl font-bold pt-2 pb-2">Spa dla twojego samochodu</h4>
                        </div>
                        <div class="basis-1/4">
                                <div class="flex flex-row">
                                        <div class="basis-full md:basis-1/3">
                                                <p class="text-lg">
                                                        FlashCar to profesjonalne studio Auto Detalingu stworzone z pasji do samochodów. Stawiamy na detale bo to one tworzą całość. Przy wykonywanych zleceniach korzystamy tylko i wyłącznie z kosmetyków oraz akcesoriów najwyższej klasy. Fachową obsługę poczujesz już od pierwsze kontaktu z Nami. Przekonaj się sam! 
                                                </p>
                                        </div>
                                </div>
                        </div>
                </div>
        </section> -->

        <section class="flex flex-col md:flex-row px-10 lg:px-48 py-24">
                <div class="basis-1/2">
                        <div class="w-full md:w-3/4">
                                <img class="object-contain rounded-lg" style="" src="<?php echo get_template_directory_uri(); ?>/static/images/Galeria/3.jpg" alt="Flash Car Detaling" />
                        </div>
                </div>
                <div class="basis-full md:basis-1/2">
                        <h3 style="color: #FDC10C;" class="text-2xl lg:text-4xl font-bold mt-6 py-2 lg:mt-0 lg:py-0">FlashCar Detaling Kielce</h3>
                        <h4 class="text-xl font-bold pt-2 pb-2">Spa dla twojego samochodu</h4>
                        <p class="text-lg py-2">
                                FlashCar to profesjonalne studio Auto Detalingu stworzone z pasji do samochodów. Stawiamy na detale bo to one tworzą całość. Przy wykonywanych zleceniach korzystamy tylko i wyłącznie z kosmetyków oraz akcesoriów najwyższej klasy. Fachową obsługę poczujesz już od pierwsze kontaktu z Nami. Przekonaj się sam! 
                        </p>
                </div>
        </section>

        <section class="px-5 lg:px-16">
                <div class="flex flex-col md:flex-row justify-center">
                        <div class="basis-1/2">
                                <h3 class="text-3xl">Zarezerwuj <span class="font-black">Termin</span></h3>
                                <p class="py-4">
                                        Wypełnij formularz poniżej, a my skontaktujemy się z tobą. 
                                </p>
                                <div class="py-5 md:py-2 md:mt-5">
                                        <div class="flex flex-col py-5 px-5" style="">
                                        <form action="dziekujemy/" method="POST">
                                                <div class="w-full lg:w-2/3">
                                                        <input type="text" class="w-full md:w-1/3 pl-2" style="border: solid 1px grey; height: 40px; width: 100%; padding-left: 10px;" placeholder="Imię i Naziwsko" />
                                                        <input type="text" class="w-full md:w-1/3 pl-8 mt-3 md:mt-0" style="border: solid 1px grey; height: 40px; width: 100%; padding-left: 10px;" placeholder="Numer telefonu"  />
                                                </div>
                                                <div class="w-full pt-2">
                                                        <textarea type="textarea" class="w-full md:w-full lg:w-2/3 h-10 pl-2 pt-1" style="border: solid 1px grey; resize: none;" placeholder="Napisz jaka usługa cię interesuje"></textarea>
                                                </div>
                                                <div class="w-full py-5">
                                                        <button type="submit" class=" font-bold px-10 py-2" style="background-color: #FDC10C; color: black;">
                                                                Uzyskaj wycenę
                                                        </button>
                                                </div>
                                        </form>
                                        </div>
                                </div>
                        </div>
                        <!-- <div class="basis-full lg:basis-1/3 md:px-10 py-16 md:py-0">
                                <div class="">
                                        <h3 class="text-3xl mb-10">Opinie <span class="font-black">Klientów</span></h3>

                                        <div class="text-center">
                                                <h4 class="text-xl font-bold">Tomasz K.</h4>
                                                <h5 class="text-lg mb-5">Opinia z Google Maps</h5>
                                                <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis magna neque, interdum lobortis lorem placerat et. Aenean porttitor pharetra pharetra. Praesent nunc lectus, tempor mattis ante.
                                                </p>
                                        </div>
                        </div> -->
                        

        </section>

        <section class="py-10 text-center px-5  " style="width: 100%; background-color: #FDC10C;">
                <h2 class="text-3xl font-bold">Skontaktuj się z Nami</h2>
                <p class="text-lg py-4">Jesteśmy do Państwa dyspozycji od poniedziałku do piątku w godzinach od 8:00 do 16:00</p>
                <ul type="none">
                        <li class="py-2 text-xl">+48 530 803 539</li>
                        <li class="py-2 text-xl">kontakt@flashcar.pl</li>
                        <li class="py-2 text-xl"> ul. Gościniec 4, Bęczków, Kielce</li>
                </ul>
        </section>
        
</main>


<?php get_footer(); ?>