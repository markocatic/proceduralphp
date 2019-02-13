function proveraFeedback(){
	var overall = document.getElementsByName("overall");
	var visual = document.getElementsByName("visual");
	var org = document.getElementsByName("organization");
	var quality = document.getElementsByName("quality");
	var comments = document.getElementById("feedComments");
	
	var podaci1 = new Array();
	var podaciVrednosti = new Array();
	var brojac;
	
	var overallChoice="";
	for (var i=0; i<overall.length; i++){
		if(overall[i].checked){
			overallChoice=overall[i].value;
			brojac=i;
			break;
		}
	}
	if(overallChoice!=""){
		podaci1.push(brojac);
		document.getElementById("overallGreska").innerHTML="";
	}
	else{document.getElementById("overallGreska").innerHTML="Please select one choice.";}
	
	var visualChoice="";
	for (var i=0; i<visual.length; i++){
		if(visual[i].checked){
			visualChoice=visual[i].value;
			brojac=i;
			break;
		}
	}
	if(visualChoice!=""){
		podaci1.push(brojac);
		document.getElementById("visualGreska").innerHTML="";
	}
	else{document.getElementById("visualGreska").innerHTML="Please select one choice.";}
	
	var orgChoice="";
	for (var i=0; i<org.length; i++){
		if(org[i].checked){
			orgChoice=org[i].value;
			brojac=i;
			break;
		}
	}
	if(orgChoice!=""){
		podaci1.push(brojac);
		document.getElementById("organizationGreska").innerHTML="";
	}
	else{document.getElementById("organizationGreska").innerHTML="Please select one choice.";}
	
	var qualityChoice="";
	for (var i=0; i<quality.length; i++){
		if(quality[i].checked){
			qualityChoice=quality[i].value;
			brojac=i;
			break;
		}
	}
	if(qualityChoice!=""){
		podaci1.push(brojac);
		document.getElementById("qualityGreska").innerHTML="";
	}
	else{document.getElementById("qualityGreska").innerHTML="Please select one choice.";}
	
	if(podaci1.length==4 && podaciVrednosti.length==2){
		for(var i=0;i<4;i++){
			switch(podaci1[i]){
				case 0:
				podaciVrednosti.push("Poor");
				break;
				case 1:
				podaciVrednosti.push("OK");
				break;
				case 2:
				podaciVrednosti.push("Good");
				break;
				case 3:
				podaciVrednosti.push("Excellent");
				break;
			}
		}
		
		window.open('mailto:nikola.milanovic.118.15@ict.edu.rs?subject=Feedback&body=Results:%0AOverall: '+podaciVrednosti[2]+'%0AVisual appeal: '+podaciVrednosti[3]+'%0AOrganization: '+podaciVrednosti[4]+'%0AQuality: '+podaciVrednosti[5]);
		
		document.getElementById("feedBF").reset();
	}
}