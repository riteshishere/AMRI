<?php

	//connect to database
	$con = mysqli_connect('localhost','root','','agent');


	if(!$con){
		echo "Not connected to server";
	}

	/*if($con){
		echo "connected to server";
	}*/

	if(!mysqli_select_db($con,'agent')){
		echo "Not connected to the database";
	}


		$fname = $_POST['fname'];
		$gender = $_POST['gender'];
		$area = $_POST['area'];
		$dob = $_POST['dob'];
		$pin = $_POST['pin'];
		$state = $_POST['state'];
		$email = $_POST['email'];
		$psw = $_POST['psw'];
		$psw_repeat=$_POST['psw_repeat'];

		if($psw==$psw_repeat){
					$sql="insert into agent_info (full_name,gender,address,dob,pincode,state,email_id,password) values('$fname','$gender','$area','$dob','$pin','$state','$email','$psw')";
					}
		else{
			echo "Password not matched";
		}

		if (!mysqli_query($con,$sql)){
			echo "Some error occured";
		}
		else{
			echo "Account registered successfully";
			header("refresh:5; url=../login.html");
		}

?>