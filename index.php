<?php
 session_start();
 require("settings.php");
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { 
  $loggedin = true;
 }
 else {
  $loggedin = false;
 }
 if($_SERVER["REQUEST_METHOD"] == "POST") {
  $data = $_POST['data'];
  file_put_contents($page[$startPage][$defaultLang]["file"],$data);
 }
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title><?php echo WEBSITE_TITLE ?></title><?php if($loggedin) { echo PHP_EOL; ?>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/medium-editor/5.23.0/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/medium-editor/5.23.0/css/themes/bootstrap.min.css" type="text/css" media="screen" charset="utf-8">
  <script src="//cdn.jsdelivr.net/medium-editor/5.23.0/js/medium-editor.min.js"></script><?php } echo PHP_EOL; ?>
  <style>
   body { width: 1000px; text-align: justify; margin: 0 auto; font-size: 14px; }
   main { font-size: 1.5em; }
   main h1 { font-size: 2em; }
   header, footer  { padding: 10vmin 0; background-color: #eee; text-align: center; }
   header h1 {font-size: 5em; }
  </style>
 </head>
 <body>
  <header>
   <h1><?php echo WEBSITE_TITLE; ?></h1>
  </header>
  <nav>
  </nav>
  <main id="main">
   <section id="content" class="<?php if($loggedin) echo 'editable'; ?>">
    <?php require($page[$startPage][$defaultLang]["file"]); echo PHP_EOL; ?>
   </section><?php if($loggedin) { echo PHP_EOL; ?>
   <form id="save" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <input type="hidden" id="data" name="data" value="">
    <button type="button" onclick="save();">SAVE</button>
   </form><?php } echo PHP_EOL; ?>
  </main>
  <footer>
   powered by <a href="">tzimmes</a>
   <?php
    if($loggedin) { 
     echo 'welcome ' . $_SESSION['username'] . ' <a href="logout.php">log out</a>'.PHP_EOL;
    }
    else {
     echo 'here you can <a href="login.php">log in</a>'.PHP_EOL;
    };
   ?>
  </footer><?php if($loggedin) { echo PHP_EOL; ?>
  <script src="bottom.js"></script><?php } echo PHP_EOL; ?>
 </body>
</html>