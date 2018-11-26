
function onClickSearchMovie(e) {
	e.preventDefault();
	var movies = $('input[name=search]').val();
	console.log(movies);
	$('#list').removeClass('hide');
	getMovies(movies);

}

function onClickShowOneMovie() {
	var movie = $(this).data('id');
	$('#list').css('width', '30%');
	$('#result').removeClass('hide');
	showOneMovie(movie);

}


$('#send').on('click', onClickSearchMovie);
$(document).on('click', '#list li' , onClickShowOneMovie);