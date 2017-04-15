<?php

/*
 *      Programmer:  Nathaniel Merck
 *      Title:       Function Library
 */



/*   Function:          connectDB
 *   Last modified:     4-14-17
 *   Description:       connects to database
 */

function connectDB(){
    $con = mysqli_connect("localhost", "CIT", "CPT283", "StoutPages");

    if (!$con){
        die("failed to connect to database  D;  <br>" . mysqli_connect_error() );
    }
    return $con;
}

/*   Function:          isValidPass
 *   Last modified:     4-14-17
 *   Description:       checks if the variable '$txt' is a valid password.
 */

function isValidPass($un, $txt, $txt2){
    if ( $txt != $un  &&
        strlen($txt) > 6  &&
        preg_match('/[A-Z]+[a-z]+[0-9]+/', $txt) &&
        $txt == $txt2 ) {
        // store the password as a md5 encryption
        return true;
    }
    else {
        return false;
    }
}

/*   Function:          isValidUsername
 *   Last modified:     4-14-17
 *   Description:       checks the database for a copy of the variable '$un'.
 */

function isValidUsername($un, $txt){
    $result =mysqli_query(connectDB(), "SELECT 1 FROM ACCOUNT WHERE ACC_UNAME = '$un'; ");

    if ( $un != $txt   &&  strlen($un) > 3){
        if ( mysqli_num_rows($result) < 1 ){
            return true;
        }
    }
    else {
        return false;
    }
}

/*   Function:          userExists
 *   Last modified:     4-14-17
 *   Description:       check if user exists so that you can log in.
 */

function userExists($un, $txt){
    $txt = md5($txt);			// encrypt what the user entered, to see if it matches the encryption in the database

    $result =mysqli_query(connectDB(),
        "SELECT * FROM ACCOUNT WHERE ACC_UNAME = '$un' AND ACC_PASS = '$txt'; ");

    if ( mysqli_num_rows($result) == 1 ){
        return true;
    }
    else {
        return false;
    }
}

/*   Function:          pullVotes
 *   Last modified:     4-14-17
 *   Description:       returns the amount of votes based on the beer name given: '$beer'.
 */

function pullVotes($beer){

    $result =mysqli_query(connectDB(),
        "SELECT STAT_VOTES FROM STATS WHERE STAT_NAME = '$beer'; ");

    if ( mysqli_num_rows($result) == 1 ){
        return $result;
    }
    else {
        return NULL;
    }
}

/*   Function:          setFavBeer
 *   Last modified:     4-14-17
 *   Description:       returns the amount of votes based on the beer name given: '$beer'.
 */

function setFavBeer($uname, $beer){

    $result =mysqli_query(connectDB(),
        "UPDATE ACCOUNT SET ACC_BEER = '$beer' WHERE ACC_UNAME = '$uname'; ");

    if ( $result ){
        return true;
    }
    else {
        return false;
    }

}
/*
function setName($n){
    $name = $n;
}

function getName(){
    return $name;
}
*/
