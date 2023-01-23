<?php include 'header.php';
include 'db_connection.php';
include 'upload.php';
$post_id = $_GET['id'];

$i = 0;
$sql = "SELECT * FROM posts WHERE id=$post_id";
print($post_id);
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
?>


<div class="single_car">


    <div class="wrapper">
        <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="single_car_images">
                    <h1><?php echo $row["postname"] ?></h1>
                    <div class="email_single_car">
                        <a href="mailto:examle@gmail.com" class="single_car_email">Email</a>
                        <a href="tel:+38344123456" class="single_car_email">Call Now</a>
                    </div>

                </div>
    </div>
    <div class="wrapper_single_car">
        <div class="singel_car_images">
            <!-- SLIDER -->
            <div class="slideshow-container">
                <?php

                // decode the JSON string to an array
                $file_names = json_decode($row['file_name'], true);
                $file_num = count($file_names);

                if (count($file_names) > 0) {
                    $i = 0;
                    foreach ($file_names as $file_name) {
                        $i++;
                        $imageURL = './admin/upload/' . $file_name;
                ?>
                        <div class="mySlides fade">
                            <div class="numbertext"><?php echo "0" . $i ." / 0".$file_num; ?></div>
                            <img src="<?php echo $imageURL; ?>" alt="" />
                        </div>
                <?php
                    }
                } else {
                    echo '<p>No image(s) found...</p>';
                }

                ?>


                <a class="prev" onclick="previousSlide()">&#10094;</a>
                <a class="next" onclick="nextSlide()">&#10095;</a>

            </div>
            <br>




        </div>
        <div class="single_car_info">
            <ul class="list_single_car">
                <li>
                    <span class="single_car_left">Price</span>
                    <span class="single_car_right"><?php echo $row["price"]. "€" ?></span>
                </li>
                <li>
                    <span class="single_car_left">Make</span>
                    <span class="single_car_right"><?php echo $row["marke"] ?></span>
                </li>
                <li>
                    <span class="single_car_left">Model</span>
                    <span class="single_car_right"><?php echo $row["model"] ?></span>
                </li>
                <li>
                    <span class="single_car_left">Year</span>
                    <span class="single_car_right"><?php echo $row["year"] ?></span>
                </li>
                <li>
                    <span class="single_car_left">Displacement</span>
                    <span class="single_car_right"><?php echo $row["displacement"] ?></span>
                </li>
                <li>
                    <span class="single_car_left">Transmission</span>
                    <span class="single_car_right"><?php echo $row["transission"] ?></span>
                </li>
                <li>
                    <span class="single_car_left">Body Style</span>
                    <span class="single_car_right"><?php echo $row["body_style"] ?></span>
                </li>
                <li>
                    <span class="single_car_left">Mileage</span>
                    <span class="single_car_right"><?php echo $row["mileage"]." KM" ?></span>
                </li>
                <li>
                    <span class="single_car_left">Fuel Type</span>
                    <span class="single_car_right"><?php echo $row["fuel_type"] ?></span>
                </li>
            </ul>
        </div>
<?php }
    } ?>
    </div>
    <div class="wrapper_single_car">
        <div class="singel_car_images">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa odit numquam sed ratione itaque, quasi odio
                harum voluptate, repellat temporibus et dolorum
                sapiente accusantium officia vero esse eum officiis quo alias quibusdam fugiat molestiae iure
                laboriosam quas. Nam, repudiandae ullam.
            </p>
            <div class="car_specs">
                <ul class="car_specs_list_right car_spec">
                    <li><i class="fa fa-check"></i>ABS</li>
                    <li><i class="fa fa-check"></i>Adaptive headlights</li>
                    <li><i class="fa fa-check"></i>Distance cruise control</li>
                    <li><i class="fa fa-check"></i>ESP</li>
                    <li><i class="fa fa-check"></i>Leather steering wheel</li>
                    <li><i class="fa fa-check"></i>Power steering</li>

                    <li><i class="fa fa-check"></i>Distance warning</li>
                    <li><i class="fa fa-check"></i>Alarm system</li>
                    <li><i class="fa fa-check"></i>Ambient lighting</li>
                    <li><i class="fa fa-check"></i>Board computer</li>
                    <li><i class="fa fa-check"></i>Fog lights</li>
                    <li><i class="fa fa-check"></i>LED headlights</li>
                </ul>
            </div>
        </div>

    </div>
</div>
<?php include 'footer.php'; ?>

<script>
    // SLIDER SINGLE CAR
    let slideIndex = 1;
    showSlides(slideIndex);

    function nextSlide() {
        showSlides(slideIndex += 1);
    }

    function previousSlide() {
        showSlides(slideIndex -= 1);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");

        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }

        for (let slide of slides) {
            slide.style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }
</script>

</body>

</html>