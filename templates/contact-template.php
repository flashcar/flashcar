<?php 
/*
        Template Name: Contact Template
*/
get_header();
?>

<!-- <main class="px-5 sm:px-10 flex flex-col sm:flex-row">
        <h1 class="text-5xl font-normal" style="color: black;">Dane <b>kontaktowe</b></h1>
        <div class="basis-1/3 mt-0 sm:mt-10 pt-5 sm:pt-10">
                <ul class="mt-10">
                        <li class="text-xl ">kontakt@flashcar.pl</li>
                        <li class="text-xl mt-2">+48 777 777 777</li>
                        <li class="mt-5 text-xl font-bold">ul. Kościelna, Bęczków</li>
                        <li class="text-xl font-bold">32-234 Kielce</li>
                </ul>
        </div>
        <div class="basis-2/3">
                <h3 class="font-bold text-2xl mb-5 rounded-sm mt-10 md:mt-0">Formularz kontatkowy</h3>
                <form class="flex flex-col">
                        <input type="text" class="w-2/5 h-7 mt-2 pl-3 py-5" style=" border-left: solid 1px grey;" placeholder="Imię i Naziwsko"/>
                        <input type="text" class="w-2/5 h-7 mt-2 pl-3 py-5"  style=" border-left: solid 1px grey;" placeholder="Numer telefonu" />
                        <input type="text" class="w-2/5 h-7 mt-2 pl-3 py-5"  style=" border-left: solid 1px grey;" placeholder="E-mail" />
                        <input type="text" class="w-2/5 h-7 mt-2 pl-3 py-5"  style=" border-left: solid 1px grey;" placeholder="Treść" />

                        <button type="submit" class="mt-5 px-5 py-2 font-bold" style="width: 200px; background-color: #FDC10C; ">
                                Wyślij
                        </button>
                </form>
        </div>
</main> -->

<main class="lg:px-16 mt-12">
        <section class="flex flex-col md:flex-row">
                <div class="basis-full md:basis-1/2 px-10">
                        <h1 class="py-4 font-bold text-3xl">KONTAKT</h1>
                        <hr class="w-full md:w-2/3" />
                        
                        <div class="w-full md:w-2/3">
                                <p class="text-md py-6">Nasz zespół postara się odpowiedzieć na wszystkie Twoje pytania. Staramy się umożliwić Ci jak najłatwiejszy kontakt z nami. Skorzystaj z naszego adresu mailowego, możesz również zadzwonić. W godzinach pracy jesteśmy dostępni do Twojej dyspozycji face-to-face.
                                </p>

                                <ul type="none" class="py-6">
                                        <li class="py-2 font-bold text-2xl" style="color: #FDC10C;">KIELCE</li>

                                        <li class="py-1 text-lg"><i class="fa-solid fa-location-pin mr-4" style="color: #FDC10C;"></i> ul. Gościniec 4, Bęczków, Kielce</li>
                                        <li class="py-1 text-lg"><i class="fa-solid fa-phone mr-4" style="color: #FDC10C;"></i> +48 530 803 539</li>
                                        <li class="py-1 text-lg"><i class="fa-solid fa-envelope mr-4" style="color: #FDC10C;"></i> kontakt@flashcar.pl</li>
                                </ul>
                        </div>

                        <div class="md:hidden text-center py-6">
							<a href="tel:530803539">
                                <button type="button" style="background-color: #FDC10C; color: white;" class="py-2 px-4 font-bold">ZADZWOŃ DO NAS</button>
							</a>
                        </div>
                </div>
                <div class="basis-1/3 px-6 mt-8 md:py-0">
                        <h2 class="text-3xl ">Formularz kontaktowy</h2>
                        <div class="flex flex-col w-full md:w-3/4 py-16 text-right">

                                <form id="lead-form" method="post" action="dziekujemy">
                                        <div class="flex flex-row justify-center">
                                                <div class="basis-full sm:basis-full    ">
                                                        <input type="text" name="imie" style="width: 100%; height: 40px; padding-left: 10px;" class="appearance-none block w-full text-gray-700 border border-grey-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Imię" />
                                                        <input type="email" name="email" style="width: 100%; height: 40px; padding-left: 10px;" class="appearance-none block w-full  text-gray-700 border border-grey-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Adres e-mail" />
                                                        <input type="text" name="telefon" style="width: 100%; height: 40px; padding-left: 10px;" class="appearance-none block w-full  text-gray-700 border border-grey-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Numer telefonu">
                                                        <textarea name="opis" placeholder="Treść wiadomości" rows="4" cols="50" class="mb-5" style="width: 100%; height: 40px; padding-left: 10px;    resize: none; border: solid 1px #e8eaed; border-radius: 5px;"></textarea>
                                                        <button type="submit" class="font-bold" style="background-color: #FDC10C; width: 200px; height: 40px;">Wyślij</button>
                                                </div>
                                        </div>
                                </form>
                        </div>
                </div>
        </section>
</main>

<?php get_footer(); ?>