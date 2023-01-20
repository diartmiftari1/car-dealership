<?php include 'header.php'; ?>

    <div class="single_car">
        <div class="wrapper">
            <div class="single_car_images">
                <h1>Audi R8</h1>
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

                    <div class="mySlides fade">
                      <div class="numbertext">1 / 3</div>
                      <img src="./img/audir8.jpg" style="width:100%">
                    </div>
                    
                    <div class="mySlides fade">
                      <div class="numbertext">2 / 3</div>
                      <img src="./img/r8interior.jpg" style="width:100%">
                    </div>
                    
                    <div class="mySlides fade">
                      <div class="numbertext">3 / 3</div>
                      <img src="./img/rearr8.jpg" style="width:100%">
                    </div>
                    
                    <a class="prev" onclick="previousSlide()">&#10094;</a>
                    <a class="next" onclick="nextSlide()">&#10095;</a>
                    
                    </div>
                    <br>
                    
                
            </div>
            <div class="single_car_info">
                <ul class="list_single_car">
                    <li>
                        <span class="single_car_left">Price</span>
                        <span class="single_car_right">5500$</span>
                    </li>
                    <li>
                        <span class="single_car_left">Make</span>
                        <span class="single_car_right">Audi</span>
                    </li>
                    <li>
                        <span class="single_car_left">Model</span>
                        <span class="single_car_right">R8</span>
                    </li>
                    <li>
                        <span class="single_car_left">Year</span>
                        <span class="single_car_right">02.2022</span>
                    </li>
                    <li>
                        <span class="single_car_left">Displacement</span>
                        <span class="single_car_right">4.0L</span>
                    </li>
                    <li>
                        <span class="single_car_left">Transmission</span>
                        <span class="single_car_right">Automatic</span>
                    </li>
                    <li>
                        <span class="single_car_left">Body Style</span>
                        <span class="single_car_right">Coupe</span>
                    </li>
                    <li>
                        <span class="single_car_left">Mileage</span>
                        <span class="single_car_right">250KM</span>
                    </li>
                    <li>
                        <span class="single_car_left">Fuel Type</span>
                        <span class="single_car_right">Petrol</span>
                    </li>
                </ul>
            </div>
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