
<?php
if(isset($_POST['submit'])){


$title = $_POST['title'];
$date = $_POST['date'];
$link = $_POST['link'];

$sql = "INSERT INTO home (title, date, link) VALUES('$title', '$date', '$link')";
$result = $mysqli->query($sql);
    ?>
<script>window.location = '?action=home'</script>
<?php
}





