<!DOCTYPE html> 
<html> 

<head> 
	<title>Vew Page</title> 
</head> 

<body> 
	
		


<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php 		
		$conn = mysqli_connect("localhost", "root", "", "demo"); 
		
		// Check connection 
		if($conn === false){ 
			die("ERROR: Could not connect. "
				. mysqli_connect_error()); 
		} 	
		
              $sql = "SELECT * FROM demo_product";
              $result = mysqli_query($conn,$sql);
              $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);     

		// Close connection 
		mysqli_close($conn); 


		?> 
	

<div class="container">
  <h2>View Products</h2>
   <div >
<select class="form-control" id="sel1" name="product_category" onchange="cat_fil();">
  <option>Select Category</option>
    <option value="electronics">Electronics</option>
    <option value="wood">Wood</option>
    <option value="house">House</option>    
  </select> <br><br> 

	<input type="text"placeholder="Minimum Value" id="min" required>
        <input type="text"  placeholder="Maximum Value" id="max" required>
	<button type="text" onclick="price_fil();">Searchs</button> <br>
  </div>        
  <table  class="table">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody id="productTable">
       <?php 
  foreach($rows as $row){
echo '<tr>';
echo '<td>'.$row['name'].'</td>';
echo '<td>'.$row['cate'].'</td>';
echo '<td>'.$row['price'].'</td>';
echo '<td>'.$row['desc'].'</td>';
echo '<tr>';
} ?>
  
    </tbody>
  </table>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
 function cat_fil(){
      var val = $( "#sel1" ).val();

         $.ajax({
            type:'post',
            url:'minimum.php',
            data:{ 
		val:val,            
            },
            success:function(result){ 
            var x='';            
            for(i in result){           
                 
                x+='<tr>';
           	x+='<td>'+result[i].name+'</td>';
		x+='<td>'+result[i].cate+'</td>';
		x+='<td>'+result[i].price+'</td>';
		x+='<td>'+result[i].desc+'</td>';
                x+='</tr>';              
            }
		$("#productTable").html(x);
            }
         }); 
    }


	function price_fil(){
        var min = $( "#min" ).val();
	var max = $( "#max" ).val();

         $.ajax({
            type:'post',
            url:'pricefilter.php',
            data:{ 
		min:min,
   		max:max,            
            },
            success:function(result){ 
            var x='';            
            for(i in result){           
                 
                x+='<tr>';
           	x+='<td>'+result[i].name+'</td>';
		x+='<td>'+result[i].cate+'</td>';
		x+='<td>'+result[i].price+'</td>';
		x+='<td>'+result[i].desc+'</td>';
                x+='</tr>';              
            }
		$("#productTable").html(x);
            }
         }); 
    }
</script> 

</html>

