<?php

/*
 *      Programmer:  Nathaniel Merck
 */


$PHP_SELF = htmlspecialchars($_SERVER['PHP_SELF']);

echo <<< HTML

<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
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
                <li><a href="process.php"> PROCESS </a></li>
                
                <li><a href="types.php"> TYPES </a></li>
                
                <li><a href="stats.php"> STATISTICS </a></li>
                
                <!-- <li><a href="deleted/history.php"> HISTORY </a></li> -->
                
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
            <h2 id="titleWord"> Profile </h2>
        </div>
        
        
        <div id="content">
            
            <p id="profileInfo">           
                <img id="profileIMG" src="img/profileimg.png" align="top" hspace="20">
        
                <br>    nmerck1
                <br>    Nathaniel Merck
                <br>    nmerck1@tctc.edu
                <br>
                <br>
                <br>
                <br>    <button id="profPic">Change Profile Picture</button>
                <br>
                <br>    Favorite Beer Choice:   
                
                <select id="selectItBABY">
                  <option value="guinness">Guinness</option>
                  <option value="bluemoon">Blue Moon</option>      
                  <option value="samueladams">Samuel Adams</option>
                  <option value="heineken">Heineken</option> 
                     
                  <option value="corona">Corona</option>
                  <option value="stella">Stella Artois</option>      
                  <option value="budweiser">Budweiser</option>
                  <option value="sierra">Sierra Nevada</option>  
                  
                  <option value="yuengling">Yuengling</option>
                  <option value="hoegaarden">Hoegaarden</option>      
                  <option value="pilsner">Pilsner Urquell</option>
                  <option value="pbr">Pabst Blue Ribbon</option>  
                  
                  <option value="coors">Coors Light</option>
                  <option value="stone">Stone Pale Ale</option>      
                  <option value="rock">Rolling Rock</option>
                </select>
            
            </p>
            
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

