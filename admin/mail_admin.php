<?php
// include '../db_connection.php';
include 'upload.php';
include 'sidebar.php';

$query = "SELECT * FROM contact_form";
$result = $conn->query($query);

// Delete a mail
if (isset($_POST['delete_mail'])) {
    // Get the post id from the form
    $Phone = $_POST['delete_mail'];
    // Delete the post from the database
    $query_del = "DELETE FROM contact_form WHERE Phone='$Phone' LIMIT 1 ";
    $query_run = mysqli_query($conn, $query_del);
    if ($query_run) {
        $query = "SELECT * FROM contact_form";
        $result = $conn->query($query);
        echo "<script>
                alert('Record deleted successfully');
                window.location.href = window.location.href;
              </script>";
    } else {
        echo "<script>
                alert('Error deleting record: " . mysqli_error($conn) . "');
                window.location.href = window.location.href;
              </script>";
    }
}

$conn->close();
?>

<!-- INVENTORY -->
<div class="inventory">
    <div class="wrapper">
        <div class="invetory_boxes_page">
            <table id="inventory_edit">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['fl_name']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Phone']; ?></td>
                        <td><?php echo $row['Messages']; ?></td>
                        <form id="delete-form" method="post">
                            <input type="hidden" name="delete_mail" value="<?php echo $row['Phone']; ?>">
                            <td class="delete_btn"><a href="#" onclick="openDeleteModal()">Delete</a></td>
                        </form>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

<div id="delete-modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeDeleteModal()">&times;</span>
        <p>Are you sure you want to delete this mail? <?php echo $row['Phone']; ?></p>
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