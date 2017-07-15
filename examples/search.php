<?php 

require 'vendor/autoload.php';
$USERNAME = "*******";
$PASSWORD = "*******";

$aa = new Buki\AnadoluAgency($USERNAME, $PASSWORD);

$content = $aa->time($start = date("Y-m-d", time()), $end = "NOW")
			  ->limit(0, 10)
			  ->filter(AaType::TYPE, [1])
			  ->filter(AaType::LANGUAGE, [1])
			  ->filter(AaType::CATEGORY"", [1])
			  ->search();

var_dump($content); // format: json
