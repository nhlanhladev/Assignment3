<html>
 <head>
  <title>Task3</title>     
  </head>
 <body>
 <?php include 'menu.inc'; ?>

 <form method="post">
 <p>Enter Your  Weight and Height:</p>
  <label for="weight">Weight:</label>
  <input type="text" id="weight" name="weight" placeholder="Please Enter Weight"><br>
  <label for="height">Height:</label>
  <input type="text" id="height" name="height" placeholder="Please Enter Height" ><br>

  <p>Please  choose your weight in kilograsm or pounds:</p>
  <input type="radio" id="weight" name="radioWeight" value="weight">Pounds
 <input type="radio" id="weight" name="radioWeight" value="weight">Kilograms
<br>
<p>Please  choose your Height in meters or inches:</p>
  <input type="radio" id="Height" name="radioHeight" value="height">Inches
 <input type="radio" id="Height" name="radioHeight" value="height">Kilograms
<br>
<br>
  <input type="submit" name="submit" value="Submit">
  
</form> 


 <?php

// variables for fields height and weight
   $enterWeight = $_POST['weight'];
   $enterHeight = $_POST['height'];


   // variables for radio buttons
   $clickedWeight = $_POST['radioWeight'];
   $clickedHeight = $_POST['radioHeight'];

   // 
   $mass = $_POST['weight'];
   $heightValue = $_POST['height'];

   //variable checking weather the data inserted is empty or less than sero or  equal to zero and string message
   $weightMessage = $enterWeight == 0 ||  $enterWeight < 0 || empty($enterWeight) || $enterWeight == "";
   $heightMessage = $enterHeight == 0 ||  $enterHeight  < 0 || empty($enterHeight) || $enterHeight  == "";

// checks that button submit is clicked
   if($_SERVER["REQUEST_METHOD"] == "POST"){

// echo data 
    if($weightMessage && $heightMessage){
          
         echo "PLEASE HEIGHT AND WEIGHT  FIELDS SHOULD NOT BE ZERO DIGITS OR STRING OR EMPTY";
     }


 }


 // function calculate weight and height in killograms and meters
 function calcBMI ($mass,$heightValue){
        
     $totalBMI = ($mass /($heightValue * $heightValue));
 }





 ?>
 
 </body>
</html>