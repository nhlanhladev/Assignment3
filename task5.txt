<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task5</title>
    <?php
     include 'menu.inc';
     include 'connection.php';
    ?>
    
</head>
<body>
<div>
<center style ="width:100%">
<table border="1px" >
  <tr>
    <th>Practice Number</th>
    <th>Name</th> 
    <th>Specialty</th>
    <th>Fee</th>
  </tr>
<form method="POST">
<label for="doctorsInfo">Choose From A List:</label>
 <select name ="doctorsDetails" id ="doctorsInfo">
     <optgroup abel='Select Your Option'>
       <option value="add">Add</option>
       <option value="update">Update</option>
       <option value="delete">Delete</option>
    </optgroup>
 </select>
 <br>
 <br>
 <input type="text" id="practice_number" name="practiceNumber" placeholder="enter practice number"><br>
 <input type="text" id="name" name="name" placeholder="Enter Your Name here"><br>
 <input type="text" id="specialty" name="specialty" placeholder="Enter Your Specialty"><br>
 <input type="text" id="fee" name="fee" placeholder="Enter Your Consultation Fee"><br>
  <br>
  <button type="submit" name="submit">Submit</button>
</form>
</center>
</div>

<?php

// display data from database in a table form 
$query = " SELECT * FROM `doctors`";
$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($result))
{
?>
 <tr>
    <td><?php echo $row['practice_number'] ?></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['specialty'] ?></td>
    <td><?php echo $row['fee'] ?></td>
  </tr>
<?php
 }
?>

<?php
  // adds data to database and display it in a table form
 $dcDetails = $_POST['doctorsDetails'];
  if(isset($_POST['submit']))
  {
   if($dcDetails == 'add')
   {
      $practiceNumber = $_POST['practiceNumber'];
      $name = $_POST['name'];
      $specialty = $_POST['specialty'];
      $fee = $_POST['fee'];
    
         $query = "INSERT INTO `doctors`(practice_number,name,specialty,fee) 
         VALUES('$practiceNumber','$name','$specialty','$fee')";

         $run = mysqli_query($connection,$query) or die(mysqli_error());

         if ($run){
           echo "inserted successfully to database";
         }
         else {
           echo "Not inserted successfully to database";
         }
         mysqli_close($connection);
   }

 // update data from a form to database and display the data is updated in a table form
if( $dcDetails == 'update')
 {
 $practiceNumber = $_POST['practiceNumber'];
 $name = $_POST['name'];
 $specialty = $_POST['specialty'];
 $fee = $_POST['fee'];

  $query = "UPDATE `doctors` 
  SET practice_number = '$practiceNumber',name = '$name', specialty = '$specialty',fee = '$fee' WHERE practice_number = '$practiceNumber'";
  
    $run = mysqli_query($connection,$query) or die(mysqli_error());

  if($run)
  {
   echo "Updated Successfully";
  }
  else{
    echo "Updated Not Successfully";
  }
  mysqli_close($connection);
}
elseif($dcDetails == 'delete')
{

$practiceNumber = $_POST['practiceNumber'];

// delete data from the table and database
 $sql = "DELETE FROM `doctors` WHERE practice_number = '$practiceNumber'";
 if (mysqli_query($connection,$sql)) {
     echo "Record deleted successfully";
 } else {
     echo "Error deleting record: " . mysqli_error($connection);
 }
 mysqli_close($connection);
   }
}



?>



</body>
</html>