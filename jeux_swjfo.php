<?php

include('include/twig.php');
$twig = init_twig();
include('include/jeuxvideo_data.php');

echo $twig->render('modelejeuxvideo.twig', [
    'CSS' => './css/stylejeux.css',
    'jeux' => $jeuxswjfo,
    ]);

?>