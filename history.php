<?php

/*
 *      Programmer:  Nathaniel Merck
 */


$PHP_SELF = htmlspecialchars($_SERVER['PHP_SELF']);

echo <<< HTML

<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>


<body>

    <header>
        <img id="logo" src="img/logo.PNG" alt="Website Logo" align="top-left">
    
        <div id="topLinks">
            <ul>
                <li><a href="process.php"> PROCESS </a></li>
                
                <li><a href="types.php"> TYPES </a></li>
                
                <li><a href="stats.php"> STATISTICS </a></li>
                
                <li><a href="history.php"> HISTORY </a></li>
                
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
        
	    <div id="pagePic">
	        <!--   picture here (Size of this div will be the same for all pages using it)  -->
	        pagePic
        </div>
        
            <div id="space">
            </div>
        
        <div id="title">
            <h2 id="titleWord"> The History </h2>
        </div>
        
            <div id="space">
            </div>
        
        <div id="content">
            content
        </div>
        
            <div id="space">
            </div>
        
        <div id="questions">
            questions
        </div> 
        
            <div id="space">
            </div>
        
	</section>
	
	<div id="lineBottom">
    </div>
	
	<footer>
	    created by Nathaniel Merck
	</footer>
</body>


</html>

HTML;

