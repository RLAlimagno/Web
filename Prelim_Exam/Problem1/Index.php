<!DOCTYPE html> 
<html lang="en">
	<head>
	    <meta charset="UTF-8"> 
    	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Final Grade Calculator</title> 
	</head>
	<body>
		<h3>Final Grade Calculator</h3>
		<form action="function.php" method="post">
			<div class="section1">
    	    	<span>Student Name : </span>
    	    	<input type="text" name="name" autocomplete="off" placeholder="Name" >
                <br>
                <br>
   			</div>
            <div class="section2">
    	    	<span>Enter Your Prelim Grade : </span>
    	    	<input type="number" name="prelim" autocomplete="off" placeholder="Prelim Grade" >
   			</div>
    		<div class="section3">
        		<span>Enter Your Midterm Grade : </span>
        		<input type="number" name="midterm" autocomplete="off" placeholder="Midterm Grade">
    		</div> 
            <div class="section4">
        		<span>Enter Your Pre-final Grade : </span>
        		<input type="number" name="prefinal" autocomplete="off" placeholder="Pre-final Grade">
    		</div>       
    		<div class="submit">
        		<input type="submit" name="submit" value="Submit Grades">
        		<input type="reset" value="Clear">
   			</div>
		</form>
	</body> 
</html>