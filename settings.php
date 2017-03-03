<?php
// DB + settings file ???
// array() as of PHP 5.4 []


$DB = [
 1 => [
  "PL"=>["title"=>"kontakt","file"=>"kontakt.php"],
  "EN"=>["title"=>"contact","file"=>"contact.php"],
 ],
 2 => [
  "PL"=>["title"=>"o nas","file"=>"onas.php"],
  "EN"=>["title"=>"about","file"=>"about.php"],
 ]
];

// $DB[ID][lang][param]
echo $DB[1]["PL"]["title"];


$admin = [
 1 => [
  "login"=>"LOGIN1",
  "password"=>"PASSWORD1",
 ],
 2 => [
  "login"=>"LOGIN2",
  "password"=>"PASSWORD2",
 ]
];

// $admin[ID][param]
echo $admin[1]["login"];
echo $admin[1]["password"];
