<?php
header('Location: ' . $_SERVER['HTTP_REFERER']);
$con=mysqli_connect("rmanansala.db.12447688.hostedresource.com","rmanansala","Rupinder123#","rmanansala");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="INSERT INTO guest_book (name,comments)
VALUES
('$_POST[name]','$_POST[comments]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>
