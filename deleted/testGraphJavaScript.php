<?php

include("library.php");

//$guinness = getBeerVotes('Guinness');

echo <<< HTML

<html>

<body>

<script>
function showHint(str) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
      xhttp.open("GET", "guinness.php?q="+str, true);
      xhttp.send();  
  }
</script>

</body>

</html>

HTML;
