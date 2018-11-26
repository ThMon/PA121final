var square = document.getElementById("square");
var top_margin = 0;
var left_margin = 0;
const ARROW_LEFT = 37;
const ARROW_UP = 38;
const ARROW_RIGHT = 39;
const ARROW_DOWN = 40;

function move(event)
{

	switch(event.keyCode)
  {
  	case ARROW_LEFT :
  		if(left_margin >= 10) {
  			left_margin-=10;
			square.style.left = left_margin +"px";
  		}
		break;
    case ARROW_UP :
    	if(top_margin >= 10) {
			top_margin-=10;
			square.style.top = top_margin +"px";
		}
		break;
    case ARROW_RIGHT :
    	if(left_margin <= 240) {
			left_margin+=10;
			square.style.left = left_margin +"px";
		}
		break;
    case ARROW_DOWN :
    	if(top_margin <= 240) {
			top_margin+=10;
			square.style.top = top_margin +"px";
		}
		break;
    
  }
	
}

document.addEventListener("keydown",move)