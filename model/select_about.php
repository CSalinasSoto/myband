<?php
$result = $mysqli->query("SELECT * FROM about");

$result = resultToArray($result);