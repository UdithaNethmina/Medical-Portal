<?php
session_start();
require "config.php";

    //$email = $_SESSION['user_name'];

    $sql_d = "DELETE FROM contact WHERE email = 'abc@gmail.com'";

    if($conn->query($sql_d)){
        header("Location: contactus.php");
    }else{
        echo "Failed! try again";
    }


?>