<?php


$mysqli = new mysqli("localhost:3308","root", "","test");

if ($mysqli -> connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
echo "Connection Successfully";
$first_name =  $_POST['fname'];
$last_name = $_POST['lname'];
$email =  $_POST['Email'];
$mobile = $_POST['Mobile'];
$Date = $_POST['date'];
$Time = $_POST['time'];
 
// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO  appointment VALUES ('$first_name','$last_name','$email','$mobile','$Date','$Time')";
 
if(mysqli_query($mysqli, $sql)){
    echo "<h3>data stored in a database successfully." . " Please browse your localhost php my admin" . " to view the updated data</h3>";

    echo nl2br("\n$first_name\n $last_name\n $email\n $mobile \n $Date \n$Time");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($mysqli);
}
 
// Close connection
mysqli_close($mysqli);
?>