<?php

/*
 *      Programmer:  Nathaniel Merck
 *      Title:       main login page for individual project
 *      Date:        3/6/2017
 */

$PHP_SELF = htmlspecialchars($_SERVER['PHP_SELF']);

echo <<< HTML

<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One|Tangerine|Abel|Pompiere" rel="stylesheet">
</head>

<body>

    <header>
    
        <p id="websiteName">
            StoutPages
        </p>
        <!--
        <img id="logo" src="img/logo.PNG" alt="Website Logo" align="top-left">
        -->
        
        <form id="loginForm" action="$PHP_SELF" method="post">
            <table>
                <tr>
                    <td colspan="2"><span id="emailSpan" for="lEmail">Username</span> <input  type="email" name="lEmail" required>  </td>
                </tr>
                <tr>
                    <td><span id="passSpan" for="lPass">Password</span> <input id="passInput" type="password" name="lPass" required> </td>
                <tr>
                    <td><input id="submitButton" type="submit" value="Log In" > </td>
                </tr>
            </table>
        </form>
        
    </header>
	
	<div id="line">
    </div>
	
	
	<section>
	    <img id="homeimg" src="img/beer.jpg" alt="Website Logo" align="top-left">
	    
	    <div id="rightSide">
            <form id="createAccForm" action="$PHP_SELF" method="post">
                <table>
                    <tr>
                        <h2 id="createAccH2"> Create a New Account </h2>
                    </tr>
                    <tr>
                        <input type="text" name="create username" placeholder="Username" required>   <br><br>
                    </tr>
                    <tr>
                        <input type="text" name="first name" placeholder="First name" required>   <br><br>
                    </tr>
                    <tr>
                        <input type="text" name="last name" placeholder="Last name"  required>   <br><br>
                    </tr>
                    <tr>
                        <input type="email" name="register email" placeholder="Email" required>   <br><br>
                    </tr>
                    <tr>
                        <input type="email" name="re-enter email" placeholder="Re-enter Email"  required>    <br><br>
                    </tr>
                    <tr>
                        <input type="password" name="register password" placeholder="Password" required>   <br><br>
                    </tr>
                    <tr>
                        <input type="password" name="re-enter password" placeholder="Confirm Password" required>   <br><br>
                    </tr>
                    <tr>
                        <input id="create" type="submit" value="Create Account" >
                    </tr>
                </table>
            </form>
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

