<!DOCTYPE html>
<html lang="en">

<?php
include_once 'head.php'
?>

<body>
<!--Main-->
<?php
include_once 'nav.php'
?>

<div class="sign-in-section">
    <div class="container">
        <div class="sign-in-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-container">
                            <div class="form-logo">
                                <img src="assets/img/1IGS-logo.png" alt="">
                            </div>

                            <div class="form-wrap">
                                <h2 class="default-heading">Sign In</h2>
                                <h6>Welcome! Please enter your details</h6>
                                <form action="" method="post" id="needs-validation" novalidate>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                                        <div class="invalid-feedback">
                                            please enter a valid email
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password <span>(min 8 characters)</span></label>
                                        <input type="password" id="password" minlength="8" name="password" class="form-control" placeholder="********" required>
                                        <div class="invalid-feedback">
                                            please enter a valid password
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" name="remember" type="checkbox" id="remember">
                                            <label class="form-check-label" for="remember">
                                                Remember Password
                                            </label>
                                        </div>
                                        <div class="forgot-password">
                                            <a href="#" data-toggle="modal" data-target="#forget-pass-modal" class="text-red f-14 fw-500">Forgot password?</a>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn-default">Sign In</button>
                                    </div>
                                </form>

                                <div id="snackbar" class="snackbar" style="margin-left: 5%"></div>

                                <div class="mt-5 text-center">
                                    Don't have an account <a href="sign-up.php" class="text-red fw-600">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 sign-in-img"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Forgot Password Modal -->
<div class="modal fade popup-modal" id="forget-pass-modal" tabindex="-1" role="dialog" aria-labelledby="forget-pass-modal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container">
                    <div class="form-wrap">
                        <h2 class="popup-heading">Forgot Password?</h2>
                        <h6>Enter your email address to reset you password. You will get a verification code.</h6>
                        <form action="" method="post" id="needs-validation" novalidate>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                                <div class="invalid-feedback">
                                    please enter a valid email
                                </div>
                            </div>
                            <div class="mt-3 text-center">
                                <button type="submit" class="btn-default">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include_once 'footer.php';
include_once 'script.php';
?>


</body>
</html>