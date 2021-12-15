<?php $data["title"] = "Quà tặng"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/Frame.png" uk-img uk-height-viewport>
    <div class="home__top">
        <div class="uk-container uk-padding-remove">
            <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item">
                        <a href="." class="top__iconBack" data-txt="Kho quà Chip Chip"></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="uk-flex uk-flex-middle" uk-height-viewport="offset-top: true;offset-bottom: true">
        <div class="quatang__section uk-width-1-1">
            <div class="uk-container">
                <div class="quatang__card">
                    <div class="home__item24">
                        <div class="uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <h2 class="uk-h2 quatang__card__title">Danh sách quà tặng Chip Chip</h2>
                            </div>
                            <div class="uk-width-auto">
                                <div class="uk-border-pill quatang__card__boxTab" uk-switcher="connect: #my-id-gift;animation: uk-animation-fade; toggle: > *">
                                    <button class="quatang__card__boxTab__btn uk-button uk-button-default" type="button"><span>Tất cả</span></button>
                                    <button class="quatang__card__boxTab__btn uk-button uk-button-default" type="button"><span>Yêu thích</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home__item24">
                        <ul class="uk-switcher" id="my-id-gift">
                            <li>
                                <div class="uk-child-width-1-5 uk-grid-24" uk-grid>
                                    <?php
                                    $dataimg = array(
                                        'images/qua1.png',
                                        'images/qua2.png',
                                        'images/qua3.png',
                                        'images/qua4.png',
                                        'images/qua5.png',
                                        'images/qua6.png',
                                        'images/qua7.png',
                                        'images/qua8.png',
                                    );
                                    $txt = array(
                                        'Bộ lắp ráp hình pokemon',
                                        'Bộ lắp ráp hình cá voi',
                                        'Bộ lắp ráp hình thỏ tr...',
                                    );
                                    shuffle($dataimg);
                                    for ($i=0;$i<=9;$i++): ?>
                                        <div>
                                            <div class="quatang__card__box1">
                                                <div class="home__item12 uk-cover-container quatang__card__box1__boxCover">
                                                    <img src="<?= $dataimg[array_rand($dataimg)] ?>" alt="" uk-cover="">
                                                    <canvas width="206" height="134"></canvas>
                                                </div>
                                                <div class="home__item12">
                                                    <div class="quatang__card__box2">
                                                        <div class="home__item12">
                                                            <h3 class="uk-h3 quatang__card__box1__title"><a href=""><?= $txt[array_rand($txt)] ?></a></h3>
                                                        </div>
                                                        <div class="home__item12">
                                                            <div class="uk-flex-middle" uk-grid>
                                                                <div class="uk-width-expand">
                                                                    <div class="quatang__card__box2__txt">450</div>
                                                                </div>
                                                                <div class="uk-width-auto uk-flex uk-flex-middle">
                                                                    <span class="quatang__card__box2__iconWishList"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </li>
                            <li>
                                <div class="uk-child-width-1-5 uk-grid-24" uk-grid>
                                    <?php
                                    $dataimg = array(
                                        'images/qua1.png',
                                        'images/qua2.png',
                                        'images/qua3.png',
                                        'images/qua4.png',
                                        'images/qua5.png',
                                        'images/qua6.png',
                                        'images/qua7.png',
                                        'images/qua8.png',
                                    );
                                    $txt = array(
                                        'Bộ lắp ráp hình pokemon',
                                        'Bộ lắp ráp hình cá voi',
                                        'Bộ lắp ráp hình thỏ tr...',
                                    );
                                    shuffle($dataimg);
                                    for ($i=0;$i<=4;$i++): ?>
                                        <div>
                                            <div class="quatang__card__box1">
                                                <div class="home__item12 uk-cover-container quatang__card__box1__boxCover">
                                                    <img src="<?= $dataimg[array_rand($dataimg)] ?>" alt="" uk-cover="">
                                                    <canvas width="206" height="134"></canvas>
                                                </div>
                                                <div class="home__item12">
                                                    <div class="quatang__card__box2">
                                                        <div class="home__item12">
                                                            <h3 class="uk-h3 quatang__card__box1__title"><a href=""><?= $txt[array_rand($txt)] ?></a></h3>
                                                        </div>
                                                        <div class="home__item12">
                                                            <div class="uk-flex-middle" uk-grid>
                                                                <div class="uk-width-expand">
                                                                    <div class="quatang__card__box2__txt">450</div>
                                                                </div>
                                                                <div class="uk-width-auto uk-flex uk-flex-middle">
                                                                    <span class="quatang__card__box2__iconWishList uk-active"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>