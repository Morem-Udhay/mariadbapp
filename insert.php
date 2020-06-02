<?php
	include_once 'connection.php';
?>

<?php
if(isset ($_POST['Name']) && ($_POST['Registration'])
{
	$name = $_POST['Name'];
	$regi = $_POST['Registration'];
	$id = $_POST['id'];

	$query = "INSERT INTO info VALUES('$id','$name','$regi')";
	$data = mysqli_query($connect,$query);

	if($data)
	{
		echo "success";
		header("Location : search.php");
	}
	else
	{
		echo "failed";
	}
	else
	{

include_once 'index.html';
	}
?>