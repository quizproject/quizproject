<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<?php
		session_start();
		if (!isset($_SESSION['count'])) {
		  $_SESSION['count'] = 0;
		} else {
		  $_SESSION['count']++;
		}
?>

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
<h1>Welcome to the test, to begin please answer the following question.</h1>

<form class="subForm" method="post" action="page2.php">
   <?php
		$yourname = htmlspecialchars($_POST['refer']);
   ?>
   <p>	
	    <label for="refer" class="label"> What language do you want to take the test in? </label>
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
	  <p>
	    <input type="submit" name="Submit" id="submit" value="Next" />
	  </p>
	  
	  </form>
</div>
<div id="footer"></div>
</body>
</html>
