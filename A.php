<?php

$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "userdatabase";
$tablename = "adminInfo";
  
$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
  die("Connection Failed :" . $conn->connect_error);
}


session_start();

$aname = mysqli_real_escape_string($conn, $_REQUEST['aname']);
$pass = mysqli_real_escape_string($conn, $_REQUEST['pass']);

$_SESSION['login_user']=$aname; 
$_SESSION['aname'] = $_SESSION['login_user'];


$check  = "select * from $tablename where UserName='$aname' and Pass = '$pass'";
$result = $conn->query($check);

  if ($result->num_rows <= 0) {
  echo "Record Does Not Exist";
    }

  else if($result->num_rows > 0){ 
  successMsg(); 
  echo " ";

  }

  else{
  echo "Error: " .$sql."<br>".$conn->connect_error;
  }

  $conn->close();


  function successMsg() {
   echo"<script>    alert('Login Successfull!!');
       window.location.href='adminhome.php'</script> ";
  }
?>
