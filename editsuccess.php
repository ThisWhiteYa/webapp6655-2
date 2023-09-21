<?php
require 'conn.php';
$sql_update="UPDATE member SET firstname='$_POST[firstname]',lastname='$_POST[lastname]' ,age='$_POST[age]' ,moive='$_POST[movie]' WHERE Act_ID='$_POST[Act_ID]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/member/mainmenu.php");
}

?>