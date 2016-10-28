
<?php
if(isset($_POST['title'])){
    $title = $_POST['title'];


    $sql = "DELETE FROM home WHERE title = '$title';";
    $result = $mysqli->query($sql);

    ?>
    <script>window.location = '?action=home'</script>
    <?php
}



