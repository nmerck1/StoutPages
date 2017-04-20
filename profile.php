<?php

/*
 *      Programmer:  Nathaniel Merck
 */


$PHP_SELF = htmlspecialchars($_SERVER['PHP_SELF']);

session_start();

include("library.php");

if ($_SESSION['userin'] == true) {
    //echo "logged in";
} else {
    header("Location: index.php");
    exit();
}

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
             
HTML;

                $beerName = "";

                if (isset($_GET['beerName']) && $_GET['beerName']!=NULL) {
                    $beerName = $_GET['beerName'];

                        // check if current beer is able to stored
                        if (setCurrentBeer($_SESSION['name'], $beerName) == true) {
                            //echo "<br> current beer stored in account";
                        } else {
                           // echo "<br> current beer could not be saved to account";
                        }

                } else {
                    // echo "<br> beer name from form is not set";
                }

                echo "<br>";
                echo $_SESSION['name'];
                echo "<br>";

                echo getFirstName($_SESSION['name']) ;
                echo getLastName($_SESSION['name']);

                echo "<br> Favorite Beer: ";
                echo  getCurrentBeer($_SESSION['name']);


echo <<< HTML
                <br> <!--   nmerck1@tctc.edu    -->
                <br>
                <br>
                <br>
                <br>    <!--   <button id="profPic">Change Profile Picture</button>      // ADD LATER   -->
                <br>
                <br>    What's your favorite beer?   
                
                <form id="selectFavBeer" action="profile.php" method="get">
                    <!-- <select id="selectItBABY">  -->
                      <input type="radio" name="beerName" value="Guinness">Guinness</input>
                      <input type="radio" name="beerName" value="Blue Moon">Blue Moon</input>
                      <input type="radio" name="beerName" value="Samuel Adams">Samuel Adams</input>
                      <input type="radio" name="beerName" value="Heineken">Heineken</input> 
                         
                      <input type="radio" name="beerName" value="Corona">Corona</input>
                      <input type="radio" name="beerName" value="Stella Artois">Stella Artois</input>      
                      <input type="radio" name="beerName" value="Budweiser">Budweiser</input>
                      <input type="radio" name="beerName" value="Sierra Nevada">Sierra Nevada</input>  
                      
                      <input type="radio" name="beerName" value="Yuengling">Yuengling</input>
                      <input type="radio" name="beerName" value="Hoegaarden">Hoegaarden</input>      
                      <input type="radio" name="beerName" value="Pilsner Urquell">Pilsner Urquell</input>
                      <input type="radio" name="beerName" value="Pabst Blue Ribbon">Pabst Blue Ribbon</input>  
                      
                      <input type="radio" name="beerName" value="Coors Light">Coors Light</input>
                      <input type="radio" name="beerName" value="Stone Pale Ale">Stone Pale Ale</input>      
                      <input type="radio" name="beerName" value="Rolling Rock">Rolling Rock</input>
                      
                      <!--
                      <br> <br>
                      <p id="tea"><input type="radio" name="delete" value="Tea">"Eh, I'm more of a tea person"</input></p> -->
                    <!--  </select>  -->
                    
                    
                    <br><br><input id="saveButton" type="submit" name="submit" value="Save">  
                </form>
                
HTML;



echo <<< HTML
 
            </p>
            
        </div>
        
            <div id="space">
            </div>   
HTML;
                $delete = "";

                if (isset($_GET['delete'])){
                    $delete = $_GET['delete'];
                }

                if ($delete == "Tea"){
                    deleteAccount($_SESSION['name']);
                    //header("Location: index.php");
                    //exit();
                } else {
                    //echo "<br> account could not be deleted!";
                }


echo <<< HTML
	</section>
	
	<div id="lineBottom">
    </div>
	
	<footer>
	    <a href="privacy.html"> Privacy Policy </a>
	</footer>
</body>


</html>

HTML;
