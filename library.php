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

/*   Function:          usernameTaken
 *   Last modified:     4-19-17
 *   Description:       returns true if $uname and database query are the same.
 */

function usernameTaken($uname){
    $result =mysqli_query(connectDB(),
        "SELECT * FROM ACCOUNT WHERE ACC_UNAME = '$uname'; ");

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

/*   Function:          setPrevBeer
 *   Last modified:     4-18-17
 *   Description:       sets the previous beer in the database associated with $uname.
 */

function setPrevBeer($uname, $beerName){

    // $currentBeer = getCurrentForPrev($uname);

    // update account associated with $uname's previous beer to $beerName.
   $result = mysqli_query(connectDB(),
       "UPDATE ACCOUNT SET ACC_PREV_BEER = '$beerName' WHERE ACC_UNAME = '$uname'; ");


    if ($result){
        return true;
    } else {
        return false;
    }
}

/*   Function:          setCurrentBeer
 *   Last modified:     4-18-17
 *   Description:       sets the current and previous beer in the database associated with $uname.
 */

function setCurrentBeer($uname, $beerName){
    // update account associated with $uname's previous beer to $beerName.
    $result = mysqli_query(connectDB(),
        "UPDATE ACCOUNT SET ACC_PREV_BEER = ACC_BEER WHERE ACC_UNAME = '$uname'; ");

    // update previous beer votes associated with the $uname
    $result2 = mysqli_query(connectDB(),
        "UPDATE STATS
          INNER JOIN ACCOUNT
          ON ACCOUNT.ACC_PREV_BEER=STATS.STAT_NAME
          SET STATS.STAT_VOTES = STATS.STAT_VOTES - 1
          WHERE ACCOUNT.ACC_UNAME = '$uname'; ");

    // update account associated with $uname's previous beer to $beerName.
    $result3 = mysqli_query(connectDB(),
            "UPDATE ACCOUNT SET ACC_BEER = '$beerName' WHERE ACC_UNAME = '$uname'; ");

    // update current beer votes associated with the $uname
    $result4 = mysqli_query(connectDB(),
        "UPDATE STATS
            INNER JOIN ACCOUNT
            ON ACCOUNT.ACC_BEER=STATS.STAT_NAME
            SET STATS.STAT_VOTES = STATS.STAT_VOTES + 1
            WHERE ACCOUNT.ACC_UNAME = '$uname'; ");

    if ($result && $result2 && $result3 && $result4){
        return true;
    } else {
        return false;
    }
}


/*   Function:          getFirstName
 *   Last modified:     4-16-17
 *   Description:       returns the first name associated with the username provided.
 */

function getFirstName($uname){

    $con = connectDB();

    $sql = "SELECT ACC_FNAME FROM ACCOUNT WHERE ACC_UNAME = '$uname'; ";
    $result =mysqli_query(connectDB(), $sql);


    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo " ". $row["ACC_FNAME"];
        }
    } else {
        echo "0 results";
    }

    mysqli_close($con);

}

/*   Function:          getLastName
 *   Last modified:     4-16-17
 *   Description:       returns the last name associated with the username provided.
 */

function getLastName($uname){

    $con = connectDB();

    $sql = "SELECT ACC_LNAME FROM ACCOUNT WHERE ACC_UNAME = '$uname'; ";
    $result =mysqli_query(connectDB(), $sql);


    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo " ". $row["ACC_LNAME"];
        }
    } else {
        echo "0 results";
    }

    mysqli_close($con);


}

/*   Function:          getCurrentBeer
 *   Last modified:     4-18-17
 *   Description:       returns the current favorite beer associated with the username provided.
 */

function getCurrentBeer($uname){

    $con = connectDB();

    $sql = "SELECT ACC_BEER FROM ACCOUNT WHERE ACC_UNAME = '$uname'; ";
    $result =mysqli_query(connectDB(), $sql);


    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "". $row["ACC_BEER"];
        }
    } else {
        echo "0 results";
    }


    mysqli_close($con);

}

/*   Function:          getPrevBeer
 *   Last modified:     4-18-17
 *   Description:       returns the previous favorite beer associated with the username provided.
 */

function getPrevBeer($uname){

    $con = connectDB();

    $sql = "SELECT ACC_PREV_BEER FROM ACCOUNT WHERE ACC_UNAME = '$uname'; ";
    $result =mysqli_query(connectDB(), $sql);


    if ($result->num_rows == 1) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "". $row["ACC_PREV_BEER"];
        }
    } else {
        echo "0 results";
    }


    mysqli_close($con);

}

/*   Function:          checkIfCurrent
 *   Last modified:     4-18-17
 *   Description:       returns true if the beer selected from the form is the same as the one currently in the database
 *                      associated with the username provided.
 */

function checkIfCurrent($uname, $beerName){

    // get a result
    $result = mysqli_query(connectDB(),
        "SELECT ACC_BEER FROM ACCOUNT WHERE ACC_BEER = '$beerName' AND ACC_UNAME = '$uname'; ");

    // convert to string
    if ($result->num_rows == 1) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "". $row["ACC_BEER"];
        }
    } else {
        echo "0 results";
    }

    if ($result == true){
        return true;
    } else {
        return false;
    }

}

/*   Function:          getBeerVotes
 *   Last modified:     4-16-17
 *   Description:       returns the votes from the database from the beer name given.
 */

function getBeerVotes($beerName){

    $con = connectDB();

    $sql = "SELECT STAT_VOTES FROM STATS WHERE STAT_NAME = '$beerName'; ";
    $result =mysqli_query(connectDB(), $sql);


    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["STAT_VOTES"];
        }
    } else {
        echo "0 results";
    }

    mysqli_close($con);
}

/*   Function:          deleteAccount
 *   Last modified:     4-17-17
 *   Description:       deletes the account in the database associated with the username provided.
 */

function deleteAccount($uname){

    $sql = "DELETE FROM ACCOUNT WHERE ACC_UNAME = '$uname'; ";
    $result =mysqli_query(connectDB(), $sql);

    if ($result) {
       return true;
    } else {
        return false;
    }
}

/*   Function:          calcPerc
 *   Last modified:     4-17-17
 *   Description:       returns the percentage of the amount of votes -provided the beer name.
 */

/*
function calcPerc($beer){
    // get all the votes from all the other beers
    $guinness = getBeerVotes('Guinness');
    $bluemoon = getBeerVotes('Blue Moon');
    $samuel =   getBeerVotes('Samuel Adams');
    $heineken = getBeerVotes('Heineken');
    $corona =   getBeerVotes('Corona');
    $stella = getBeerVotes('Stella Artois');
    $budweiser = getBeerVotes('Budweiser');
    $sierra = getBeerVotes('Sierra Nevada');
    $yuengling = getBeerVotes('Yuengling');
    $hoegaarden = getBeerVotes('Hoegaarden');
    $pilsner = getBeerVotes('Pilsner Urquell');
    $pbr = getBeerVotes('Pabst Blue Ribbon');
    $coors = getBeerVotes('Coors Light');
    $stone = getBeerVotes('Stone Pale Ale');
    $rock = getBeerVotes('Rolling Rock');

    $getVotes = getBeerVotes($beer);

    $totalVotes = ($guinness + $bluemoon + $samuel + $heineken + $corona + $stella + $budweiser + $sierra + $yuengling +
                    $hoegaarden + $pilsner + $pbr + $coors + $stone + $rock);

    $percentage = ($getVotes / $totalVotes);

    //return $percentage;
    return number_format($percentage ,2)."<br>";
}

*/