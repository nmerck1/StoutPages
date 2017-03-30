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
	    
	    
	    
	    
	  <!-- this is the day tis is the day that the lord has made that the lord has made, we will
	  rejoice, we will rejoice and be glad in it -->
	  <div>
	        nkajsndkjandkajndkajsndkajsndkajsndk
      </div>
	  
	  
	    <!--
	    
	    
	    
            <div id="space">
            </div>
            
            -->
        
	     <div id="pagePic">  
	        <!--   picture here (Size of this div will be the same for all pages using it)  -->
	        <img id="processPic" src="img/brewery.jpg" align="top">
         </div>  
        
            <div id="space">
            </div>
        
        <div id="title">
            <h2 id="titleWord"> How Beer is Made </h2>
        </div>
        
            <div id="space">
            </div>
        
        <div id="content">
            <p>
                    Beer is made from four basic ingredients: Barley, water, hops and yeast.
                The basic idea is to extract the sugars from grains (usually barley) so 
                that the yeast can turn it into alcohol and CO2, creating beer. (shown below)
            </p>
            
            <div id="space">
                <h2 style="text-align: center;"> Barley </h2>
            </div>
            
            <p id="part">           
                <img id="barleyIMG" src="img/barley.jpg" align="top" hspace="20">
        
                <br>     Barley has been used as animal fodder, as a source of fermentable material
                for beer and certain distilled beverages, and as a component of various 
                health foods. It is used in soups and stews, and in barley bread of various
                cultures. Barley grains are commonly made into malt in a traditional and 
                ancient method of preparation. Barley is a basic cereal grain not particularly good 
                for milling into flour and making bread or bakery goods. But it is great for beer. 
                There are three major types of barley. These are differentiated by the number of seeds 
                at the top of the stalk. Barley seeds grow in two, four and six rows along the central 
                stem. European brewers traditionally prefer the two-row barley because it malts best and
                has a higher starch/husk ratio than four or six-row barley. Brewers in the US traditionally 
                prefer six-row barley because it is more economical to grow and has a higher concentration of
                enzymes needed to convert the starch in the grain into sugar and other fermentables.        
            </p>
            
            <div id="space">
                <h2 style="text-align: center;"> Water </h2>
            </div>
           
            <p id="part">
                <img id="waterIMG" src="img/water.jpg" align="top" hspace="20">
                
                <br>     Basically water comes from two sources: surface water from lakes, rivers, 
                and streams; and groundwater, which comes from aquifers underground. 
                Surface water tends to be low in dissolved minerals but higher in organic
                matter, such as leaves and algae, which need to be filtered and disinfected
                with chlorine treatment. Groundwater is generally low in organic matter but
                higher in dissolved minerals. Good beer can be brewed with almost any water.
                However, water adjustment can make the difference between a good beer and a great 
                beer if it is done right. But you have to understand that brewing is cooking and that
                seasoning alone will not make up for poor ingredients or a poor recipe.
                The common conception is that the best beer is made from mountain spring water, and 
                this is generally true, although probably not for the reasons you think. Mountain spring 
                water (i.e., a clean surface water source) is good for brewing because it is largely 
                mineral free, which lets the brewers add any mineral salts they feel are necessary for 
                the beer. 
            </p>
            
            <div id="space">
                <h2 style="text-align: center;"> Hops </h2>
            </div>
            
            <p id="part">
                <img id="hopsIMG" src="img/hops.jpg" align="top" hspace="20">
                
                <br>     In the hands of American microbrewers, hops have moved from 
                their position as the supporting actor in the beer ensemble to the starring role.
                West Coast microbrewers led the way in creating beers where the character of hops—bitter, piney,
                grassy, floral, or grapefruity—took center stage. Beer lovers took pride in seeking out the 
                brews with higher and higher IBUs—international bittering units, the measure of the concentration of hop 
                compounds in beer. High-hopped beers are not for every taste. But for the hop lovers out there, there is a 
                stunning array of hop varieties—with new ones being developed all the time—that brewers employ singly or in combination.
                Now, American brewers have boosted the hopping levels of their IPAs to such an extent that a new beer style has 
                emerged: so-called double or “imperial” India pale ale. These big beers feature even more hop power and alcohol to match.
            </p>
              
            <div id="space">
                <h2 style="text-align: center;"> Yeast </h2>
            </div>
              
              
            <p id="part">
                <img id="yeastIMG" src="img/yeast.jpg" align="top" hspace="20">
                
                <br>     Yeast are single-celled microorganisms that reproduce by budding. 
                They are biologically classified as fungi and are responsible for converting 
                fermentable sugars into alcohol and other byproducts. There are literally 
                hundreds of varieties and strains of yeast. In the past, there were two types of 
                beer yeast: ale yeast (the "top-fermenting" type, Saccharomyces cerevisiae) and lager
                yeast (the "bottom-fermenting" type, Saccharomyces uvarum, formerly known as 
                Saccharomyces carlsbergensis). Today, as a result of recent reclassification of 
                Saccharomyces species, both ale and lager yeast strains are considered to be members 
                of S. cerevisiae. <br>
                <br> <span> Top-Fermenting Yeast: </span> <br>
                Ale yeast strains are best used at temperatures ranging from 10 to 25°C, though some strains
                will not actively ferment below 12°C (33). Ale yeasts are generally regarded as top-fermenting 
                yeasts since they rise to the surface during fermentation, creating a very thick, rich yeast head. 
                That is why the term "top-fermenting" is associated with ale yeasts. Fermentation by ale yeasts at 
                these relatively warmer temperatures produces a beer high in esters, which many regard as a distinctive 
                character of ale beers. 
                Top-fermenting yeasts are used for brewing ales, porters, stouts, Altbier, Kölsch, and wheat beers. 
                <br> <span> Bottom-Fermenting Yeast: </span> <br>
                Lager yeast strains are best used at temperatures ranging from 7 to 15°C. At these temperatures, lager yeasts 
                grow less rapidly than ale yeasts, and with less surface foam they tend to settle out to the bottom of the 
                fermenter as fermentation nears completion. This is why they are often referred to as "bottom" yeasts. The final 
                flavour of the beer will depend a great deal on the strain of lager yeast and the temperatures at which it was fermented. 
                Some of the lager styles made from bottom-fermenting yeasts are Pilsners, Dortmunders, Märzen, Bocks, and American malt liquors. 
            </p>
                    
         
                    
                   
                    
                    
                    
           <iframe width="420" height="315"
                src="http://www.youtube.com/watch?v=FttkHVBu2IA">
           </iframe>
            
          
            
        </div>   <!--  end content div -->
        
        
        
        
            <div id="space">
            </div>
        
        <div id="questions">
            questions
        </div> 
        
            <div id="space">
            </div>
        
	</section>
	
	<div id="bottomLine">
    </div>
	
	<footer>
	    created by Nathaniel Merck
	</footer>
</body>


</html>

HTML;

