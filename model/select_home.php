<?php
$result = $mysqli->query("SELECT * FROM home");

$result = resultToArray($result);