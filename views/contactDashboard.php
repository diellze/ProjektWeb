<?php
require_once '../controllers/ContactController.php';
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
              <th>Email</th>
              <th>Mesazhi</th>

            </tr>
        </thead>
        <tbody>
          <?php
          $p = new ContactController;
          $allcontacts = $p->readData();
          foreach($allcontacts as $user): ?>
          <tr>
            <td><?php echo $user['emri_u']; ?></td>
            <td><?php echo $user['email_u']; ?></td>
            <td><?php echo $user['message_u']; ?></td>
            <td><a href="delete-user.php?id=<?php echo $user['Id'];?>">Delete</a></td>
           
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
</div>