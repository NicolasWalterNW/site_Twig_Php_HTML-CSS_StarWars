<?php

include('include/twig.php');
$twig = init_twig();
include('include/series_data.php');

echo $twig->render('modeleseries.twig', [
    'CSS' => './css/styleseries.css',
    'series' => $seriestcw,
    'tableaudirecteurs' => $tableaudirecteurstcw,
    'tableauperso' => $tableaupersotcw,
    'tableaudevlpt' => $tableaudevlpttcw,
    'tableaucritique' => $tableaucritiquetcw,
    'tableaucritiquesboucle' => $tableaucritiquesboucletcw,
    ]);

?>