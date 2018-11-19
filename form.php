<?php
extract($_POST);
$conn =mysqli_connect("localhost:3306","root","","feedbacks");

if(isset($conn))
{
	$stmt="INSERT INTO queries VALUES ('".$name."','".$email."','".$subject."','".$message."')";
	$us=mysqli_query($conn,$stmt);

	if ($us)
	{
		echo '<h2 id = "done">"YOUR MESSAGE HAS BEEN SUBMITTED SUCCESSFULLY!"</h2>';
	}
	else
	{
		echo '<h2 id = "done">"SORRY WE COULD NOT SEND YOUR MESSAGE :("</h2>';
	}
}
?>
