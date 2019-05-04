<?php 
	
 $konek = mysqli_connect('localhost','root','','arkademy');
	global $konek;
		session_start();
		$id=$_GET['id'];

		  $data = mysqli_query($konek, "SELECT * FROM candidate WHERE id = '$id'");
           while($d = mysqli_fetch_assoc($data)){

	  	$tn = $d['earned_vote'];
			$ubah = mysqli_query($konek, "UPDATE candidate set earned_vote = $tn + 1 WHERE id = '$id'"); 
		header("Location: index.php");

	}


 ?>