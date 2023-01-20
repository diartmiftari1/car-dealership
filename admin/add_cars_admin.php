<?php include '../db_connection.php';

 include 'sidebar.php'; 


 # fetching images
$sql  = "SELECT img_name FROM
images ORDER BY id DESC";

$stmt = $conn->prepare($sql);
// $stmt->execute();

// $images = $stmt->fetchAll();

?>

<div class="add_cars_admin">
    <div class="wrapper">
        <div class="add_cars_admin_wrapper">

  <div class="title">
    <h2>Add Cars Here</h2>
  </div>

            <form action="" method="post" enctype="multipart/form-data">

            <?php  
            if (isset($_GET['error'])) {
            	echo "<p class='error'>";
            	    echo htmlspecialchars($_GET['error']);
            	echo "</p>";
            }
	    ?>

                <input type="text" name="name" placeholder="Post name">
                <input type="text" name="marke" placeholder="Car Marke">
                <input type="text" name="model" placeholder="Car Model">
                <input type="number" name="price" placeholder="Price">
                <input type="date" name="year" placeholder="Year od Production">

                <div class="transmission">
                <p>Transission:</p>
                <input type="radio" name="transmission" id="transmission" value="Automatic">
                <label for="automatic">Automatic</label><br>
                <input type="radio" name="transmission" id="transmission" value="Manual">
                <label for="manual">Manual</label><br>
                </div>
                
                <input type="text" name="displacement" placeholder="Displacement">
                <input type="text" name="body_style" placeholder="Body Style">
                <input type="number" name="mileage" placeholder="Mileage">
                <input type="text" name="fuel_type" placeholder="Fuel Type">

                <input type="file" name="image[]" multiple>

                <input type="submit" name="upload" value="Post">
            </form>

            <!-- <?php if ($stmt->rowCount() > 0) { ?> -->
	<div class="gallery">
		<h4>All Images</h4>
		<?php foreach ($images as $image) { ?>
		   <img src="uploads/<?=$image['img_name']?>">
		<?php } ?>
	</div>
	<?php } ?>
        </div>
    </div>
</div>

