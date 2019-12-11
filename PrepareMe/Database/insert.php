

<html>

<head>
<link rel="stylesheet" type="text/css" href="../Styles/mainStyle.css">
<meta http-equiv='refresh' content='0; URL=../viewTable.php'>
</head>

<body>

<?php
include 'db_connection.php';
$conn = OpenConnection();
echo "Connected Successfully";


// //Attempt create table query execution
$term = $_POST['fTerm'];
$def = $_POST['fDef'];
echo " <h1> $term  $def CREATED</h1>";

$sql = "INSERT INTO `jbuserDB`.`flashCards` (`flashTerm`, `flashDef`)
  VALUES ('$term', '$def');";
if (mysqli_query($conn, $sql)) {
    echo "Insert created successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


    $sql = "SELECT * FROM jbuserDB.flashCards order by id;  ";

echo $sql . "<br>";


$result = mysqli_query($conn, $sql);
if (mysqli_errno($conn) != 0) {
    echo mysqli_errno($conn) . ": " . mysqli_error($conn) . "\n";
} else {
    echo "Beautiful SQL call returned:";
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
