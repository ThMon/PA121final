var Pen = function()
{
    this.color = 'black';
    this.size  = 1;
};

Pen.prototype.configure = function(context)
{
    // Mise à jour des propriétés de dessin de l'ardoise.
    context.strokeStyle = this.color;
    context.lineWidth   = this.size;
};

Pen.prototype.setColor = function(color)
{
    this.color = color;
};

Pen.prototype.setSize = function(size)
{
    this.size = size;
};

Pen.prototype.setColorAsRgb = function(red, green, blue)
{
    // Stockage de la couleur au format RGB (comme la fonction CSS)
    this.color = 'rgb(' + red + ',' + green + ',' + blue + ')';
};
