<?php
  include 'connect.php';
  $requestType = $_SERVER['REQUEST_METHOD'];
    if($requestType == "POST"){
      $eID = $db -> real_escape_string($_POST['eID']);
      $uID = $db -> real_escape_string($_POST['uID']);
      $userCheck_query = "SELECT * from $dbname.users where eID='$eID' and uID='$uID'";
      $userCheck_res = $db->query($userCheck_query);
      $row = mysqli_fetch_row($userCheck_res);
      if($row){
        header ('location: ../error.html'); // anything that we print goes back to the success function from the ajax call and is stored in the data variable....
      }else{
          $userCheck_query = "INSERT INTO attending (eID, uID) VALUES ('$eID', '$uID)";
          $db->query($userCheck_query);
          
          if ($db) {
            //$_SESSION['uID'] = mysqli_insert_id($db);
            header ('location: ../index.php');
          } else {
            header ('location: ../error.html'); 
          }
      }
    }else{
      header ('location: ../error.html'); 
    }
?>
