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
  background-color: #93c1f5;
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
              <th>Emaili i konfirmuar</th>
              <th>Password</th>
              <th>Password i konfirmuar</th>
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
            <td><?php echo $user['Konifrmoemailin']; ?></td>
            <td><?php echo $user['Pasword']; ?></td>
            <td><?php echo $user['KonfirmoPassword']; ?></td>
            <td><a href="edit-user.php?id=<?php echo $user['Id'];?>">Ndrysho</a></td>
            <td><a href="delete-user.php?id=<?php echo $user['Id'];?>">Fshije</a></td>
           
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
</div>