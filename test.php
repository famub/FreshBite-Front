
<?php
include 'db_connection.php';

$sql = "SELECT * FROM RecipeCategory";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo $row['categoryName'] . "<br>";
}
?>