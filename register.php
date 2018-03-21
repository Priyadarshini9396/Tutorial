<?php
	
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword= $_POST['cpassword'];
	
		try
		{
			$db = new PDO("mysql:host=localhost;dbname=college","registerform", "registerform");
			$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//echo " ";	
			//$message = 'Success';
			
			$queryStr = $db->prepare("INSERT INTO registration (name,email,password,cpassword)VALUES (:name,:email,:password,:cpassword)"); 

			//executes the insert query
			$queryStr->execute(array('name' => $name,'email' => $email,'password' => $password,'cpassword' => $cpassword));



		}
		catch(Exception $e)
		{
			echo $e->getMessage();
			echo "Sorry..!! Something went wrong.. Please try again later..";
		}
			
//	$connection = mysql_connect("localhost", "registerform","registerform"); // Establishing connection with server..
	
	//$db = mysql_select_db("college", $connection); // Selecting Database.
	
	

?>