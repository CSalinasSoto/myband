<?php

$result = $mysqli->query("SELECT * FROM newsarticles");

$result = resultToArray($result);

print_r($result);
