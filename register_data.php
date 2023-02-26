<?php
include 'db_connection.php';

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpass = $_POST['confirmPassword'];

    if ($password === $confirmpass) {
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password
        $query = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$hashed_password')";
        $stmt = mysqli_prepare($conn, $query);
        if (!$stmt) {
            die('Error: ' . mysqli_error($conn));
        }
        if (mysqli_stmt_execute($stmt)) {
            header("location: login.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: Password and Confirm Password do not match";
    }
    mysqli_close($conn);
}
?>
