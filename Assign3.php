<!DOCTYPE html>

<html lang="en">
	
<head>
	
	<title>Assignment Three - MySQL</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="styles/queryresults.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	
</head>


<body>

	
	<h2>"Welcome to Celebrate Everyday!"</h2>
	
	     <div class="buttons">
		 
		    <form action="Assign3.php" method ="post">
			
	        <input type="submit" name="btn_submit" value="January">
			<input type="submit" name="btn_submit" value="February">
			<input type="submit" name="btn_submit" value="March">
			<input type="submit" name="btn_submit" value="April">
			<input type="submit" name="btn_submit" value="May">
			<input type="submit" name="btn_submit" value="June"><br />
			<input type="submit" name="btn_submit" value="July">
			<input type="submit" name="btn_submit" value="August">
			<input type="submit" name="btn_submit" value="September">
			<input type="submit" name="btn_submit" value="October">
			<input type="submit" name="btn_submit" value="November">
			<input type="submit" name="btn_submit" value="December">

	        </form>
	        
	     </div>
	     
	     	 <div class="CSSTableGenerator"> 
	     <?php
	     
	     	date_default_timezone_set('America/Chicago');
	     
			if(isset($_POST['btn_submit'])) {
			     
			@ $db = mysqli_connect('localhost', 'user1', 'abc123', 'events');
			
			if(mysqli_connect_errno() ) {
				echo "Error: could not connect to database. Please try again later.";
				exit;
			}
				
			$query = "select selected, category, month, day, name, url from events where month = '" . $_POST['btn_submit'] ."'";
			$result = mysqli_query($db, $query);
			
				echo "<table id='center'>
			    		<tr>
			     			<th colspan=\"5\" id=\"mainTH\">Today's date is: " . date('l jS \of F Y') . "</th>
			     		</tr>
			     	
				     	<tr>
				     		<th class='colheaders'>Selected</th>
				     		<th class='colheaders'>Category</th>
				     		<th class='colheaders''>Month</th>
				     		<th class='colheaders'>Day</th>
				     		<th class='colheaders'>Name</th>
				     	</tr>";
						
				$name = "";	
				while($row = mysqli_fetch_assoc($result)) {
					$url = $row["url"];
					$name = $row["name"];
					if ($url != NULL){
						$name = "<a href=\"$url\">$name</a>";
					} else $name = $row["name"];
					
					echo "<tr><td>" . $row["selected"] . "</td><td>" . $row["category"] . "</td><td>" . $row["month"]
				 	. "</td><td>" . $row["day"] . "</td><td>" . $name . "</td></tr>"; 
				}
				
				echo "</table>";
		
				mysqli_free_result($result);
			    mysqli_close($db);
			    
			     
			     }
	     ?>    
	     </div>
</body>

</html>