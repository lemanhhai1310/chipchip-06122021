<?php $data["title"] = "Dự án cá nhân"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/ImageBackgroundhome.png" uk-img uk-height-viewport>
    <div class="home__top">
        <div class="uk-container uk-padding-remove">
            <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item">
                        <a href="." class="top__iconBack" data-txt="Dự án cá nhân"></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="uk-flex uk-flex-middle" uk-height-viewport="offset-top: true;offset-bottom: true">
        <div class="muagoihoc__section uk-width-1-1">
            <div class="uk-container">
                <div class="modal__item32">
                    <div class="duancanhan__box1">
                        <div class="duancanhan__box1__overlay uk-position-cover"></div>
                        <div class="duancanhan__box1__content">
                            <div class="uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="uk-button uk-button-default uk-border-pill duancanhan__box1__labelStatus"><span>Đang thực hiện</span></div>
                                    <div class="duancanhan__box1__title">Your Animal Report</div>
                                </div>
                                <div class="uk-width-auto@m">
                                    <div class="home__item12">
                                        <a href="#" class="home__panel__btn home__panel__btn__default home__panel__btn__default--video upload uk-width-1-1 uk-button uk-button-default uk-border-pill" aria-expanded="false">
                                            <span class="home__panel__btn__txt">Tải lên dự án</span>
                                        </a>
                                    </div>
                                    <div class="home__item12">
                                        <a href="#" class="home__panel__btn home__panel__btn__default home__panel__btn__default--video huongdan uk-width-1-1 uk-button uk-button-default uk-border-pill" aria-expanded="false">
                                            <span class="home__panel__btn__txt">Xem hướng dẫn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__item32">
                    <div class="duancanhan__box2">
                        <div class="home__item24">
                            <div class="uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="duancanhan__box1__title">Dự án khác</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="uk-border-pill quatang__card__boxTab" uk-switcher="connect: #my-id-gift;animation: uk-animation-fade; toggle: > *">
                                        <button class="quatang__card__boxTab__btn uk-button uk-button-default" type="button"><span>Đã thực hiện</span></button>
                                        <button class="quatang__card__boxTab__btn uk-button uk-button-default uk-active" type="button"><span>Không tham gia</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home__item24">
                            <ul class="uk-switcher" id="my-id-gift">
                                <li>
                                    <?php for ($i=0;$i<=3;$i++): ?>
                                    <div class="duancanhan__box2__item16">
                                        <div class="signup__item20">
                                            <div class="home__item8">
                                                <div class="uk-flex-middle" uk-grid>
                                                    <div class="uk-width-expand">
                                                        <div class="duancanhan__box2__txt1">Your Animal Report</div>
                                                    </div>
                                                    <div class="uk-width-auto">
                                                        <div class="uk-grid-10 uk-flex-middle uk-grid" uk-grid="">
                                                            <div class="uk-first-column">
                                                                <span class="home__top__icon home__top__icon--c1"></span>
                                                            </div>
                                                            <div>
                                                                <span class="home__top__txt">98</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="home__item8">
                                                <div class="uk-flex-middle" uk-grid>
                                                    <div class="uk-width-expand">
                                                        <div class="duancanhan__box2__txt2">20:30 - Thứ 6, 5/11</div>
                                                    </div>
                                                    <div class="uk-width-auto">
                                                        <div class="uk-flex-middle uk-grid-8 uk-grid" uk-grid="">
                                                            <div class="uk-width-auto uk-first-column">
                                                                <div class="uk-cover-container uk-border-circle">
                                                                    <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="" class="uk-cover" style="height: 36px; width: 36px;">
                                                                    <canvas width="36" height="36"></canvas>
                                                                </div>
                                                            </div>
                                                            <div class="uk-width-expand">
                                                                <div class="home__panel__name">Thầy Edward</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="signup__item20">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand">
                                                    <a href="" class="duancanhan__box2__btn uk-button uk-button-default uk-button-small uk-border-pill"><span>Xem hướng dẫn</span></a>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <div class="uk-child-width-1-2 uk-grid-12 uk-grid" uk-grid="">
                                                        <div class="uk-first-column">
                                                            <button type="button" class="home__panel__btn home__panel__btn__inClass video uk-width-1-1 uk-button uk-button-default uk-border-pill">
                                                                <span class="home__panel__btn__txt">Video trình bày</span>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <button type="button" uk-toggle="#modal-close-outside-noidungbaigiang" class="home__panel__btn home__panel__btn__default uk-width-1-1 uk-button uk-button-default uk-border-pill" aria-expanded="false">
                                                                <span class="home__panel__btn__txt">Xem sản phẩm</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endfor; ?>
                                </li>
                                <li>
                                    <?php for ($i=0;$i<=3;$i++): ?>
                                    <div class="duancanhan__box2__item">
                                        <div class="uk-flex-middle" uk-grid>
                                            <div class="uk-width-expand">
                                                <div class="home__item8">
                                                    <div class="duancanhan__box2__item__txt">Your Animal Report</div>
                                                </div>
                                                <div class="home__item8">
                                                    <div class="uk-flex-middle uk-grid-8 uk-grid" uk-grid="">
                                                        <div class="uk-width-auto uk-first-column">
                                                            <div class="uk-cover-container uk-border-circle">
                                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="" class="uk-cover" style="height: 36px; width: 36px;">
                                                                <canvas width="36" height="36"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <div class="home__panel__name">Thầy Edward</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-auto">
                                                <a href="" class="duancanhan__box2__item__linkhuongdan">Xem hướng dẫn</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endfor; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>