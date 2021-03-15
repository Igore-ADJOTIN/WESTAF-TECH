<?php
$p=isset ($_GET['Tech'])? $_GET['Tech']:"dashbord";
switch($p){

case "dashbord" :include("main.php");break;
case "accueil" :include("main.php");break;
case "about" :include("pages/about.php");break;
case "contact" :include("pages/contact.php");break;
default : include("404.php");break;

}
 ?>