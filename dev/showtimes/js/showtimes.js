//fonctions showtimes
var params = extractUrlParams();

if (params.id == undefined) {

	alert('attention vous devez utilitser un paramètre id');
	
}


function position(pos) {
	console.log(pos);
	var location = pos.coords.latitude.toFixed(2)+','+pos.coords.longitude.toFixed(2);
	console.log(location);
	var date = new Date();
	console.log(haveDateNextDay(date, 1));
	requestShowTimesInFrance(params.id, location, date);

}


//code principal

//46793

if(navigator.geolocation) {
  console.log('il y a la géoloc');
  navigator.geolocation.getCurrentPosition(position);
  
} else {
  console.log('Pas de geoloc');
}



displayMovieWithId(params.id);