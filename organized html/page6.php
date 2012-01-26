<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Mutual intelligibility of closely related languages in Europe: linguistic and non-linguistic determinants</title>
<link rel="stylesheet" type="text/css" href="css/mainstyle.css" />
</head>
<body>
<div id="header">
      <a href="http://www.rug.nl"> <img src="css/rug.png"> </a> 
      <a href="http://www.rug.nl/let/index"> <img src="css/letteren.png"></a>
</div> 
<div id="wrapper">
<div id="topbar">
		 Mutual intelligibility of closely related languages in Europe: linguistic and non-linguistic determinants
</div>
<div id="maincontent">
<h1>Please answer the following questions </h1>
<form class="subForm" action="page6b.php" method="post">
	<!--template only to check if object works. Does not contain language identifier, needs a lot of php here -->
	<label for="beauty" class="label">How beautiful do you find this language? </label>
	<p>
		<label> <input name="Beautiful" type="radio" value="1" />1,beautiful</label>
		<label> <input name="Beautiful" type="radio" value="2" />2</label>
		<label> <input name="Beautiful" type="radio" value="3" />3</label>
		<label> <input name="Beautiful" type="radio" value="4" />4</label>
		<label> <input name="Beautiful" type="radio" value="5" />5, ugly</label>
	</p>
	    <label for="refer" class="label">Do you know which language this is? </label>
	    <select name="refer" id="refer">
  
			<option value="no_lang">Pick a language</option>
        <option value="Dutch">Dutch</option>
        <option value="German">German</option>
        <option value="English">English</option>
        <option value="Danish">Danish</option>
        <option value="Swedish">Swedish</option>

        <option value="no_lang">-------</option>

        <option value="Spanish">Spanish</option>
        <option value="Portugese">Portugese</option>
        <option value="French">French</option>
        <option value="Italian">Italian</option>
        <option value="Romanian">Romanian</option>

	 	<option value="no_lang">-------</option>

        <option value="Czech">Czech</option>
        <option value="Slovak">Slovak</option>
        <option value="Polish">Polish</option>
        <option value="Slovene">Slovene</option>
        <option value="Croatian">Croatian</option>
        <option value="Bulgarian">Bulgarian</option>
        <option value="Other">Other</option>
        </select>
	  </p>
	  <!--invisible object, plays .mp3 file at default volume, full open. Set volume to taste with your own buttons/volume knob --> 
	  <p><object height="0px" width="0px" data="B.B. King - Ghetto Woman.mp3" /></p>
    <p> <input type="submit" name="Submit" id="submit" value="Next" /></p>
</form>	  
</div>
<div id="footer"></div>
</div>
</body>
</html>
