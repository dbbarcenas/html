// Author: Durwin Barcenas
// Date : Sep 28
// Description: this simple java script slides the image on to the other picture
//				and links to another site when clicked. 
var step=1
var whichImage=1
	function slideit(){
		if (!document.images)
			return
			document.images.slide.src=eval("image"+step+".src")
			whichImage=step
		if (step<3)
			step++
			else
			step=1
			setTimeout("slideit()",3000)
	}
	slideit()
	function slidelink(){
	if (whichImage==1)
	window.location="link1.htm"
	else if (whichImage==2)
	window.location="link2.htm"
	else if (whichImage==3)
	window.location="link3.htm"
}
