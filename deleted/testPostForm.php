<?php
/**
 * Created by PhpStorm.
 * User: N2
 * Date: 4/14/2017
 * Time: 10:14 PM
 */


$PHP_SELF = htmlspecialchars($_SERVER['PHP_SELF']);

include("library.php");
// initialize variables
$USERNAME = $PASSWORD = "";

echo <<< HTML

<html>
<body>

<form action="test.php" method="GET">
    Username: <input type="text" name="username" /> <br>
    Password: <input type="password" name="pword" />	 <br>
    <input type="submit" id="submit" name="submit" value="Go">
</form>

</body>
</html>
              

HTML;
/*
if ($_SERVER["REQUEST_METHOD"] == "GET"){                        // this doesn't work either
    $USERNAME = $_GET["username"];
    $PASSWORD = $_GET["pword"];
}
*/
if (isset($_GET['username']) && isset($_GET['pword'])){
    $USERNAME = $_GET['username'];
    $PASSWORD = $_GET['pword'];
}

// dump post data
var_dump($_GET);

// echo out what was received
echo $USERNAME;
echo $PASSWORD;