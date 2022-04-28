<?php

include('include/twig.php');
$twig = init_twig();
include('include/films_data.php');

echo $twig->render('modelefilms.twig', [
    'CSS' => './css/stylefilms.css',
    'tableaudistri' => $tableaudistrirots,
    'films' => $filmsrots,
    'tableauacteurprinci' => $tableauacteurprincirots,
    'paraintro' => $paraintrorots,
    'parapresgen' => $parapresgenrots,
    ]);

?>