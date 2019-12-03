

<?php


    require "../config.php";
    require "../common.php";

    if (isset($_POST['submit'])) {
        try {
          $connection = new PDO($dsn, $username, $password, $options);
          // run update query
          $user = [
              "id" => $_POST['id'],
              "firstname" => $_POST['firstname'],
              "lastname" => $_POST['lastname'],
              "email" => $_POST['email'],
              "phonenum" => $_POST['phonenum']
          ];
          
          $sql = "UPDATE users
          SET id = :id,
            firstname = :firstname,
            lastname = :lastname,
            email = :email,
            phonenum = :phonenum
          WHERE id = :id";

            $statement = $connection->prepare($sql); //prepare before execute for higher efficiency
            $statement->execute($user);

        } catch(PDOException $error) {
          echo $sql . "<br>" . $error->getMessage();
        }
    }

    if(isset($_GET['id'])){
        try {
            $connection = new PDO($dsn,$username,$password, $options);
            $id = $_GET['id'];

            $sql = "SELECT * FROM users WHERE id + :id";
            $statement = $connection->prepare($sql);
            $statement->bindValue(':id', $id);
            $statement->execute();

            $user = $statement->fetch(PDO::FETCH_ASSOC); //returns an array of each column



        } catch(PDOException $error){
            echo $sql . "<br>" . $error->getMessage();
        }
    }else{
        echo "Something went wrong!";
        exit;
    }

?>

<h1> Edit User </h1>

<form method="post">
    <?php
        foreach($user as $key => $value){
            echo "<label for='$key'>";
            echo $key;
            echo "</label>";

            echo "<input type='text' name='$key' id='$key' value='" . escape($value) . "'>";
        }
    ?>

    <input type="submit" name="submit" value="Submit">
</form>