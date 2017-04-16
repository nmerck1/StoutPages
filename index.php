<?php

/*
 *      Programmer:  Nathaniel Merck
 *      Title:       main login page for individual project
 *      Date:        3/6/2017
 */

$PHP_SELF = htmlspecialchars($_SERVER['PHP_SELF']);

session_start();

include("library.php");

// resets everything
$_SESSION['userin'] = false;
$_SESSION['name'] = " ";
$_SESSION['fname'] = " ";
$_SESSION['lname'] = " ";

connectDB();

// initialize variables to be empty strings
$username = $password = $createUsername = $firstName = $lastName = $registerPassword = $reenterPassword = "";

if (isset($_GET['createUsername']) && isset($_GET['firstName']) && isset($_GET['lastName']) &&
    isset($_GET['registerPassword']) && isset($_GET['reenterPassword'])    ) {

    $createUsername = $_GET['createUsername'];
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $registerPassword = $_GET['registerPassword'];
    $reenterPassword = $_GET['reenterPassword'];

    echo "variables are set". "<br>";
}

if (isset($_GET['lUsername']) && isset($_GET['lPass'])) {
    $username = $_GET['lUsername'];
    $password = $_GET['lPass'];
}


if ( userExists($username, $password) == true ){
    $_SESSION['userin'] = true;
    $_SESSION['name'] = "$username";

    $_SESSION['fname'] = getFirstName("$username");
    $_SESSION['lname'] = getLastName("$username");

   // echo "logged in!";

    header("Location: process.php");
    exit();
}

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
        
        <form id="loginForm" action="$PHP_SELF" method="get">
            <table>
                <tr>
                    <td colspan="2"><span id="emailSpan" for="lUsername">Username</span> <input  type="text" name="lUsername" required>  </td>
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
            <form id="createAccForm" action="$PHP_SELF" method="get">
                <table>
                    <tr>
                        <h2 id="createAccH2"> Create a New Account </h2>
                    </tr>
                    <tr>
                        <input type="text" name="createUsername" placeholder="Username" required>   <br><br>
                    </tr>
                    <tr>
                        <input type="text" name="firstName" placeholder="First name" required>   <br><br>
                    </tr>
                    <tr>
                        <input type="text" name="lastName" placeholder="Last name"  required>   <br><br>
                    </tr>
                    <!--
                    <tr>
                        <input type="email" name="register email" placeholder="Email" required>   <br><br>
                    </tr>
                    <tr>
                        <input type="email" name="re-enter email" placeholder="Re-enter Email"  required>    <br><br>
                    </tr>
                    -->
                    <tr>
                        <input type="password" name="registerPassword" placeholder="Password" required>   <br><br>
                    </tr>
                    <tr>
                        <input type="password" name="reenterPassword" placeholder="Confirm Password" required>   <br><br>
                    </tr>
                    <tr>
                        <input id="create" type="submit" value="Create Account" >
                    </tr>
                </table>
            </form>
	    </div>
HTML;
            /*      REGISTER        */

            $check = 0;

            if ( isValidPass($createUsername, $registerPassword, $reenterPassword) == true ){
                echo "valid password. Meets all requirements <br>";
                ++$check;
            }
            else {
                echo "not a valid password. Must be at least 4 letters, contain at least one capital letter and a number. <br>";
                echo "(cannot contain any special characters). <br>";
            }

            if ( isValidUsername($createUsername, $registerPassword) == true ){
                //echo "valid username <br>";
                ++$check;
                echo "checks: $check";
            }
            else {
                echo "not a valid username, or already exists. Must be at least 4 letters long and contain at least one number <br>";
            }

            if ( $check > 1 ){
                // put account in the database
                $registerPassword = md5($registerPassword);			// encrypts password

                $sql =  " INSERT INTO ACCOUNT (ACC_UNAME, ACC_PASS, ACC_FNAME, ACC_LNAME) 
                                      VALUES ('$createUsername', '$registerPassword', '$firstName', '$lastName'); ";
                mysqli_query(connectDB(), $sql);

                echo "account created!";

                header("Location: index.php");
                exit();
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

