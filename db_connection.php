
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
    <?php
    
    // db_connection.php
    $host = "localhost";
    $user = "root";
    $password = "root"; 
    $dbname = "freshbit"; 

    $conn = mysqli_connect($host, $user, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo $row['photoFileName'] . "<br>" . $row['videoFilePath']."<br> <br>";
       

}

    ?>
        
        
        
    </body>
</html>
