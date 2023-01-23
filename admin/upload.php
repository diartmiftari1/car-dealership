<?php 
// Include the database configuration file 
include '../db_connection.php'; 

$images = array();
$type = array();
$size = array();
if(isset($_POST['upload'])) 
   {
   if(isset($_FILES['fileUpload']))
      {
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

        foreach($_FILES['fileUpload']['tmp_name'] as $key => $tmp_name){
            // get the file name
            $file_name = $_FILES['fileUpload']['name'][$key];
            // move the file to the desired location
            move_uploaded_file($tmp_name, "./upload/$file_name");
            // add the file name to the array
            array_push($file_names, $file_name);
        }
        // convert the array of file names to a JSON string
        $file_names_json = json_encode($file_names);
        var_dump( $file_names_json);
        // insert the JSON string into the database
     
      

$query = mysqli_query($conn, "INSERT INTO posts (postname, marke, model, price, year, transission, displacement, body_style, mileage, fuel_type, file_name) 
VALUES ('$postname', '$marke', '$model','$price','$year','$transission','$displacement','$body_style',' $mileage','$fuel_type','$file_names_json')");

if($query) 
{
    echo 'Success!' . '<br>';
}
else
{
    echo 'failed!' . '<br>';
}
 }
}
