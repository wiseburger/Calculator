<!DOCTYPE html>
<html>
<head>
<title>VOLUME </title>

<style>
.col{
	background-color: lightblue;
}

.sim 
	{text-align: center;
		font-size: 40px;

	}
.all{

	width : 500px;
	padding-top: auto;
	margin : auto;
	line-height: 5px;

}
form{
	margin : 150px;
	width : 100%;
}
.sub{
	width = 40%;
	padding = 30%;
	font-size: 18pt;
	font-size: 18pt;
}
	.answer{
			margin:5px;
			box-shadow: 20px;
			font: 20px;
			margin-right: 25%;




		}
	.answer{
		line-height: 1px;
			background-color: grey;
			padding:10px; 
			border-radius: 50px;

		}

	.field{
		
	font-size: 18pt;
		height: 40px;
		width: 280px;
	}

	.unit{
		height: 30px;
		font-size: 18pt;

	}

	.yellow{
		background-color: silver;
	}

</style>

<button><a href = "index.php">Home </a> </button>
</head>
<body  class="col">

	<div class="yellow">
	<div class= "back">

	<h1 class="sim"> VOLUME </h1>
<form action = "volume.php" method ="post">

	<div class="all">
<h4>LENGHT</h4><input class="field" type ="text" name = "num1" > <br><br>
<h4>BREADTH</h4><input  class="field" type = "text" name = "num2"> <br><br>
<h4>HEIGHT</h4><input  class="field" type = "text" name = "num3"> <br><br>


<select class="unit" name ="unit">
	<option name="">select</option>
	<option name="cm">cm</option>
	<option name="m">m</option>
	<option name="mm">mm</option>
	<option name="dm">dm</option>
	
	
</select>


<input  class="sub" type = "submit" name="sub"> <b>
	</div>

</form>

<div class='answer'>
	<center>
<?php

 

 if (isset($_POST["sub"])){
$unit=$_POST["unit"];

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

$arr = [$num1, $num2, $num3];
$n = count($arr);
$count = 0;
for($i = 0; $i < $n; $i++){
	if(empty($arr[$i])){
		$count++;
	}
}

if($count > 0){
	echo "<span style='color:red'>Please fill all fields</span>";
}

else{
	if(is_numeric($num1) && is_numeric($num2) && is_numeric($num3)){
		switch ($unit){
			case "cm": 
				echo   "<h1>" . $num1 * $num2 * $num3 ."cm</h1>";
			break;
			
			case "m": 
				echo   "<h1>" . $num1 * $num2 * $num3 ."m</h1>";
			break;
			
			case "mm": 
				echo   "<h1>" . $num1 * $num2 * $num3 ."mm</h1>";
			break;
			case "dm": 
				echo   "<h1>" . $num1 * $num2 * $num3 ."dm</h1>";
			break;
			default :
				echo  "<hr> PLEASE CHOOSE A UNIT OF MEASURE <hr>";	
		}
	}

	else{
		echo "<span style='color:red'>You can only enter numbers</span>";

	}

}


 }
?>
</center>
</div>
</div>
</div>
</body>
</html>