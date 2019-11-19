<?php
include 'Database/db_connection.php';
$conn = OpenConnection();
echo "Connected Successfully";
CloseCon($conn);
?>

<!DOCTYPE html>
<html>
<head>
<script src="magic.js"></script>
<link rel="stylesheet" type="text/css" href="Styles/mainStyle.css">
</head>
<body>

	<h1>Insert</h1>
<div class="container">

    <div class="update" onclick="location.href='input.html';">
    
        <h1>Create</h1>
    </div>

    <div class="insert" onclick="location.href='viewTable.php';">
    <h1>View</h1>
    </div>
</div>




</body>
</html>