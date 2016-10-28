<?php
//if(!isset($result) === true){
//    echo "gelukt";
//}
//else {
//    echo "Error: " . $sql . "<br>". $mysqli->error;
//}
//
//$mysqli->close();

if(isset($_POST['submit'])) {


    $name = $_POST['name'];
    $text = $_POST['text'];
    $date = $_POST['date'];
    $link = $_POST['link'];
    $id = $_POST['id'];

    $sql = "UPDATE about SET name='" . $name . "', text='" . $text . "', date='" . $date . "', link='" . $link . "' WHERE id='" . $id . "' ";
    $result = $mysqli->query($sql);

    header('Location: ../about.tpl');
    ?>
    <script>window.location = '?action=about'</script>
    <?php
}


