<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view.css">
    <style>
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
<h1><marquee scrollamount="20">  Welcome to Hostel Management System </marquee></h1>
<?php
include('connection.php');

$sql = "SELECT id, Name, DOB, `Parent's Name`, Contact, `Date of Enrollment` FROM info";
$result = $conn->query($sql);

if($result->num_rows > 0){
?>
    <table border='1' class="container">
        <tr>
            <th> Id </th>
            <th>Name</th>
            <th>DOB</th>
            <th>Parent's Name</th>
            <th>Contact</th>
            <th>Date Of Enrollment</th>
            <th colspan="2">Activity</th>
        </tr>
<?php
    while($row = $result->fetch_assoc()){
?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['DOB']; ?></td>
            <td><?php echo $row['Parent\'s Name']; ?></td>
            <td><?php echo $row['Contact']; ?></td>
            <td><?php echo $row['Date of Enrollment']; ?></td>
            <div class="Edit">
            <td><a style="text-decoration:none ; "href='edit.php?id=<?php echo $row['id']; ?>'><p class="edit">Edit</p></a></td>
    </div>
            <td><a style="text-decoration:none ; "href='delete.php?id=<?php echo $row['id']; ?>'><p class= " delete">Delete</p></a></td>
        </tr>
<?php
    }
?>
    </table><br>
    <div class="center">
        <button onclick="location.href='hostel.php'">Go Back</button>
        <button onclick="location.href='add.php'">Add New Data</button>

    </div>
<?php
} else {
    ?>
    <div class="center">
        0 results!<br>
        <button onclick="location.href='hostel.php'">Go Back</button>
    </div>
<?php
}

$conn->close();
?>
</body>
</html>
