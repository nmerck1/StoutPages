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
                
                <!--  <li><a href="deleted/history.php"> HISTORY </a></li>  -->
                
                <li><a href="profile.php"> PROFILE </a></li>
                
                <li><a id="logout" href="index.php"> LOGOUT </a></li>
            </ul>
        </div>
          
    </header>
	
	<div id="line">
    </div>
	
	
	<section> 
        
	    <div id="pagePic">
	        <!--   picture here (Size of this div will be the same for all pages using it)  -->
	        <img id="typesPic" src="img/beers.jpg" align="top">
        </div>
        
            <div id="space">
            </div>
        
        <div id="title">
            <h2 id="titleWord"> Types of Beer </h2>
        </div>
        
            <div id="space">
            </div>
        
        <div id="content">      <!--   start of content div   -->
            
            <p id="typesPart">           
                <img id="guinnessIMG" src="img/guinness.jpg" align="top" hspace="20">
                
                        Name:   Guinness
                <br>    Manufacturer:   Diageo
                <br>    Origin:   Ireland
                <br>    Type:   Dry stout
                <br>    Introduced:    1759
                <br>    Alcohol:    7.5% - 9%
                     
            </p>
            
            <p id="typesPart">           
                <img id="bluemoonIMG" src="img/bluemoon.jpg" align="top" hspace="20">
                
                        Name:   Blue Moon
                <br>    Manufacturer:   Blue Moon Brewing Co.
                <br>    Origin:    Golden, Colorado (USA)
                <br>    Type:   Pale Ale
                <br>    Introduced:    1995
                <br>    Alcohol:    3.2% - 5.4%
                     
            </p>
            
            <p id="typesPart">           
                <img id="samueladamsIMG" src="img/samueladams.jpg" align="top" hspace="20">
                
                        Name:   Samuel Adams
                <br>    Manufacturer:   Boston Beer Company
                <br>    Origin:    Boston, Massachusetts (USA)
                <br>    Type:   Lager
                <br>    Introduced:    1984
                <br>    Alcohol:    4.94% - 5.2%
                     
            </p>
            
            <p id="typesPart">           
                <img id="heinekenIMG" src="img/heineken.jpg" align="top" hspace="20">
                
                        Name:   Heineken
                <br>    Manufacturer:   Heineken International
                <br>    Origin:    Netherlands
                <br>    Type:   Pale Lager
                <br>    Introduced:    1873
                <br>    Alcohol:    5%
                     
            </p>
            
            <p id="typesPart">           
                <img id="coronaIMG" src="img/corona.jpg" align="top" hspace="20">
                
                        Name:   Corona
                <br>    Manufacturer:   Cervecería Modelo
                <br>    Origin:    Mexico
                <br>    Type:   Pale Lager
                <br>    Introduced:    1925
                <br>    Alcohol:    7.4%
                     
            </p>
            
            <p id="typesPart">           
                <img id="stellaIMG" src="img/stella.jpg" align="top" hspace="20">
                
                        Name:   Stella Artois
                <br>    Manufacturer:   Brouwerij Artois 
                <br>    Origin:    Leuven, Belgium
                <br>    Type:   Pilsner Lager
                <br>    Introduced:    1926
                <br>    Alcohol:    4.8% - 5.2%
                     
            </p>
            
            <p id="typesPart">           
                <img id="budweiserIMG" src="img/budweiser.jpg" align="top" hspace="20">
                
                        Name:   Budweiser
                <br>    Manufacturer:   Anheuser-Busch
                <br>    Origin:    St. Louis, Missouri (USA)
                <br>    Type:   American Lager
                <br>    Introduced:    1876
                <br>    Alcohol:    4.3% - 5%
                     
            </p>
            
            <p id="typesPart">           
                <img id="sierraIMG" src="img/sierra.jpg" align="top" hspace="20">
                
                        Name:   Sierra Nevada
                <br>    Manufacturer:   Sierra Nevada Brewing Co.
                <br>    Origin:    Chico, California (USA)
                <br>    Type:   Pale Ale
                <br>    Introduced:    1980
                <br>    Alcohol:    5.6%
                     
            </p>
            
            <p id="typesPart">           
                <img id="yuenglingIMG" src="img/yuengling.jpg" align="top" hspace="20">
                
                        Name:   Yuengling
                <br>    Manufacturer:   D. G. Yuengling & Son
                <br>    Origin:    Pottsville, Pennsylvania (USA)
                <br>    Type:   Lager
                <br>    Introduced:    1829
                <br>    Alcohol:    4.4%
                     
            </p>
            
            <p id="typesPart">           
                <img id="hoegaardenIMG" src="img/hoegaarden.jpg" align="top" hspace="20">
                
                        Name:   Hoegaarden
                <br>    Manufacturer:   Anheuser-Busch
                <br>    Origin:    Hoegaarden, Belgium
                <br>    Type:   White Ale
                <br>    Introduced:    1445
                <br>    Alcohol:    4.9%
                     
            </p>
            
            <p id="typesPart">           
                <img id="pilsnerIMG" src="img/pilsner.jpeg" align="top" hspace="20">
                
                        Name:   Pilsner Urquell
                <br>    Manufacturer:   Pilsner Urquell Brewery
                <br>    Origin:    Plzeň, Czech Republic
                <br>    Type:   Pale Lager
                <br>    Introduced:    1842
                <br>    Alcohol:    4.4%
                     
            </p>
            
            <p id="typesPart">           
                <img id="pbrIMG" src="img/pbr.jpg" align="top" hspace="20">
                
                        Name:   Pabst Blue Ribbon
                <br>    Manufacturer:   Pabst Brewing Company
                <br>    Origin:    Milwaukee, Wisconsin (USA)
                <br>    Type:   American Lager
                <br>    Introduced:    1844
                <br>    Alcohol:    4.74–5.9%
                     
            </p>
            
            <p id="typesPart">           
                <img id="coorsIMG" src="img/coors.JPG" align="top" hspace="20">
                
                        Name:   Coors Light
                <br>    Manufacturer:   Coors Brewing Company
                <br>    Origin:    Milwaukee, Wisconsin (USA)
                <br>    Type:   Lager
                <br>    Introduced:    1978
                <br>    Alcohol:    4.2%
                     
            </p>
            
            <p id="typesPart">           
                <img id="stoneIMG" src="img/stone.jpg" align="top" hspace="20">
                
                        Name:   Stone Pale Ale
                <br>    Manufacturer:   Stone Brewing
                <br>    Origin:     Escondido, California (USA)
                <br>    Type:   Pale Ale
                <br>    Introduced:    1996
                <br>    Alcohol:    6%
                     
            </p>
            
            <p id="typesPart">           
                <img id="rockIMG" src="img/rock.jpg" align="top" hspace="20">
                
                        Name:   Rolling Rock
                <br>    Manufacturer:   Latrobe Brewing Company
                <br>    Origin:     St. Louis, Missouri (USA)
                <br>    Type:   American Lager
                <br>    Introduced:    1939
                <br>    Alcohol:    4.4%
                     
            </p>
            
        </div>      <!--    end of content div    -->
        
            <div id="space">
            </div>
        
        
        
        
        <div id="questions">        <!-- start of questions div  -->
        
            <h2 id="questionsTitle">Questions</h2>
            
                <div id="space">
                </div>
                
            <form id="selectFavBeer" action="$PHP_SELF" method="get">
            
                <div id="Q1">
                    <p>
                        1. Which beer has the lowest amount of alcohol?
                    </p>
                    
                    
                      <input type="radio" name="Question1" value="guinness">Guinness</input>
                      <input type="radio" name="Question1" value="heineken">Heineken</input>
                      <input type="radio" name="Question1" value="bluemoon">Blue Moon</input>      <!-- answer -->
                      <input type="radio" name="Question1" value="stone">Stone Pale Ale</input>
                    
                    
