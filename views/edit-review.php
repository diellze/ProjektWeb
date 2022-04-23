<?php
require_once '../controllers/ReviewController.php';
if(isset($_GET['id'])){
    $reviewId = $_GET['id'];
}

$review = new ReviewController;
$currentReview = $review->edit($reviewId);

if(isset($_POST['submit'])){
    $review->update($_POST, $reviewId);
}

?>
<style>
body{
    background-color:#93c1f5;
    font-family: verdana;
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

::-webkit-file-upload-button {
  background: #93c1f5;
  color: white;
  padding: 0.8em;
}

input[type=text]:focus {
  border: 3px solid #555;
}

input[type=text], input[type=password], input[type=description] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 0px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=description], input[type=password]:focus {
    outline: none;
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
    background-color: #93c1f5;
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
    background: steelblue;
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
		   <h2>EDIT REVIEW</h4><hr>
           <br>
		   	<div class="form-group">
		     <label for="image">Image: </label>
		     <input type="file" 
		           class="form-control" 
		           id="image" 
		           name="image"
                   value="<?php echo $currentReview['client_image']; ?>">
		   </div><br>

		   <div class="form-group">
		     <label for="name">Name: </label>
		     <input type="text" 
		           class="form-control" 
		           id="name" 
		           name="name" 
                   value="<?php echo $currentReview['client_name']; ?>">
		   </div><br>

           <div class="form-group">
             <label for="review">Description: </label> 
		     <textarea name="review" cols="30" rows="10" style  = "width: 100%;
             padding: 15px;
             margin: 5px 0 0px 0;
             display: inline-block;
             border: none;
             background: #f1f1f1;"><?php echo $currentReview['client_review']; ?></textarea>
		   </div><br>


		   <button type="submit" 
		          class="btn"
		          name="submit"
                  value="Update">Edit
            </button>
	    </form>
</div>

