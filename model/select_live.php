<?php
$result = $mysqli->query("SELECT * FROM live");

$result = resultToArray($result);