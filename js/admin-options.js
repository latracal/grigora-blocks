function controlName(evt, control) {
	var i, customizer, tabbtn;

	customizer = document.getElementsByClassName('customizer');
	for (i = 0; i < customizer.length; i++) {
		customizer[i].style.display = 'none';
	}

	tabbtn = document.getElementsByClassName('tab-btn');
	for (i = 0; i < tabbtn.length; i++) {
		tabbtn[i].className = tabbtn[i].className.replace(' active', '');
	}

	document.getElementById(control).style.display = 'block';
	evt.currentTarget.className += ' active';
}


document.getElementById('default').click();


button = document.getElementsByClassName("submit")[0];
tab = document.getElementsByClassName("IE-tab")[0];
tabparent = document.getElementsByClassName("tab")[0];

function togglesubmit(event) {
	if(tab.classList.contains("active")){
		button.style.display = 'none';
	}
	else{
		button.style.display = 'block';
	}
}

if(tabparent){
	tabparent.addEventListener('click', togglesubmit, false)
}

