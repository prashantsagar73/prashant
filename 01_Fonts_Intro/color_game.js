var numsqures = 6;
var colors = generateRandomColor(numsqures);
var squares = document.querySelectorAll(".square");
var pickedColor = pickcolor();
var colorDisplay = document.getElementById("colorDisplay");
var messageDisplay = document.querySelector("#message");
var h1 = document.querySelector('h1'); 
var resetButton = document.querySelector("#reset");
var easybtn = document.querySelector("#easybtn");
var hardbtn = document.querySelector("#hardbtn");

easybtn.addEventListener("click", function(){
	hardbtn.classList.remove("selected");
	easybtn.classList.add("selected");
	numsqures = 3;
	colors = generateRandomColor(numsqures);
	pickedcolor = pickcolor();
	colorDisplay.textContent = pickedcolor;
	for(var i = 0; i < squares.length; i++){
		if (colors[i]){
			squares[i].style.background = colors[i];
		} else {
	
			squares[i].style.display = "none";
	}	}

});
hardbtn.addEventListener("click",function(){
	hardbtn.classList.add("selected");
	easybtn.classList.remove("selected");
	numsqures = 6;
	colors = generateRandomColor(numsqures);
	pickedcolor = pickcolor();
	colorDisplay.textContent = pickedColor;
	for(var i = 0; i < squares.length; i++){
			squares[i].style.background = colors[i];
			squares[i].style.display = "block";
	    }	
    
});



resetButton.addEventListener("click",function(){
	//generate all new colors
	colors = generateRandomColor(numsqures);
	//pick a new  random color from array
	pickedcolor = pickcolor();
	//change colordisplay to match picked color
	colorDisplay.textContent = pickedcolor;
	this.textContent= "New colors"
	messageDisplay.textContent = "";
	// change colors of squares
	for(var i = 0; i < squares.length; i++){
      squares[i].style.background = colors[i];
	}
	h1.style.background = "steelblue";

})

 colorDisplay.textContent = pickedColor;
 for(var i = 0; i < squares.length; i++){
 	//add initial color to square
 	squares[i].style.background = colors[i];
    // add click listner to square
 	squares[i].addEventListener("click", function(){
 		//grab color of clicked squares
 		var clickedColor = this.style.background;
 		//compare color to pickedcolor
 		console.log(clickedColor, pickedColor);
 		if(clickedColor === pickedColor){
 			messageDisplay.textContent = "Correct!";
 			resetButton.textContent = "Play Again?"
 			changeColors(clickedColor);
 			h1.style.background = clickedColor;
 		} else {
 			this.style.background = "#232323";
 			messageDisplay.textContent="Try Again";
 		}
 	});

}
function changeColors(color){
	//loop through all squares
	for (var i = 0; i < squares.length; i++){
		// change each color to match given color
		squares[i].style.background = color;
	}
}
 function pickcolor(){
	var random = Math.floor(Math.random() * colors.length);
	return colors[random];
 }
 function  generateRandomColor(num){
 	//make an array
 	var arr = []
 	//rapeaat num times
 	for(var i = 0; i < num; i++){
 		arr.push(randomColor())
     // get random color and push into arr
 	}
 	//return that array
 	return arr;
 }
 function randomColor(){
 	//pick a red color from 0- 255
 	var r = Math.floor(Math.random() * 256);  
 	//pick a green  color from 0- 255
 	var g = Math.floor(Math.random() * 256); 
 	//pick a blue color from 0- 255
 	var b = Math.floor(Math.random() * 256); 
 	return "rgb(" + r + ", " + g + ", " + b + ")";
 }