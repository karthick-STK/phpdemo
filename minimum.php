
		<?php 
       
	        $conn = mysqli_connect("localhost", "root", "", "demo"); 
		
		// Check connection 
		if($conn === false){ 
			die("ERROR: Could not connect. "
				. mysqli_connect_error()); 
		} 
	
	      $name = $_REQUEST['val']; 
		
              $sql = "SELECT * FROM demo_product WHERE cate LIKE '%$name%'";
              $result = mysqli_query($conn,$sql);
              $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);     

		// Close connection 
		mysqli_close($conn); 
              header('Content-Type: application/json');
               echo json_encode($rows);
		?> 
              
	