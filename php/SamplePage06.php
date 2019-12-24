

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>SamplePage05</title>

<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://fonts.googleapis.com/css?family=Mansalva&display=swap">
<link rel="stylesheet" href="/SampleProject01/css/SamplePage01.css">

<script src="/SampleProject01/js/jquery-3.4.1.js"></script>
<script src="/SampleProject01/js/SamplePage01.js"></script>
</head>
<body>
	<div class="container">
	Welcome <?php echo $_POST["exampleInputEmail1"]; ?><br>
	Your email address password is: <?php echo $_POST["exampleInputPassword1"]; ?><br>
	Your email address password is: <?php echo $_POST["exampleCheck1"]; ?>
 
	</div>
</body>
</html>




<?php
?>