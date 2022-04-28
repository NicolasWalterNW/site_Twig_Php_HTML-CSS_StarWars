<?php

include('include/twig.php');
$twig = init_twig();
include('include/films_data.php');

echo $twig->render('modelefilms.twig', [
    'CSS' => './css/stylefilms.css',
    'tableaudistri' => $tableaudistrirogueone,
    'films' => $filmsrogueone,
    'tableauacteurprinci' => $tableauacteurprincirogueone,
    'paraintro' => $paraintrorogueone,
    'parapresgen' => $parapresgenrogueone,
    ]);

?>