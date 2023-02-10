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
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/libs.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">

</head>

<body class="page-home">

    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->

    <div class="page-wrapper">
        <header class="page-header">
            <div class="page-header__inner">
                <div class="page-header__sidebar">
                    <div class="page-header__menu-btn"><button class="menu-btn ico_menu is-active"></button></div>
                    <div class="page-header__logo"><img src="assets/img/logo.png" alt="logo"><span class="page-header__logo_text">DrianSTORE</span></div>
                </div>
                <div class="page-header__content">
                    <div class="page-header__search">
                        <div class="search">
                            <div class="search__input"><i class="ico_search"></i><input type="search" name="search" placeholder="Search"></div>
                            <div class="search__btn"><button type="button"><i class="ico_microphone"></i></button></div>
                        </div>
                    </div>
                    <div class="page-header__pulsa"><a class="pulsa-btn" href="#!"><i class="ico_message"></i><span></span></a><a class="pulsa-btn" href="#!"><i class="ico_notification"></i><span></span></a><a class="profile" href="#!"><img src="assets/img/profile.png" alt="profile"></a></div>
                </div>
            </div>
        </header>
        <div class="page-content">
            <aside class="sidebar is-show" id="sidebar">
                <div class="sidebar-box">
                    <ul class="uk-nav">
                        <li class="uk-active"><a href="03_home.html"><i class="ico_home"></i><span>Beranda</span></a></li>
                        <li class="uk-nav-header">Account</li>
                        <li><a href="04_profile.html"><i class="ico_profile"></i><span>Profile</span></a></li>
                        <li class="uk-nav-header">Support</li>
                        <li><a href="#modal-report" data-uk-toggle><i class="ico_report"></i><span>Report</span></a></li>
                        <li><a href="#modal-help" data-uk-toggle><i class="ico_help"></i><span>Help</span></a></li>
                    </ul>
                </div>
            </aside>
            <main class="page-main">
                <div class="uk-grid" data-uk-grid>
                    <div class="uk-width-2-3@xl">
                        <h3 class="uk-text-lead">Recommended & Featured</h3>
                        <div class="js-recommend">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="recommend-slide">
                                            <div class="recommend-slide__box">
                                                <div class="recommend-slide__info">
                                                    <div class="recommend-slide__logo"><img src="assets/img/recommend-slide-logo.png" alt="logo"></div>
                                                    <div class="recommend-slide__intro"><span>Ghostrunner offers a unique single-player experience: fast-paced and violent combat.</span></div>
                                                    <div class="recommend-slide__rating-and-price">
                                                        <div class="recommend-slide__rating"><span>4.3</span><i class="ico_star"></i></div>
                                                        <div class="recommend-slide__price"><span>$14 </span></div>
                                                    </div>
                                                    <div class="recommend-slide__btn"><button class="uk-button uk-button-danger" type="button">Play Now</button></div>
                                                    <div class="recommend-slide__platform">
                                                        <i class="ico_windows"></i>
                                                        <i class="ico_apple"></i>
                                                    </div>
                                                </div>
                                                <div class="recommend-slide__img"><img src="assets/img/recommend-slide-img.png" alt="image"></div>
                                                <div class="recommend-slide__favorites"><i class="ico_favourites"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="recommend-slide">
                                            <div class="recommend-slide__box">
                                                <div class="recommend-slide__info">
                                                    <div class="recommend-slide__logo"><img src="assets/img/recommend-slide-logo.png" alt="logo"></div>
                                                    <div class="recommend-slide__intro"><span>Ghostrunner offers a unique single-player experience: fast-paced and violent combat.</span></div>
                                                    <div class="recommend-slide__rating-and-price">
                                                        <div class="recommend-slide__rating"><span>4.3</span><i class="ico_star"></i></div>
                                                        <div class="recommend-slide__price"><span>$14 </span></div>
                                                    </div>
                                                    <div class="recommend-slide__btn"><button class="uk-button uk-button-danger" type="button">Play Now</button></div>
                                                    <div class="recommend-slide__platform">
                                                        <i class="ico_windows"></i>
                                                        <i class="ico_apple"></i>
                                                    </div>
                                                </div>
                                                <div class="recommend-slide__img"><img src="assets/img/recommend-slide-img.png" alt="image"></div>
                                                <div class="recommend-slide__favorites"><i class="ico_favourites"></i></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="recommend-slide">
                                            <div class="recommend-slide__box">
                                                <div class="recommend-slide__info">
                                                    <div class="recommend-slide__logo"><img src="assets/img/recommend-slide-logo.png" alt="logo"></div>
                                                    <div class="recommend-slide__intro"><span>Ghostrunner offers a unique single-player experience: fast-paced and violent combat.</span></div>
                                                    <div class="recommend-slide__rating-and-price">
                                                        <div class="recommend-slide__rating"><span>4.3</span><i class="ico_star"></i></div>
                                                        <div class="recommend-slide__price"><span>$14 </span></div>
                                                    </div>
                                                    <div class="recommend-slide__btn"><button class="uk-button uk-button-danger" type="button">Play Now</button></div>
                                                    <div class="recommend-slide__platform">
                                                        <i class="ico_windows"></i>
                                                        <i class="ico_apple"></i>
                                                    </div>
                                                </div>
                                                <div class="recommend-slide__img"><img src="assets/img/recommend-slide-img.png" alt="image"></div>
                                                <div class="recommend-slide__favorites"><i class="ico_favourites"></i></div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <div class="swipper-nav">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <h3 class="uk-text-lead">Paling Populer</h3>
                        <div class="js-popular">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="game-card">
                                            <div class="game-card__box">
                                                <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/mobile_legends.png" alt="Hell is other demons" /></a></div>
                                                <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html">Mobile Legends</a>
                                                    <div class="game-card__rating-and-price">
                                                        <div class="game-card__price"><span>RP. 1.000</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="game-card">
                                            <div class="game-card__box">
                                                <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/free_fire.png" alt="Curse of the Dead Gods" /></a></div>
                                                <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html"> Free Fire</a>
                                                    <div class="game-card__rating-and-price">
                                                        <div class="game-card__price"><span>RP. 1.000</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="game-card">
                                            <div class="game-card__box">
                                                <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/game-3.jpg" alt="Frostpunk" /></a></div>
                                                <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html"> Frostpunk</a>
                                                    <div class="game-card__rating-and-price">
                                                        <div class="game-card__price"><span>RP. 1.000</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="game-card">
                                            <div class="game-card__box">
                                                <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/super_sus.png" alt="A Total War Saga: TROY" /></a></div>
                                                <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html"> A Total War Saga: TROY</a>
                                                    <div class="game-card__rating-and-price">
                                                        <div class="game-card__price"><span>RP 1.000,00 </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div data-uk-filter="target: .js-filter">
                        <ul class="uk-subnav uk-subnav-pill">
                            <li class="uk-active" data-uk-filter-control><a href="#">Semua</a></li>
                            <li data-uk-filter-control="[data-type='game']"><a href="#">Game</a></li>
                            <li data-uk-filter-control="[data-type='pulsa']"><a href="#">Pulsa</a></li>
                            <li data-uk-filter-control="[data-type='emoney']"><a href="#">Emoney</a></li>
                            <li data-uk-filter-control="[data-type='sosial']"><a href="#">Social</a></li>
                            <li data-uk-filter-control="[data-type='premium']"><a href="#">Premium</a></li>
                            <li data-uk-filter-control="[data-type='joki']"><a href="#">Jasa joki</a></li>
                        </ul>
                        <ul class="js-filter uk-grid-small uk-child-width-1-1 uk-child-width-1-5@xl uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                            <li data-type="game">
                                <div class="game-card">
                                    <div class="game-card__box">
                                        <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/mobile_legends.png" alt="Hell is other demons" /></a></div>
                                        <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html">Mobile Legends</a>
                                            <div class="game-card__rating-and-price">
                                                <div class="game-card__price"><span>RP. 1.000</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li data-type="pulsa">
                                <div class="game-card">
                                    <div class="game-card__box">
                                        <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/mobile_legends.png" alt="Hell is other demons" /></a></div>
                                        <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html">Mobile Legends</a>
                                            <div class="game-card__rating-and-price">
                                                <div class="game-card__price"><span>RP. 1.000</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="game">
                                <div class="game-card">
                                    <div class="game-card__box">
                                        <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/mobile_legends.png" alt="Hell is other demons" /></a></div>
                                        <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html">Mobile Legends</a>
                                            <div class="game-card__rating-and-price">
                                                <div class="game-card__price"><span>RP. 13.000</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="emoney">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Natural Instincts"><img src="assets/img/streem-item-3.jpg" alt="Natural Instincts" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">2.2k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Natural Instincts</div>
                                            <div class="stream-item__nicname">Clutchy</div>
                                            <div class="stream-item__time">5 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="sosial">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Tera"><img src="assets/img/streem-item-4.jpg" alt="Tera" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">26k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Tera</div>
                                            <div class="stream-item__nicname">Gameforge</div>
                                            <div class="stream-item__time">6 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="premium">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Rustler"><img src="assets/img/streem-item-5.jpg" alt="Rustler" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">5k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Rustler</div>
                                            <div class="stream-item__nicname">B0gey</div>
                                            <div class="stream-item__time">10 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="joki">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Railway Empire"><img src="assets/img/streem-item-6.jpg" alt="Railway Empire" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">8k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Railway Empire</div>
                                            <div class="stream-item__nicname">KalypsoBroadcast</div>
                                            <div class="stream-item__time">4 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="anime">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="NosTale"><img src="assets/img/streem-item-7.jpg" alt="NosTale" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">500</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">NosTale</div>
                                            <div class="stream-item__nicname">Gameforge</div>
                                            <div class="stream-item__time">1 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="hunting">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Strategic Mind: Fight for F..."><img src="assets/img/streem-item-8.jpg" alt="Strategic Mind: Fight for F..." /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">6k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Strategic Mind: Fight for F...</div>
                                            <div class="stream-item__nicname">KateMels</div>
                                            <div class="stream-item__time">2 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="racing">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Ultimate Admiral: Age of..."><img src="assets/img/streem-item-9.jpg" alt="Ultimate Admiral: Age of..." /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">12k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Ultimate Admiral: Age of...</div>
                                            <div class="stream-item__nicname">sterner</div>
                                            <div class="stream-item__time">7 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="team_sports">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Sky Fleet"><img src="assets/img/streem-item-10.jpg" alt="Sky Fleet" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">4.6k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Sky Fleet</div>
                                            <div class="stream-item__nicname">SkyFleetOfficial </div>
                                            <div class="stream-item__time">8 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="sosial">
                                <div class="game-card">
                                    <div class="game-card__box">
                                        <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/mobile_legends.png" alt="Hell is other demons" /></a></div>
                                        <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html">Mobile Legends</a>
                                            <div class="game-card__rating-and-price">
                                                <div class="game-card__price"><span>RP. 1.000</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="premium">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="The Riftbreaker"><img src="assets/img/streem-item-12.jpg" alt="The Riftbreaker" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">11K</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">The Riftbreaker</div>
                                            <div class="stream-item__nicname">EXOR Broadcast 2</div>
                                            <div class="stream-item__time">7 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="anime">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="NosTale"><img src="assets/img/streem-item-5.jpg" alt="NosTale" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">500</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">NosTale</div>
                                            <div class="stream-item__nicname">Gameforge</div>
                                            <div class="stream-item__time">1 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="hunting">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Strategic Mind: Fight for F..."><img src="assets/img/streem-item-9.jpg" alt="Strategic Mind: Fight for F..." /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">6k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Strategic Mind: Fight for F...</div>
                                            <div class="stream-item__nicname">KateMels</div>
                                            <div class="stream-item__time">2 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="racing">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Ultimate Admiral: Age of..."><img src="assets/img/streem-item-6.jpg" alt="Ultimate Admiral: Age of..." /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">12k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Ultimate Admiral: Age of...</div>
                                            <div class="stream-item__nicname">sterner</div>
                                            <div class="stream-item__time">7 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="team_sports">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Sky Fleet"><img src="assets/img/streem-item-10.jpg" alt="Sky Fleet" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">4.6k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Sky Fleet</div>
                                            <div class="stream-item__nicname">SkyFleetOfficial </div>
                                            <div class="stream-item__time">8 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="sosial">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="AK-xolotl"><img src="assets/img/streem-item-11.jpg" alt="AK-xolotl" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">2.8k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">AK-xolotl</div>
                                            <div class="stream-item__nicname">Vaalaras</div>
                                            <div class="stream-item__time">30 minutes ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="premium">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="The Riftbreaker"><img src="assets/img/streem-item-12.jpg" alt="The Riftbreaker" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">11K</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">The Riftbreaker</div>
                                            <div class="stream-item__nicname">EXOR Broadcast 2</div>
                                            <div class="stream-item__time">7 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="game">
                                <div class="game-card">
                                    <div class="game-card__box">
                                        <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/free_fire.png" alt="Hell is other demons" /></a></div>
                                        <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html">Free Fire</a>
                                            <div class="game-card__rating-and-price">
                                                <div class="game-card__price"><span>RP. 1.000</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="pulsa">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Grand Theft Auto V"><img src="assets/img/streem-item-2.jpg" alt="Grand Theft Auto V" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">4k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Grand Theft Auto V</div>
                                            <div class="stream-item__nicname">Savoury</div>
                                            <div class="stream-item__time">2 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="emoney">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Natural Instincts"><img src="assets/img/streem-item-3.jpg" alt="Natural Instincts" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">2.2k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Natural Instincts</div>
                                            <div class="stream-item__nicname">Clutchy</div>
                                            <div class="stream-item__time">5 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="pulsa">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Tera"><img src="assets/img/streem-item-4.jpg" alt="Tera" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">26k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Tera</div>
                                            <div class="stream-item__nicname">Gameforge</div>
                                            <div class="stream-item__time">6 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="premium">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Rustler"><img src="assets/img/streem-item-5.jpg" alt="Rustler" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">5k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Rustler</div>
                                            <div class="stream-item__nicname">B0gey</div>
                                            <div class="stream-item__time">10 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="joki">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Railway Empire"><img src="assets/img/streem-item-6.jpg" alt="Railway Empire" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">8k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Railway Empire</div>
                                            <div class="stream-item__nicname">KalypsoBroadcast</div>
                                            <div class="stream-item__time">4 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="game">
                                <div class="game-card">
                                    <div class="game-card__box">
                                        <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/super_sus.png" alt="Hell is other demons" /></a></div>
                                        <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html">Super Sus</a>
                                            <div class="game-card__rating-and-price">
                                                <div class="game-card__price"><span>RP. 1.000</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="anime">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="NosTale"><img src="assets/img/streem-item-7.jpg" alt="NosTale" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">500</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">NosTale</div>
                                            <div class="stream-item__nicname">Gameforge</div>
                                            <div class="stream-item__time">1 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="hunting">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Strategic Mind: Fight for F..."><img src="assets/img/streem-item-8.jpg" alt="Strategic Mind: Fight for F..." /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">6k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Strategic Mind: Fight for F...</div>
                                            <div class="stream-item__nicname">KateMels</div>
                                            <div class="stream-item__time">2 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="racing">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Ultimate Admiral: Age of..."><img src="assets/img/streem-item-9.jpg" alt="Ultimate Admiral: Age of..." /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">12k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Ultimate Admiral: Age of...</div>
                                            <div class="stream-item__nicname">sterner</div>
                                            <div class="stream-item__time">7 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="sosial">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Tera"><img src="assets/img/streem-item-11.jpg" alt="Tera" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">26k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Tera</div>
                                            <div class="stream-item__nicname">Gameforge</div>
                                            <div class="stream-item__time">6 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="premium">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Rustler"><img src="assets/img/streem-item-10.jpg" alt="Rustler" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">5k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Rustler</div>
                                            <div class="stream-item__nicname">B0gey</div>
                                            <div class="stream-item__time">10 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="joki">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Railway Empire"><img src="assets/img/streem-item-1.jpg" alt="Railway Empire" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">8k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Railway Empire</div>
                                            <div class="stream-item__nicname">KalypsoBroadcast</div>
                                            <div class="stream-item__time">4 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="team_sports">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Sky Fleet"><img src="assets/img/streem-item-3.jpg" alt="Sky Fleet" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">4.6k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Sky Fleet</div>
                                            <div class="stream-item__nicname">SkyFleetOfficial </div>
                                            <div class="stream-item__time">8 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="sosial">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="AK-xolotl"><img src="assets/img/streem-item-9.jpg" alt="AK-xolotl" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">2.8k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">AK-xolotl</div>
                                            <div class="stream-item__nicname">Vaalaras</div>
                                            <div class="stream-item__time">30 minutes ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="premium">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="The Riftbreaker"><img src="assets/img/streem-item-5.jpg" alt="The Riftbreaker" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">11K</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">The Riftbreaker</div>
                                            <div class="stream-item__nicname">EXOR Broadcast 2</div>
                                            <div class="stream-item__time">7 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-type="pulsa">
                                <div class="stream-item">
                                    <div class="stream-item__box">
                                        <div class="stream-item__media" data-uk-lightbox="video-autoplay: true"><a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="Grand Theft Auto V"><img src="assets/img/streem-item-7.jpg" alt="Grand Theft Auto V" /></a>
                                            <div class="stream-item__info">
                                                <div class="stream-item__status">Live</div>
                                                <div class="stream-item__count">4k</div>
                                            </div>
                                        </div>
                                        <div class="stream-item__body">
                                            <div class="stream-item__title">Grand Theft Auto V</div>
                                            <div class="stream-item__nicname">Savoury</div>
                                            <div class="stream-item__time">2 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="page-modals">
        <div class="uk-flex-top" id="modal-report" data-uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button class="uk-modal-close-default" type="button" data-uk-close></button>
                <h2 class="uk-modal-title">Report</h2>
                <form class="uk-form-stacked" pulsa="#">
                    <div class="uk-margin">
                        <div class="uk-form-label">Subject</div>
                        <div class="uk-form-controls"><select class="js-select">
                                <option value="">Choose Subject</option>
                                <option value="Subject 1">Subject 1</option>
                                <option value="Subject 2">Subject 2</option>
                                <option value="Subject 3">Subject 3</option>
                            </select></div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-form-label">Details</div>
                        <div class="uk-form-controls"><textarea class="uk-textarea" name="details" placeholder="Try to include all details..."></textarea></div>
                        <div class="uk-form-controls uk-margin-small-top">
                            <div data-uk-form-custom><input type="file"><button class="uk-button uk-button-default" type="button" tabindex="-1"><i class="ico_attach-circle"></i><span>Attach File</span></button></div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-grid uk-flex-right" data-uk-grid>
                            <div><button class="uk-button uk-button-small uk-button-link">Cancel</button></div>
                            <div><button class="uk-button uk-button-small uk-button-danger">Submit</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="uk-flex-top" id="modal-help" data-uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button class="uk-modal-close-default" type="button" data-uk-close></button>
                <h2 class="uk-modal-title">Help</h2>
                <div class="search">
                    <div class="search__input"><i class="ico_search"></i><input type="search" name="search" placeholder="Search"></div>
                    <div class="search__btn"><button type="button"><i class="ico_microphone"></i></button></div>
                </div>
                <div class="uk-margin-small-left uk-margin-small-bottom uk-margin-medium-top">
                    <h4>Popular Q&A</h4>
                    <ul>
                        <li><img src="assets/img/svgico/clipboard-text.svg" alt="icon"><span>How to Upload Your Developed Game</span></li>
                        <li><img src="assets/img/svgico/clipboard-text.svg" alt="icon"><span>How to Go Live Stream</span></li>
                        <li><img src="assets/img/svgico/clipboard-text.svg" alt="icon"><span>Get in touch with the Creator Support Team</span></li>
                    </ul>
                    <ul>
                        <li><a href="#!">browse all articles</a></li>
                        <li><a href="#!">Send Feedback</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url() ?>assets/js/libs.js"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
</body>

</html>