<?php
 // array() as of PHP 5.4 []
 
 define(WEBSITE_TITLE,"tzimmes");
 $defaultLang = "ENG";
 $startPage = 2;
 
 $lang = array("PL","ENG");

 $page = array(
  1 => array(
   "PL"=>array("title"=>"kontakt","file"=>"kontakt.php"),
   "ENG"=>array("title"=>"contact","file"=>"contact.php"),
  ),
  2 => array(
   "PL"=>array("title"=>"o nas","file"=>"onas.php"),
   "ENG"=>array("title"=>"about","file"=>"about.php"),
  )
 );
 // $page[ID][lang][param]

 $user = array(
  "admin" => array(
   "password"=>"pwd",
  ),
  "user" => array(
   "password"=>"pwd",
  )
 );
 // $user[username][param]