<form method="post">
    <input type="text" name="title">
    <input type="submit" value="remove" name="submit">
</form>
<?php
$title = $_POST['title'];


$sql = "DELETE FROM home WHERE title = '$title';";
$result = $mysqli->query($sql);


if(!isset($result) === true){
    echo "gelukt";
}
else {
    echo "Error: " . $sql . "<br>". $mysqli->error;
}

$mysqli->close();