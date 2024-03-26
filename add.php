<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management</title>
    <link rel="stylesheet" href="add.css">

</head>
<body>
<h1><marquee scrollamount="20"> Add New Student To The Database </marquee></h1>

<br><br><br><br><br><br><br><br>
<form action="insert.php" method="post" class="container">
<label>Id of The Student</label>
<input type="text" name="id" required><br>
<label>Name of The Student</label>
<input type="text" name="name" required><br>
<label>Date Of Birth</label>
<input type="text" name="dob" required><br>
<label>Parent's Name</label>
<input type="text" name="pname" required><br>
<label>Contact No.</label>
<input type="text" name="num" required><br>
<label>Enrollment Date</label>
<input type="text" name="date" required><br>
<input type="Submit" value="Submit">
</form>

</body>
</html>