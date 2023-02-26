<?php
// Include the database configuration file 
include '../db_connection.php';




$images = array();
$type = array();
$size = array();

// UPDATE POST
if (isset($_POST['update'])) {
    // Get the post id from the form
    $post_id = $_POST['post_id'];
    // Get the updated post information from the form
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

 // Update the post information in the database
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
        // Move the uploaded file to the desired location
        move_uploaded_file($new_images['tmp_name'][$i], "./upload/$file_name");
         // Add the file name to the array
        $file_names[] = $file_name;
    }
}

// Remove unwanted images from the array
if(isset($_POST['remove_images'])){
    $remove_images = $_POST['remove_images'];
    foreach ($remove_images as $file_name) {

        // Delete the unwanted file from the upload folder
        unlink("./upload/$file_name");

         // Find the key of the unwanted file in the array
        $key = array_search($file_name, $file_names);

           // Remove the unwanted file from the array
        if($key !== false){
        unset($file_names[$key]);
        }
        }
        }
        
        // Update the image array in the database
        $file_names_json = json_encode($file_names);
        $update_query = "UPDATE posts SET file_name='$file_names_json' WHERE id='$post_id'";
        $update_result = mysqli_query($conn, $update_query);
        if ($update_query) {
            $response_array['status'] = 'success';
            $response_array['message'] = 'Message Sent!';
        } else {
            $response_array['status'] = 'error';
            $response_array['message'] = 'Error sending email!';
        }
        echo json_encode($response_array);
     } 




// Delete a post
if(isset($_POST['delete_car'])){
    // Get the post id from the form
    $post_id = $_POST['delete_car'];
    // Delete the post from the database
    $query = "DELETE FROM posts WHERE id='$post_id' LIMIT 1 ";
    $query_run = mysqli_query($conn, $query);
}


// Delete a mail
if (isset($_POST['delete_mail'])) {
    // Get the post id from the form
    $mail_id = $_POST['delete_mail'];
    // Delete the post from the database
    $query_del = "DELETE FROM contact_form WHERE ID='$mail_id' LIMIT 1 ";
    $query_run = mysqli_query($conn, $query_del);

    if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        header("Location: admin_index.php");
        exit;
    } else {
        // echo "test";
    }
}
?>