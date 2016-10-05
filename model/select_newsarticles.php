<?php

//$result = $mysqli->query("SELECT * FROM newsarticles");
$result = $mysqli->query("SELECT * FROM about");

$result = resultToArray($result);

//print_r($result);
