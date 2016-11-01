<?php
//$result = $mysqli->query("SELECT * FROM contact");
//
//$result = resultToArray($result);

if (isset($_POST['email']))  {
    $admin_email = '18510@ma-web.nl';
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $comment = $_POST['message'];

    mail($admin_email, "$subject", $comment, "From:" . $email);
    echo "Thank you for contacting us!";
}
