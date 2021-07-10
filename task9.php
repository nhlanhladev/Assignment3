<html>
 <head>
  <title>Task9</title>     
  </head>
 <body>
 <?php include 'menu.inc'; ?>

 <?php
// display day and month and year
$date=date_create("13-09-1990");
echo date_format($date,"d/m/Y") . "</br>";
 

//An example date of birth.
$userDob = '1990-09-13';

//Create a DateTime object using the user's date of birth.
$dob = new DateTime($userDob);

//We need to compare the user's date of birth with today's date.
$now = new DateTime();

//Calculate the time difference between the two dates.
$difference = $now->diff($dob);

//Get the difference in years, as we are looking for the user's age.
$age = $difference->y;
$day = $difference-d;
$month = $difference-> m;

//Print it out.
echo "person Age:  ". $age . "<br>";

 if($day && $month == $now)
 {
    echo "It’s your birthday today";
     
 }else if($day && $month >= $now)
 {
    echo "‘Your birthday is yet to come this year’."."<br>";
 }else
 {
    echo "You have already celebrated your birthday this year";
 }ß
 ?>
 
 </body>
</html>