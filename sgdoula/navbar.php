<?php

function createNav($title, $link){
   if("/".$link == $_SERVER['PHP_SELF']){
      return "<li class='active'><a href='".$link."'>".$title."</a></li>";
   }else{
      return "<li><a href='".$link."'>".$title."</a></li>";
   }
}

echo createNav("Home", "index-test.php");
echo createNav("About", "about.php");
echo createNav("Services", "services.php");
echo createNav("Library", "library.php");
echo createNav("Testimonials", "testimonials.php");
echo createNav("Contact", "contact.php");

?>
