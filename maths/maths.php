<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>SIMULTANEOUS EQUATION</title>
   
<style>
	.back{
		background-color: silver;
	}


</style>
</head>
<body>
	<div class="back">
<div id="art-main">
<header class="art-header clearfix">


    <div class="art-shapes">
<h1 class="art-headline" data-left="15.52%">
    <a href="#">SIMULTANEOUS EQUATION</a>
</h1>

<div class="art-object0" data-left="2.62%"></div>

            </div>

<nav class="art-nav clearfix">
    <div class="art-nav-inner">
    <ul class="art-hmenu">
   

    </ul> 
        </div>
    </nav>

                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                <h2 class="art-postheader">SOLUTION
</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p><b>

                 <?php if(isset($_POST['Attempt'])){
	$a1 =$_POST['a1'];
	$b1 =$_POST['b1'];
	$c1 =$_POST['c1'];
	$a2 =$_POST['a2'];
	$b2 =$_POST['b2'];
	$c2 =$_POST['c2'];
	if(($a1+$b1+$c1+$a2+$b2+$c2)==0){
		echo "<font color='#FF0000'><b>Division by zero<br/>Enter valid Equations</b></font>"."<br/>";
	}
	elseif((($a2-$a1 ==0)||($a1-$a2 ==0))&&(($b2-$b1==0)||($b1-$b2==0))&&(($c2-$c1==0)||($c1-$c2==0))){
		echo "<font color='#FF0000'><b>Division by zero<br/>Enter valid Equations</b></font>"."<br/>";
	}
	elseif((($a2-$a1 ==0)||($a1-$a2 ==0))&&(($b2-$b1==0)||($b1-$b2==0))){
		echo "<font color='#FF0000'><b>Division by zero<br/>Enter valid Equations</b></font>"."<br/>";
	}
	elseif((($a2*$a1)==($a1*$a2))&&(($a2*$b1)==($a1*$b2))){
		echo "<font color='#FF0000'><b>Division by zero<br/>Enter valid Equations</b></font>"."<br/>";
	}
	else
	{
	echo "<font color='#FF0000'>Step One</font>"."<br/>";
	echo "Equation One:      ".$a1."x ".$b1."y "." = ".$c1."-------------------------------- Equation 1"."<br/>";
	echo "Equation Two:      ".$a2."x ".$b2."y "." = ".$c2."-------------------------------- Equation 2"."<br/>"."<br/>";
	echo "<font color='#FF0000'>Step Two</font>"."<br/>"."<br/>";
	echo "<font color='#FF0000'>Multiple the value of x in equation one to equation two and the value of x in equation Two to equation one</font>"."<br/>";
	echo $a1."x  ".$b1."y "." = ".$c1." * ".$a2."--------------------------------------------------- Equation 3"."<br/>";
	echo $a2."x  ".$b2."y "." = ".$c2." * ".$a1."--------------------------------------------------- Equation 4"."<br/>"."<br/>";
	$ab1 = $a1* $a2;
	$bb1 = $b1* $a2;
	$cb1 = $c1* $a2;
	
	$ab2 = $a2* $a1;
	$bb2 = $b2* $a1;
	$cb2 = $c2* $a1;
	$ab3 = $ab1 - $ab2;
	$bb3 = $bb1 - $bb2;
	$cb3 = $cb1 - $cb2;
	if($bb3 ==0){$ansb ="<font color='#FF0000'> Division by zero</font>";}else{
	$ansb = $cb3/$bb3;}
	
	echo "<font color='#FF0000'>Step Three</font>"."<br/>";
	echo $ab1."x  ".$bb1."y   "." = ".$cb1."-------------------------------------------------------- Equation 5"."<br/>";
	echo $ab2."x  ".$bb2."y   "." = ".$cb2."-------------------------------------------------------- Equation 6"."<br/>";
	echo "--------------------------"."<br/>";
	echo  $ab3."    ".$bb3."y   "."    =  ".$cb3."<br/>"."<br/>";
	 
	 echo "<font color='#FF0000'>Step Four</font>"."<br/>";
	 echo "y = ".$cb3."/".$bb3."<br/>"."<br/>";
	 echo "y = "."<font color='#FF0000'>".$ansb."</font>"."<br/>"."<br/>"."<br/>";
	 echo "<font color='#FF0000'>Substituting y to get value of x</font>"."<br/>"."<br/>";
	 echo "<font color='#FF0000'>Step Five</font>"."<br/>"."<br/>";
	 echo "Put the Value of y into equation 1"."<br/>"."<br/>";
	 echo "Equation One:      ".$a1."x ".$b1."y "." = ".$c1."----------------------------------------- Equation 1"."<br/>";
	 echo "y = ".$ansb."<br/>"."<br/>";
	 echo $a1."x ".$b1."(".$ansb.")"." = ".$c1."------------ --------------------------------------------  Equation 7"."<br/>";
	  echo $a1."x ".$b1*$ansb." = ".$c1."------------------------------------------------------------- Equation 8"."<br/>";
	 echo "<font color='#FF0000'>Step Six</font>"."<br/>"."<br/>";
	 $bans = $b1*$ansb;
	 $bv = $c1-$bans;
	 echo $a1."x = ".$c1."-"."(".$bans.")"."<br/>";
	 echo $a1."x = ".$bv."<br/>";
	 echo "x = ".$bv."/".$a1."<br/>";
	 if($a1 ==0){$bv1="<font color='#FF0000'> Division by zero</font>";}else{
	$bv1 = $bv/$a1;}
	 echo "x = "."<font color='#FF0000'>".$bv1."</font>"."<br/>"."<br/>";
	 echo "<font color='#FF0000'>Therefore Answer:  </font>"."x = "."<font color='#FF0000'>".$bv1."</font>"." : y = "."<font color='#FF0000'>".$ansb."</font>";
	}
	}?></b></p>

</div>
                                
                </article></div>
                    </div>
                </div>
            </div>
    </div>
<footer class="art-footer clearfix">
  <div class="art-footer-inner">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 50%">
        
    </div><div class="art-layout-cell layout-item-0" style="width: 50%">
     
    </div>
    </div>
</div>

    <p class="art-page-footer">
   
    </p>
  </div>
</footer>

</div>
</div>

</body></html>