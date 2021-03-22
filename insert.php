<!DOCTYPE html> 
<html> 

<head> 
	<title>Insert Page page</title> 
</head> 

<body> 
	<center> 
		<?php 

		// servername => localhost 
		// username => root 
		// password => empty 
		// database name => demo_product 
		$conn = mysqli_connect("localhost", "root", "", "demo"); 
		
		// Check connection 
		if($conn === false){ 
			die("ERROR: Could not connect. "
				. mysqli_connect_error()); 
		} 
		
		// Taking all 5 values from the form data(input) 
		$name = $_REQUEST['product_name']; 
		$cate = $_REQUEST['product_category']; 
		$price = $_REQUEST['price']; 
		$desc = $_REQUEST['description']; 
		 
		
		// Performing insert query execution 
		// here our table name is college 
		$sql = "INSERT INTO demo_product VALUES ('','$name', 
			'$cate','$price','$desc')"; 
		
		if(mysqli_query($conn, $sql)){ 
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>"; 
			
		} else{ 
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn); 
		} 
		
		// Close connection 
		mysqli_close($conn); 
               header("Location: view.php");
		?> 
              
	</center> 
</body> 

</html> 
