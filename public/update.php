

<?php


try{
    require "../config.php";
    require "../common.php";

    $connection = new PDO($dsn, $username, $password, $options);

    $sql = "SELECT * FROM USERS";

    $statement = $connection->prepare($sql);
    $statement->execute();

    $result = $statement->fetchAll();


}catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
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
            <th>Edit</th>
        </tr>
    </thead>

    <tbody>
        <?php
            foreach ($result as $row){
                echo "<tr>";
                echo "<td>" . escape($row["id"])."</td>"; //escape function comes from 'common.php'
                echo "<td>" . escape($row["firstname"]) . "</td>";
                echo "<td>" . escape($row["lastname"]) . "</td>";
                echo "<td>" . escape($row["email"]) . "</td>";
                echo "<td>" . escape($row["phonenum"]) . "</td>";
            
                echo "<td><a href='" . "update-single.php?id=" . escape($row["id"]) . "'>" . "Edit</a></td>"; //link to url based on user's unique id number
           
                echo "</tr>";
            }
            ?>
    </tbody>
</table>