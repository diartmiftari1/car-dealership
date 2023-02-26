<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="dashboard.css">

    <title>Car Dealership</title>
</head>
<body>
    <div class="sidebar_wrapper">
    <input type="checkbox" id="navcheck" role="button" title="menu">
<label for="navcheck" aria-hidden="true" title="menu">
	<span class="burger">
		<span class="bar">
			<span class="visuallyhidden">Menu</span>
		</span>
	</span>
</label>
<nav id="menu">
	<a href="./all_cars_admin.php">View all cars</a>
	<a href="./add_cars_admin.php">Add Car</a>
    <a href="./mail_admin.php">Check Mail</a>
    <?php 
     if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
        echo '<li><a href="./logout_admin.php">Logout</a></li>';
    }
    ?>

</nav>
    </div>
