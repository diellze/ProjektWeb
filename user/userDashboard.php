<?php
require_once 'user.php';
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
              <th>Emri</th>
              <th>Mbiemri</th>
              <th>Email</th>
              <th>Roli</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $u = new User;
          $allusers = $u->readData();
          foreach($allusers as $User): ?>
          <tr>
            <td><?php echo $User['Emri']; ?></td>
            <td><?php echo $User['Mbiemri']; ?></td>
            <td><?php echo $User['Email']; ?></td>
            <td><?php echo $User['Roli']; ?></td>
            <td><a href="edit-user.php?id=<?php echo $User['Id'];?>">Edit</a></td>
            <td><a href="delete-user.php?id=<?php echo $User['Id'];?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
</div>