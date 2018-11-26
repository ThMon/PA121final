function midpoint(x1, y1, x2, y2)
{
	return {
		x: ((x1 + x2) / 2),
		y: ((y1 + y2) / 2)
	};
}

var middle = midpoint(10,10,20,20);
document.write(" le milieu du segment p1 : 10,10 et p2 : 20,20 est "+middle.x+","+middle.y);