<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Index</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<style>
	td {
		padding-right: 46px;
		border: 1px solid #000;
	}	
</style>
</head>


<body>
	<div class="container-md mt-5">
		<table id="table">
			<h1 class="text-center">Multipcation Tables</h1>
			<tr id="rows">
			</tr>
		</table>
		<div class="col-md-4 offset-4">
			<a href="practice.php" class="btn btn-danger text-center w-100 font-weight-bold mt-5">Practice</a>
		</div>
	</div>
<script>
var row = document.getElementById("rows");
	for (let j = 10; j > 0; j--){
		var x = row.insertCell(0);
	    x.append(j);
		x.append(document.createElement('br'));
		x.append("\n---------\n\n");
		for (let i = 1; i < 11; i++){
	  x.append(j + "*" + i + "=" + i*j);
	  x.append(document.createElement('br'));
	  }
	}
</script>
</body>
</html>