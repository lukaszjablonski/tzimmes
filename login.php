<?php
 ob_start();
 session_start();
 require("settings.php");
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { 
  $loggedin = true;
 }
 else {
  $loggedin = false;
 }
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title><?php echo WEBSITE_TITLE . ' - Log in'; ?></title>
  <style>
   input { display:block; margin: 0 auto; }
   .container { width: 300px; margin: 0 auto; text-align: center; }
  </style>
 </head>
 <body id="login"> 
  <div class="container">
   <h2>Log in</h2>
   <?php
    $msg = '';
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
     /*if ($_POST['username'] == 'admin' && $_POST['password'] == 'pwd') {*/
     if (!empty($user[$_POST['username']]) && $user[$_POST['username']] && $user[$_POST['username']]["password"] == $_POST['password']) {
      $_SESSION['loggedin'] = true;
      //$_SESSION['timeout'] = time();
      $_SESSION['username'] = 'admin';
      $msg = 'You have entered valid username and password';
      header('Refresh: 0; URL = .');
     }
     else {
      $msg = 'Wrong username or password';
     }
    }
    if(!$loggedin) { echo PHP_EOL;
   ?>
   <form class="form-login" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <h4><?php echo $msg; ?></h4>
    <input type="text" name="username" placeholder="username" required autofocus>
    <input type="password" name="password" placeholder="password" required><br>
    <button type="submit" name="login">Log in</button>
   </form>
   <?php } else { ?>Already loged in. <a href = "logout.php" tite = "Logout">Log out</a>.<?php } ?>
  </div>
 </body>
</html>