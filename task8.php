<html>
 <head>
  <title>Task8</title>     
  </head>
 <body>
 <?php include 'menu.inc'; ?>

 <?php

// input sentence
$str = "All for one and one for all .<br>";    
echo $str;
echo "Length : ". strlen($str) ."<br>";

// Reverse function
echo strrev("All for one and one for all"). "<br> ";
echo "Number of Words: ".str_word_count("All for one and one for all")."<br>";
//Colon separated format
$string = " All:for:one:and:one:for:all".'<br>';
 echo $string;

// Replaced function 
$my_str = 'All for one and one for all'.'<br>';
 // Display replaced string
echo "A and a replaced by : ".str_ireplace("A", "*", $my_str);


//Last letters in lowercase
$my_str = 'All for one and one for all'.'<br>';
echo "Last letters in lowercase: ".strtolower("LREDERL"). "<br> ";

// echo uppercase statement
echo "Uppercase words: ". strtoupper("All for one and one for all"). "<br>";

//echo lowercase statement
echo "Lowercase words: " .strtolower("All for one and one for all"). "<br>";


$str = 'All For One And One For All';
$new_str = str_replace(' ', '', $str);
echo "Uppercase words without spaces:  ". $new_str  . "<br>"; 

//Convert the first character of each word to uppercase:
echo "First letters in uppercase: ".ucwords("hello world") . "<br>";


//First letters in uppercase
$str = 'All For One And One For All';
echo "First letters in uppercase: ".strtoupper("afoaofa");

 ?>
 
 <iframe src="task3.txt" height="400" width="1200">
    Your browser does not support iframes. </iframe>

 </body>




</html>