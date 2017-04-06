var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
	acc[i].onclick = function() {
		this.classList.toggle("active");
		var panel = this.nextElementSibling;
		if (panel.style.maxHeight){
			panel.style.maxHeight = null;
		} else {
			panel.style.maxHeight = panel.scrollHeight + "px";
		} 
	}
}




function dropdown1() {
    document.getElementById("myDropdown1").classList.toggle("show");
}

function dropdown2() {
    document.getElementById("myDropdown2").classList.toggle("show");
}

function dropdown3() {
    document.getElementById("myDropdown3").classList.toggle("show");
}

function dropdown4() {
    document.getElementById("myDropdown4").classList.toggle("show");
}