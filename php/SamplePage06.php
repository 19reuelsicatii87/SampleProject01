

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>SamplePage05</title>

<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://fonts.googleapis.com/css?family=Mansalva&display=swap">
</head>
<body>
	<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
        	    <div class="container">
        	       <h3>Post Form</h3>
        	       Welcome <?php echo $_POST["exampleInputEmail1"]."<br>"; ?>
        	       Your Email address password is: <?php echo $_POST["exampleInputPassword1"]."<br>"; ?>
                   Your CheckBox value is: <?php echo $_POST["exampleCheck1"]; ?>
                   </div>        
	<?php else : ?>
        	    <div class="container">
        	    <h3>Get Form</h3>
        	    Welcome <?php echo $_GET["exampleInputEmail1"]."<br>"; ?>
        	    Your Email address password is: <?php echo $_GET["exampleInputPassword1"]."<br>"; ?>
        	    Your CheckBox value is: <?php echo $_GET["exampleCheck1"]; ?>
        	    </div>
     <?php endif; ?>
</body>
</html>