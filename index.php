<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="veiwport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="form-box" id="login-form">
            <form action="login_com.php" method="post">
                <h1>Login</h1>
                <div class="input-box">
                <input name="log_id" type="text" placeholder="Enter your ID" required>
                <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                <input name="log_pass" type="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt' ></i>
                </div>
                <div class="forget-link">
                <a class='register-btn' href="#" name="register">Register ID?</a>
                </div>
                <button id="btn_succi"  name="login_btn" type="submit" class="btn">Login</button>
            </form>
        </div>
        
         
        <div class="form-box register" id="register-form">
            <form action="login_com.php" method="post">
                <h1>Registration ID</h1>
                <div class="input-box">
                <input name="email" type="email" placeholder="Email address" required>
                <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                <input name="reg_id" type="text" placeholder="Enter your ID" required>
                <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                <input name="reg_pass" type="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt' ></i>
                </div>
                <div class="forget-link">
                <a class="login-btn" href="#" name="login">Already have registered ID?</a>
                </div>
                <button name="register_btn" class="btn2">Send</button>
            </form>
        </div>
        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <img src="logo.png" alt="logo">
            </div>
            <div class="toggle-panel toggle-right">
                <img src="logo.png" alt="logo">
            </div>
    </div>
    </div>

    <script src="jscript.js"></script>

</body>
</html>