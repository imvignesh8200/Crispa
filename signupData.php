<?php 

    session_start();
    

    $conn = mysqli_connect('localhost','spadmin','abc');

    mysqli_select_db($conn , 'signup');

    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];

    $s = " select * from crispa where email = '$email'";

    $result = mysqli_query($conn, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "Email already exists";
    }
    else{
        $query = "INSERT INTO crispa (name,email,password) VALUES ('$name','$email','$password')";
        mysqli_query($conn, $query);
        echo "reg success";
        header('Location: profile.php');
    }
?>