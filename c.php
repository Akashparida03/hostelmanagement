<?php
$conn = mysqli_connect('localhost', 'root', '', 'data');
if ($conn)
{
   // echo "successfully";
}else{
    die("Connection failed: " . $conn->connect_error);
}
?>
