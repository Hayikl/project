<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "connnectgame";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$a=$_POST['f'];
$name=$_POST['username'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$pass=$_POST['password'];
$pass1=$_POST['passwordcon'];
$gender=$_POST['gender'];
$hashed=md5($pass);
if($pass!=$pass1){

  echo "passwords does not match !!!!!!!";


}else{
  
$sql = "INSERT INTO user 
VALUES (null,'$a','$name','$email','$phonenumber','$hashed','$gender',null)";

if ($conn->query($sql) === TRUE) {
  header("Location: Welcome.php?name=".$name);
  exit;
  header("Refresh: 3; url: register.html");
  //header('Refresh: 10; URL=http://yoursite.com/page.php');

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
$conn->close();

?>