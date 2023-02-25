<?php
include 'db_connection.php';

if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phone'];
    $message = $_POST['message'];

    $query = mysqli_query($conn, "INSERT INTO contact_form(fl_name,Email,Phone,Messages) VALUES ('$name', '$email', '$phonenumber', '$message')");
}
?>