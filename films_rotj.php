<?php

include('include/twig.php');
$twig = init_twig();
include('include/films_data.php');

echo $twig->render('modelefilms.twig', [
    'CSS' => './css/stylefilms.css',
    'tableaudistri' => $tableaudistrirotj,
    'films' => $filmsrotj,
    'tableauacteurprinci' => $tableauacteurprincirotj,
    'paraintro' => $paraintrorotj,
    'parapresgen' => $parapresgenrotj,
    ]);

?>