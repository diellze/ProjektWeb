<?php
require_once '../controllers/PromoController.php';

$promo = new PromoController;
if(isset($_POST['submit'])){
    $promo->insert($_POST);
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

@media only screen and (max-width: 996px) {
	.container form {
	    width: 400px;
	    padding: 15px;
    }
}

@media only screen and (max-width: 567px) {
    .container form {
	    width: 300px;
	    padding: 15px;
    }
}

</style>
<div class="container">
		<form method="POST">
		   <h2>CREATE A PROMOTION</h4><hr>
           <br>
		   	<div class="form-group">
		     <label for="image">Image: </label>
		     <input type="file" 
		           class="form-control" 
		           id="image" 
		           name="image">
		   </div><br>

		   <div class="form-group">
		     <label for="name">Title: </label>
		     <input type="text" 
		           class="form-control" 
		           id="title" 
		           name="title" >
		   </div><br>

           <div class="form-group">
		     <label for="price">Text: </label>
		     <input type="text" 
		           class="form-control" 
		           id="text" 
		           name="text" >
		   </div><br>

		   <button type="submit" 
		          class="btn"
		          name="submit"
                  value="Save">Create
            </button>
	    </form>
</div>
