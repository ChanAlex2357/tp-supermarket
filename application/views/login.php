<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('assets/css/include.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>">
    <title>Login</title>
</head>
<body>
<div class="login_container">
    <div class="head">
        <span>Welcome</span>
        <h2>Sign in</h2>
    </div>
    <div class="form">
        <form action="" method="post">
            <label for="mail">Email</label>
            <input type="text" name="" placeholder="tahina@gmail.com" id="mail">
            <small>Mail incorrect</small>

            <label for="pwd">Password</label>
            <input type="password" name="" id="pwd" placeholder="********">
            <small>Mot de passe incorrect</small>

            <div>
                <a href="#">Forgot Password?</a>
            </div>
            <input type="button" value="Sign in" id="btn">
        </form>
    </div>
</div>
</body>
</html>
