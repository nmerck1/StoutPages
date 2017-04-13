<?php

/*
 *      Programmer:  Nathaniel Merck
 */


$PHP_SELF = htmlspecialchars($_SERVER['PHP_SELF']);

echo <<< HTML

<html>


<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One|Tangerine" rel="stylesheet">
</head>

<body>

    <header>
    
        <p id="websiteName">
            StoutPages
        </p>
        <!--
        <img id="logo" src="img/logo.PNG" alt="Website Logo" align="top-left">
        -->
        <div id="topLinks">
            <ul>
                <li><a href="../process.php"> PROCESS </a></li>
                
                <li><a href="../types.php"> TYPES </a></li>
                
                <li><a href="../stats.php"> STATISTICS </a></li>
                
                <li><a href="history.php"> HISTORY </a></li>
                
                <li><a href="../profile.php"> PROFILE </a></li>
                
                <li><a id="logout" href="../index.php"> LOGOUT </a></li>
            </ul>
        </div>
          
    </header>
	
	<div id="line">
    </div>
	
	
	<section> <!-- class="flex-container"     ~not needed~ -->
	    
        
	    <div id="pagePic">
	        <!--   picture here (Size of this div will be the same for all pages using it)  -->
	        <img id="historyPic" src="../img/historyBeer.jpg" align="top">
        </div>
        
            <div id="space">
            </div>
        
        <div id="title">
            <h2 id="titleWord"> The History </h2>
        </div>
        
            <div id="space">
            </div>
        
        <div id="content">      <!--  start of content div  -->
        
            <h2 id="overview"> Overview </h2>
            
            <p>
                Beer produced before the Industrial Revolution continued to be made 
                and sold on a domestic scale, although by the 7th century AD beer was 
                also being produced and sold by European monasteries. During the 
                Industrial Revolution, the production of beer moved from artisanal 
                manufacture to industrial manufacture, and domestic manufacture ceased 
                to be significant by the end of the 19th century. The development 
                of hydrometers and thermometers changed brewing by allowing the brewer 
                more control of the process, and greater knowledge of the results.
                Today, the brewing industry is a global business, consisting of several 
                dominant multinational companies and many thousands of smaller producers 
                ranging from brewpubs to regional breweries. More than 133 billion 
                liters (35 billion gallons) are sold per year—producing total global 
                revenues of $294.5 billion (£147.7 billion) in 2006.
              
            </p>
        </div>                  <!--  end of content div   -->
        
            <div id="space">
            </div>
        
        <div id="questions">    <!--  start of questions div  -->
            questions
        </div>                  <!--  end of questions div   -->
        
            <div id="space">
            </div>
        
	</section>
	
	<div id="lineBottom">
    </div>
	
	<footer>
	    <a href="../privacy.html"> Privacy Policy </a>
	</footer>
</body>


</html>

HTML;

