<?php

include('include/twig.php');
$twig = init_twig();

echo $twig->render('contact.twig', [
    'CSS' => './css/stylecontact.css',
    ]);

?>