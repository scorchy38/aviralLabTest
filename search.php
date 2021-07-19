<?php

$search = $_POST['search'];
$column = $_POST['column'];

$servername = "localhost";
$username = "root";
$password = "shubhsaras38";
$db = "classDB";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from students where age >= $column AND state like 'Uttrakhand'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["id"]." ".$row["name"]." ".$row["age"]." ".$row["dob"]." ".$row["state"]." ".$row["phone"]."<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>

