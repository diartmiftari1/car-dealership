<?php include 'header.php'; ?>

<div class="login_page">
    <div class="login_page_banner">
        <img src="./img/login.jpg" alt="Login image">
    </div>
    <div class="wrapper">
        <div class="login_box">
            <form action="register_data.php" method="post" class="login_form" method="post" name="form" onsubmit="return validatedRegister()">
                <h3>Create an account</h3>
                <div class="input_wrapper">
                    <h4>Your Name</h4>
                    <input autocomplete="off" type="text" name="name">
                    <div id="name_error">Please fill up your Name</div>
                </div>
                <div class="input_wrapper">
                    <h4>Email</h4>
                    <input autocomplete="off" type="text" name="email">
                    <div id="email_error">Please fill up your Email</div>
                </div>
                
                <div class="input_wrapper">
                    <h4>Password</h4>
                    <input type="password" name="password">
                    <div id="pass_error">Please fill up your Password</div>
                </div>
                <div class="input_wrapper">
                    <h4>Confirm Password</h4>
                    <input type="password" id="confirmPassword" name="confirmPassword">
                    <div id="confirmPass_error">Please check your password again</div>
                </div>



                <button type="submit" class="login_btn" name="register">Register</button>

                <div class="container signin">
                    <p>Have an account? <a href="./login.html">Login</a> instead.</p>
                </div>
            </form>


        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>

</html>