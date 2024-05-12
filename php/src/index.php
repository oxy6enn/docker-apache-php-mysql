<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCKER APACHE PHP MYSQL</title>
</head>

<body>
    <?php 

    require_once 'db.php';

    $sql = "SELECT * FROM users";
    $stmt = $conn->query($sql);  
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $r = 1;

   echo "<ul>";
   foreach ($result as $row){
       echo "<li>";
       echo $r++ ." ". $row['first_name'] . " " . $row['last_name'] ." " . $row['age'];
       echo "</li>";
   }
   echo "</ul>";

?>


</body>

</html>