HTML;
                    $q1 = "";

                    if (isset( $_GET['Question1'])  ) {
                        $q1 = $_GET['Question1'];
                    }

                    if ($q1 == "bluemoon"){
                        echo "<br> answer is correct!";
                    } else {
                        echo "<br> incorrect!";
                    }

echo <<< HTML
                    
                </div>
                
                    <div id="space">
                    </div>
                
                <div id="Q2">
                    <p>
                        2. Which beer was introduced in the USA first? 
                    </p>
                    
                    
                      <input type="radio" name="Question2" value="sierra">Sierra Nevada</input>
                      <input type="radio" name="Question2" value="hoegaarden">Hoegaarden</input>
                      <input type="radio" name="Question2" value="pilsner">Pilsner Urquell</input>
                      <input type="radio" name="Question2" value="yuengling">Yuengling</input>      <!-- answer -->
                   
                    
HTML;
                    $q2 = "";

                    if (isset( $_GET['Question2'])  ) {
                        $q2 = $_GET['Question2'];
                    }

                    if ($q2 == "yuengling"){
                        echo "<br> answer is correct!";
                    } else {
                        echo "<br> incorrect!";
                    }

echo <<< HTML
                    
                </div>
                
                    <div id="space">
                    </div>
                
                <div id="Q3">
                    <p>
                        3. Which beer has the highest amount of alcohol?
                    </p>
                    
                  
                      <input type="radio" name="Question3" value="heineken">Heineken</input>
                      <input type="radio" name="Question3" value="guinness">Guinness</input>      <!-- answer -->
                      <input type="radio" name="Question3" value="stella">Stella Artois</input>
                      <input type="radio" name="Question3" value="stone">Stone Pale Ale</input>
                    
HTML;
                    $q3 = "";

                    if (isset( $_GET['Question3'])  ) {
                        $q3 = $_GET['Question3'];
                    }

                    if ($q3 == "guinness"){
                        echo "<br> answer is correct!";
                    } else {
                        echo "<br> incorrect!";
                    }

echo <<< HTML
                    
                </div>
                
                    <div id="space">
                    </div>
                
                <div id="Q4">
                    <p>
                        4. _______ is an American Lager introduced in 1844.
                    </p>
                    
                    
                    <input type="radio" name="Question4" value="budweiser">Budweiser</input>
                    <input type="radio" name="Question4" value="rock">Rolling Rock</input>      
                    <input type="radio" name="Question4" value="samueladams">Samuel Adams</input>
                    <input type="radio" name="Question4" value="pbr">Pabst Blue Ribbon</input>       <!-- answer -->      
                   
                   
HTML;
                    $q4 = "";

                    if (isset( $_GET['Question4'])  ) {
                        $q4 = $_GET['Question4'];
                    }

                    if ($q4 == "pbr"){
                        echo "<br> answer is correct!";
                    } else {
                        echo "<br> incorrect!";
                    }

echo <<< HTML
                   
                   <br><br><input id="saveButton" type="submit" name="submit" value="Save">  
                   
                </div>
            
            </form>
            
        
            <div id="space">        <!-- end of questions div   -->
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

