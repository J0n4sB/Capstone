<?php
function OpenConnection()
{
    $dbhost = "avl.cs.unca.edu";
    $dbuser = "jbuser";
    $dbpass = "sql4you";
    $db = "jbuserDB";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    
    return $conn;
}
//WORKING SQL INSERT
//$sql = "INSERT INTO `jbuserDB`.`flashCards` (`id`,`flashTerm`, `flashDef`)
//  VALUES ('3','Term', 'Definition');";

//if (OpenConnection()->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . OpenConnection()->error;
//}

//OpenConnection()->close();


function CloseCon($conn)
{
    $conn -> close();
}

?>
