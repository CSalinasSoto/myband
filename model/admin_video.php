
<?php
if(isset($_POST['submit'])){


$title = $_POST['title'];
$date = $_POST['date'];
$link = $_POST['link'];

$sql = "INSERT INTO home (title, date, link) VALUES('$title', '$date', '$link')";
$result = $mysqli->query($sql);
}

//if(isset($result) === true){
//    echo "gelukt";
//}
//else {
//    echo "Error: " . $sql . "<br>". $mysqli->error;
//}
//
//$mysqli->close();




