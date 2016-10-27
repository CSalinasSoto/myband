<?php

$start_item= (($page-1) * ITEM_PAGE);


$sql = "SELECT * FROM newsarticles LIMIT ". $start_item . " , " . ITEM_PAGE;
$result = $mysqli->query($sql);


$result = resultToArray($result);


//print_r($result);
