function populate(st,dst){
	var st = document.getElementById(st);
	var dst = document.getElementById(dst);
	dst.innerHTML = "";

	if(st.value == "AP"){
		var optionArray = ["sl|Select","AN|Anantapura","CH|Chitoori","EG|East Godavaria","GU|Guntoor"];
	} 

	else if(st.value == "UP"){
		var optionArray = ["|","avenger|Avenger","challenger|Challenger","charger|Charger"];
	}
	 
	else if(st.value == "BR"){
		var optionArray = ["|","mustang|Mustang","shelby|Shelby"];
	}

	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		dst.options.add(newOption);
	}
}

function dtom(dst,md){
	var dst = document.getElementById(dst);
	var md = document.getElementById(md);
	md.innerHTML = "";

	if(dst.value == "AN"){
		var optionArray = ["sl|Select","AN|Anantapur","CH|Chitoor","EG|East Godavari","GU|Guntur"];
	} 

	else if(dst.value == "CH"){
		var optionArray = ["|","avenger|Avenger","challenger|Challenger","charger|Charger"];
	}
	 
	else if(dst.value == "EG"){
		var optionArray = ["|","mustang|Mustang","shelby|Shelby"];
	}

	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		md.options.add(newOption);
	}
}