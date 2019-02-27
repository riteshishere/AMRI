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


	if(isset($_POST['uname'])){

		$uname = $_POST['uname'];
		$lpsw = $_POST['lpsw'];
		
		$sql= "select * from agent_info where email_id='".$uname."' and password='".$lpsw."' limit 1";
		$result=mysqli_query($con,$sql);

		if (mysqli_num_rows($result)!=1) {
			echo "Incorrect username and password combination. Try again";
			header("refresh:5; url=../login.html");
		}
		else{
			echo "Please Wait a while";
			header("refresh:5; url=../data.html");
		}
		
	}

?>