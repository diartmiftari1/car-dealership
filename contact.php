<?php include 'header.php'; ?>


<!-- BANNER -->
<div class="banner">
  <div class="hero_section">
  </div>
</div>

<!-- CONTACT -->
<div class="contact_form">
  <!-- <form action="store_data.php" method="post"> -->
  <!-- <form id="contact_form" action="" method="post" action="javascript:void(0)" role="form"> -->
  <!-- <form name="contact-form" action="" method="post" id="contact-form"> -->
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
          <input type="hidden" name="submit" value="1">
            <input type="submit" value="Submit" name="submit" class="submit_buttonn" />
            <span class="output_message"></span>
            <span class="output_message_error"></span>
          </div>

  </form>
</div>
</div>
</div>
</form>
</div>
<!-- MAP -->
<div class="map">
  <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Magjistralja%20Prishtine%20-%20Ferizaj%20-%20Rrethi%20te%20QMI%20Lipjan+(Prishtine)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

</div>


<script>
    $(document).ready(function() {
        $('#contact-form').on('submit', function(event) {
            event.preventDefault();
            var form = $(this);
            $.ajax({
                url: 'store_data.php',
                method: 'POST',
                data: form.serialize(),
                success: function(response) {
                    var result = JSON.parse(response);
                    $('.output_message').text(result.message);
                    $('#contact-form')[0].reset();
                },
                error: function() {
                    $('.output_message_error').text('Error sending email!');
                }
            });
        });
    });
    </script>

<?php include 'footer.php'; ?>
</body>

</html>