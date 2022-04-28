<?php

include('include/twig.php');
$twig = init_twig();
include('include/series_data.php');

echo $twig->render('modeleseries.twig', [
    'CSS' => './css/styleseries.css',
    'series' => $seriesrebels,
    'tableaudirecteurs' => $tableaudirecteursrebels,
    'tableauperso' => $tableaupersorebels,
    'tableaudevlpt' => $tableaudevlptrebels,
    'tableaucritique' => $tableaucritiquerebels,
    'tableaucritiquesboucle' => $tableaucritiquesbouclerebels,
    ]);

?>