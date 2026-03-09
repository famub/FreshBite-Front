

<?php
echo "PHP works!";
?>

<?php
include 'db_connection.php';

$sql = "SELECT * FROM recipecategory";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo $row['categoryName'] . "<br>";
}
?>