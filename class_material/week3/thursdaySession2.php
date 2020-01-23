<?php 
   // start session
   session_start();
   // save session variables into local variables
   $c = $_SESSION["favcolor"];
   $a = $_SESSION["favanimal"];

?>
<h1>Your favorite color is<?php $c?> and your favorite animal is <?php $a?></h1>
<?php ?>