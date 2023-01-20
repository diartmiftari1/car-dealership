<?php include 'header.php'; ?>

    <div class="login_page">
        <div class="login_page_banner">
            <img src="./img/login.jpg" alt="n Login image">
        </div>
        <div class="wrapper">
            <div class="login_box">
              

                <form class="login_form" method="post" name="form"  onsubmit="return validated()">

                    <div class="input_wrapper">
                        <h4>Email</h4>
                        <input autocomplete="off" type="email" name="email">
                        <div id="email_error_login">Please fill up your Email</div>
                    </div>
                    <div class="input_wrapper">
                        <h4>Password</h4>
                    <input type="password" name="password">
                    <div id="pass_error_login">Please fill up your Password</div>
                    </div>

                    <button type="submit" class="login_btn">Login</button>

                    <div class="container signin">
                        <p>Don't have an account? <a href="./register.html">Register</a>.</p>
                      </div>
                </form>


            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>