<!DOCTYPE html>
<html>
<head>
<title>TASK1</title>
</head>
<body>
<?php include 'menu.inc'; ?>
</br>
<?php

//Create six variables to store the values displayed in bold
    $studentName = "Vusi Bhopape";
    $numOfModulesReg = 4;
    define("costPerModule",1825);
    $totalFees = 7300;
    $busaryAmt = 5000;
    $oustandingFees = 2300;

   // The variable that stores the total fee
    $totalFees =  $numOfModulesReg * costPerModule;
    
    //The variable that stores the outstanding fee
    $oustandingFees = $totalFees - $busaryAmt;
 
    echo 'Student Name:'.$studentName."</br>"; 
    echo "Number Of Modules:".$numOfModulesReg."</br>";
    echo "Cost Per Module:".costPerModule."</br>";
    echo "Total Fees:".$totalFees."</br>";
    echo "Busary Amount:".$busaryAmt."</br>";
    echo "Outstanding Fees:".$oustandingFees;

  ?>
<br>
<iframe src="task1.txt" height="400" width="1200">
    Your browser does not support iframes. </iframe>

</body>
</html>