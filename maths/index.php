<!DOCTYPE html>
<html>
<head>
	<title>Scientific Calculator</title>
	<style>
		body{
			
			
		}
		.simBut2.mass{
			margin-right: 4px;
			margin-top: 8px;
			width:100px;

		}
		.btn{
			margin-right: 4px;
			margin-top: 8px;
			width:100px;
		}

		.answer{
			margin:6px;
			box-shadow: 20px;
			font: 20px;
			font-size: 30px;


		}
		b{
			font-size: 30px;
			color: red;
		}
		.mydiv{
			background-color: lightgrey;
			padding :10px;
			border:outset;
			border-width: 1px;
			margin:20px;
			border-radius: 10px;
		}
		.answer{
			background-color: black;
			padding:10px; 
			border-radius: 50px;
			color: red;
		}

		.form-control{
			width : 20%;
			margin : 10px;
			padding : 1%;
		}
		
		.bod{
			background-color:lightblue;
		}



	</style>
	
</head>
<body class = "bod">
	<div class='container'>
		
		<div class="col-md-12">
			<div class="mydiv">
				<h1><b><center>ADVANCE CALCULATOR</center></b></h1>
		<form method="post" action="" class="">
			<center>
			<input type="number" class='form-control' name="num1" placeholder="Enter number 1"><br>
			<input type="number" class='form-control' name="num2" placeholder="Enter number 2"><br>


			<button class='btn btn-primary' type="submit" name="add">Add (+)</button>
			<button class='btn btn-primary' type="submit" name="sub">Sub (-)</button>
			<button class='btn btn-primary' type="submit" name="mul">Mul (*)</button>
			<button class='btn btn-primary' type="submit" name="div">Div (/)</button>	
			<button class='btn btn-primary' type="submit" name="mod">Mod</button>	
			<button class='btn btn-primary' type="submit" name="square-root">Sqrt()</button>	
			<button class='btn btn-primary' type="submit" name="sin">Sin()</button>	
			<button class='btn btn-primary' type="submit" name="sinh">Sinh()</button>
			<button class='btn btn-primary' type="submit" name="cos">Cos()</button>	
			<button class='btn btn-primary' type="submit" name="cosh">Cosh()</button>
			<button class='btn btn-primary' type="submit" name="tan">Tan()</button>	
			<button class='btn btn-primary' type="submit" name="tanh">Tanh()</button>
			<button class='btn btn-primary' type="submit" name="log">Log()</button>
			<button class='btn btn-primary' type="submit" name="log10">Log10()</button>
			<button class='btn btn-primary' type="submit" name="exp">Exp(^)</button>
			<button class='btn btn-primary' type="submit" name="pow">Pow()</button>
			<button class='btn btn-primary' type="submit" name="decbin">Decbin()</button>
			<button class='btn btn-primary' type="submit" name="dechex">Dechex()</button>
			<button class='btn btn-primary' type="submit" name="decoct">Decoct()</button>
			<button class='btn btn-primary' type="submit" name="hexdec">Hexdec()</button>
			<button class='btn btn-primary' type="submit" name="octdec">Octdec()</button>

			<button class='btn btn-primary' type="submit" name="factor">factors()</button>
			<button class='btn btn-primary' type="submit" name="multiples">multiples()</button>

			<button class='btn btn-primary' type="submit" name="prime">Prime()</button>


			<button class='btn btn-primary' type="submit" name="celsius">°F to °C()</button>
			<button class='btn btn-primary' type="submit" name="fahrenheit">°C to °F()</button>			
			<button class='btn btn-primary' type="submit" name="mass">mass()</button>	
			<button class='btn btn-primary' type="submit" name="weight">weight()</button>	

			<button class='simBut2'><a href = 'simultaneous.php'>sim eqn()</a></button>
			<button class='btn btn-primary'><a href = 'volume.php'>Volume()</a></button>







		</center>
		</form>
		<br>
	

	
<div class='answer'>
	<center>
