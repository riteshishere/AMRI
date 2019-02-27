<?php

if(isset($_POST['search']))
{
		$state = $_POST['state'];
		$district = $_POST['district'];
		$mandi = $_POST['mandi'];
		$name = $_POST['name'];
    // search in all table columns
    // using concat mysql function
    $query = "select * from crop_detail where state='".$state."' and district='".$district."' and mandi='".$mandi."' and name='".$name."' ";
    $search_result = filterTable($query);
    
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "crop");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>




<!DOCTYPE html>
<html>
<title>PRICE</title>
<meta charset="UTF-8">
<script src="js/myscripts.js"></script> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
	body{
		margin: 0px;
		background-image:url("img/texture.jpg");
	}

	.division{
		
		margin: 10px 10px 5px 10px;
		background-color: inherit;
		padding: 5px;
	}
	hr.new1{
		border-top: 1px solid cyan;
	}
	hr.new2{
		border: 1px solid red;
	}

</style>



<body>
		<div class="w3-container">
			<h2 style="text-align: center;"><b>Search Rate Here</b></h2>
			<hr class="new1">
			<form action="price.php" method="post" >	
			<div class="w3-container">
				<div class="division w3-row-padding">
						<div class=" w3-row-padding w3-quarter">
								<label for="state"><b>Select Your State</b><span style="color:#F00">*</span></label>
							    <select class="w3-input w3-border" name="state" id="state" onchange="populate(this.id,'district')">
						    		  <option value="sl">-select-</option>
				                      <option value="AP">Andhra Pradesh (AP)</option>
				                      <option value="AR">Arunachal Pradesh (AR)</option>
				                      <option value="AS">Assam (AS)</option>
				                      <option value="BR">Bihar (BR)</option>
				                      <option value="CG">Chhattisgarh (CG)</option>
				                      <option value="GA">Goa (GA)</option>
				                      <option value="GJ">Gujarat (GJ)</option>
				                      <option value="HR">Haryana (HR)</option>
				                      <option value="HP">Himachal Pradesh (HP)</option>
				                      <option value="JK">Jammu and Kashmir (JK)</option>
				                      <option value="JH">Jharkhand (JH)</option>
				                      <option value="KA">Karnataka (KA)</option>
				                      <option value="KL">Kerala (KL)</option>
				                      <option value="MP">Madhya Pradesh (MP)</option>
				                      <option value="MH">Maharashtra (MH)</option>
				                      <option value="MN">Manipur (MN)</option>
				                      <option value="ML">Meghalaya (ML)</option>
				                      <option value="MZ">Mizoram (MZ)</option>
				                      <option value="NL">Nagaland (NL)</option>
				                      <option value="OD">Odisha(OD)</option>
				                      <option value="PB">Punjab (PB)</option>
				                      <option value="RJ">Rajasthan (RJ)</option>
				                      <option value="SK">Sikkim (SK)</option>
				                      <option value="TN">Tamil Nadu (TN)</option>
				                      <option value="TR">Tripura (TR)</option>
				                      <option value="TG">Telangana (TG)</option>
				                      <option value="UP">Uttar Pradesh (UP)</option>
				                      <option value="UK">Uttarakhand (UK)</option>
				                      <option value="WB">West Bengal (WB)</option>
							    </select>
						</div>
						<div class="w3-quarter w3-row-padding">
							    <label for="state"><b>Select Your District</b><span style="color:#F00">*</span></label>
							    <select class="w3-input w3-border" name="district" id="district" onchange="dtom(this.id,'mandi')">
							    </select>
						</div>
						<div class="w3-quarter w3-row-padding">
							    <label for="state"><b>Select Your Mandi</b><span style="color:#F00">*</span></label>
							    <select class="w3-input w3-border" name="mandi" id="mandi">
								</select>
						</div>
						<div class="w3-quarter w3-row-padding">
								<label for="state"><b>Select Your Item Name</b><span style="color:#F00">*</span></label>
							    <select class="w3-input w3-border" name="name" id="name">
											<option value="select">--Select--</option>
											<option value="wheat">Wheat</option>
											<option value="rice">Rice</option>
											<option value="Mustard oil">Mustard oil</option>
											<option value="Bajra">Bajra</option>
							    </select>
						</div>

				</div>

				<div class="division w3-row-padding">
					  <div class="w3-quarter w3-row-padding">
					    <label><b></b></label>
					    <input style="border-width: 0px; background-color: inherit;" type="text" disabled>
					  </div>
					  <div class="w3-quarter w3-row-padding" style="text-align: center;">
					  	<label><b>Search</b></label>
					    <input class="w3-input w3-border" type="submit" name="search" value="submit">
					  </div>
					  <div class="w3-quarter w3-row-padding">
					    <label><b>Your Rate</b></label>
							<input class="w3-input w3-border" type="text" 
									
							<?php while($row = mysqli_fetch_array($search_result)):?>
							
							placeholder=<?php echo $row['rate'];?>
							
							<?php endwhile;?>
							disabled>
					  </div>
				</div>
			</div>
		</form>
		</div>
		<hr class="new2">
</body>
</html>