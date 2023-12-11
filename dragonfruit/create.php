<?php
    if(isset($_SESSION['uID'])){
        @session_start();
        include 'inc/connect.php';
        $imageDirectory = 'assets/img/img';
        $images = glob($imageDirectory . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'user/head.php';?>
    <body id="page-top">
    <!-- Navigation-->
    <?php include 'user/nav.php';?>
    <!-- Masthead-->
    <section class="py-5 bg-secondary">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Please fill in the below information</h1>
                    <hr class="divider" />
                </div>
                <form id="createForm" method="post" action="inc/createback.php">
                    <!-- Title input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="title" name="title" type="text" placeholder="" required />
                        <label for="title">Title</label>
                    </div>
                    <!-- Description input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Description" id="desc" name="desc" maxlength='1000' minlength='10' required></textarea>
                        <label for="desc">Describe your event:</label>
                    </div>
                    <!-- Location input-->
                    <div class="form-floating mb-3">
                        <select class="form-control" name="loc" placeholder="Enter a location" data-sb-validations="required">
                            <option selected>Select a Location:</option>
                            <option value="Carlow">Carlow</option>
                            <option value="Cavan">Cavan</option>
                            <option value="Clare">Clare</option>
                            <option value="Cork">Cork</option>
                            <option value="Donegal">Donegal</option>
                            <option value="Dublin">Dublin</option>
                            <option value="Galway">Galway</option>
                            <option value="Kerry">Kerry</option>
                            <option value="Kildare">Kildare</option>
                            <option value="Kilkenny">Kilkenny</option>
                            <option value="Laois">Laois</option>
                            <option value="Leitrim">Leitrim</option>
                            <option value="Limerick">Limerick</option>
                            <option value="Longford">Longford</option>
                            <option value="Louth">Louth</option>
                            <option value="Mayo">Mayo</option>
                            <option value="Meath">Meath</option>
                            <option value="Monaghan">Monaghan</option>
                            <option value="Offaly">Offaly</option>
                            <option value="Roscommon">Roscommon</option>
                            <option value="Sligo">Sligo</option>
                            <option value="Tipperary">Tipperary</option>
                            <option value="Waterford">Waterford</option>
                            <option value="Westmeath">West Meath</option>
                            <option value="Wexford">Wexford</option>
                            <option value="Wicklow">Wicklow</option>
                          </select>
                        <div class="invalid-feedback" data-sb-feedback="location:required">A location is required.</div>
                    </div>
                    <!-- Time input-->
                    <div class="form-floating mb-3">
                        <select class="form-control" name="time" placeholder="Enter a time" data-sb-validations="required">
                            <option selected>Select a Time:</option>
                            <option value="00:00">00:00</option>
                            <option value="00:30">00:30</option>
                            <option value="01:00">01:00</option>
                            <option value="01:30">01:30</option>
                            <option value="02:00">02:00</option>
                            <option value="02:30">02:30</option>
                            <option value="03:00">03:00</option>
                            <option value="03:30">03:30</option>
                            <option value="04:00">04:00</option>
                            <option value="04:30">04:30</option>
                            <option value="05:00">05:00</option>
                            <option value="05:30">05:30</option>
                            <option value="06:00">06:00</option>
                            <option value="06:30">06:30</option>
                            <option value="07:00">07:00</option>
                            <option value="07:30">07:30</option>
                            <option value="08:00">08:00</option>
                            <option value="08:30">08:30</option>
                            <option value="09:00">09:00</option>
                            <option value="09:30">09:30</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="12:00">12:00</option>
                            <option value="12:30">12:30</option>
                            <option value="13:00">13:00</option>
                            <option value="13:30">13:30</option>
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                            <option value="15:00">15:00</option>
                            <option value="15:30">15:30</option>
                            <option value="16:00">16:00</option>
                            <option value="16:30">16:30</option>
                            <option value="17:00">17:00</option>
                            <option value="17:30">17:30</option>
                            <option value="18:00">18:00</option>
                            <option value="18:30">18:30</option>
                            <option value="19:00">19:00</option>
                            <option value="19:30">19:30</option>
                            <option value="20:00">20:00</option>
                            <option value="20:30">20:30</option>
                            <option value="21:00">21:00</option>
                            <option value="21:30">21:30</option>
                            <option value="22:00">22:00</option>
                            <option value="22:30">22:30</option>
                            <option value="23:00">23:00</option>
                            <option value="23:30">23:30</option>
                          </select>
                        <div class="invalid-feedback" data-sb-feedback="time:required">A time is required.</div>
                    </div>
                    <!-- Date input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="date" name="date" type="date" placeholder="Date" required />
                        <label for="title">Date</label>
                    </div>
                    <!-- Image select -->
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <?php
                            // Display images and radio buttons
                            foreach ($images as $image) {
                                echo '<label>';
                                echo '<img src="' . $image . '" alt="' . basename($image) . '" width="150" height="100"><br>';
                                echo '<input type="radio" name="image" value="' . $image . '">';
                                echo '</label><br><br>';
                            }
                        ?>
                   </div>
                    <!-- Submit Button-->
                    <div class="d-grid">
                        <button class="btn btn-primary btn-xl" onclick = "create()" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <?php include 'user/foot.php';?>
    <script src="../js/create.js"></script>
    </body>
</html>
<?php
    }else{
        header ('location: error.html'); 
    }
?>