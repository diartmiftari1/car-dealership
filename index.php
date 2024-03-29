<?php include 'header.php';
include 'db_connection.php';
$query = "SELECT * FROM posts ORDER BY id desc limit 3 ";
$result = $conn->query($query);




$conn->close();
?>

<!-- BANNER -->
<div class="banner">
    <div class="hero-image">
        <div class="hero-text only_homepage">
            <h1 style="font-size:50px">The best cars you can find in the market!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta molestias, similique neque at magnam doloribus.</p>
            <div class="banner_button">
                <button onclick="window.location.href='inventory.php';" class="btns btn-arrow btn-border">
                    <span>Go to inventory<svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.750311 5.83336L14.4452 5.83336L11.9691 8.57277C11.8279 8.72956 11.7485 8.94221 11.7485 9.16395C11.7485 9.38568 11.8279 9.59833 11.9691 9.75513C12.1104 9.91192 12.3021 10 12.5019 10C12.7017 10 12.8933 9.91192 13.0346 9.75513L16.7862 5.59189C16.8545 5.5127 16.908 5.41933 16.9437 5.31712C17.0188 5.1144 17.0188 4.88702 16.9437 4.68431C16.908 4.5821 16.8545 4.48872 16.7862 4.40953L13.0346 0.246299C12.9648 0.168256 12.8819 0.106311 12.7904 0.0640381C12.699 0.0217657 12.6009 1.76119e-06 12.5019 1.75253e-06C12.4028 1.74387e-06 12.3048 0.0217657 12.2133 0.0640381C12.1219 0.10631 12.0389 0.168256 11.9691 0.246299C11.8988 0.323704 11.843 0.415795 11.8049 0.51726C11.7668 0.618726 11.7472 0.727557 11.7472 0.837476C11.7472 0.947396 11.7668 1.05623 11.8049 1.15769C11.843 1.25916 11.8988 1.35125 11.9691 1.42866L14.4452 4.16806L0.750311 4.16806C0.551316 4.16806 0.36047 4.25579 0.219759 4.41194C0.0790487 4.56809 4.56357e-07 4.77988 4.37052e-07 5.00071C4.17746e-07 5.22154 0.0790486 5.43333 0.219759 5.58948C0.36047 5.74563 0.551316 5.83336 0.750311 5.83336Z" fill="#181D22" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ABOUT US -->
<div class="about">
    <div class="wrapper">
        <div class="about_warapper">
            <div class="about_text">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates repellat, a earum error dignissimos voluptatibus velit ab natus nobis quos?</p>
            </div>
            <div class="about_img">
                <img src="./img/inventory.jpg" alt="No Image">
            </div>
        </div>
    </div>
</div>

<!-- Services -->
<div class="services">

    <div class="wrapper">
        <div class="service_title title">
            <h2>Our Services</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A adipisci reiciendis explicabo, iusto repellendus ipsa maiores voluptates tenetur sit beatae?</p>
        </div>
        <div class="boxes">
            <div class="service_box">
                <div class="service_box_icon">
                    <img src="./img/icons/car-key.png" alt="no image">

                </div>
                <div class="service_text">
                    <h4>The best services</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, et?</p>
                </div>
            </div>
            <div class="service_box">
                <div class="service_box_icon">
                    <img src="./img/icons/car-repair.png" alt="no image">
                </div>
                <div class="service_text">
                    <h4>The best services</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, et?</p>
                </div>
            </div>
            <div class="service_box">
                <div class="service_box_icon">
                    <img src="./img/icons/car-wash.png" alt="no image">
                </div>
                <div class="service_text">
                    <h4>The best services</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, et?</p>
                </div>
            </div>
            <div class="service_box">
                <div class="service_box_icon">
                    <img src="./img/icons/trade.png" alt="no image">
                </div>
                <div class="service_text">
                    <h4>The best services</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, et?</p>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- INVENTORY -->
