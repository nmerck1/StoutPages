<?php
/**
 * Created by PhpStorm.
 * User: N2
 * Date: 4/14/2017
 * Time: 10:14 PM
 */


$PHP_SELF = htmlspecialchars($_SERVER['PHP_SELF']);

include("library.php");

$USERNAME = $PASSWORD = "";

echo <<< HTML

<html>
<body>

<form action="test.php" method="get">
    Username: <input type="text" name="username" /> <br>
    Password: <input type="password" name="pword" />	 <br>
    <input type="submit" id="submit" value="Go">
</form>

</body>
</html>
              

HTML;

if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $USERNAME = $_GET["username"];
    $PASSWORD = $_GET["pword"];
}



var_dump($_GET);

echo $USERNAME;
echo $PASSWORD;