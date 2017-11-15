<?php

ini_set('display_errors',true);
 ini_set('error_reporting', E_ALL);

?>

<?php
$source_pdf="data/sample.pdf";
$output_folder="output";

    if (!file_exists($output_folder)) { mkdir($output_folder, 0777, true);}
passthru("pdftohtml $source_pdf $output_folder/new");
// var_dump($a);
$content= file_get_contents("output/news.html");
 $content = html_entity_decode($content);
 $content = mb_convert_encoding($content, "HTML-ENTITIES", "UTF-8");
 echo $content;

?>