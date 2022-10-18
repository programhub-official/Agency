<?php
session_start();
include('config/db.php');


// User Register Code
if (isset($_REQUEST['registerbtn'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $passwd = $_REQUEST['passwd'];
    $cpasswd = $_REQUEST['cpasswd'];
    $v_code = random_int(100000,999999);
    if (($name != '') and ($email != '') and ($passwd != '') and $passwd == $cpasswd) {
        $query = "INSERT INTO users(name,email,password,verification_code,is_verified)VALUES('$name','$email','$passwd','$v_code','0')";
        $res = mysqli_query($conn,$query);
        foreach($res as $row){
            $usr_name = $row['name'];
            $usr_email = $row['email'];
        }
        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'user_name' => $usr_name,
            'user_email' => $usr_email,
        ];
        header('Location: index.php');
    }else{
        $_SESSION['status'] = "All Fields Are Required";
        header('Location: register.php');
    }
}



// User Login Code
if (isset($_REQUEST['btnlogin'])) {
    $email = $_REQUEST['email'];
    $passwd = $_REQUEST['password'];
    if (($email != "") and ($passwd != "")) {
        $query = "SELECT * FROM users WHERE email='$email' AND password='$passwd'";
        $res = mysqli_query($conn,$query);
        if (mysqli_num_rows($res) > 0) {
            $res_fetch = mysqli_fetch_assoc($res);
            if ($res_fetch['is_verified']==1) {
                foreach($res as $row){
                    $usr_name = $row['name'];
                    $usr_email = $row['email'];
                }
                $_SESSION['auth'] = true;
                $_SESSION['auth_user'] = [
                    'usr_name' => $usr_name,
                    'usr_email' => $usr_email,
                ];
                header('Location: index.php');
            }else{
                header('Location: verify.php');
            }
        }else{
            header('Location: login.php');
        }
    }else{
        header('Location: login.php');
    }
}



// User Contact Form

if (isset($_REQUEST['contactbtn'])) {
    $name = $_SESSION['auth_user']['usr_name'];
    $email = $_SESSION['auth_user']['usr_email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    if (($subject != '') and ($message != "") ) {
        $query = "INSERT INTO contact(name,email,subject,message)VALUES('$name','$email','$subject','$message')";
        mysqli_query($conn,$query);
        $_SESSION['status'] = "Email Send Success";
        header('Location: contact.php');
    }else{
        $_SESSION['status'] = "All Fields Are Required..";
        header('Location: contact.php');
    }
}


// User Logout Code
if (isset($_REQUEST['logout'])) {
    session_destroy();
    header('Location: index.php');
}

?>