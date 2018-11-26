var map = [
   [1,1,1,1,1],
   [1,0,0,0,1],
   [0,0,0,2,1],
   [1,0,0,0,1],
   [1,1,1,1,1]
];

const GRASS = 0;
const WATER = 1;
const ROCK = 2;

var html = "<table>";


for(var i = 0; i < map.length; i++ )
{
	html +="<tr>";
	for( var j = 0; j < map[i].length; j++)
	{
	
		switch(map[i][j])
		{
			case GRASS:
				html += "<td class='grass'>";
				break
			case WATER:
				html += "<td class='water'>";
				break;
			case ROCK:
				html += "<td class='rock'>";
				break;
		}
	}
	html += "</tr>";
}
html += "</table>";
document.write(html);