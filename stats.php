<?php
/*
 *      Programmer:  Nathaniel Merck
 */


$PHP_SELF = htmlspecialchars($_SERVER['PHP_SELF']);

echo <<< HTML

<html>

<head>
    <!--        CSS Styling         -->
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One|Tangerine" rel="stylesheet">
    <!--        JavaScript      -->
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Beer', 'Votes'],
          ['Guinness',          2],
          ['Blue Moon',         2],
          ['Samuel Adams',      2],
          ['Heineken',          2],
          ['Corona',            2],
          ['Stella Artois',     2],
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
        
        <div id="title">
            <h2 id="titleWord"> Statistics </h2>
        </div>
        
            <div id="space">
            </div>
        
        <div id="content">
            
            
            
        <div id="donutchart" style="width: 900px; height: 500px;"></div>
            
            
            
            
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

