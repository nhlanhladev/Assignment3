<html>
 <head>
  <title>Task6</title>     
  </head>
 <body>
 <?php include 'menu.inc'; ?>

 <?php
//section A of task 6
  $day = 1;
  $payPerHour = ($day == 1) ?  '19.20' :($day == 7) ? '14.75' :'10.00';
 echo 'pay per hour is:' . $payPerHour.'<br><br>';
 
 

 $days = -1;
 $payPerHour =($days == -1)? '22.11':($days == 5)? '18.20' : '14.44';
  echo 'your per hour is :' . $payPerHour ;

 ?>
  
<form action="">
  <br><br>
 <input type="text"  name = "age" placeholder ="Enter your Age">
 <br><br>
 <input type="text"  name = "income" placeholder ="Enter Your Income">
 <br><br>
 <button name="file">Submit</button>

</form>


 <?php 
 
  // if button it clicked
     if (isset($_POST['file']))
      {
           $Age = $_POST['age'];
           $Income = $_POST['income'];

           if ($Age >= 45 && $Income >= 20000)
           {
            echo "you qualify for promotion";
           }else{

           }
     }  
    
 ?>

 <?php
 
 
 ?>

 
 </body>
</html>