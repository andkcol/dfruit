<?php
  session_start();
  include 'connect.php';

  $requestType = $_SERVER['REQUEST_METHOD'];
  if($requestType == "POST"){
    $email = $db -> real_escape_string($_POST['email']);
    $pword = $db -> real_escape_string($_POST['pword']);
    $userCheck_query = "SELECT * from $dbname.users where email='$email' and pword='$pword'";

    $userCheck_res = $db->query($userCheck_query);
    $row = mysqli_fetch_row($userCheck_res);
    if($row){
        $_SESSION['uID'] = $row[0];

        header ('location: ../index.php');
    }else{
      header ('location: ../error.html');
    }
  }else{
    header ('location: ../error.html'); 
  }
  
?>