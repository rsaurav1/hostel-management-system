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

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM info WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            header("location:view.php");
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
    ?>
</body>
</html>
