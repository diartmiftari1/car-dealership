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
        $query = "INSERT INTO register_data (name, email, password) VALUES (?,?,?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $password);
        if (mysqli_stmt_execute($stmt)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: Password and Confirm Password do not match";
    }
    mysqli_close($conn);
}

?>
