<?php

include('include/twig.php');
$twig = init_twig();
include('include/series_data.php');

echo $twig->render('modeleseries.twig', [
    'CSS' => './css/styleseries.css',
    'series' => $seriesmando,
    'tableaudirecteurs' => $tableaudirecteursmando,
    'tableauperso' => $tableaupersomando,
    'tableaudevlpt' => $tableaudevlptmando,
    'tableaucritique' => $tableaucritiquemando,
    'tableaucritiquesboucle' => $tableaucritiquesbouclemando,
    ]);

?>