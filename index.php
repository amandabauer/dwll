<?php
include "lib/html.class.php";
include "lib/head.class.php";
include "lib/meta.class.php";
include "lib/title.class.php";
include "lib/body.class.php";

$meta = new Meta('utf-8', 'X-UA-Compatible', 'IE=edge', 'viewport', 'width=device-width, initial-scale=1.0');

$title = new Title('document');

$body = new Body();
$head = new Head($meta, $title);
$html = new Html($head, $body);
echo $html;
?>

