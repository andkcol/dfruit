<?php
  $mode = "local"; // local || live
  
  if($mode == "local"){
    $dbname = "dragonfruit";
    $hostname = "localhost";
    $username = "root";
    $pass = "B@ttlefr0nt2!";

    @$db = new mysqli("$hostname", "$username", "$pass", "$dbname");
      if(mysqli_connect_errno()){
        echo "Connection Issues";
        exit;
      }
  }else{
    $dbname = "dragonfruit";
    $hostname = "localhost";
    $username = "root";
    $pass = "";

    @$db = new mysqli("$hostname", "$username", "$pass", "$dbname");
      if(mysqli_connect_errno()){
        echo "Connection Issues";
        exit;
      }
  }
?>