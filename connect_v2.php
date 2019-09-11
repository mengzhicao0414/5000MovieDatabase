<?php
    
    $username = $_POST['user']; //varibles defined on login page
    $password = $_POST['pass']; //varibles defined on login page


    $username = stripslashes($username);
    $password = stripslashes($password);
    //$username = mysqli_real_escape_string($username);
    //$password  = mysqli_real_escape_string($password);


    $conn = mysqli_connect("localhost","root","","CS542");
    //mysql_select_db("CS542_Login");

    $sql = "select * from users where username = '$username' and password = '$password'";
    $result = mysqli_query( $conn, $sql)             //"select * from users where username = '$username' and password = '$password'")
                or die("Failed to query database ".mysqli_error());
    $row = mysqli_fetch_array($result);
    
    if ($row['username'] == $username && $row['password'] == $password){
        echo "Login success :) Welcome ".$row['username'];
        header('Location: index.php');
    } else {
        echo "Failed to login :("; 
        header('Location: Fail.php');
        }    

?>