<?php
$result = $mysqli->query("SELECT * FROM contact");

$result = resultToArray($result);