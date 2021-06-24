<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot";
$kind=$_GET["kind"];
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);



// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "";
if($kind == "right")
{
    $sql = "UPDATE `base` SET `status` = 'right' WHERE `base`.`id` = 1 ";
}
else if($kind == "left")
{
    $sql = "UPDATE `base` SET `status` = 'left' WHERE `base`.`id` = 1 ";
}
else if($kind == "forward")
{
    $sql = "UPDATE `base` SET `status` = 'forward' WHERE `base`.`id` = 1 ";
}
else if($kind == "backward")
{
    $sql = "UPDATE `base` SET `status` = 'backward' WHERE `base`.`id` = 1 ";
}
else if($kind == "stop")
{
    $sql = "UPDATE `base` SET `status` = 'stop' WHERE `base`.`id` = 1 ";
}

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Success: Robot Base Movment Has been changed to $kind'); window.location.href='./complited.html';</script>";
  } else {
    echo "<script>alert('Error: Robot Status Did Not Update!'); window.location.href='./complited.html';</script>" . $conn->error;
}

  $conn->close();
?> 