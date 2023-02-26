<?php
session_start();
// include '../db_connection.php';
include 'upload.php';
include 'sidebar.php';

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_index.php");
    exit;
} else {
    // echo "test";
}

$query = "SELECT * FROM contact_form";
$result = $conn->query($query);






$conn->close();
?>

<!-- INVENTORY -->
<div class="inventory">
    <div class="wrapper">
        <div class="invetory_boxes_page" style="overflow-x:auto;">
            <table id="inventory_edit">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['fl_name']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Phone']; ?></td>
                        <td><?php echo $row['Messages']; ?></td>
                        <form id="delete-form" action="" method="post">
                            <input type="hidden" name="delete_mail" value="<?php echo $row['ID']; ?>">
                            <td class="delete_btn"><button type="submit">Delete</button></td>
                        </form>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>



<script>

$(document).ready(function() {
    $('#delete-form').on('submit',function(){
 
        var form = $(this);
        $.ajax({
            url: 'upload.php',
            method: form.attr('method'),
            data: form.serialize(),
            dataType: 'json', // specify the data type as JSON
        });
         
        // Prevents default submission of the form after clicking on the submit button. 
        return false;   
    });
});

</script>
</body>

</html>