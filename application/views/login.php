<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('assets/css/include.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css?v=1'); ?>">
    <title>Login</title>
</head>
<body>
<div class="login_container">
    <div class="head">
        <span>Welcome</span>
        <h2>Sign in</h2>
    </div>
    <div class="form">
        <form id="login-form">
            <label for="mail">Email</label>
            <input type="text" name="login" placeholder="tahina@gmail.com" id="mail">

            <label for="pwd">Password</label>
            <input type="password" name="pwd" id="pwd" placeholder="********">

            <div>
                <a href="#">Forgot Password?</a>
            </div>

            <small class="message"></small>
            <input type="submit" value="Sign in" id="btn">
        </form>
    </div>
</div>
<!-- Inclusion de jQuery via CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?=  base_url('assets/js/login/login_controller.js') ?>"></script>
</body>
</html>
