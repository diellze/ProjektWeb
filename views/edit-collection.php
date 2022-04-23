<?php
require_once '../controllers/CollectionController.php';
if(isset($_GET['id'])){
    $collectionId = $_GET['id'];
}

$collection = new CollectionController;
$currentCollection = $collection->edit($collectionId);

if(isset($_POST['submit'])){
    $collection->update($_POST, $collectionId);
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

textarea{
    resize: none;
    vertical-align: top;
}

label{
    float: left;
    width: 120px;
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
  margin: 5px 0 10px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=description], input[type=password]:focus {
  
  outline: none;
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
		   <h2>EDIT COLLECTION</h4><hr>
           <br>
		   	<div class="form-group">
		     <label for="image">Image: </label>
		     <input type="file" 
		           class="form-control" 
		           id="image" 
		           name="image"
                   value="<?php echo $currentCollection['collection_image']; ?>">
		   </div><br>

		   <div class="form-group">
		     <label for="title">Title: </label>
		     <input type="text" 
		           class="form-control" 
		           id="title" 
		           name="title" 
                   value="<?php echo $currentCollection['collection_title']; ?>">
		   </div><br>

           <div class="form-group">
		     <label for="text1">Text1: </label>
		     <input type="text" 
		           class="form-control" 
		           id="text1" 
		           name="text1" 
                   value="<?php echo $currentCollection['collection_text1']; ?>">
		   </div><br>

           <div class="form-group">
		     <label for="text2">Text2: </label>
		     <input type="text" 
		           class="form-control" 
		           id="text2" 
		           name="text2" 
                   value="<?php echo $currentCollection['collection_text2']; ?>">
		   </div><br>

		   <button type="submit" 
		          class="btn"
		          name="submit"
                  value="Update">Edit
            </button>
	    </form>
</div>
