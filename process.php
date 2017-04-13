<?php

/*
 *      Programmer:  Nathaniel Merck
 */


$PHP_SELF = htmlspecialchars($_SERVER['PHP_SELF']);

echo <<< HTML

<html>

<head>
	
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One|Tangerine" rel="stylesheet">
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
                
                <!-- <li><a href="deleted/history.php"> HISTORY </a></li> -->
                
                <li><a href="profile.php"> PROFILE </a></li>
                
                <li><a id="logout" href="index.php"> LOGOUT </a></li>
            </ul>
        </div>
          
    </header>
	
	<div id="line">
    </div>
	
	
	<section> <!-- class="flex-container"     ~not needed~ -->
	    
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
            
        <h2 id="ingredients">Ingredients</h2>
            
            <div id="space">
            </div>
        
        <div id="content">      <!--   start of content div   -->
        
            <p>
                    Beer is made from four basic ingredients: Barley, water, hops and yeast.
                The basic idea is to extract the sugars from grains (usually barley) so 
                that the yeast can turn it into alcohol and CO2, creating beer. (shown below)
            </p>
            
            <div id="space">
                <h2 id="barley"> Barley </h2>
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
                  
                  
                  
                  
           <p id="video">
           <iframe width="420" height="315" 
                src="https://www.youtube.com/embed/FttkHVBu2IA" frameborder="0" allowfullscreen>
           
           </iframe>
           </p>
           
               <div id="space">
               </div>
           
           <h2 id="malting">Malting</h2>
           
               <div id="space">
               </div>
           
           <p>
                    The brewing process starts with grains, usually barley 
                (although sometimes wheat, rye or other such things.) The grains 
                are harvested and processed through a process of heating, drying out
                and cracking. The main goal of malting is to isolate the enzymes 
                needed for brewing so that it’s ready for the next step.
            </p>
            
               <div id="space">
               </div>
               
            <h2 id="harvested">Harvest >>> Heated & Dried >>> Cracked</h2>
            
               <div id="space">
               </div>
               
            <h2 id="mashing">Mashing</h2>
           
               <div id="space">
               </div>
           
           <p>
                    The grains then go through a process known as
                mashing, in which they are steeped in hot, but not 
                boiling, water for about an hour, sort of like making 
                tea. This activates enzymes in the grains that cause it 
                to break down and release its sugars. Once this is all 
                done you drain the water from the mash which is now full
                of sugar from the grains. This sticky, sweet liquid is 
                called wort. It’s basically unmade beer, sort of like how 
                dough is unmade bread.
            </p>
            
               <div id="space">
               </div>
               
            <h2 id="boiling">Boiling</h2>
           
               <div id="space">
               </div>
           
           <p>
                    The wort is boiled for about an hour while hops and 
                other spices are added several times. What are hops?
                Hops are the small, green cone-like fruit of a vine plant.
                They provide bitterness to balance out all the sugar in the
                wort and provide flavor. They also act as a natural 
                preservative, which is what they were first used for. 
                (For more info on hops take a look at our section about it above.)
            </p>
            
               <div id="space">
               </div>
               
            <h2 id="fermentation">Fermentation</h2>
           
               <div id="space">
               </div>
           
           <p>
                    Once the hour long boil is over the wort is cooled, 
                strained and filtered. It’s then put in a fermenting vessel 
                and yeast is added to it. At this point the brewing is 
                complete and the fermentation begins. The beer is stored for 
                a couple of weeks at room temperature (in the case of ales) 
                or many many weeks at cold temperatures (in the case of lagers) 
                while the yeast works its fermentation magic. Basically the yeast 
                eats up all that sugar in the wort and spits out CO2 and alcohol as 
                waste products.
            </p>
            
                <div id="space">
                </div>
               
            <h2 id="bottling">Bottling & Aging</h2>
           
               <div id="space">
               </div>
           
           <p>
                    You’ve now got alcoholic beer, however it is still 
                flat and uncarbonated. The flat beer is bottled, at which 
                time it is either artificially carbonated like a soda, or if 
                it’s going to be ‘bottle conditioned’ it’s allowed to 
                naturally carbonate via the CO2 the yeast produces. After 
                allowing it to age for anywhere from a few weeks to a few 
                months you drink the beer, and it’s delicious!
            </p>
            
      
            
        </div>   <!--  end content div -->
        
        
            <div id="space">
            </div>
        
        <div id="questions">
        
            <h2 id="questionsTitle">Questions</h2>
            
                <div id="space">
                </div>
            
            <div id="Q1">
                <p>
                    1. Mashing activates ______ in the grains that cause it to
                     break down and release its sugars.
                </p>
                
                <select id="selectItBABY">
                  <option value="sugar">Sugar</option>
                  <option value="enzymes">Enzymes</option>      <!-- answer -->
                  <option value="alcohol">Alcohol</option>
                  <option value="wort">Wort</option>
                </select>
            </div>
            
                <div id="space">
                </div>
            
            <div id="Q2">
                <p>
                    2. The term "bottom-fermenting" is associated with ale yeasts. 
                </p>
                
                <select id="selectItBABY">
                  <option value="FALSE">False</option>      <!-- answer -->
                  <option value="TRUE">True</option>
                </select>
            </div>
            
                <div id="space">
                </div>
            
            <div id="Q3">
                <p>
                    3. Beer is made from four basic ingredients: 
                    Barley, water, _____ and yeast.
                </p>
                
                <select id="selectItBABY">
                  <option value="malt">Malt</option>
                  <option value="co2">CO2</option>      
                  <option value="alcohol">Alcohol</option>
                  <option value="hops">Hops</option>        <!-- answer -->
                </select>
            </div>
            
                <div id="space">
                </div>
            
            <div id="Q4">
                <p>
                    4. Hops provide bitterness to balance out all the sugar
                     in the wort and provide _____.
                </p>
                
                <select id="selectItBABY">
                  <option value="enzymes">Enzymes</option>
                  <option value="co2">CO2</option>      
                  <option value="flavor">Flavor</option>        <!-- answer -->
                  <option value="yeast">Yeast</option>        
                </select>
            </div>
            
            
            
        </div>      <!--   end questions div   -->
        
            <div id="space">
            </div>
        
	</section>
	
	<div id="bottomLine">
    </div>
	
	<footer>
	    <a href="privacy.html"> Privacy Policy </a>
	</footer>
</body>


</html>

HTML;

