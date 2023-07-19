<?php
include 'cone.php';
$id = $_GET['ID'];

$query = "DELETE FROM messages WHERE id = '$id'";

$result = mysqli_query($con, $query);
if ($result) {
    mysqli_close($con);
    header("location:show.php");
    exit();
} else {
    echo "Error deleting record";
}
?>

