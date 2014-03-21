<html>
<body>

<form action="insert_guest_book.php" method="post">
Name: <input type="text" name="name"><br>
Comments: <input type="textarea" name="comments"><br>
<input type="submit">
</form>

<?php
$con=mysqli_connect("rmanansala.db.12447688.hostedresource.com","rmanansala","Rupinder123#","rmanansala");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT name,comments FROM guest_book");

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Comments</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['comments'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
</body>
</html>