<?php

	if(isset($_REQUEST['add'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$add = $num1+$num2;
		echo "<b>Output is : ".$add."</b>";
	}
	else if(isset($_REQUEST['sub'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$sub = $num1-$num2;
		echo "<b>Output is : ".$sub."</b>";
	}
	else if(isset($_REQUEST['mul'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$mul = $num1*$num2;
		echo "<b>Output is : ".$mul."</b>";
	}
	else if(isset($_REQUEST['div'])){
		if(!empty($_REQUEST['num1']) && !empty($_REQUEST['num2'])){
			if(($_REQUEST['num1'] > 0 && $_REQUEST['num2'] > 0) && (is_numeric($_REQUEST['num1']) && is_numeric($_REQUEST['num2']))){
				$num1 = (float)$_REQUEST['num1'];
				$num2 = (float)$_REQUEST['num2'];
				$div = $num1/$num2;
				echo "<b>Output is : ".$div."</b>";
			}
			else{
				echo "<b>Error : Enter only Numbers and they must be greater than 0</b>";
			}
		}
		else{
			echo "<b>Error : Please fill both fields";
		}
		
	}
	else if(isset($_REQUEST['mod'])){
		if(!empty($_REQUEST['num1']) && !empty($_REQUEST['num2'])){
			if((is_numeric($_REQUEST['num1']) && is_numeric($_REQUEST['num2']))){
				$num1 = (float)$_REQUEST['num1'];
				$num2 = (float)$_REQUEST['num2'];
				$div = $num1/$num2;
				echo "<b>Output is : ".$div."</b>";
			}
			else{
				echo "<b>Error : Enter only Numbers and they must be greater than 0</b>";
			}
		}
		else{
			echo "<b>Error : Please fill both fields";
		}
	}
	else if(isset($_REQUEST['square-root'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = sqrt($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['sin'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = sin($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['sinh'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = sinh($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['cos'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = cos($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['cosh'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = cosh($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['tan'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = tan($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['tanh'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = tanh($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['log'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = log($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['log10'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = log10($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['exp'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = exp($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['pow'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = pow($num1,$num2);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['decbin'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = decbin($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['dechex'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = dechex($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['decoct'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = decoct($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['hexdec'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = hexdec($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['octdec'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = octdec($num1);
		echo "<b>Output is : ".$out."</b>";
	}

	if (isset($_REQUEST['simultaneous'])) {
		echo "<button class='simBut2'><a href = 'simultaneous.php'> simultaneous eqn </a></button>";

	}
 	
 	if (isset($_REQUEST['mass'])) {
		if(!empty($_REQUEST['num1']) && !empty($_REQUEST['num2'])){
			if((is_numeric($_REQUEST['num1']) && is_numeric($_REQUEST['num2']))){
				$num1 = (float)$_REQUEST['num1'];
				$num2 = (float)$_REQUEST['num2'];
				$div = $num1/$num2;
				echo "<b>Output is : ".$div."</b>";
			}
			else{
				echo "<b>Error : Enter only Numbers and they must be greater than 0</b>";
			}
		}
		else{
			echo "<b>Error : Please fill both fields";
		}
	}


	if (isset($_REQUEST['weight'])) {
		if(!empty($_REQUEST['num1']) && !empty($_REQUEST['num2'])){
			if((is_numeric($_REQUEST['num1']) && is_numeric($_REQUEST['num2']))){
				$num1 = (float)$_REQUEST['num1'];
				$num2 = (float)$_REQUEST['num2'];
				$div = $num1/$num2;
				echo "<b>Output is : ".$div."</b>";
			}
			else{
				echo "<b>Error : Enter only Numbers and they must be greater than 0</b>";
			}
		}
		else{
			echo "<b>Error : Please fill both fields";
		}

	} 

	else if(isset($_REQUEST['celsius'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = $num1 - 32 ;
		$out*=0.5556;
		echo "<b>Output is : ".$out."°C</b>";
	}

	else if(isset($_REQUEST['fahrenheit'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = $num1 * 1.8;
		$out+=32;
		echo "<b>Output is : ".$out."°F</b>";
	}
		else if(isset($_REQUEST['prime'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		for ($i=2; $i<=$num1-1; $i++) {
			if ($num1 % $i==0){
				$value = True;
			}
		}
	if (isset($value) && $value){
		echo "The Number ".$num1. " is not a prime number";

	}else {
		echo "The Number ". $num1. " is prime a number";
	}
}


	else if(isset($_REQUEST['multiples'])){
		
		$num=(float)$_REQUEST['num1'];
		$y=1;
		$x=1;
		while ($x<21){
		echo $num*$y. ", ";
		$x++;
		$y++;	
	
	}
		}



		else if(isset($_REQUEST['factor'])) { 
			$x=(float)$_REQUEST['num1'];
			$i=1;
		
		while ($i<=$x) {
		if ($x % $i ==0){
		echo $i . ", ";
		}
		++$i;
		}
		}


?>
</center>
</div>
</div>
</div>
</div>
</div>
</body>
</html>