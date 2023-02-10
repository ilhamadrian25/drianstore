<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register - <?= $title ?></title>
    <meta content="Templines" name="author">
    <meta content="TeamHost" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/libs.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="page-login">

    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->


    <div class="page-wrapper">
        <main class="page-first-screen">
            <div class="uk-grid uk-grid-small uk-child-width-1-2@s uk-flex-middle uk-width-1-1" data-uk-grid>
                <div class="logo-big">
                    <img src="assets/img/logo-big.png" alt="logo">
                    <span><?= $title ?></span>
                    <h1>Bergabung untuk mendapatkan fitur yang lebih banyak!</h1>
                </div>
                <div>
                    <div class="form-login">
                        <div class="form-login__social">
                            <ul class="social">
                                <li><a href="http://www.google.com"><img src="assets/img/google.svg" alt="google"></a></li>
                                <li><a href="http://www.facebook.com"><img src="assets/img/facebook.svg" alt="facebook"></a></li>
                                <li><a href="http://www.twitter.com"><img src="assets/img/twitter.svg" alt="twitter"></a></li>
                            </ul>
                        </div>
                        <div class="form-login__box">
                            <div class="uk-heading-line uk-text-center"><span>Atau menggunakan Email</span></div>
                            <form action="<?= base_url('register') ?>" method="POST">
                            
                            <?php  if(form_error('name')) :
                            ?>

                            <div class="alert alert-danger" role="alert">
                                <strong>Error!</strong> <?php form_error('name'); ?>
                            </div>
                            <?php endif; ?>
                                <div class="uk-margin"><input class="uk-input" name="name" id="name" type="text" placeholder="Nama Lengkap"></div>
                                <?php  if(form_error('name')) :
                            ?>

                            <div class="alert alert-danger" role="alert">
                                <strong>Error!</strong> <?php form_error('email'); ?>
                            </div>
                            <?php endif; ?>
                                <div class="uk-margin"><input class="uk-input" name="email" id="email" type="email" placeholder="Email"></div>
                            
                                <?php if(form_error('name')) :?>

                            <div class="alert alert-danger" role="alert">
                                <strong>Error!</strong> <?php form_error('name'); ?>
                            </div>

                            <?php endif; ?>
                                <div class="uk-margin"><input class="uk-input" type="text" placeholder="Username"></div>
                                <?php  if(form_error('name')) :
                            ?>

                            <div class="alert alert-danger" role="alert">
                                <strong>Error!</strong> <?php form_error('name'); ?>
                            </div>

                            <?php endif; ?>
                                <div class="uk-margin"><input class="uk-input" type="password" placeholder="Password"></div>
                                <?php  if(form_error('name')) :
                            ?>

                            <div class="alert alert-danger" role="alert">
                                <strong>Error!</strong> <?php form_error('name'); ?>
                            </div>

                            <?php endif; ?>
                                <div class="uk-margin"><input class="uk-input" type="confPassword" placeholder="Konfirmasi Password"></div>
                                <div class="uk-margin"><button class="uk-button uk-button-danger uk-width-1-1" type="button">Register</button></div>
                                <div class="uk-text-center"><span>Sudah punya akun?</span><a class="uk-margin-small-left" href="<?= base_url('login') ?>">Log In</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="<?= base_url() ?>assets/js/libs.js"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</body>

</html>