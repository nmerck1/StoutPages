<?php
/*
 *      Programmer:  Nathaniel Merck
 */


$PHP_SELF = htmlspecialchars($_SERVER['PHP_SELF']);

echo <<< HTML

<html>

<head>
    <!--        CSS Styling         -->
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One|Tangerine" rel="stylesheet">
    <!--        JavaScript      -->
    
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
                <li><a href="process.php"> PROCESS </a></li>
                
                <li><a href="types.php"> TYPES </a></li>
                
                <li><a href="stats.php"> STATISTICS </a></li>
                
                <!--  <li><a href="deleted/history.php"> HISTORY </a></li>  -->
                
                <li><a href="profile.php"> PROFILE </a></li>
                
                <li><a id="logout" href="index.php"> LOGOUT </a></li>
            </ul>
        </div>
          
    </header>
	
	<div id="line">
    </div>
	
	
	<section> <!-- class="flex-container"     ~not needed~ -->
	
	        <div id="space">
            </div>
        
        <div id="title">
            <h2 id="titleWord"> Statistics </h2>
        </div>
        
            <div id="space">
            </div>
        
        <div id="content">
            
            
            
            
            
            
            
            
        </div>
        
        
            <div id="space">
            </div>
        
	</section>
	
	<div id="lineBottom">
    </div>
	
	<footer>
	    <a href="privacy.html"> Privacy Policy </a>
	</footer>
</body>


</html>

HTML;

