<?php
    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con, 'userregis');

    $name = $_POST['user'];
    $pass = $_POST['password'];
    $email = $_POST['email'];

    $s = " select * from user where username = '$name'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if($num == 1){
        echo " Username Sudah Diambil";
    }else{
        $reg = "insert into user(username , password, email) values ('$name' , '$pass', '$email')";
        mysqli_query($con, $reg);
        echo "Registrasi Succes";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
    <br>
    <a href="index.php">Kembali ke Form</a>
</body>
</html>
