<?php
function showUser() { 
       $xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:
                
            }
        };
        xhttp.open("GET", "process_personal.php", true);
        xhttp.send();
}
?>