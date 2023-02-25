<?php

include 'sidebar.php';
// Include the database configuration file
include 'upload.php';

?>

<div class="add_cars_admin">
    <div class="wrapper">
        <div class="add_cars_admin_wrapper">

            <div class="title">
                <h2>Edit Cars</h2>
            </div>
<!-- 
    <?php
    if (isset($_GET['id'])) {
        $post_id = $_GET['id'];
        $post_query = "SELECT * FROM posts WHERE id='$post_id' LIMIT 1";
        $post_query_res = mysqli_query($conn, $post_query);


        if (mysqli_num_rows($post_query_res) > 0) {
            $row = mysqli_fetch_array($post_query_res);
    ?> -->


                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="post_id" value="<?php echo $row['id'] ?>">
                        <input type="text" name="postname" value="<?php echo $row['postname'] ?>" placeholder="Post name">
                        <input type="text" name="marke" value="<?php echo $row['marke'] ?>" placeholder="Car Marke">
                        <input type="text" name="model" value="<?php echo $row['model'] ?>" placeholder="Car Model">
                        <input type="number" name="price" value="<?php echo $row['price'] ?>" placeholder="Price">
                        <input type="date" name="year" value="<?php echo $row['year'] ?>" placeholder="Year of Production">

                        <input type="text" name="transission" value="<?php echo $row['transission'] ?>" placeholder="Transission">

                        <input type="text" name="displacement" value="<?php echo $row['displacement'] ?>" placeholder="Displacement">
                        <input type="text" name="body_style" value="<?php echo $row['body_style'] ?>" placeholder="Body Style">
                        <input type="number" name="mileage" value="<?php echo $row['mileage'] ?>" placeholder="Mileage">
                        <input type="text" name="fuel_type" value="<?php echo $row['fuel_type'] ?>" placeholder="Fuel Type">
                        <!-- <input type="hidden" name="id" value="<?php echo $id; ?>"> -->

                        <input type="file" name="fileUpload[]" multiple>

                        <input type="submit" class="submit_button" name="update" value="Update">
                    </form>
                <?php

                } else {
                ?>
                    <h4>Asnje e dhene nuk u gjet</h4>
            <?php
                }
            } ?>
        </div>


    </div>
</div>