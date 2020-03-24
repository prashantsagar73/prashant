var todos = ["hello prashant"];

var input = prompt("what would like to do");

while(input !== "quit"){
	//handel inputs
	if (input=== "list") {
	console.log(********)
	todos.forEach(function(todo, i) {
		console.log(i +" : " + todo);
	});
	console.log(********)
   }
}
