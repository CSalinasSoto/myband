<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $text = $_POST['text'];
    $date = $_POST['date'];
    $link = $_POST['link'];
    $id = $_POST['id'];
    $image = $_POST['image'];
    $sql = "UPDATE about SET name='" . $name . "', text='" . $text . "', date='" . $date . "',  image='" . $image . "',link='" . $link . "' WHERE id='" . $id . "' ";
    $result = $mysqli->query($sql);
    ?>
    <script>window.location = '?action=about'</script>
    <?php
}

