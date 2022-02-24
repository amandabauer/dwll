<?php
include "lib2/ul.class.php";
include "lib2/li.class.php";

$teste = array(new li("", "sss"), new li("", "sws"), new li("", "esc"));

$ul = new ul("", $teste);
echo $ul;