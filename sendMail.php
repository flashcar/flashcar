<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $message = $_POST['message'];

                wp_mail( "szymonnowickixd@gmail.com", "lead", $message, $phone);
                header("Location: http://localhost/kerlinbygg/thank-you/");
        } else {
                echo("NIE DZIAŁA");
        }

?>