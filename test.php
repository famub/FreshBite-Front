<?php
include 'db_connection.php';

$result = mysqli_query($conn, "SHOW TABLES;");
while($row = mysqli_fetch_assoc($result)) {
    print_r($row);
}
?>