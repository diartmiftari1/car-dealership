<?php
include 'db_connection.php';


    
$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$password_hash = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO users (username, email, password)
VALUES ('$username', '$email', '$password_hash')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
