<?php

// include '../db_connection.php';
include 'upload.php';

include 'sidebar.php';
$query = "SELECT * FROM posts";
$result = $conn->query($query);

$conn->close();
?>
<!-- INVENTORY -->
<div class="inventory">
    <div class="wrapper">
        <div class="invetory_boxes_page">

            <table id="inventory_edit">

                <tr>
                    <th>ID</th>
                    <th>Post name</th>
                    <th>Marke</th>
                    <th>Model</th>
                    <th>Price</th>
                    <th>Year of Production</th>
                    <th>Transission</th>
                    <th>Displacement</th>
                    <th>Body Style</th>
                    <th>Mileage</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php

                while ($row = mysqli_fetch_assoc($result)) {

                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['postname']; ?></td>
                        <td><?php echo $row['marke']; ?></td>
                        <td><?php echo $row['model']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['year']; ?></td>
                        <td><?php echo $row['transission']; ?></td>
                        <td><?php echo $row['displacement']; ?></td>
                        <td><?php echo $row['body_style']; ?></td>
                        <td><?php echo $row['mileage']; ?></td>
                        <td class="image_table">
                            <?php

                            // decode the JSON string to an array
                            $file_names = json_decode($row['file_name'], true);
                            $file_num = count($file_names);
                            if ($file_num > 0) {
                                $imageURL = './upload/' . $file_names[0];
                            ?>
                                <img src="<?php echo $imageURL; ?>" alt="" />
                            <?php
                            } else {
                                echo '<p>No image(s) found...</p>';
                            }

                            ?>
                        </td>
                        <td><button type="button" onclick="window.location='http://localhost:8080/car-dealership/admin/edit_cars_admin.php?id=<?php echo $row['id']; ?>';" class="edit_car">Edit</button></td>
                        <form action="upload.php" method="post">
                            <td><button type="submit" name="delete_car" value="<?php echo $row['id'];?>" class="delete_car">Delete</button></td>
                        </form>

                    </tr>

                <?php
                }

                ?>
            </table>

        </div>
    </div>
</div>

</body>

</html>