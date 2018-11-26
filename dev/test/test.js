var para1 = document.getElementById('para1');
var myPara = document.querySelectorAll('.my-para');
var para2 = document.getElementById('event');


para1.style.color = "red";
para1.style.backgroundColor = "green";

for (var i = 0; i < myPara.length; i++) {
	myPara[i].style.color = "pink";
}




function myFunction() {
	para2.classList.toggle('blue');
}


para2.addEventListener('click', myFunction);