<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login_style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>C-Share</title>
</head>

<body>
    <div class="contain">
        <div class="forms-container">
            <div class="signin">
                <form action="http://localhost/C-Share-Site/backend_file/driver_login_connection.php" method="post" class="sign-in-form">
                    <h1 class="top-title">Get in the driver’s seat and get paid..</h1>
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="Email" placeholder="Email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Pasword" placeholder="Password" required />
                    </div>
                    <div>
                        <p class="term-policy">By proceeding, I agree to Uber's <a href="#">Terms of Use</a> and acknowledge that I
                            have read the <a href="#">Privacy Policy</a>.</p>
                    </div>
                    <input type="submit" value="Login" class="btn1 solid" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Registration The best Car Sharing site to get best experiance.
                    </p>
                    <a class="btn-link" href="http://localhost/C-Share-Site/driver/driver_signup.php"><button class="btn1 transparent" id="sign-up-btn">
                            Sign up
                        </button></a>
                </div>
                <img src="img/bg.jpg" class="image" alt="" />
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>