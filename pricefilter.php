
		<?php 
       
	        $conn = mysqli_connect("localhost", "root", "", "demo"); 
		
		// Check connection 
		if($conn === false){ 
			die("ERROR: Could not connect. "
				. mysqli_connect_error()); 
		} 
	
	      $min = $_REQUEST['min']; 
		$max = $_REQUEST['max']; 
		
              $sql = "SELECT * FROM demo_product WHERE price BETWEEN $min AND $max;";
              $result = mysqli_query($conn,$sql);
              $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);     

		// Close connection 
		mysqli_close($conn); 
              header('Content-Type: application/json');
               echo json_encode($rows);
		?> 
              
	