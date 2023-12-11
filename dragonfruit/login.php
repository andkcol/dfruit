<?php
    if(isset($_SESSION['uID'])){
        header ('location: error.html');
    }else{
        @session_start();
        include 'inc/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php';?>
<body id="page-top">
    <!-- Navigation-->
    <?php include 'inc/nav.php';?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Log In</h1>
                    <hr class="divider" />
                </div>
                <form id="loginForm" method="post" action="inc/log.php">
                    <div id="nousername" style="display:none;margin:30px;">
                        <div class="alert alert-danger" role="alert">
                            Please enter a valid email address
                        </div>
                    </div>
                    <div id="badpassword" style="display:none;margin:30px;">
                        <div class="alert alert-danger" role="alert">
                            Please enter a valid password containing at least:
                            <ul>
                                <li>8 characters</li>
                                <li>1 capital letter</li>
                                <li>1 number</li>
                                <li>1 special character</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
                        <label for="email">Email address</label>
                    </div>
                    <!-- Password input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="pword" name="pword" type="password" placeholder="Password" required />
                        <label for="pword">Password</label>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid">
                        <button class="btn btn-primary btn-xl" onclick = "login()" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </header>
    <!-- Footer-->
    <?php include 'inc/foot.php';?>
    <script src="js/register.js"></script>
</body>
</html>
<?php
    }
?>