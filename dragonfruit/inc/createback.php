<?php
  @session_start();
  include 'connect.php';
  $requestType = $_SERVER['REQUEST_METHOD'];
    if($requestType == "POST"){
        $title = $db -> real_escape_string($_POST['title']);
        $desc = $db -> real_escape_string($_POST['desc']);//sanitised input to allow apostrophes
        $loc = $db -> real_escape_string($_POST['loc']);
        $time = $db -> real_escape_string($_POST['time']);
        $date = $db -> real_escape_string($_POST['date']);
        $new_date = date('Y-m-d', strtotime($date)); //this puts the date entered into the YYYY-MM-DD format to match the DB
        $image = $db -> real_escape_string($_POST['image']);

        $eventQuery = "INSERT INTO posts (title, descri, locat, eTime, eDate, imgPath) VALUES ('$title', '$desc', '$loc', '$time', '$new_date', '$image')";
        
        if ($db->query($eventQuery)) {
          $eID = $db->insert_id;
          $_SESSION['eID'] = $eID;
          header ('location: ../index.php');
        } else {
          header ('location: ../error.html'); 
        }
    }else{
      header ('location: ../error.html');
    }
?>
