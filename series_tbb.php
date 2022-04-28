<?php

include('include/twig.php');
$twig = init_twig();
include('include/series_data.php');

echo $twig->render('modeleseries.twig', [
    'CSS' => './css/styleseries.css',
    'series' => $seriestbb,
    'tableaudirecteurs' => $tableaudirecteurstbb,
    'tableauperso' => $tableaupersotbb,
    'tableaudevlpt' => $tableaudevlpttbb,
    'tableaucritique' => $tableaucritiquetbb,
    'tableaucritiquesboucle' => $tableaucritiquesboucletbb,
    ]);

?>