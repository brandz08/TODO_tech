<?php
include 'connection.php';
if(isset($_POST['btnadd']))
{
	$name = cleanInput($_POST['txttodo']);
	$date = cleanInput($_POST['txtdate']);

	echo $sql = "INSERT INTO `tbl_todo` (`todo`,`date`) VALUES ('$name','$date')";


	mysqli_query($conn, $sql);

	 header("location:index.php");

}
 

if(isset($_GET['deleteid']))
{

 $id= cleanInput($_GET['deleteid']);
 $sql = "DELETE FROM `tbl_todo` WHERE `todo_id` = '$id'";
 mysqli_query($conn, $sql);


header("location:index.php");
}



if(isset($_POST['btnUpdate']))
{
		$id = cleanInput($_POST['txtid']);
		$name = cleanInput($_POST['txttodo']);
		$date = cleanInput($_POST['txtdate']);
		

		$sql = "UPDATE `tbl_todo` SET `todo`='$name', `date`= '$date' WHERE `todo_id`= '$id'";
		mysqli_query($conn,$sql);

		header("location:index.php");
}



// NOTES

if(isset($_POST['btnnadd']))
{
	$title = cleanInput($_POST['txttitle']);
	$note = cleanInput($_POST['note']);

	echo $sql = "INSERT INTO `tbl_note` (`note`,`title`,`date`) VALUES ('$title','$note', NOW())";


	mysqli_query($conn, $sql);

	 header("location:index.php");

}


if(isset($_GET['deletenid']))
{

 $id= cleanInput($_GET['deletenid']);
 $sql = "DELETE FROM `tbl_note` WHERE `note_id` = '$id'";
 mysqli_query($conn, $sql);


header("location:index.php");
}


if(isset($_POST['btnnUpdate']))
{
		$id = cleanInput($_POST['txtnid']);
		$name = cleanInput($_POST['txtnote']);
		$title = cleanInput($_POST['note']);
		

		$sql = "UPDATE `tbl_note` SET `note`='$name', `title`= '$title' WHERE `note_id`= '$id'";
		mysqli_query($conn,$sql);

		header("location:index.php");
}



function cleanInput($input)
{

	$data = stripslashes(strip_tags(trim($input)));
	return $data;
}
?>