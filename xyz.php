<?php
include 'data.php';

$room=$_POST["room"];
$adult=$_POST["adult"];
$children=$_POST["children"];
$date=$_POST["date"];
$stay=$_POST["stay"];

$sql="INSERT INTO book (room, adult ,children , date ,stay)
VALUES('$room','$adult','$children','$date','$stay')";

$result = $join->query($sql);

header('location:book.php')
?>
