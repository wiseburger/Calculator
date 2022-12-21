<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <link rel="stylesheet" href="sim.css">
    <meta charset="utf-8">
    <title>SIMULTANEOUS EQUATION</title>
    <script src="sim.js" defer></script>   


   
<style>
  .col{
  background-color: lightblue;
}
.art-content .art-postcontent-0 .layout-item-0 { background: ;  }
.art-content .art-postcontent-0 .layout-item-1 { padding: 10px;  }
.art-content .art-postcontent-0 .layout-item-2 { margin-top: 20px;margin-bottom: 0px;  }
.art-content .art-postcontent-0 .layout-item-3 { color: #262626; }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

#art-main .art-sheet.clearfix .art-layout-wrapper.clearfix .art-content-layout .art-content-layout-row .art-layout-cell.art-content.clearfix .art-post.art-article .art-postcontent.art-postcontent-0.clearfix .art-content-layout-wrapper.layout-item-2 .art-content-layout .art-content-layout-row .art-layout-cell.layout-item-3 center table tr td #form1 table tr td {
  font-size: 18px;
}
#art-main .art-sheet.clearfix .art-layout-wrapper.clearfix .art-content-layout .art-content-layout-row .art-layout-cell.art-content.clearfix .art-post.art-article .art-postcontent.art-postcontent-0.clearfix .art-content-layout-wrapper.layout-item-2 .art-content-layout .art-content-layout-row .art-layout-cell.layout-item-3 center table tr td #form1 table {
  font-weight: bold;

}

.art-button{
  width = 40%;
  padding = 30%;
  font-size: 18pt;
  font-size: 18pt;
}

.back{
  background-color: silver;
}
.sim 
{margin : 30%;}


    </style>

</head>
<body  class="col" >
  <div class="back">
<div id="art-main">
<header class="art-header clearfix">


    <div class="art-shapes">
<h1 class="art-headline" data-left="15.52%">
    <a href="#" class="sim">SIMULTANEOUS EQUATION</a>
</h1>


<div class="art-object0" data-left="2.62%"></div>

            </div>

<nav class="art-nav clearfix">
    <div class="art-nav-inner">
    
    <button><a href="index.php" ">Home</a></button>
    
        </div>
    </nav>

                    
</header>
<div class="art-sheet clearfix">            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">

                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout layout-item-0">
    <div class="art-content-layout-row">
    
    </div>
</div>
<div class="art-content-layout-wrapper layout-item-2">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-3" style="width: 100%" >
        <br style="line-height: 300px"><br><center>
<table width="508" height="76" border="0" align="center">
  <tr>
    <td width="502" align="left" valign="top">
      <form action="maths.php" method="post" onsubmit="return doVal()" id="form1">
      <table width="487" border="0">
        <tr>
          <td colspan="6" align="center">Enter The Equations Below</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="center" valign="middle">x</td>
          <td align="center" valign="middle">&nbsp;</td>
          <td align="center" valign="middle">y</td>
          <td align="center" valign="middle">&nbsp;</td>
          <td align="center" valign="middle">z</td>
        </tr>
        <tr>
          <td width="127" align="center" valign="middle">Equation One:</td>
          <td width="107" align="center" valign="middle"><label for="a1"></label>
            <span id="sprytextfield1">
            <input name="a1" type="text" id="a1" size="5" /><br>
            <span class="textfieldRequiredMsg">A value is required.</span>
            <span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
          <td width="13" align="center" valign="middle"><label for="b1"></label></td>
          <td width="80" align="center" valign="middle"><span id="sprytextfield2">
          <input name="b1" type="text" id="b1" size="5" /><br>
          <span class="textfieldRequiredMsg">A value is required.</span>
          <span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
          <td width="52" align="center" valign="middle">= </td>
          <td width="82" align="center" valign="middle"><label for="c1"></label>
            <span id="sprytextfield3">
            <input name="c1" type="text" id="c1" size="5" /><br>
            <span class="textfieldRequiredMsg">A value is required.</span>
            <span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
        </tr>
        <tr>
          <td height="24" align="center" valign="middle">Equation Two:</td>
          <td align="center" valign="middle"><span id="sprytextfield4">
          <input name="a2" type="text" id="a2" size="5" /><br>
          <span class="textfieldRequiredMsg">A value is required.</span>
          <span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
          <td align="center" valign="middle">&nbsp;</td>
          <td align="center" valign="middle"><span id="sprytextfield5">
          <input name="b2" type="text" id="b2" size="5" /><br>
          <span class="textfieldRequiredMsg">A value is required.</span>
          <span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
          <td align="center" valign="middle">= </td>
          <td align="center" valign="middle"><span id="sprytextfield6">
          <input name="c2" type="text" id="c2" size="5" /><br>
          <span class="textfieldRequiredMsg">A value is required.</span>
          <span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
        </tr>
        <tr>
          <td height="67">&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2"><button name="Attempt" type="submit" class="art-button" id="Attempt" value="Solution">Solution</button></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
</table></center>
    </div>
    </div>
</div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    
    </div>
</div>
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