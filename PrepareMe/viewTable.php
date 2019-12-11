
<html>
<head>
<link rel="stylesheet" type="text/css" href="Styles/mainStyle.css">
</head>

<body>

<?php
include 'Database/db_connection.php';
$conn = OpenConnection();
echo "Connected Successfully";


$sql = "SELECT * FROM jbuserDB.flashCards order by id;  ";

echo $sql . "<br>";


$result = mysqli_query($conn, $sql);
if (mysqli_errno($conn) != 0) {
    echo mysqli_errno($conn) . ": " . mysqli_error($conn) . "\n";
} else {
    echo "Everything is looking good!";
}




echo
" <table id ='update'>
<tr>
<th>ID</th>
<th>Term</th>
<th>Defintion</th>
</tr></div>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row["flashTerm"] . "</td>";
    echo "<td>" . $row["flashDef"] . "</td>";
    echo "</tr>";
}
echo "</table>";

$conn->close();


?>
</body>
</html>
