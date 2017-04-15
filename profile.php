<?php

/*
 *      Programmer:  Nathaniel Merck
 */


$PHP_SELF = htmlspecialchars($_SERVER['PHP_SELF']);

include("library.php");

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
                <br> <!--   nmerck1@tctc.edu    -->
                <br>
                <br>
                <br>
                <br>    <button id="profPic">Change Profile Picture</button>
                <br>
                <br>    Favorite Beer Choice:   
                
                <form id="selectFavBeer" action="$PHP_SELF" method="get">
                    <!-- <select id="selectItBABY">  -->
                      <input type="radio" name="beerName" value="Guinness">Guinness</input>
                      <input type="radio" name="beerName" value="BlueMoon">Blue Moon</input>
                      <input type="radio" name="beerName" value="SamuelAdams">Samuel Adams</input>
                      <input type="radio" name="beerName" value="Heineken">Heineken</input> 
                         
                      <input type="radio" name="beerName" value="Corona">Corona</input>
                      <input type="radio" name="beerName" value="StellaArtois">Stella Artois</input>      
                      <input type="radio" name="beerName" value="Budweiser">Budweiser</input>
                      <input type="radio" name="beerName" value="SierraNevada">Sierra Nevada</input>  
                      
                      <input type="radio" name="beerName" value="Yuengling">Yuengling</input>
                      <input type="radio" name="beerName" value="Hoegaarden">Hoegaarden</input>      
                      <input type="radio" name="beerName" value="PilsnerUrquell">Pilsner Urquell</input>
                      <input type="radio" name="beerName" value="PBR">Pabst Blue Ribbon</input>  
                      
                      <input type="radio" name="beerName" value="CoorsLight">Coors Light</input>
                      <input type="radio" name="beerName" value="StonePaleAle">Stone Pale Ale</input>      
                      <input type="radio" name="beerName" value="RollingRock">Rolling Rock</input>
                    <!--  </select>  -->
                    
                    <input id="saveButton" type="submit" name="submit" value="Save">  
                </form>
                
HTML;

                if (isset($_GET['beerName']) && $_GET['beerName']!=NULL){
                    $beerName = $_GET['beerName'];
                    echo $beerName;
                }


echo <<< HTML
 
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
