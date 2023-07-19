
<?php
$con=mysqli_connect("localhost","root","","ulk");
// Check connection
if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM messages");
echo "<table border='1'>
<tr>
<th>Names</th>
<th>email</th>
<th>comment</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
 echo "<tr>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['email'] . "</td>";
 echo "<td>" . $row['message'] . "</td>";
 echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>