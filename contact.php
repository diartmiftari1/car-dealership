<?php include 'header.php'; ?>

<!-- BANNER -->
<div class="banner">
  <div class="hero_section">
  </div>
</div>

<!-- CONTACT -->
<div class="contact_form">
  <div class="wrapper_contact">
    <div class="contact_title title">
      <h2>CONTACT US</h2>
    </div>
    <div class="contact_us">
      <ul class="contact_info">
        <li>
          <i class="fa-solid fa-location-dot"></i>
          <div class="contact_side">
            <h3>Adress</h3>
            <a href="https://goo.gl/maps/fk35kuR2UmJ48J897">4516 Horizon Circle, Kosovo</a>
        </li>

        <li>
          <i class="fa-solid fa-phone"></i>
          <div class="contact_side">
            <h3>Phone Number</h3>
            <a href="tel:+38344123456">+38344123456</a>
        </li>

        <li>
          <i class="fa-solid fa-envelope"></i>
          <div class="contact_side">
            <h3>Email</h3>
            <a href="mailto:example@gmail.com">example@gmail.com</a>
        </li>


        <li>
          <i class="fa-brands fa-instagram"></i>
          <div class="contact_side">
            <h3>Instagram</h3>
            <a href="https://Instagram.com">Brand Name Goes Here</a>
        </li>
      </ul>

      <div class="form_contact_section">
        <form id="contact_form" name="form" onsubmit="return validateContactForm()">

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
            <textarea class="form-control" rows="3" id="comment" placeholder="Enter Your Message"></textarea>
          </div>
          <div class="d-flex justify-content-center form-button">
            <input type="submit" value="Submit" class="submit_buttonn" />
          </div>

        </form>
        <div id="error" class="hide">
          <div class="alert alert-danger" role="alert">
            <p><strong>There were error(s) in your form:</strong></p>
            <p id="msg"></p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- MAP -->
<div class="map">
  <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Magjistralja%20Prishtine%20-%20Ferizaj%20-%20Rrethi%20te%20QMI%20Lipjan+(Prishtine)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

</div>

<?php include 'footer.php'; ?>
</body>

</html>