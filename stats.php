<?php
/*
 *      Programmer:  Nathaniel Merck
 */

session_start();

include("library.php");

if ($_SESSION['userin'] == true) {
    //echo "logged in";
} else {
    header("Location: index.php");
    exit();
}

// variables
$guinness = 9;

echo <<< HTML

<html>

<head>
    <!--        CSS Styling         -->
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One|Tangerine" rel="stylesheet">
    <!--        JavaScript      -->
   
    
    <!--
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Beer', 'Votes'],
          ['Guinness',          9 ],
          ['Blue Moon',         2],
          ['Samuel Adams',      5],
          ['Heineken',          5],
          ['Corona',            2],
          ['Stella Artois',     8],
          ['Budweiser',         2],
          ['Sierra Nevada',     2],
          ['Yuengling',         2],
          ['Hoegaarden',        2],
          ['Pilsner Urquell',   2],
          ['Pabst Blue Ribbon', 2],
          ['Coors Light',       2],
          ['Stone Pale Ale',    2],
          ['Rolling Rock',      2]
        ]);

        var options = {
          title: 'Pie chart for Votes',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
    <script>
        function loadDoc() {
          var xhttp;
          if (window.XMLHttpRequest) {
            // code for modern browsers
            xhttp = new XMLHttpRequest();
            } else {
            // code for IE6, IE5
            xhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("demo").innerHTML = this.responseText;
            }
          };
          xhttp.open("GET", "guinness.php", true);
          xhttp.send();
        }
</script>

-->
  </head>
  
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
	
	
	<section> <!-- class="flex-container"     ~not needed~ -->
	
        <div id="space">
                </div>
                
	<!-- 
	<button type="button" onclick="loadDoc()">Refresh</button>
	
	<p id="demo"> 8 </p> 
	-->
	
	        <div id="space">
            </div>
        
        <div id="title">
            <h2 id="titleWord"> Statistics </h2>
        </div>
        
            <div id="space">
            </div>
        
        <div id="content">
     
            <table id="beerVotesTable">
              <tr>
                <th>Name</th>
                <th>Votes</th>
                <!-- <th id="percTH">Percentage</th>  -->
              </tr>
              
              <tr>
                <td>Guinness</td>
                <td> 
                 
HTML;
                echo getBeerVotes('Guinness');
echo <<< HTML
                </td>
                <td>
HTML;
                //echo calcPerc('Guinness');
echo <<< HTML
                </td>
              </tr>
              <tr>
                <td>Blue Moon</td>
                <td>
HTML;
                echo getBeerVotes('Blue Moon');
echo <<< HTML
                </td>    
              </tr>
              <tr>
                <td>Samuel Adams</td>
                <td>
HTML;
                echo getBeerVotes('Samuel Adams');
echo <<< HTML
                </td>    
              </tr>
              <tr>
                <td>Heineken</td>
                <td>
HTML;
                echo getBeerVotes('Heineken');
echo <<< HTML
                </td>
              </tr>
              <tr>
                <td>Corona</td>
                <td>
HTML;
                echo getBeerVotes('Corona');
echo <<< HTML
                </td>                
              </tr>
              <tr>
                <td>Stella Artois</td>
                <td>
HTML;
                echo getBeerVotes('Stella Artois');
echo <<< HTML
                </td>               
              </tr>
              <tr>
                <td>Budweiser</td>
                <td>
HTML;
                echo getBeerVotes('Budweiser');
echo <<< HTML
                </td>               
              </tr>
              <tr>
                <td>Sierra Nevada</td>
                <td>
HTML;
                echo getBeerVotes('Sierra Nevada');
echo <<< HTML
                </td>               
              </tr>
              <tr>
                <td>Yuengling</td>
                <td>
HTML;
                echo getBeerVotes('Yuengling');
echo <<< HTML
                </td>               
              </tr>
              <tr>
                <td>Hoegaarden</td>
                <td>
HTML;
                echo getBeerVotes('Hoegaarden');
echo <<< HTML
                </td>               
              </tr>
              <tr>
                <td>Pilsner Urquell</td>
                <td>
HTML;
                echo getBeerVotes('Pilsner Urquell');
echo <<< HTML
                </td>               
              </tr>
              <tr>
                <td>Pabst Blue Ribbon</td>
                <td>
HTML;
                echo getBeerVotes('Pabst Blue Ribbon');
echo <<< HTML
                </td>               
              </tr>
              <tr>
                <td>Coors Light</td>
                <td>
HTML;
                echo getBeerVotes('Coors Light');
echo <<< HTML
                </td>               
              </tr>
              <tr>
                <td>Stone Pale Ale</td>
                <td>
HTML;
                echo getBeerVotes('Stone Pale Ale');
echo <<< HTML
                </td>               
              </tr>
              <tr>
                <td>Rolling Rock</td>
                <td>
HTML;
                echo getBeerVotes('Rolling Rock');
echo <<< HTML
                </td>               
              </tr>
              
              
              
              
            </table>
            
            
            
            
        <!--
        <div id="donutchart" style="width: 900px; height: 500px;"></div>
        -->
    
            
            
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

