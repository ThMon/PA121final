var Program = function()
{
   // this.colorPalette = new ColorPalette();
    this.pen          = new Pen();
    this.canvas       = new Slate(this.pen);
    this.colorPalette = new ColorPalette();
    this.penColor = document.querySelectorAll('.pen-color');
    this.penSize = document.querySelectorAll('.pen-size');
    this.clearButton = document.getElementById('tool-clear-canvas');
    this.paletteButton = document.getElementById('tool-color-picker');
};

Program.prototype.onClickColorPicker = function()
{
    $('#color-palette').fadeIn('slow');
};


Program.prototype.onClickPenColor = function(event)
{
    var div;
    var penColor;

    div = event.currentTarget;
    penColor = div.dataset.color;
    this.pen.setColor(penColor);
}

Program.prototype.onClickPenSize = function(event)
{
    var button;
    var penSize;

    button = event.currentTarget;

    penSize = button.dataset.size;   

    this.pen.setSize(penSize);
};

Program.prototype.clear = function()
{
    this.canvas.context.clearRect(0, 0, this.canvas.canvas.width, this.canvas.canvas.height);
}

Program.prototype.onPickColor = function()
{
    var color;

    color = this.colorPalette.getPickedColor();
	this.pen.setColorAsRgb(color.red, color.green, color.blue);

    $('#color-palette').fadeOut('slow');
};



Program.prototype.start = function()
{
	for(var i = 0; i < this.penColor.length; i++) {
		this.penColor[i].addEventListener('click', this.onClickPenColor.bind(this) );
	}

	for(var j = 0; j < this.penSize.length; j++) {
		this.penSize[j].addEventListener('click', this.onClickPenSize.bind(this) );
	}

	this.clearButton.addEventListener('click', this.clear.bind(this));
	this.paletteButton.addEventListener('click', this.onClickColorPicker.bind(this));


	$(document).on('magical-slate:pick-color', this.onPickColor.bind(this));
};
