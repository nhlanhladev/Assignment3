<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task4</title>
</head>
<body>
<?php include 'menu.inc'; 
include 'connection.php';
?>
 <br>
<center>

  <h2>Doctors List</h2>

<div class="container">
<form action="" method= "POST">

        <table border= "1px" style = "width:100%">
        <tr>
        <th>Practice Number</th>
         <th>Name</th>
         <th>Specialty</th>
         <th>Fee</th>
        </tr>
        <label for="doctors">Select Results You Want:</label>
<br>
<select name = "doctors">
  <optgroup label="Select Doctors Type">
    <option>ViewAllDoctors</option>
    <option>DoctorsSelected</option>
  </optgroup>
</select>
<br>
<br>
<input type="text" name ="fee" placeholder="Enter Consultation Fee">
 <br>
<input type="submit" name ="submit"><br>

 </form>
<br>
<?php

         $doctor = $_POST['doctors'];

        if(isset($_POST['submit']))
        {
          if($doctor == 'ViewAllDoctors')
          {
           $query = "SELECT * FROM `doctors`";
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
          } elseif($doctor =='DoctorsSelected')
           {
            $fees =$_POST['fee'];

            $query = "SELECT * FROM `doctors` WHERE fee < '$fees' ";
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
          }              
      }
    ?>

     </div>
</center>
</body>
</html>