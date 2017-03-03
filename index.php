<?php
 session_start();
?>
<html lang = "en">
 <head>
  <title>Index</title>
 </head>
 <body>
  <?
   if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { 
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
   }
   else {
    echo "Please log in first to see this page.";
   }
  ?>
 </body>
</html>
