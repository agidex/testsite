function startTime() {
	var today = new Date();
	var h = today.getHours();
	var m = today.getMinutes();
	var s = today.getSeconds();
	m = leadZero(m);
	s = leadZero(s);
	
	document.getElementById('time-section').innerHTML = h + ":" + m + ":" + s;
	var t = setTimeout(startTime, 500);
}

function leadZero(i) {
	if (i < 10) {
		i = "0" + i;
	}
	return i;
}