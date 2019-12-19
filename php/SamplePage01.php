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

	<div class="fluid-container">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
    			<div class="row">
    				<div class="col-sm-12">
    					<h1 title="topic1">Headline 1</h1>
    				</div>
    			</div>
				<div class="row">
    				<div class="col-sm-2"></div>
    				<div class="col-sm-4">
						<?php 
						$pageName="SamplePage02";
    				    $uri="/SampleProject01/php/SamplePage02.php";
						
						// Using ECHO to create an HTML tag						
						echo '<a href="/SampleProject01/php/SamplePage02.php">'.$pageName.'</a>';					
                        ?>
    				</div>
    				<div class="col-sm-4">
						<a href=<?php echo $uri  ?>><?php echo $pageName  ?></a>
    				</div>
    				<div class="col-sm-2"></div>
        		</div>
      			<div class="row">
					<div class="col-sm-5">
						First Name : <input type="text" value="John" /> 
					</div>
					<div class="col-sm-7">
						Last Name : <input type="text" value="Major" /> 
					</div>    			
    			</div>
    			
    			<div class="row">
        			<div class="col-sm-5">
        			
    						Gender : <input type="radio" name="gender" checked="checked" value="Male">Male 
    						 <input type="radio" name="gender" value="Female">Female 
        			</div>
    				<div class="col-sm-7">
        			
    						Skills : <input type="checkbox" name="skills" checked="checked" value="JavaScript" />JavaScript 
    				         <input type="checkbox" name="skills" checked="checked" value="jQuery" />jQuery 
    				         <input type="checkbox" name="skills" value="C#" />C# 
        			</div>
    			</div>
    			<div class="row">
    				<div class="col-sm-12">
    					Country: <select>
							<?php 
							$Country="Philippines";
							$Countries=array(Japan, Singapore);
							?>
        					<option selected="selected" value="USA">USA</option>
        					<option value="India">India</option>
        					<option value="UK">UK</option>
        					<option value=<?php echo $Country ?>><?php echo $Country ?></option>
        					<option value=<?php echo $Countries[0] ?>><?php echo $Countries[0] ?></option>
        					<option value=<?php echo $Countries[1] ?>><?php echo $Countries[1] ?></option>
						</select> 
  					</div>
    			</div>
    			<div class="row">
    				<div class="col-sm-12">
    					Summary : <br />
						<textarea cols="50" rows="5">
        					
        					<?php 
        					   // Concatenation symbol "."
        					   echo 'Conca-- ' .$Country. ' --tenate'."\n";  
        					   
        					   // Double qoutes call variable value
        					   echo "Hello $Country \n"; 
        					   
        					   // Single qoutes treats the variable as text
        					   echo 'Hello $Country '."\n"; 
        					   
        					   // Displaying special characters using "\"
        					   echo "\*\*\*\*Hello World\*\*\*\* \n";
        					?>
        					I am a Senior Dot Net Developer with 10 years experience
	    					</textarea>
    				</div>
    			</div>
    			<div class="row">
					<div class="col-sm-5">
						<input id="Submit1" type="submit" value="Submit input" />
					</div>
					<div class="col-sm-7">
						<input id="Submit2" type="submit" value="Submit :input" />
					</div> 
    			</div>

    			
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
</body>
</html>