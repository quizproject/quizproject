
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
<!-- question one: age. Scrolldown to prevent entries like "25 years old" Entrys too young (-15) or too old (30+)
should be dropped. What to do with participantID here?
 -->	
  <h1>Please answering the following questions </h1>
	<form class="subForm" action="page4.php" method="post">
	
	<p>
	      <label for="refer" class="label">What is your age </label>
	      <select name="refer" id="refer">

			<option value="too young">-15</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="too old">30+</option>
        </select>
	  </p>
		<!-- determine gender, radio buttons here -->
		<p>
	      <span class="label">What is your gender?</span>
	      <label> <input name="skill" type="radio" value="Male" />Male</label>
	      <label> <input name="skill" type="radio" value="Female" />Female</label>
	   </p>
		<!-- dermine study, open question input via textfield. NB: input not sanitized yet -->
		<p>
			 <label for="name" class="label">What do you study?</label>
       <input type="text" name="name" id="name" />
		 </p>
    <!-- in which country have you lived the most of your life? Country codes are iso 3166 codes
    Other should open a textfield allowing user to specify. Country codes must then be added manually
    -->
		<p>
	    <label for="refer" class="label">In which country have you lived most of your life? </label>
	    <select name="refer" id="refer">

        <option value="NL">The Netherlands</option>
        <option value="DE">Germany</option>
        <option value="GB">Great Britain</option>
        <option value="DK">Denmark</option>
        <option value="SE">Sweden</option>
        <option value="ES">Spain</option>
        <option value="PT">Portugal</option>
        <option value="FR">France</option>
        <option value="IT">Italy</option>
        <option value="RO">Romania</option>
        <option value="CZ">Czech Republic</option>
        <option value="SK">Slovakia</option>
        <option value="PL">Poland</option>
        <option value="SI">Slovenia</option>
        <option value="HR">Croatia</option>
        <option value="BG">Bulgaria</option>
        <option value="Other">Other</option>
        </select>
	  </p>
	  
		 <!--PHP code must be added to check an int value is given. Additionally PHP could be used to check for bogus input -->	  
		 <p>
			 <label for="name" class="label">How many years have you lived there?</label>
       <input type="text" name="name" id="name" />
		 </p>
		 <!-- language to mother, other once again should open textfield to allow user specification -->		 
		 <p>
	    <label for="refer" class="label">Which language do you speak to your mother? </label>
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
		<!-- language to father, ibidem -->	  
	<p>
	    <label for="refer" class="label">Which language do you speak to your father? </label>
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
	   
		 <!-- how many years spent learning English? -->	   
	   <p>
	      <label for="refer" class="label">How many years have you spent learning English? </label>
	      <select name="refer" id="refer">

			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
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
