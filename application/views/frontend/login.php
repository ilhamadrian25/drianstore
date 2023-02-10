<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TeamHost - Join now and play mighty games!</title>
    <meta content="Templines" name="author">
    <meta content="TeamHost" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/libs.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="page-login">

    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->

    <div class="page-wrapper">
        <main class="page-first-screen">
            <div class="uk-grid uk-grid-small uk-child-width-1-2@s uk-flex-middle uk-width-1-1" data-uk-grid>
                <div class="logo-big">
                    <img src="assets/img/facebook.jpg" alt="logo">
                    <span>TeamHost</span>
                    <h1>Bergabung untuk mendapatkan fitur yang lebih banyak!</h1>
                </div>
                <div>
                    <div class="form-login">
                        <!-- <div class="form-login__social">
                            <ul class="social">
                                <li><a href="http://www.google.com"><img src="assets/img/google.svg" alt="google"></a></li>
                                <li><a href="http://www.facebook.com"><img src="assets/img/facebook.jp" alt="facebook"></a></li>
                                <li><a href="http://www.twitter.com"><img src="assets/img/twitter.svg" alt="twitter"></a></li>
                            </ul>
                        </div> -->
                        <div class="form-login__box">
                            <div class="uk-heading-line uk-text-center"><span>atau menggunakan Email</span></div>
                            <form action="#!">
                                <div class="uk-margin"><input class="uk-input" type="text" placeholder="Username"></div>
                                <div class="uk-margin"><input class="uk-input" type="password" placeholder="Password"></div>
                                <div class="uk-margin"><a class="uk-button uk-button-danger uk-width-1-1" href="03_home.html">Log In</a></div>
                                <div class="uk-margin uk-text-center"><a href="<?= base_url('forget-password') ?>">Lupa password?</a></div>
                                <hr>
                                <div class="uk-text-center"><span>Belum punya akun?</span><a class="uk-margin-small-left" href="<?= base_url('register') ?>">Register</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="assets/js/libs.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>