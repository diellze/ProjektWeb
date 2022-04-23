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

.edit{
  text-align: center;
  font-size: 15px; 
  background-color: #00703c;
  border-style: none;
  border-radius: 5px;
  color: white;
  width: 50%;
  height: 30px;
  cursor: pointer;
  transition: all 0.5s ease;
  position:relative;
  left:20%;
}

.delete{
  text-align: center;
  font-size: 15px; 
  background-color: #ed2939;
  border-style: none;
  border-radius: 5px;
  color: white;
  width: 50%;
  height: 30px;
  cursor: pointer;
  transition: all 0.5s ease;
  position:relative;
  left:20%;
}
</style>
<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>User name</th>
              <th>User email</th>
              <th>User message</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $c = new ContactController;
          $allContact = $c->readData();
          foreach($allContact as $contact): ?>
          <tr>
            <td><?php echo $contact['emri_u']; ?></td>
            <td><?php echo $contact['email_u']; ?></td>
            <td><?php echo $contact['message_u']; ?></td>
            <td><a href="delete-contact.php?id=<?php echo $contact['Id'];?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
</div>