<script src="platform.js" defer></script>
<script src="cookie-consent.js" defer></script>

<script>
function setCookie(c_name, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
    document.cookie = c_name + "=" + c_value;
}

function getCookie(c_name) {
    var i, x, y, ARRcookies = document.cookie.split(";");
    for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
            return unescape(y);
        }
    }
}

function cssSelected() {
    var cssSelected = $('#myList')[0].value;
    if (cssSelected !== "select") {
        setCookie("selectedCSS", cssSelected, 3);
    }
}

$(document).ready(function() {
    $('#myList')[0].value = getCookie("selectedCSS");
})
</script>

<!DOCTYPE html>
<html>
        <head>
            <title>Meta tags </title>
            <meta name="keywords" content="HTML, Meta Tags, Metadata" />
            <meta name="description" content="Learning about Meta Tags." />
            <meta name="revised" content="tutorialpoint, 24/8/2019" />
            <meta http-equiv="cookie" content="useri8d=xyz; expires=sunday, 24-Sep-19 3:59:59 GMT;" />
             
             
        </head>
        <body>
         
 

 
        </body>
</html>

<!DOCTYPE html>
<html>
        <head>
          
            <meta name="keywords" content="HTML, Meta Tags, Metadata" />
            <meta name="description" content="Learning about Meta Tags." />
            <meta name="author" content="Avinash" />
             
        </head>
        <body>
         
 

 
        </body>
</html>
<head>
  
   <meta http-equiv="refresh"
   content="0; url=https://onlinethuis.nl/back.php">
</head>


