<?php
$start_item= (($page-1) * ITEM_PAGE);


$sql= "SELECT * FROM home ORDER BY YEAR(Date) DESC, MONTH(Date) DESC, DAY(DATE) DESC LIMIT ". $start_item . " , " . ITEM_PAGE;

$result = $mysqli->query($sql);
$result = resultToArray($result);
//LIMIT". $start_item . " , " . ITEM_PAGE;