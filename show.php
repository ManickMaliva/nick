<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="show.css">
</head>
<body >


<div class="tab">


    <?php

$con = mysqli_connect("localhost","root", "", "ulk");

if(!$con){
  die("connection failed: " .mysqli_connect_error());
 }

echo"connected succ";
    
 $de = mysqli_query($con,"SELECT * FROM messages");
echo "<table border='1'>
<tr>
<th> N </th>
<th>Names</th>
<th>email</th>
<th>comment</th>
<th>Action</th>
</tr>";
while($row = mysqli_fetch_array($de)) {
 echo "<tr>
    <td>" .$row['id'] . "</td>
    <td>" . $row['name'] . "</td>
    <td>" . $row['email'] . "</td>
    <td>" . $row['message'] . "</td>
    <td class='det'><a href='delete.php?ID=".$row['id']."'>Delete</a> </td>
    </tr>";
}
echo "</table>";
mysqli_close($con);
?>

</div>

</body>
</html>