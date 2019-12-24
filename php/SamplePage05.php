

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
		<div class="d-flex justify-content-center pt-5">
			<form action="/SampleProject01/php/SamplePage06.php" method="post">
				<div class="form-group">
					<h2>POST Form</h2>
					<label for="exampleInputEmail1">Email address</label> 
					<input type="email" class="form-control" id="exampleInputEmail1"
						name="exampleInputEmail1" aria-describedby="emailHelp" 
						placeholder="Enter email">
						<small id="emailHelp" class="form-text text-muted">We'll never share your
						email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" 
							name="exampleInputPassword1" placeholder="Password">
						<small id="emailHelp" class="form-text text-muted">We'll never share your
						password with anyone else.</small>
				</div>
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1"
					value="True" name="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Check me out</label>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
				<div class="d-flex justify-content-center pt-5">
			<form action="/SampleProject01/php/SamplePage06.php" method="get">
				<div class="form-group">
					<h2>GET Form</h2>
					<label for="exampleInputEmail1">Email address</label> 
					<input type="email" class="form-control" id="exampleInputEmail1"
						name="exampleInputEmail1" aria-describedby="emailHelp" 
						placeholder="Enter email">
						<small id="emailHelp" class="form-text text-muted">We'll never share your
						email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" 
							name="exampleInputPassword1" placeholder="Password">
						<small id="emailHelp" class="form-text text-muted">We'll never share your
						password with anyone else.</small>
				</div>
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1"
					value="True" name="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Check me out</label>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>




<?php
?>