var string = 'adc';
var test = 0;
var cracked = false
var indexTab = 1;
var tab = [];
var result = "";


var dico = ['a', 'b', 'c', 'd','e'];


function crackPsd(string) { 

	var carAt = 2;
	var indexTab = 1;
	var index = 0; 
	var maxString = "";
	
		tab = [];
		for (var i =0; i < carAt; i++) {
			tab.push(dico[0]);
			maxString += dico[dico.length-1];
		}


	console.log('max',maxString);
	do {

		for(var j = 0; j < dico.length; j++) {
			tab[0] = dico[j];
			
			console.log(generateResult(tab));
			if (generateResult(tab) == string) {
				console.log('good', generateResult(tab));
				return generateResult(tab);
				cracked = true;

			}

			
		}

		if (carAt > 0) {
				index ++;
				tab[0] = dico[0];
				tab[indexTab] = dico [index];

				if (tab[indexTab] == dico[dico.length-1] ) {
					indexTab++;
					index = 0;
				}

				if (generateResult(tab) == string) {
					console.log('good', generateResult(tab));
					return generateResult(tab);
					cracked = true;

				}

		}
		
	}while (generateResult(tab) != maxString)
	
	

	console.log('ok', generateResult(tab));
}

var result = crackPsd(string);

console.log(result);

function generateResult(tab) {
	var result = "";
	for(var b = 0; b < tab.length; b++) {
		result += tab[b];
		
	}

	return result;
}

/*

function crackPsd(string) {
	var car = 3;
	

	for (var i = 0; i < car ; i++ ) {
			result += dico[0];
			
	}

	test ++;


	if (result == string) {
		return result;
	}

	console.log(result);

	

	


	for (var j=0; j < result.length; j++) {
		for(var k = 0; k < dico.length; k ++) {
			test++;
			//result[j] = dico[k];
			result =setCharAt(result, j, dico[k]);
			
			
			console.log(j)
			console.log(result);
			console.log(dico[k]);
		}
		result = setCharAt(result, 0, dico[0]) + 
	}

	
	console.log(test);


}


function setCharAt(str,index,chr) {
    if(index > str.length-1) {return str};
    return str.substr(0,index) + chr + str.substr(index+1);
}

var psd = crackPsd(string);

*/