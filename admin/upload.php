<?php
// Include the database configuration file 
include '../db_connection.php';

$images = array();
$type = array();
$size = array();

// UPDATE POST
if (isset($_POST['update'])) {
    $post_id = $_POST['post_id'];
$postname = $_POST['postname'];
$marke = $_POST['marke'];
$model = $_POST['model'];
$price = $_POST['price'];
$year = $_POST['year'];
$transission = $_POST['transission'];
$displacement = $_POST['displacement'];
$body_style = $_POST['body_style'];
$mileage = $_POST['mileage'];
$fuel_type = $_POST['fuel_type'];

$update_query = "UPDATE posts SET postname='$postname', marke='$marke', model='$model', price='$price', year='$year', transission='$transission', displacement='$displacement', body_style='$body_style', mileage='$mileage', fuel_type='$fuel_type' WHERE id='$post_id'";
$update_result = mysqli_query($conn, $update_query);

// Retrieve the current image array from the database
$select_query = "SELECT file_name FROM posts WHERE id='$post_id'";
$select_result = mysqli_query($conn, $select_query);
$row = mysqli_fetch_assoc($select_result);
$file_names = json_decode($row['file_name'], true);

// Add new images to the array, if any
if(isset($_FILES['new_images'])){
    $new_images = $_FILES['new_images'];
    for($i = 0; $i < count($new_images['name']); $i++) {
        $file_name = $new_images['name'][$i];
        move_uploaded_file($new_images['tmp_name'][$i], "./upload/$file_name");
        $file_names[] = $file_name;
    }
}

// Remove unwanted images from the array
if(isset($_POST['remove_images'])){
    $remove_images = $_POST['remove_images'];
    foreach ($remove_images as $file_name) {
        unlink("./upload/$file_name");
        $key = array_search($file_name, $file_names);
        if($key !== false){
        unset($file_names[$key]);
        }
        }
        }
        
        // Update the image array in the database
        $file_names_json = json_encode($file_names);
        $update_query = "UPDATE posts SET file_name='$file_names_json' WHERE id='$post_id'";
        $update_result = mysqli_query($conn, $update_query);
}

// ADD NEW POST
if (isset($_POST['upload'])) {
    if (isset($_FILES['fileUpload'])) {
        //  $postname = $_SESSION['user_id'];
        $postname = $_POST['postname'];
        $marke = $_POST['marke'];
        $model = $_POST['model'];
        $price = $_POST['price'];
        $year = $_POST['year'];
        $transission = $_POST['transission'];
        $displacement = $_POST['displacement'];
        $body_style = $_POST['body_style'];
        $mileage = $_POST['mileage'];
        $fuel_type = $_POST['fuel_type'];
        $file_names = array();

        foreach ($_FILES['fileUpload']['tmp_name'] as $key => $tmp_name) {
            // get the file name
            $file_name = $_FILES['fileUpload']['name'][$key];
            // move the file to the desired location
            move_uploaded_file($tmp_name, "./upload/$file_name");
            // add the file name to the array
            array_push($file_names, $file_name);
        }
        // convert the array of file names to a JSON string
        $file_names_json = json_encode($file_names);
        var_dump($file_names_json);
        // insert the JSON string into the database



        $query = mysqli_query($conn, "INSERT INTO posts (postname, marke, model, price, year, transission, displacement, body_style, mileage, fuel_type, file_name) 
VALUES ('$postname', '$marke', '$model','$price','$year','$transission','$displacement','$body_style',' $mileage','$fuel_type','$file_names_json')");

        if ($query) {
            echo 'Success!' . '<br>';
        } else {
            echo 'failed!' . '<br>';
        }
    }
}

// DELETE POST
if(isset($_POST['delete_car'])){
    $post_id = $_POST['delete_car'];
    $query = "DELETE FROM posts WHERE id='$post_id' LIMIT 1 ";
    $query_run = mysqli_query($conn, $query);
}