<div class="inventory">
    <div class="banner">
        <div class="inventory_image">
            <div class="hero-text">
                <h1 style="font-size:50px">Find your dream car!</h1>
                <div class="banner_button">
                    <button onclick="window.location.href='inventory.php';" class="btns btn-arrow btn-border">
                        <span>Go to inventory<svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.750311 5.83336L14.4452 5.83336L11.9691 8.57277C11.8279 8.72956 11.7485 8.94221 11.7485 9.16395C11.7485 9.38568 11.8279 9.59833 11.9691 9.75513C12.1104 9.91192 12.3021 10 12.5019 10C12.7017 10 12.8933 9.91192 13.0346 9.75513L16.7862 5.59189C16.8545 5.5127 16.908 5.41933 16.9437 5.31712C17.0188 5.1144 17.0188 4.88702 16.9437 4.68431C16.908 4.5821 16.8545 4.48872 16.7862 4.40953L13.0346 0.246299C12.9648 0.168256 12.8819 0.106311 12.7904 0.0640381C12.699 0.0217657 12.6009 1.76119e-06 12.5019 1.75253e-06C12.4028 1.74387e-06 12.3048 0.0217657 12.2133 0.0640381C12.1219 0.10631 12.0389 0.168256 11.9691 0.246299C11.8988 0.323704 11.843 0.415795 11.8049 0.51726C11.7668 0.618726 11.7472 0.727557 11.7472 0.837476C11.7472 0.947396 11.7668 1.05623 11.8049 1.15769C11.843 1.25916 11.8988 1.35125 11.9691 1.42866L14.4452 4.16806L0.750311 4.16806C0.551316 4.16806 0.36047 4.25579 0.219759 4.41194C0.0790487 4.56809 4.56357e-07 4.77988 4.37052e-07 5.00071C4.17746e-07 5.22154 0.0790486 5.43333 0.219759 5.58948C0.36047 5.74563 0.551316 5.83336 0.750311 5.83336Z" fill="#181D22" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="invetory_boxes">
            <?php

            while ($rows = mysqli_fetch_assoc($result)) {
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
<!-- CONTACT -->
<?php

?>
<div class="contact_form">
    <div class="wrapper_contact">
        <div class="contact_title title">
            <h2>CONTACT US</h2>
        </div>
        <div class="contact_us">
            <ul class="contact_info">
                <li><a href="https://goo.gl/maps/fk35kuR2UmJ48J897"><i class="fa-solid fa-location-dot"></i>4516 Horizon Circle, Kosovo</a></li>
                <li><a href="tel:+38344123456"><i class="fa-solid fa-phone"></i>+38344123456</a></li>
                <li><a href="mailto:example@gmail.com"><i class="fa-solid fa-envelope"></i>example@gmail.com</a></li>
                <li><a href="https://Instagram.com"><i class="fa-brands fa-instagram"></i>Brand Name Goes Here</a></li>
            </ul>

            <div class="form_contact_section">
                <form id="contact-form" method="post" action="" role="form">

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Your Name" id="username" name="name" autocomplete="on">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" autocomplete="on">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Enter Mobile Number" name="phone" id="mobile" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" id="comment" name="message" placeholder="Enter Your Message"></textarea>
                    </div>
                    <div class="d-flex justify-content-center form-button">
                        <input type="hidden" name="submit_index" value="1">
                        <input type="submit" value="Submit" name="submit_index" class="submit_buttonn" />
                        <span class="output_message"></span>
                        <span class="output_message_error"></span>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>
<!-- MAP -->
<div class="map">
    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Magjistralja%20Prishtine%20-%20Ferizaj%20-%20Rrethi%20te%20QMI%20Lipjan+(Prishtine)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

</div>


<script>

    $(document).ready(function() {
    $('#contact-form').on('submit',function(){
        // Add text 'loading...' right after clicking on the submit button. 
        $('.output_message').text('Loading...'); 
         
        var form = $(this);
        $.ajax({
            url: 'store_data.php',
            method: form.attr('method'),
            data: form.serialize(),
            dataType: 'json', // specify the data type as JSON
            success: function(response){
                if (response.status == 'success'){
                    $('.output_message').text(response.message);  
                }
                else{
                    $('.output_message').text("Message sent successfully");  
                }
            },
            error: function(xhr, textStatus, errorThrown){
                $('.output_message').text('An error occurred while submitting the form: ' + errorThrown);
            }
        });
         
        // Prevents default submission of the form after clicking on the submit button. 
        return false;   
    });
});

</script>

<?php include 'footer.php'; ?>

</body>

</html>