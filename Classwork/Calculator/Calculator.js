// JavaScript Document
window.onload = loadItAll;

function loadItAll() {
	document.getElementById("multbutton").onclick = showResult("mult");
	document.getElementById("addbutton").onclick = showResult("add");
	
	document.getElementById("multbutton").ondblclick = 
	                            function() { alert("DoubleClicked!"); }
}

function showResult(which) {
	return function() {
			var input1 = document.getElementById("num1");
			var input2 = document.getElementById("num2");
			var val1 = parseInt(input1.value);
			var val2 = parseInt(input2.value);
			var resultSpan = document.getElementById("result");
			if (which == "mult") {
				resultSpan.innerHTML = val1 * val2;
			}
			else {
				resultSpan.innerHTML = val1 + val2;
			}
	}
}


