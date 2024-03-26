<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include('connection.php');
if(isset($_REQUEST['id'],$_REQUEST['name'], $_REQUEST['dob'], $_REQUEST['pname'], $_REQUEST['num'], $_REQUEST['date'])) {
$id= $_REQUEST['id'];
$name = $_REQUEST['name'];
$dob = $_REQUEST['dob'];
$pname = $_REQUEST['pname'];
$num = $_REQUEST['num'];
$date = $_REQUEST['date'];

$sql=  "INSERT INTO info VALUES('$id','$name', '$dob','$pname','$num',' $date')";

if(mysqli_query($conn,$sql)){
    ?>
<script> alert ( " Data Added Sucessfully " )</script>
<?php   
header("location:view.php");
}
mysqli_close($conn);
}
?>
</body>
</html>
