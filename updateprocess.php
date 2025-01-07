<?php
require "config.php";

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $sql_contact = "INSERT INTO Contact (email, name, phone, message)
            VALUES ('$email' , '$name' , '$phone' , '$message')";

    if ($conn -> query($sql_contact) == TRUE) {
        header("Location:contactus.html?complete.");
        $message = "New item added succeccfully";
    } else {
        header("Location:contactus.html?error.");
        $message = "Error: " .$sql. "<br>" .$conn -> error;
    }

    header("contactus.html");
}

?>