// Name: Durwin Barcenas
// Date : Sep 28
// Description: this simple java script slides the image on to the other picture
//				and links to another site when clicked. 
// Source code: http://www.javascriptkit.com/howto/show3.shtml#.UkrllWTwL2Ef
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
	window.location="http://www.youtube.com/watch?v=a1Kpk28f-vY"
	else if (whichImage==2)
	window.location="http://webdesign4.georgianc.on.ca/~200203740/durwin/default.php?id=8"
	else if (whichImage==3)
	window.location="https://github.com/dbbarcenas/C-sharp/tree/master/Assignment1_DurwinB"
}
