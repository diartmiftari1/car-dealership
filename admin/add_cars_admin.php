<?php
// include '../db_connection.php';

include 'sidebar.php';
// Include the database configuration file
include 'upload.php';

?>

<div class="add_cars_admin">
    <div class="wrapper">
        <div class="add_cars_admin_wrapper">

            <div class="title">
                <h2>Add Cars Here</h2>
            </div>

            <form action="upload.php" method="post" enctype="multipart/form-data">

                <input type="text" name="postname" placeholder="Post name">
                <input type="text" name="marke" placeholder="Car Marke">
                <input type="text" name="model" placeholder="Car Model">
                <input type="number" name="price" placeholder="Price">
                <input type="date" name="year" placeholder="Year od Production">

                <input type="text" name="transission" placeholder="Transission">

                <input type="text" name="displacement" placeholder="Displacement">
                <input type="text" name="body_style" placeholder="Body Style">
                <input type="number" name="mileage" placeholder="Mileage">
                <input type="text" name="fuel_type" placeholder="Fuel Type">
                <!-- <input type="hidden" name="id" value="<?php echo $id; ?>"> -->

                <input type="file" name="fileUpload[]" multiple>

                <input type="submit" name="upload" value="Post">
            </form>

            <div class="image_display">


            </div>
        </div>


    </div>
</div>