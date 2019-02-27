<?php

	//connect to database
	$con = mysqli_connect('localhost','root','','crop');


	if(!$con){
		echo "Not connected to server";
	}

	/*if($con){
		echo "connected to server";
	}*/

	if(!mysqli_select_db($con,'crop')){
		echo "Not connected to the database";
	}

    $state = $_POST['state'];
    $district = $_POST['district'];
    $mandi = $_POST['mandi'];
    $name = $_POST['name'];
    $rate = $_POST['rate'];

    if(isset($_POST['mandi'])){
        $sql= "select * from crop_detail where state='".$state."' and district='".$district."' and mandi='".$mandi."' and name='".$name."' ";
        $result_conf=mysqli_query($con,$sql);
        
        if (mysqli_num_rows($result_conf)!=1){
            $sql = "insert into crop_detail (state,district,mandi,name,rate) value('".$state."','".$district."','".$mandi."','".$name."','".$rate."')";
            $result= mysqli_query($con,$sql);
            if (mysqli_num_rows($result)!=2){
                echo "Inserted successfully...";
			    header("refresh:5; url=../data.html");
            }
        }
        else{
            $sql_update = "UPDATE crop_detail SET rate='".$rate."' WHERE state='".$state."' and district='".$district."' and mandi='".$mandi."' and name='".$name."'";
            $result= mysqli_query($con,$sql_update);
            if (mysqli_num_rows($result)!=2){
                echo "Updated successfully...";
                header("refresh:5; url=../data.html");
            }
        }

    }

?>