<?php

$sql = "SELECT * FROM home";

$result2 = $mysqli->query($sql);

$total_nr_home = $result2->num_rows;
