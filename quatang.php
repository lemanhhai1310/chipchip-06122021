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
                                                            <h3 class="uk-h3 quatang__card__box1__title"><a href="#modal-close-outside-quatangchitiet" uk-toggle><?= $txt[array_rand($txt)] ?></a></h3>
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
                                                            <h3 class="uk-h3 quatang__card__box1__title"><a href="#modal-close-outside-quatangchitiet" uk-toggle><?= $txt[array_rand($txt)] ?></a></h3>
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
<!--Quà tặng/xem chi tiết-->
<div id="modal-close-outside-quatangchitiet" class="modal uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-dialog-m708 modal__body1 uk-modal-body uk-margin-auto-vertical">
        <button class="uk-modal-close-outside modal__close" type="button" uk-close></button>
        <div class="uk-child-width-1-2 uk-grid-32 uk-grid-match" uk-grid>
            <div>
                <div class="uk-position-relative" uk-slideshow="animation: fade;ratio: 648:520;">

                    <ul class="uk-slideshow-items home__item12">
                        <li>
                            <div class="uk-cover-container">
                                <img src="images/photo.jpg" alt="" uk-cover>
                                <canvas width="648" height="520"></canvas>
                            </div>
                        </li>
                        <li>
                            <div class="uk-cover-container">
                                <img src="images/dark.jpg" alt="" uk-cover>
                                <canvas width="648" height="520"></canvas>
                            </div>
                        </li>
                        <li>
                            <div class="uk-cover-container">
                                <img src="images/light.jpg" alt="" uk-cover>
                                <canvas width="648" height="520"></canvas>
                            </div>
                        </li>
                    </ul>

                    <div class="home__item12">
                        <ul class="uk-thumbnav uk-child-width-1-3 uk-grid-12" uk-grid>
                            <li uk-slideshow-item="0">
                                <a href="#">
                                    <div class="uk-cover-container">
                                        <img src="images/photo.jpg" alt="" uk-cover>
                                        <canvas width="100" height="80"></canvas>
                                    </div>
                                </a>
                            </li>
                            <li uk-slideshow-item="1">
                                <a href="#">
                                    <div class="uk-cover-container">
                                        <img src="images/dark.jpg" alt="" uk-cover>
                                        <canvas width="100" height="80"></canvas>
                                    </div>
                                </a>
                            </li>
                            <li uk-slideshow-item="2">
                                <a href="#">
                                    <div class="uk-cover-container">
                                        <img src="images/light.jpg" alt="" uk-cover>
                                        <canvas width="100" height="80"></canvas>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div>
                <div class="uk-flex uk-flex-column">
                    <div class="uk-flex-auto home__item24">
                        <div class="home__item24">
                            <div class="home__item8">
                                <h1 class="uk-h1 modal__quatang__title">Bộ lắp ráp mô hình Pokemon lửa, nhiều hình dễ thương</h1>
                            </div>
                            <div class="home__item8">
                                <div class="modal__quatang__rate"><span>450</span></div>
                            </div>
                        </div>
                        <div class="home__item24">
                            <div class="home__item8">
                                <div class="modal__quatang__label">Mô tả</div>
                            </div>
                            <div class="home__item8">
                                <div class="modal__quatang__desc">Bộ mô hình lắp ráp mini với màu sắc tươi sáng, sinh động tạo nên cảm hứng sáng tạo cho trẻ nhỏ khi chơi. Sản phẩm không dành cho trẻ dưới 3 tuổi.</div>
                            </div>
                        </div>
                    </div>
                    <div class="home__item24">
                        <div class="uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <a href="#modal-close-outside-xacnhandiadiem" uk-toggle class="home__panel__btn home__panel__btn__buy doiqua uk-button uk-button-default uk-border-pill">
                                    <span class="home__panel__btn__txt">Đổi quà ngay</span>
                                </a>
                            </div>
                            <div class="uk-width-auto">
                                <div class="modal__quatang__wishlist"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Quà tặng/xem chi tiết-->

    <!--Quà tặng/xác nhận địa điểm-->
    <div id="modal-close-outside-xacnhandiadiem" class="modal uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-dialog-m548 modal__body1 uk-modal-body uk-margin-auto-vertical">
            <div class="home__item24">
                <div class="home__item8">
                    <div class="modal__xacnhandiadiem__label">Nhập địa chỉ nhận quà</div>
                </div>
                <div class="home__item8">
                    <textarea class="uk-textarea modal__xacnhandiadiem__textarea" rows="5" placeholder="Địa chỉ nhận quà..."></textarea>
                </div>
            </div>
            <div class="home__item24">
                <div class="uk-child-width-auto uk-grid-24" uk-grid>
                    <div>
                        <button class="modal__btnChange modal__btnChange--c1 modal__btnChange--c2 uk-button uk-button-default uk-border-pill uk-modal-close"><span class="modal__btnChange__txt">Thoát</span></button>
                    </div>
                    <div>
                        <a href="#modal-close-outside-quatangsuccess" uk-toggle class="home__panel__btn home__panel__btn__buy doiqua uk-button uk-button-default uk-border-pill">
                            <span class="home__panel__btn__txt">Đổi quà ngay</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Quà tặng/xác nhận địa điểm-->

    <!--Quà tặng/notify chúc mừng-->
    <div id="modal-close-outside-quatangsuccess" class="modal uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-dialog-m400 modal__body1 uk-modal-body uk-margin-auto-vertical">
            <div class="uk-text-center">
                <div class="home__item24">
                    <img src="images/quatang/congrats1.png" alt="">
                </div>
                <div class="home__item24">
                    <div class="modal__desc">Chúc mừng bạn đã đổi quà thành công.
                        Chip Chip sẽ sớm liên hệ lại với bạn để xác nhận và hướng dẫn nhận quà.</div>
                </div>
                <div class="home__item24">
                    <div class="uk-child-width-auto uk-flex-center uk-grid-16" uk-grid>
                        <div>
                            <button class="modal__btnChange modal__btnChange--c1 modal__btnChange--c2 uk-button uk-button-default uk-border-pill uk-modal-close"><span class="modal__btnChange__txt">Xong</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Quà tặng/notify chúc mừng-->

<script>
    UIkit.modal('#modal-close-outside-quatangchitiet').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>