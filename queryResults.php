<!DOCTYPE html>

<html lang="en">
	
<head>
	
	<title>Assignment Three - MySQL</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="styles/queryresults.css">
	
</head>

<body>
	
	
	<?php
	
	@ $db = mysqli_connect('localhost', 'user1', 'abc123', 'events');
	
	if(mysqli_connect_errno() ) {
		
		echo "Error: could not connect to database. Please try again later.";
		exit;
	}
	
	$query = "select selected, category, month, day, name from events where month = 'January'";
	$result = mysqli_query($db, $query);
	
	while($row = mysqli_fetch_assoc($result)) {
		
		echo $row["selected"] . " " . $row["name"] . "<br>";
		
		
	}
	
	mysqli_free_result($result);
	mysqli_close($db);
	     
	     
	    
	     switch ($_POST['btn_submit']) {
	     				
         case "January":
         $jan = "January";
         break;
         
		 case "February":
         $feb = "February";
         break;
         
		 case "March":
         echo "January";
         break;
         
		 case "April":
         echo "January";
         break;
         
		 case "May":
         echo "January";
         break;
         
		 case "June":
         echo "January";
         break;
         
		 case "July":
         echo "January";
         break;
         
		 case "August":
         echo "January";
         break;
         
		 case "September":
         echo "January";
         break;
         
		 case "October":
         echo "January";
         break;
         
		 case "November":
         echo "January";
         break;
         
		 case "December":
         echo "January";
         break;
         
		 }
	     
		 
	     
	     ?>
	
	 <h2>"Welcome to Celebrate Everyday!"</h2> <br>
	 
	     <table id="center">
	     	
	     	
	     	<tr>
	     		<th colspan ="10">Today's date is: <?php echo date("l jS \of F Y");?></th>
	     	</tr>
	     	
	     	<tr>
	     		<th class="colheaders">Selected</th>
	     		<th class="colheaders" colspan ="2">Category</th>
	     		<th class="colheaders">Month</th>
	     		<th class="colheaders">Day</th>
	     		<th class="colheaders" colspan = "5">Name</th>
	     	</tr>
	 
	     	
	    	
	     </table>
	     
	    
	
	
	
</body>

</html>