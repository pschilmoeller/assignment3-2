<!DOCTYPE html>

<html lang="en">
	
<head>
	
	<title>Assignment Three - MySQL</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="styles/queryresults.css">
	
</head>


<body>

	
	<h2>"Welcome to Celebrate Everyday!"</h2>
	
	     <div id="buttons">
		   
		    <form action="Assign3.php" method ="post">
			
	        <input type="submit" name="btn_submit" value="January"><br>
			<input type="submit" name="btn_submit" value="February"><br>
			<input type="submit" name="btn_submit" value="March"><br>
			<input type="submit" name="btn_submit" value="April"><br>
			<input type="submit" name="btn_submit" value="May"><br>
			<input type="submit" name="btn_submit" value="June"><br>
			<input type="submit" name="btn_submit" value="July"><br>
			<input type="submit" name="btn_submit" value="August"><br>
			<input type="submit" name="btn_submit" value="September"><br>
			<input type="submit" name="btn_submit" value="October"><br>
			<input type="submit" name="btn_submit" value="November"><br>
			<input type="submit" name="btn_submit" value="December"><br>

	        </form>
	    
	     </div>
	     
	     <?php
	     
	    if(isset($_POST['btn_submit'])) {
	     
	     @ $db = mysqli_connect('localhost', 'user1', 'abc123', 'events');
	
	if(mysqli_connect_errno() ) {
		
		echo "Error: could not connect to database. Please try again later.";
		exit;
	}
		
	$query = "select selected, category, month, day, name from events where month = '" . $_POST['btn_submit'] ."'";
	$result = mysqli_query($db, $query);
	
					echo "<table id='center'>
	     	
	     	
	     	<tr>
	     		<th>Today's date is: " . date('l jS \of F Y') . "</th>
	     	</tr>
	     	
	     	<tr>
	     		<th class='colheaders'>Selected</th>
	     		<th class='colheaders'>Category</th>
	     		<th class='colheaders''>Month</th>
	     		<th class='colheaders'>Day</th>
	     		<th class='colheaders'>Name</th>
	     	</tr>";
			
					 while($row = mysqli_fetch_assoc($result)) {
		
		 echo "<tr><td>" . $row["selected"] . "</td><td>" . $row["category"] . "</td><td>" . $row["month"]
		 . "</td><td>" . $row["day"] . "</td><td>" . $row["name"] . "</td></tr>";
			 
		 }
		 
		 echo "</table>";

		 mysqli_free_result($result);
	     mysqli_close($db);
	    
	     
	     }
	     ?>    
	     
	
</body>

</html>