<?php
require_once '../controllers/ReviewController.php';
?>

<style>
*{
  font-family: sans-serif; 
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.link{
    text-decoration: none;
    color: red;
    font-size: 17px;
}
.first-link{
  color: black;
  font-size: 22px;
  padding-left: 50%;
  position: relative;
  top: 20px;
}
.top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}
</style>
<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>Your picture</th>
              <th>Your name</th>
              <th>Your comment</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $r = new ReviewController;
          $allReview = $r->readData();
          foreach($allReview as $review): ?>
          <tr>
            <td><?php echo $review['client_image']; ?></td>
            <td><?php echo $review['client_name']; ?></td>
            <td><?php echo $review['client_review']; ?></td>
            <td><a href="edit-review.php?id=<?php echo $review['Id'];?>">Edit</a></td>
            <td><a href="delete-review.php?id=<?php echo $review['Id'];?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
</div>