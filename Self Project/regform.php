<?php
	if(isset($_POST["submit"])){
		$servername="databaseconnection";
		$username="root";
		$password="root";
		$dbname="db_registrationform";
		
	$conn = new mysqli($servername , $username , $password , $dbname);
	if($conn->connect_error){
		die("Sorry..! Unable to add a new record..Please try again later..!! ".$conn->connect_error);
	}
		$sql="INSERT INTO tbl_registration(FName,LName,Gender,DOB,Marital_Status,Address,Pincode,City,Nationality,Contact_Number,EmailID,Password,Qualification,University) 
				VALUES('".$_POST["fname"]."' , '".$_POST["lname"]."','".$_POST["gender"]."','".$_POST["dob"]."','".$_POST["mstatus"]."','".$_POST["address"]."','".$_POST["pincode"]."','".$_POST["city"]."','".$_POST["nationality"]."','".$_POST["cnumber"]."','".$_POST["email"]."','".$_POST["password"]."','".$_POST["qualification"]."','".$_POST["university"]."')";
		
		if($conn->query($sql)==TRUE){
			echo "<script type='text/javascript'> alert('Successfully..!! New record has been added..');</script>";
		}else{
			echo "<script type='text/javascript'> alert('Error : ".$sql."<br>" .$conn->connect_error."');</script>";
		}
	$con->close();
	}
?>
			