var Slate = function(pen)
{
	this.canvas          = document.getElementById('slate');  
	this.test = document.getElementById('test');  
    this.context         = this.canvas.getContext('2d');       
    this.currentLocation = null;        
    this.isDrawing       = false;                       
    this.pen             = pen;

    this.canvas.addEventListener('mousedown',  this.onMouseDown.bind(this));
    this.canvas.addEventListener('mouseleave', this.onMouseLeave.bind(this));
    this.canvas.addEventListener('mousemove',  this.onMouseMove.bind(this));
    this.canvas.addEventListener('mouseup',    this.onMouseUp.bind(this));

}



Slate.prototype.getMouseLocation = function(event)
{
	
    var location;
    var rectangle;

    // Récupération des coordonnées de l'ardoise.
    rectangle = this.canvas.getBoundingClientRect();

    // Création d'un objet contenant les coordonnées X,Y de la souris relative à l'ardoise.
    location =
    {
        x: event.clientX - rectangle.left,
        y: event.clientY - rectangle.top
    };
    return location;

    
};

Slate.prototype.onMouseMove = function(event)
{
    var location;

    // Récupération de la position actuelle de la souris.
    location = this.getMouseLocation(event);
    console.log(location);
    // Est-ce qu'on peut dessiner sur l'adoise ?
    if(this.isDrawing == true)
    {
        // Préparation de l'ardoise à l'exécution d'un dessin.
        this.pen.configure(this.context);


        // Début du dessin.
        this.context.beginPath();

        // Dessine un trait entre les précédentes coordonnées de la souris et les nouvelles.
        this.context.moveTo(this.currentLocation.x, this.currentLocation.y);
        this.context.lineTo(location.x, location.y);

        // Fin du dessin.
        this.context.closePath();

        // Applique les changements dans le canvas.
        this.context.stroke();


        // Enregistrement de la nouvelle position de la souris.
        this.currentLocation = location;
    }
};


Slate.prototype.onMouseDown = function(event)
{
    // On peut dessiner sur l'ardoise.
    this.isDrawing = true;

    // Enregistrement de la position actuelle de la souris.
    this.currentLocation = this.getMouseLocation(event);
};

Slate.prototype.onMouseLeave = function()
{
    // On ne peut plus dessiner sur l'ardoise.
    this.isDrawing = false;
};

Slate.prototype.onMouseUp = function()
{
    // On ne peut plus dessiner sur l'ardoise.
    this.isDrawing = false;
};