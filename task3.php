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

  <p>Please  choose your BMI :</p>
  <input type="radio" id="normal_bmi" name="radioBMI" value="1">
  <label for="normal_bmi">BMI-In-Kg and Meters</label>
  <br>
 <input type="radio" id="bmi_inches" name="radioBMI" value="2">
 <label for="bmi_inches">BMI-In-Pounds and Inches</label>
<br>
<br>
  <input type="submit" name="submit" value="Submit">
  
</form> 


 <?php

// variables for fields height and weight
   $enterWeight = $_POST['weight'];
   $enterHeight = $_POST['height'];

  //  $radioWeight = $_POST['radioWeight'];
  //  $radioHeight = $_POST['radioHeight'];


  $totalBMI = ($enterWeight /($enterHeight * $enterHeight));

  $bmi = $enterWeight *  0.453/($enterHeight * $enterHeight) * 0.025;


   $message = "";

   //variable checking weather the data inserted is empty or less than sero or  equal to zero and string message
   $weightMessage = $enterWeight == 0 ||  $enterWeight < 0 || empty($enterWeight) || $enterWeight == "";
   $heightMessage = $enterHeight == 0 ||  $enterHeight  < 0 || empty($enterHeight) || $enterHeight  == "";


// checks that button submit is clicked 
 if(isset($_POST['submit'])){

  if($weightMessage && $heightMessage){
          
    echo "PLEASE HEIGHT AND WEIGHT  FIELDS SHOULD NOT BE ZERO DIGITS OR STRING OR EMPTY";
}

if($_POST['radioBMI'] == 1){

   if($totalBMI < 18.5){
    $message = " you are underweight";
    echo "your body mass is index(BMI): ". round($totalBMI,2) . "<br> " . $message;

   }elseif($totalBMI > 18.5 && $totalBMI <= 24.9){
    $message = " You are healthy weight";
    echo "your body mass is index(BMI): ". round($totalBMI,2) . "<br> " . $message;

   }elseif($totalBMI >= 25 && $totalBMI <= 29.9){
    $message = "You are Overweight";
    echo "your body mass is index(BMI): ". round($totalBMI,2) . "<br> " . $message;
   }elseif($totalBMI >= 30){
    $message = "You are obese";
    echo "your body mass is index(BMI): ". round($totalBMI,2) . "<br> " . $message;
   }

  }
  if($_POST['radioBMI'] == 2){
   
    if($bmi < 18.5){
      $message = "you are underweight";
      echo " body mass  index(BMI): ". round($bmi,2) . "<br> " . $message;
  
     }elseif($bmi > 18.5 && $bmi <= 24.9){
      $message = " You are healthy weight";
      echo " body mass index(BMI): ". round($bmi,2) . "<br> " . $message;
  
     }elseif($bmi >= 25 && $bmi <= 29.9){
      $message = "You are Overweight";
      echo " body mass  index(BMI): ". round($bmi,2) . "<br> " . $message;
     }elseif($bmi >= 30){
      $message = "You are obese";
      echo " body mass index(BMI): ". round($bmi,2) . "<br> " . $message;
      }
   }
}

 ?>
 
 </body>
</html>