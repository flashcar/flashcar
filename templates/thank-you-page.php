<?php
/*
        Template Name: Thank You Page
*/
get_header(); ?>

<?php
$to = "damianbrejdak@gmail.com";
$subject = "Zapytanie o usługę";

$imie = $_POST['imie'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$opis = $_POST['opis'];

       $message = "
               <html>
                       <head>
                         <title>Nowy lead</title>
                       </head>
                       <body>
                               <h1>Nowy lead ze strony:<h1><br />
                               Imie: $imie <br />
                               Email: $email <br />
                               Telefon: $telefon <br />
                               Wiadomość: $opis <br />
                       </body>
                       </html>
       ";

$header = "From:damianbrejdak@gmail.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);

if( $retval == true ) {
   echo "<script>console.log('Message sent successfully...');</script>";
}else {
   echo "<script>console.log('Message could not be sent...');</script>";
}
?>

<section class="py-28 text-center">
        <h1 class="font-bold text-4xl py-10">DZIĘKUJEMY ZA KONTAKT</h1>
        <h3 class="text-2xl">Skontaktujemy się z tobą w ciągu 24h.</h3>
        <h3 class="text-2xl py-6">Pozdrawiamy, zespół <a class="font-bold" href="https://flashcar.pl">FlashCar.</a></h3>
</section>

<?php get_footer(); ?>