<?php

include('include/twig.php');
$twig = init_twig();
include('include/series_data.php');

echo $twig->render('modeleseries.twig', [
    'CSS' => './css/styleseries.css',
    'series' => $seriesboba,
    'tableaudirecteurs' => $tableaudirecteursboba,
    'tableauperso' => $tableaupersoboba,
    'tableaudevlpt' => $tableaudevlptboba,
    'tableaucritique' => $tableaucritiqueboba,
    'tableaucritiquesboucle' => $tableaucritiquesboucleboba,
    ]);

?>