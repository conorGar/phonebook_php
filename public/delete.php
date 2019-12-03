
<?php

require '../config.php';
require '../common.php';

if(isset($_GET["id"])){
    try{
        $connection = new PDO($dsn, $username, $password, $options);

        $id = $_GET["id"];

        $sql = "DELETE FROM users WHERE id = :id";

        $statement = $connection->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();

        $success = true;
    }catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

//Grab all current User info
try {
    $connection = new PDO($dsn, $username, $password, $options);
  
    $sql = "SELECT * FROM users";
  
    $statement = $connection->prepare($sql);
    $statement->execute();
  
    $result = $statement->fetchAll();
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
?>

<h1>Delete Users</h1>

<?php  
    if($success){
        echo "User Deleted Successfully";
    }
?>

<table>
    <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email Address</th>
      <th>Phone Number</th>
      <th>Delete</th>
    </tr>
  </thead>

  <tbody>
    <?php
    foreach ($result as $row){
        echo "<tr>"; //Im sure there's gotta be a better way than just doing echo....
        //Table Cells
        echo "<td>" . escape($row["id"])."</td>"; //escape function comes from 'common.php'
        echo "<td>" . escape($row["firstname"]) . "</td>";
        echo "<td>" . escape($row["lastname"]) . "</td>";
        echo "<td>" . escape($row["email"]) . "</td>";
        echo "<td>" . escape($row["phonenum"]) . "</td>";
        echo "<td><a href='" . "delete.php?id=" . escape($row["id"]) . "'>" . "Delete</a></td>"; //set the id(used with GET above), therefore activating the delete function
   
        echo "</tr>";

        echo "</tr>";
    }
    ?>
  </tbody>
</table>