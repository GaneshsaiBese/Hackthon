<?php
    $Username =$_POST['Username'];
    $Password =$_POST['Password'];

    //database connection
    $conn = new mysqli('localhost','root','','loginpage');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into reg(Username,Password)values(?, ?)");
        $stmt->bind_param("ss", $Username, $Password);
        $stmt->execute();
        echo "Login Successful..";
        $stmt->close();
        $conn->close();
    }

?>

