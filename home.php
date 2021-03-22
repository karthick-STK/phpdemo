<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<title>Product- Store Data</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head> 

<body> 	

<div class="container">
  <h2>Storing Form data in Database</h2>
  <form action="insert.php" method="post">
    <div class="form-group">
      <label for="ProductName">Product Name:</label> 
      <input type="text" class="form-control" name="product_name" id="ProductName">
    </div>    
<div class="form-group">
  <label for="sel1">Product Category:</label>
  <select class="form-control" id="sel1" name="product_category">
    <option>Select Category</option>
    <option value="electronics">Electronics</option>
    <option value="wood">Wood</option>
    <option value="house">House</option>    
  </select>
</div>
<div class="form-group">
      <label for="Price">Price:</label> 
				<input type="text" class="form-control" name="price" id="Price"> 
    </div>
<div class="form-group">
     <label for="Desc">Description:</label> 
				<input type="text-area"  class="form-control" name="description" id="description"> 
    </div>

  
    <button type="submit" class="btn btn-default">Submit</button>
<br>
  </form>
</div>
	
</body> 

</html>
