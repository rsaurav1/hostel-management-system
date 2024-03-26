<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="edit.css">
    <style>
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    include('connection.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $id = $_POST['id'];
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $parent_name = $_POST['parent_name'];
        $contact = $_POST['contact'];
        $enrollment_date = $_POST['enrollment_date'];
    
        $sql = "UPDATE info SET 
                Name = '$name', 
                DOB = '$dob', 
                `Parent's Name` = '$parent_name', 
                Contact = '$contact', 
                `Date of Enrollment` = '$enrollment_date' 
                WHERE id = $id";
    
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert(\"Record updated successfully\");</script>";
            header("Location:view.php");
        } else {
            echo "Error updating record: " . $conn->error;
        }
    
    }
    
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM info WHERE id = $id";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
     ?>
     
            <form method="post" action="" class=container>
                <input type="hidden" name="id" value="<?php echo $id;?>">
                Name: <input type="text" name="name" value="<?php echo $row['Name'];?>"><br>
                DOB: <input type="text" name="dob" value="<?php echo $row['DOB'];?>"><br>
                Parent's Name: <input type="text" name="parent_name" value="<?php echo $row['Parent\'s Name'];?>"><br>
                Contact: <input type="text" name="contact" value="<?php echo $row['Contact'];?>"><br>
                Enrollment Date: <input type="text" name="enrollment_date" value="<?php echo $row['Date of Enrollment'];?>"><br><br>
               
                <input type="submit" value="Update">
            </form><br> <br>
                
            <div class="center">
        <button onclick="window.location.href='view.php'">View The Data</button>
        <button onclick="window.location.href='add.php'">Add New Data</button>

    </div>
            <?php
        } else {
            echo "Record not found";
        }
    } 
    $conn->close();
    ?>
    

</body>
</html>