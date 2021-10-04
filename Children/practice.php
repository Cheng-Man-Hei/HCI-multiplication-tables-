<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Practice</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<style>
	input {
		margin-bottom: 30px;
		margin-left: 50px;
	}
</style>
</head>

<body>
	<h1 class="text-center mt-2">Quiz</h1>
	<div id="question" class="text-center">
	
	</div>
	<div class="col-md-4 offset-4">
		<a class="btn btn-danger w-100" href="#" onClick="checkAnswer();">Submit</a>
	</div>	
	<div class="col-md-4 offset-8">
		<h1 id="marks" class="text-center"></h1>
	</div>
<script>
var ansArray = new Array();
for (let i = 1; i < 6; i++){
	var a = randomQuestion(10);
	var b = randomQuestion(10);
	var answer = parseInt(a * b); 
	ansArray.push(answer);
	var questions = document.getElementById("question");
	questions.append("Q" + i + " ) " + a + "x" + b + "=");
	var textbox = document.getElementById("question").append(document.createElement("INPUT"));
    questions.append(document.createElement('br'));
	$('input[type="text"]').prop('required',true);
}	

	
function randomQuestion(largest){
	return Math.floor(Math.random() * largest) + 1;
}

var correctArray = new Array();
	
function checkAnswer(){
	var checkArray = document.getElementsByTagName("input");
	for (let i = 0; i < checkArray.length; i++){
		if (ansArray[i] != checkArray[i].value){
			var q = i + 1;
			alert("Q"+ q + " " +checkArray[i].value + " is wrong!");
		}
		if (ansArray[i] == checkArray[i].value){
			correctArray.push(checkArray[i].value);
		}
	}
	document.getElementById("marks").innerHTML = "Score: " + correctArray.length;
	}
</script>
</body>
</html>