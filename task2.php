<!DOCTYPE html>
 <head>
  <title>Task2</title>     
  </head>
 <body>
 <?php include 'menu.inc'; ?>
 </br>
 <form method="get">

 <label for="studentName">Student Name:</label>
 <input type="text" id="studentName" name="studentname" placeholder="Student Name"><br><br>

 <label for="numOfRegModules">Number OF Registered Modules:</label>
 <input type="text" id="numOfRegModules" name="numofregmodules" placeholder="Number of modules registered"><br><br>

 <label for="busaryAmt">Busary Amount:</label>
 <input type="text" id="busaryAmt" name="busaryamt" placeholder="Busary Amount"><br><br>

 <input type="submit" name="submit-btn" value="Submit">
</br></br>
</form>


 <?php

     $studentName = $_GET["studentname"];
     $numOfModulesReg = $_GET["numofregmodules"];
     $busaryAmt = $_GET["busaryamt"];

     define("costPerModule",1825);
    

 // The variable that stores the total fee
 $totalFees = $numOfModulesReg * costPerModule;
    
 //The variable that stores the outstanding fee
 $oustandingFees = $totalFees - $busaryAmt;

 //checks weather the form is not empthy
    if(isset($_GET["submit-btn"])){
       
      // display the data was inserted into the fields
         echo "Student Name: " .$studentName."</br>";
         echo "Number Of Modules: " .$numOfModulesReg."</br>";
         echo "Bursary Amount: " .$busaryAmt."</br>";
         echo "Total Fee: " .$totalFees."</br>";
         echo "Outstanding Fees: " .$oustandingFees;

    }
 ?>

<iframe src="task1.txt" height="400" width="1200">
    Your browser does not support iframes. </iframe>
 
 </body>
</html>