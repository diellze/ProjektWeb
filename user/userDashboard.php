<?php
require_once '../users/user.php';
?>

<style>
*{
  font-family: sans-serif; 
}

.content-table {
  border-collapse: collapse;
  margin: 40px 0;
  font-size: 0.9em;
  width: 90%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  margin-left: 5%;
  margin-right: 5%;
}

.content-table thead tr {
  background-color: #0072bb;
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
              <th>Emri</th>
              <th>Mbiemri</th>
              <th>Email</th>
              <th>Password</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $p = new user;
          $allusers = $p->readData();
          foreach($allusers as $user): ?>
          <tr>
            <td><?php echo $user['Emri']; ?></td>
            <td><?php echo $user['Mbiemri']; ?></td>
            <td><?php echo $user['Email']; ?></td>
            <td><?php echo $user['Pasword']; ?></td>
            <td><a href="delete-user.php?id=<?php echo $user['Id'];?>">Delete</a></td>
           
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
</div>