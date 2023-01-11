<?php 
    session_start();
    

    $conn = mysqli_connect('localhost','spadmin','abc');

    mysqli_select_db($conn , 'signup');

    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];

    $s = " select * from crispa where email = '$email' && password = '$password'";

    $result = mysqli_query($conn, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        header('location: index.php');
    }
    else{
        header('location: profile.php');
    }
?>