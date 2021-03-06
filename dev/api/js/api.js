	const API_KEY = '2ee2c5b569240ea2a2a879dd9c8a822c';
	const url_img = 'https://image.tmdb.org/t/p/w185_and_h278_bestv2';

	function getMovies(movie) {
		$.ajax({
					url: 'https://api.themoviedb.org/3/search/movie?api_key='+API_KEY+'&query='+movie,
					type : 'GET',
					dataType: 'json',
					success : function(response){
						console.log(response);
						var data = response.results;
						var list = $('<ul>');
						for (var i= 0; i < data.length; i ++ ) {
							list.append($('<li data-id="'+data[i].id+'">').append(data[i].title));
						}
						$("#list").html(list);
					}
		});
	}


	function showOneMovie(id) {
		$.ajax({
					url: 'https://api.themoviedb.org/3/movie/'+id+'?api_key='+API_KEY,
					type : 'GET',
					dataType: 'json',
					success : function(response){
						console.log(response)
						var result = $('<div>');

						var img = $('<img>').attr('src', url_img+response.poster_path).css('width', '250px');
						var title = $('<h1>').append(response.title);
						var year = $('<h2>').append(response.release_date);
						var desc = $('<p>').append( response.overview );
						var note = $('<p>').append( response.vote_average );

						result.append(img).append(title).append(year).append(desc).append(note);
						$('#result').html(result);
					}


		});
	}
