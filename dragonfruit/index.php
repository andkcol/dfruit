<?php
    @session_start();
    // we will check if we have an active session. This is defined
    // as a session that is currently working and has the userID
    //stored in it.
    if(isset($_SESSION['uID'])){
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'user/head.php';?>
    <body id="page-top">
        <!-- Navigation-->
        <?php include 'user/nav.php';?>      
        <!-- Masthead-->
        <?php include 'user/mast.php';?>
        <!-- About-->
        <?php include 'user/about.php';?>
        <!-- Services-->
        <?php include 'user/service.php';?>
        <!-- Footer-->
        <?php include 'user/foot.php';?>
    </body>
</html>
<?php
    }else{
        ?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'inc/head.php';?>
    <body id="page-top">
        <!-- Navigation-->
        <?php include 'inc/nav.php';?>
        <!-- Masthead-->
        <?php include 'inc/mast.php';?>
        <!-- About-->
        <?php include 'inc/about.php';?>
        <!-- Services-->
        <?php include 'inc/service.php';?>
        <!-- Footer-->
        <?php include 'inc/foot.php';?>
    </body>
</html>
<?php
    }
?>

