<html>
<head>
<style>table, th, td {
border: 2px solid black;
}
</style>

<title> CSK Search Page </title>
</head>
<body>

	<h1> You got Registered Successfully... </h1>
	<p1> Search for Registered students... </p1>
<br>
<br>
<form action = "search.php" method = "post">
<input type = "text" name = "id" class = "search" placeholder = "Search Here">
<input type = "submit" name = "submit" class = "submit" placeholder = "Search">
</form>

</body>
</html>

<?php
include_once 'connection.php';
if(isset ($_POST['id']))
{

$search = $_Post['id'];
$sql = "SELECT * FROM info where name LIKE '%search%' ";
$result = mysqli_query($connect,$sql);

if (mysqli_num_rows($result) > 0){
echo '<table><tr><td><b>id</b></td><td><b>Name</b></td><td><b>Registration</b></td></tr>';

while($row = mysqli_fetch_assoc($result))
{
echo '<tr><td>'.$row["id"].'</td><td>'.$row["Name"].'</td><td>'.$row["Registration"].'</td></tr>';
}
echo '</table>';
} else {
	echo "<br> No result";
}

}
?>


