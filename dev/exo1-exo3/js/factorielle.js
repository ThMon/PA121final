function fact(n)
{
	var result = 1; // on initialise le résultat à 1 dans le cas ou n == 0

    for (var i=1 ; i<=n ; i++){
        result *= i;
    }
	
	return result;
}

var n = 5;

document.write("la factorielle de "+n+" est "+fact(n));