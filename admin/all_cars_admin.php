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
                        <td><button type="button" onclick="window.location='http://localhost:8080/admin/edit_cars_admin.php?id=<?php echo $row['id']; ?>';" class="edit_car">Edit</button></td>
                        <form id="delete-form" action="upload.php" method="post">
                            <input type="hidden" name="delete_car" value="<?php echo $row['id']; ?>">
                            <td class="delete_btn"><a href="#" onclick="openDeleteModal()">Delete</a></td>
                        </form>

                    </tr>

                <?php
                }

                ?>
            </table>

        </div>
    </div>
</div>

<div id="delete-modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeDeleteModal()">&times;</span>
        <p>Are you sure you want to delete this post?</p>
        <div class="modal-footer">
            <button class="btn" onclick="submitDeleteForm()">Yes</button>
            <button class="btn" onclick="closeDeleteModal()">No</button>
        </div>
    </div>
</div>

<script>
    function openDeleteModal() {
        document.getElementById("delete-modal").style.display = "block";
    }

    function closeDeleteModal() {
        document.getElementById("delete-modal").style.display = "none";
    }

    function submitDeleteForm() {
        document.getElementById("delete-form").submit();
    }
</script>
</body>

</html>