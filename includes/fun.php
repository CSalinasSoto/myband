<?php
function resultToArray($DBResult){
    $resultArray = array();
//    var_dump($DBResult);
    while($row = $DBResult->fetch_assoc()){
        $resultArray[] = $row;
    }

//   print_r($resultArray);
    return $resultArray;

}