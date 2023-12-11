<?php
    if(isset($_SESSION['uID'])){
        @session_start();
        include 'inc/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'user/head.php';?>
    <body>
        <!-- Navigation-->
        <?php include 'user/nav.php';?>
        <!-- Product section-->
        <?php
            $sql = "SELECT * FROM posts WHERE eID = 25"; //needs to be changed to fit a template rather than one event
            $result = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $title = $row['title'];
                $desc = $row['descri'];
                $locat = $row['locat'];
                $time = $row['eTime'];
                $date = $row['eDate'];
                $image = $row['imgPath'];
                $eID = $row['eID'];
            }
        ?>
        <section class="py-5 bg-secondary">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <?php echo '<div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="'.$image.'" alt="..." /></div>' ?>
                    <div class="col-md-6">
                        <?php
                            echo '<h1 class="display-5 fw-bolder">'.$title.'</h1>';
                        ?>
                        <div class="fs-5 mb-5">
                            <?php
                            echo '<span>Location: '.$locat.'</span></br>';
                            echo '<span>Time: '.$time.'</span></br>';
                            echo '<span>Date: '.date("d/m/Y", strtotime($date)).'</span>';
                            ?>
                        </div>
                        <?php
                            echo '<p class="lead">'.$desc.'</p>';
                        ?>
                        <div class="d-flex">
                            <button class="btn btn-outline-dark flex-shrink-0" onclick="attend()" type="button">Attend</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-primary">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Other Events</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Event Title</h5>
                                    <!-- Product price-->
                                    Location
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View Event</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Event Title</h5>
                                    <!-- Product price-->
                                    Time
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View Event</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Event Title</h5>
                                    <!-- Product price-->
                                    Date
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View Event</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Event Title</h5>
                                    <!-- Product price-->
                                    Location
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View Event</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <?php include 'user/foot.php';?>
        <script src="js/attend.js"></script>      
    </body>
</html>
<?php
    }else{
        header ('location: error.html'); 
    }
?>