<?php
require_once '../controllers/ProductController.php';
if(isset($_GET['id'])){
    $productId = $_GET['id'];
}

$product = new ProductController;
$currentProduct = $product->edit($productId);

if(isset($_POST['submit'])){
    $product->update($_POST, $productId);
}

?>
<style>
*{
    font-family: verdana;
}

body{
    background-color:#009879;
}

h2{
    text-align: center;
}

.container {
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}

textarea{
    resize: none;
    vertical-align: top;
}

label{
    float: left;
    width: 120px;
}

.container form {
    background-color:white;
	width: 500px;
	padding: 20px;
	border-radius: 15px;
	box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);  
}

button{
    text-align: center;
    font-size: 15px;
    background-color: darkslategray;
    border-style: none;
    border-radius: 5px;
    color: white;
    width: 20%;
    height: 40px;
    cursor: pointer;
    transition: all 0.5s ease;
    margin-bottom: 15px;
    margin-top: 20px; 
    position:relative;
    top: 40%; 
    left:40%;
}

button[type="submit"]:hover {
    background: #181818;
}

</style>
<div class="container">
		<form method="POST">
		   <h2>EDIT PRODUCT</h4><hr>
           <br>
		   	<div class="form-group">
		     <label for="image">Image: </label>
		     <input type="file" 
		           class="form-control" 
		           id="image" 
		           name="image"
                   value="<?php echo $currentProduct['product_image']; ?>">
		   </div><br>

		   <div class="form-group">
		     <label for="name">Name: </label>
		     <input type="text" 
		           class="form-control" 
		           id="name" 
		           name="name" 
                   value="<?php echo $currentProduct['product_name']; ?>">
		   </div><br>

           <div class="form-group">
		     <label for="price">Price: </label>
		     <input type="text" 
		           class="form-control" 
		           id="price" 
		           name="price" 
                   value="<?php echo $currentProduct['product_price']; ?>">
		   </div><br>

           <div class="form-group">
		     <label for="description">Description: </label>
		     <input name="description" 
                    cols="30" 
                    rows="10" 
                    value="<?php echo $currentProduct['product_description']; ?>">
		    </div><br>

		   <button type="submit" 
		          class="btn"
		          name="submit"
                  value="Update">Edit
            </button>
	    </form>
</div>




<!--
    Description:
    <input type="text" name="description" value="<?php echo $currentProduct['product_description']; ?>">
    <br>
    <input type="submit" name="submit" value="Update">
</form>