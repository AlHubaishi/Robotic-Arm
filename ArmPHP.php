<?php


  $servern = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'motors_db.sql';
  $port = "1234";

  
  $Con = new mysqli($servern, $user, $pass, $db );

 // Connection check
 
  if ($Con->connect_error) {
   die("Connection failed: " . $Con->connect_error);
}
  echo "Connected successfully";
   echo "<br>";
	echo "<br>";
  

$M1 = $_POST['Motor1'];
$M2 = $_POST['Motor2'];
$M3 = $_POST['Motor3'];
$M4 = $_POST['Motor4'];
$M5 = $_POST['Motor5'];
$M6 = $_POST['Motor6'];
$Status_E = $_POST['Status_E'];

if(isset($_POST['Save'])){


    $MQR = "";

    $MQR = "SELECT * FROM motor_v WHERE 1 ";
    $R = mysqli_query($Con, $MQR);

    $MQR = "INSERT INTO motor_v (M1, M2, M3, M4, M5, M6,Status_E ) VALUES ('$M1', '$M2', '$M3', '$M4', '$M5', '$M6','$Status_E')";
    $R = mysqli_query($Con, $MQR);
    if($R)
    {
        echo "Values added successfuly";
    }
    else{
        echo "Values not added!  <br>";
    }

}





	
	
	




?>