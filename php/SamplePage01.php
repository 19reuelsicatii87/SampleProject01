<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>SamplePage01</title>

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
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<h1 title="topic1">Headline 1</h1>
				First Name : <input type="text" value="John" /> 
				<br /> <br /> 
				Last Name : <input type="text" value="Major" /> 
				<br /> <br /> 
				Gender : <input type="radio" name="gender" checked="checked" value="Male">Male 
						 <input type="radio" name="gender" value="Female">Female 
						 <br /> <br />
				Skills : <input type="checkbox" name="skills" checked="checked" value="JavaScript" />JavaScript 
				         <input type="checkbox" name="skills" checked="checked" value="jQuery" />jQuery 
				         <input type="checkbox" name="skills" value="C#" />C# 
				         <br /> <br />
				Country: <select>
							<?php 
							$Country="Philippines";
							$Countries=array(Japan, Singapore);
							?>
        					<option selected="selected" value="USA">USA</option>
        					<option value="India">India</option>
        					<option value="UK">UK</option>
        					<option value=<?php echo $Country?>><?php echo $Country?></option>
        					<option value=<?php echo $Countries[0]?>><?php echo $Countries[0]?></option>
        					<option value=<?php echo $Countries[1]?>><?php echo $Countries[1]?></option>
						</select> 
						<br /> <br /> 
				Summary : <br />
						<textarea>
        					I am a Senior Dot Net Developer with 10 years experience
    					</textarea>
						<br /> <br /> 
				<input id="Submit1" type="submit" value="Submit input" />
				<input id="Submit2" type="submit" value="Submit :input" />
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>




</body>
</html>