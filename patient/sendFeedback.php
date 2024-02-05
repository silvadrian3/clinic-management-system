<?php
include_once '../assets/conn/dbconnect.php';

if (isset($_POST['btnSendFeedback'])) {
	$sender = $_POST['txtSender'];
	$feedback = $_POST['txtFeedback'];

	mysqli_query($con,"INSERT INTO feedbacks (Feedback,Sender) VALUES ('$feedback','$sender')");

	echo "<script type='text/javascript'>alert('Sent successfully!')</script>";
	header( 'Location: ../index.php');
}
?>