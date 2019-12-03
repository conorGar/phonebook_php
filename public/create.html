<?php

/**
  * Use an HTML form to create a new entry in the
  * users table.
  *
  */


if (isset($_POST['submit'])) {
  require "../config.php";
  //require "../common.php";

  try {
    $connection = new PDO($dsn, $username, $password, $options);

    $new_user = array(
      "firstname" => $_POST['firstname'],
      "lastname"  => $_POST['lastname'],
      "email"     => $_POST['email'],
      "phonenum"  => $_POST['phonenum']
    );

	//sprintf code template taken from https://www.taniarascia.com/create-a-simple-database-app-connecting-to-mysql-with-php/
    $sql = sprintf(
"INSERT INTO %s (%s) values (%s)",
"users",
implode(", ", array_keys($new_user)),
":" . implode(", :", array_keys($new_user))
	);
	

    $statement = $connection->prepare($sql);
    $statement->execute($new_user);
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage() . "Went wrong in create.php!";
  }

}
?>

<!-- Prompt to tell user that name was added successfully -->
<?php if (isset($_POST['submit']) && $statement) { ?>
  > <?php echo $_POST['firstname']; ?> successfully added.
<?php } ?>

<h2>Add a user</h2>

<form method="post">
  <label for="firstname">First Name</label>
  <input type="text" name="firstname" id="firstname">
  <label for="lastname">Last Name</label>
  <input type="text" name="lastname" id="lastname">
  <label for="email">Email Address</label>
  <input type="text" name="email" id="email">
  <label for="phonenum">Phone Number</label>
  <input type="text" name="phonenum" id="phonenum">
  <input type="submit" name="submit" value="Submit">
</form>

<a href="index.php">Back to home</a>

