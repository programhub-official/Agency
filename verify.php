<?php
include('config/db.php');
if (isset($_GET['v_code'])) {
    $v_code = $_GET['v_code'];
    $q = "SELECT email FROM users where verification_code='$v_code'";
    $res = mysqli_query($conn,$q);
    if (mysqli_num_rows($res) > 0) {
        foreach ($res as $row) {
            $email = $row['email'];
        }
        $upd = "UPDATE users SET is_verified='1' WHERE email='$email'";
        mysqli_query($conn,$upd);
        header('Location: login.php');
    }else {
        echo "Invalid Code..";
    }

}
?>
<h2>Server ERROR 500</h2>