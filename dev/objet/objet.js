var Perso =  function(name, hp, db, attaque, biere){

	this.name = name,
	this.hp = hp,
	this.db = db,
	this.attaque= attaque,
    this.biere = biere

	

}

Perso.prototype.boire = function() {

	console.log(this.name+' est ivre');
    this.hp -= 1;
    this.biere -= this.db;
}


Perso.prototype.tomber = function() {
	console.log(this.name+' est tombé mais n\'a rien senti');
	this.hp -= 2;
	console.log(this.name+' a '+ this.hp + ' hp');

}

Perso.prototype.attaquer = function(obj) {

	console.log(this.name+' pête un plomb et attaque '+obj.name);

	var random = Math.random();
	console.log(random);

	if(random < 0.5) {
		console.log('Belle droite de bourré');
		obj.hp -= this.attaque;
		console.log(obj.name+ ' a '+obj.hp+ ' hp');
	} else {
		this.tomber();
	}

	console.log(this.name+' s\'excuse en pleurant');
}