<html>
 <head>
  <title>Task7</title>     
  </head>
 <body>
 <?php include 'menu.inc'; ?>

 <?php
 
  // section A using a forloop
 echo "Section A using forloop.<br><br>";
   $add=1; 
   for ( $i=0; $i<19 ; $i++) 
   { 
      $add = $add + $i ; 
      
      
       echo " " . $add;
       "<br>";
    } 
  
    ?>
   <br><br>
    <?php

echo "Section B Using WhileLoop.<br><br>";
 
   // section B using while loop 
    $add =1;
    $counter = 0;
    while($counter < 19)
    {

     $add = $add + $counter;
     $counter++;
  
     echo " " .$add;
    }
  


 ?>
<br><br>
<?php



 $percentage = 40;
 
 if ($percentage >= 0 && $percentage <= 29)
 {
    echo "your Rading Code: 1"."<br>";

 }else if ($percentage >= 30 && $percentage <= 39) 
 {
    echo "your Rading Code: 2"."<br>";

 }elseif($percentage >= 40 && $percentage <= 49)
 {
   echo "your Rading Code: 3"."<br>";

 }elseif($percentage >= 50 && $percentage <= 59)
 {
   echo "your Rading Code: 4"."<br>";

 }elseif($percentage >= 60 && $percentage <=69)
 {
   echo "your Rading Code: 5"."<br>";

 }elseif($percentage >= 70 && $percentage <=79)
 {
   echo "your Rading Code: 6"."<br>";

 }elseif($percentage >= 80 && $percentage <=100){

   echo "your Rading Code: 7" ."<br>";
   
 }else if($percentage < 0 || $percentage > 101)
 {
   echo "your rating code -1:";
 }
?>
<br><br>


<?php 

$ratingCode = 1;


  
   switch($ratingCode)
   {
      
        case 2:
          echo "Elementary";
          break;
        case 3:
           echo "Moderate";
           break;
        case 4:
            echo "Adequate";
            break;
        case 5:
            echo "Substantial";
            break;
        case 6:
            echo "Meritorious";
            break;
        case 1:
          echo "Not achieved";
         echo "</br>";
         case 7:
          echo "Outstanding";
          echo "</br>";
        case -1:
            echo "Invalid code";
            echo "</br>";
     }


?>


 </body>
</html>