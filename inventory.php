<?php include 'header.php';

include 'db_connection.php';
    $query = "SELECT * FROM posts";
$result = $conn->query($query);



$conn->close();

?>

    <!-- BANNER --> 
    <div class="banner">
        <div class="hero_section">
          </div>
    </div>
     <!-- INVENTORY -->      
     <div class="inventory">
        <div class="wrapper">
            <div class="invetory_boxes_page">

                <?php 

                while($rows=mysqli_fetch_assoc($result)){ 
                    ?>

                     <a class="car_link" href="singlecar.php?id=<?php echo $rows['id']; ?>">
                    <div class="car_box">
                    <div class="car_img">
                        <?php
                    // decode the JSON string to an array
                            $file_names = json_decode($rows['file_name'], true);
                            $file_num = count($file_names);
                            if ($file_num > 0) {
                                $imageURL = './admin/upload/' . $file_names[0];
                                ?>
                                <img src="<?php echo $imageURL; ?>" alt="" />
                                <?php
                            } else {
                                echo '<p>No image(s) found...</p>';
                            }
                            ?>  
                    </div>
                    <div class="car_box_more_info">
                        <div class="car_title">
                            <h2><?php echo $rows['postname']; ?></h2>
                        </div>
                        <div class="car_icons">
                            <ul class="spec_list">
                                <li class="spec_list">
                                    <img src="./img/icons/manual-transmission.png" alt="manual-transmission">
                                    <span><?php echo $rows['transission']; ?></span>
                                </li>
                                <li class="spec_list">
                                    <img src="./img/icons/calendar.png" alt="manual-transmission">
                                    <span><?php echo $rows['year']; ?></span>
                                </li>
                                <li class="spec_list">
                                    <img src="./img/icons/horse-jumping-outline-variant.png" alt="manual-transmission">
                                    <span><?php echo $rows['transission']; ?></span>
                                </li>
                                <li class="spec_list">
                                    <img src="./img/icons/gas-station.png" alt="manual-transmission">
                                    <span><?php echo $rows['fuel_type']; ?></span>
                                </li>
                                <li class="spec_list">
                                    <img src="./img/icons/sedan-car-front.png" alt="manual-transmission">
                                    <span><?php echo $rows['body_style']; ?></span>
                                </li>
                                <li class="spec_list">
                                    <img src="./img/icons/car.png" alt="manual-transmission">
                                    <span><?php echo $rows['displacement']; ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </a>
               <?php 
               }
             
                ?>
               
                
            </div>
        </div>
    </div>


    <?php include 'footer.php'; ?>
</body>
</html>