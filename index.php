<?php $data["title"] = "Trang chủ"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/ImageBackgroundhome.png" uk-img uk-height-viewport>
    <div class="home__top">
        <div class="uk-container uk-padding-remove">
            <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item">
                        <div class="home__top__box1 uk-border-pill" uk-toggle="#modal-close-outside-profile">
                            <div class="uk-flex-middle uk-grid-8" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-cover-container uk-border-circle">
                                        <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                                        <canvas width="46" height="46"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-flex-middle uk-grid-49" uk-grid>
                                        <div class="uk-width-auto">
                                            <div class="">
                                                <span class="home__top__name">Vũ Khắc Minh</span>
                                            </div>
                                            <div class="">
                                                <div class="uk-grid-8 uk-flex-middle" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <img src="images/flash.png" alt="">
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <div class="uk-border-pill home__top__boxProgress">
                                                            <span class="home__top__gress uk-border-pill uk-position-cover" style="width: 75%"></span>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-auto">
                                                        <span class="home__top__boxProgress__txt">2D</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-child-width-auto uk-grid-43" uk-grid>
                                                <div>
                                                    <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                        <div>
                                                            <span class="home__top__icon home__top__icon--c1"></span>
                                                        </div>
                                                        <div>
                                                            <span class="home__top__txt">98</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                        <div>
                                                            <span class="home__top__icon home__top__icon--c2"></span>
                                                        </div>
                                                        <div>
                                                            <span class="home__top__txt">46</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                        <div>
                                                            <span class="home__top__icon home__top__icon--c3"></span>
                                                        </div>
                                                        <div>
                                                            <span class="home__top__txt">12</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item">
                        <a href="quatang.php"><img src="images/Frame11.png" alt=""></a>
                    </div>
                    <div class="uk-navbar-item">
                        <a href="#modal-full" uk-toggle><img src="images/giohang.png" alt=""></a>
                    </div>
                    <div class="uk-navbar-item">
                        <a href="#offcanvas-flip-faq" uk-toggle><img src="images/giupdo.png" alt=""></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="home__section" uk-height-viewport="offset-top: true;offset-bottom: true">
        <div class="uk-position-relative" uk-slider="finite: true;sets: false;">
            <div class="uk-container uk-container-expand-right">
                <div>
                    <div class="uk-position-relative">
                        <div class="uk-slider-container uk-light" style="overflow: inherit">
                            <ul class="uk-slider-items uk-grid uk-grid-24 uk-child-width-auto uk-grid-match" uk-grid>
                                <?php $percent = array(20,40,60,80,100); ?>
                                <li>
                                    <div class="uk-panel home__panel1 style1 uk-flex uk-flex-middle uk-flex-center">
                                        <div class="uk-text-center home__panel1__box1">
                                            <div class="home__panel1__txt1 home__item8">Unit 3</div>
                                            <div class="home__panel1__txt2 home__item8">What's
                                                for dinner?</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel home__panel1 style2 uk-flex uk-flex-middle uk-flex-center">
                                        <div class="uk-text-center home__panel1__box1">
                                            <div class="home__panel1__txt1 home__item8">Unit 3</div>
                                            <div class="home__panel1__txt2 home__item8">What's
                                                for dinner?</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel home__panel1 style3 uk-flex uk-flex-middle uk-flex-center">
                                        <div class="uk-text-center home__panel1__box1">
                                            <div class="home__panel1__txt1 home__item8">Unit 3</div>
                                            <div class="home__panel1__txt2 home__item8">What's
                                                for dinner?</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel home__panel1 style4 uk-flex uk-flex-middle uk-flex-center">
                                        <div class="uk-text-center home__panel1__box1">
                                            <div class="home__panel1__txt1 home__item8">Unit 3</div>
                                            <div class="home__panel1__txt2 home__item8">What's
                                                for dinner?</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel home__panel1 style5 uk-flex uk-flex-middle uk-flex-center">
                                        <div class="uk-text-center home__panel1__box1">
                                            <div class="home__panel1__txt1 home__item8">Unit 3</div>
                                            <div class="home__panel1__txt2 home__item8">What's
                                                for dinner?</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel home__panel canhan">
                                        <div class="home__item24">
                                            <div class="login__item16">
                                                <div class="home__item8">
                                                    <div class="home__panel__tag"><span>Dự án cá nhân</span></div>
                                                </div>
                                                <div class="home__item8">
                                                    <h3 class="uk-h3 home__panel__title">Your Animal Report</h3>
                                                </div>
                                                <div class="home__item8">
                                                    <div class="home__panel__time">20:30 - Thứ 6, 5/11</div>
                                                </div>
                                            </div>
                                            <div class="login__item16">
                                                <div class="uk-flex-middle uk-grid-8" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <div class="uk-cover-container uk-border-circle">
                                                            <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                                                            <canvas width="36" height="36"></canvas>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <div class="home__panel__name">Thầy Edward</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="login__item16">
                                                <div class="uk-position-relative uk-display-inline-block">
                                                    <i class="home__panel__icon home__panel__icon__star-o"></i>
                                                    <i class="home__panel__icon home__panel__icon__star-o"></i>
                                                    <i class="home__panel__icon home__panel__icon__star-o"></i>
                                                    <i class="home__panel__icon home__panel__icon__star-o"></i>
                                                    <i class="home__panel__icon home__panel__icon__star-o"></i>
                                                    <div class="uk-position-cover uk-text-nowrap uk-position-z-index uk-overflow-hidden" style="width: 60%">
                                                        <i class="home__panel__icon home__panel__icon__star"></i>
                                                        <i class="home__panel__icon home__panel__icon__star"></i>
                                                        <i class="home__panel__icon home__panel__icon__star"></i>
                                                        <i class="home__panel__icon home__panel__icon__star"></i>
                                                        <i class="home__panel__icon home__panel__icon__star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home__item24">
                                            <div class="login__item16">
                                                <div class="uk-child-width-1-2 uk-grid-16 uk-flex-middle" uk-grid>
                                                    <div>
                                                        <a href="#modal-close-outside-tailenduan" uk-toggle class="home__panel__btn home__panel__btn__default home__panel__btn__default--video upload uk-width-1-1 uk-button uk-button-default uk-border-pill">
                                                            <span class="home__panel__btn__txt">Tải lên dự án</span>
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <button type="button" uk-toggle="#modal-close-outside-chuatoigiovaolop" class="home__panel__btn home__panel__btn__inClass uk-width-1-1 uk-button uk-button-default uk-border-pill">
                                                            <span class="home__panel__btn__txt">Vào lớp</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="login__item16">
                                                <button uk-toggle="#modal-close-outside-huongdan" class="home__panel__btnhuongdan uk-button uk-button-secondary uk-width-1-1 uk-border-pill">
                                                    <span>Xem hướng dẫn</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel home__panel c0">
                                        <div class="home__item24">
                                            <div class="login__item16">
                                                <div class="home__item8">
                                                    <h3 class="uk-h3 home__panel__title">Lớp học thử miễn phí</h3>
                                                </div>
                                                <div class="home__item8">
                                                    <div class="home__panel__time">20:30 - Thứ 6, 5/11</div>
                                                </div>
                                            </div>
                                            <div class="login__item16">
                                                <div class="uk-flex-middle uk-grid-8" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <div class="uk-cover-container uk-border-circle">
                                                            <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                                                            <canvas width="64" height="64"></canvas>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <div class="home__panel__name">Thầy Edward</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home__item24">
                                            <div class="home__item12">
                                                <div class="uk-flex-middle uk-flex-center uk-grid-6 uk-child-width-auto home__panel__countdown" uk-grid>
                                                    <div class="uk-flex uk-flex-middle">
                                                        <span class="home__panel__countdown__icon"></span>
                                                    </div>
                                                    <div>
                                                        <div class="uk-grid-collapse uk-child-width-auto uk-flex-center" uk-grid uk-countdown="date: 2021-12-20T17:35:10+00:00">
                                                            <div>
                                                                <div class="uk-countdown-number uk-countdown-days"></div>
                                                            </div>
                                                            <div class="uk-countdown-separator">:</div>
                                                            <div>
                                                                <div class="uk-countdown-number uk-countdown-hours"></div>
                                                            </div>
                                                            <div class="uk-countdown-separator">:</div>
                                                            <div>
                                                                <div class="uk-countdown-number uk-countdown-minutes"></div>
                                                            </div>
                                                            <div class="uk-countdown-separator">:</div>
                                                            <div>
                                                                <div class="uk-countdown-number uk-countdown-seconds"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="home__item12">
                                                <button type="button" uk-toggle="#modal-close-outside-chuatoigiovaolop" class="home__panel__btn home__panel__btn__inClass uk-width-1-1 uk-button uk-button-default uk-border-pill">
                                                    <span class="home__panel__btn__txt">Vào lớp</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="home__item24">
                                            <div class="uk-text-center"><a href="" class="home__panel__box__link home__panel__box__link--c1">Xem hướng dẫn</a></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel home__panel c0">
                                        <div class="home__item24">
                                            <div class="home__panel__box">
                                                <div class="uk-child-width-auto uk-flex-middle uk-flex-between uk-grid-collapse" uk-grid>
                                                    <div>
                                                        <div class="home__panel__box__txt">Đã hoàn thành</div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-position-relative uk-display-inline-block">
                                                            <?php for ($j=0;$j<=4;$j++): ?>
                                                                <i class="home__panel__icon home__panel__icon__star-o"></i>
                                                            <?php endfor; ?>
                                                            <div class="uk-position-cover uk-text-nowrap uk-position-z-index uk-overflow-hidden" style="width: <?= $percent[array_rand($percent)] ?>%">
                                                                <?php for ($j=0;$j<=4;$j++): ?>
                                                                    <i class="home__panel__icon home__panel__icon__star"></i>
                                                                <?php endfor; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home__item24">
                                            <div class="login__item16">
                                                <div class="home__item8">
                                                    <h3 class="uk-h3 home__panel__title">Lớp học thử miễn phí</h3>
                                                </div>
                                                <div class="home__item8">
                                                    <div class="home__panel__time">20:30 - Thứ 6, 5/11</div>
                                                </div>
                                            </div>
                                            <div class="login__item16">
                                                <div class="uk-flex-middle uk-grid-8" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <div class="uk-cover-container uk-border-circle">
                                                            <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                                                            <canvas width="36" height="36"></canvas>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <div class="home__panel__name">Thầy Edward</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home__item24">
                                            <div class="uk-child-width-1-2 uk-grid-16 uk-flex-middle" uk-grid>
                                                <div>
                                                    <a href="chitietlophoc.php" class="home__panel__btn home__panel__btn__default home__panel__btn__default--video uk-width-1-1 uk-button uk-button-default uk-border-pill">
                                                        <span class="home__panel__btn__txt">Video lớp học</span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <div class="uk-text-center"><a href="" class="home__panel__box__link">Kết quả đánh giá</a></div>
                                                </div>
                                                <div class="uk-width-1-1">
                                                    <a href="muagoihoc.php" class="home__panel__btn home__panel__btn__buy uk-width-1-1 uk-button uk-button-default uk-border-pill">
                                                        <span class="home__panel__btn__txt">Mua gói học</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php
                                $data = array(
                                    array(

                                    ),
                                );
                                for ($i=0;$i<=10;$i++): ?>
                                    <?php if ($i==2): ?>

                                    <?php else: ?>
                                        <li>
                                            <div class="uk-panel home__panel c<?= $i ?>">
                                                <div class="signup__item20">
                                                    <div class="login__item16">
                                                        <div class="home__item4">
                                                            <div class="home__panel__txt1">🌤 Level 1 Unit 2 Lesson 1</div>
                                                        </div>
                                                        <div class="home__item4">
                                                            <div class="home__item8">
                                                                <h3 class="uk-h3 home__panel__title">What’s the weather like today?</h3>
                                                            </div>
                                                            <div class="home__item8">
                                                                <div class="home__panel__time">20:30 - Thứ 6, 5/11</div>
                                                            </div>
                                                            <div class="home__item8">
                                                                <div class="uk-flex-middle uk-grid-8" uk-grid>
                                                                    <div class="uk-width-auto">
                                                                        <div class="uk-cover-container uk-border-circle">
                                                                            <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
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
                                                    <div class="login__item16">
                                                        <div class="uk-position-relative uk-display-inline-block">
                                                            <?php for ($j=0;$j<=4;$j++): ?>
                                                                <i class="home__panel__icon home__panel__icon__star-o"></i>
                                                            <?php endfor; ?>
                                                            <div class="uk-position-cover uk-text-nowrap uk-position-z-index uk-overflow-hidden" style="width: <?= $percent[array_rand($percent)] ?>%">
                                                                <?php for ($j=0;$j<=4;$j++): ?>
                                                                    <i class="home__panel__icon home__panel__icon__star"></i>
                                                                <?php endfor; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="signup__item20">
                                                    <div class="uk-child-width-1-2 uk-grid-12" uk-grid>
                                                        <div>
                                                            <?php if ($i==3): ?>
                                                                <button type="button" class="home__panel__btn home__panel__btn__inClass uk-width-1-1 uk-button uk-button-default uk-border-pill">
                                                                    <span class="home__panel__btn__txt">Vào lớp</span>
                                                                </button>
                                                            <?php else: ?>
                                                                <button type="button" class="home__panel__btn home__panel__btn__video uk-width-1-1 uk-button uk-button-default uk-border-pill">
                                                                    <span class="home__panel__btn__txt">Video lớp học</span>
                                                                </button>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div>
                                                            <?php if ($i==1): ?>
                                                                <button type="button" class="home__panel__btn home__panel__btn__default uk-width-1-1 uk-button uk-button-default uk-border-pill">
                                                                    <span class="home__panel__btn__txt">Luyện tập</span>
                                                                </button>
                                                            <?php elseif ($i==3): ?>
                                                                <button type="button" uk-toggle="#modal-close-outside-noidungbaigiang" class="home__panel__btn home__panel__btn__default uk-width-1-1 uk-button uk-button-default uk-border-pill">
                                                                    <span class="home__panel__btn__txt">Xem nội dung</span>
                                                                </button>
                                                            <?php else: ?>
                                                                <button type="button" class="home__panel__btn home__panel__btn__default uk-width-1-1 uk-button uk-button-default uk-border-pill">
                                                                    <span class="home__panel__btn__txt">Bài tập đã làm</span>
                                                                </button>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="signup__item20">
                                                    <div class="home__panel__step">
                                                        <div class="uk-child-width-auto uk-flex-between uk-grid-collapse" uk-grid>
                                                            <div class="home__panel__step__item home__panel__step__item--finish">
                                                                <div class="home__panel__step__item__box">
                                                                    <span class="home__panel__step__item__icon uk-border-circle"></span>
                                                                </div>
                                                                <div class="home__panel__step__item__txt">Nội dung</div>
                                                            </div>
                                                            <div class="home__panel__step__item home__panel__step__item--finish">
                                                                <div class="home__panel__step__item__box">
                                                                    <span class="home__panel__step__item__icon uk-border-circle"></span>
                                                                </div>
                                                                <div class="home__panel__step__item__txt">Vào học</div>
                                                            </div>
                                                            <div class="home__panel__step__item <?= ($i==0)?'home__panel__step__item--finish':'home__panel__step__item--wait' ?>">
                                                                <div class="home__panel__step__item__box">
                                                                    <span class="home__panel__step__item__icon uk-border-circle"></span>
                                                                </div>
                                                                <div class="home__panel__step__item__txt">Luyện tập</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="uk-position-center-left home__panel__nav home__panel__nav--prev" uk-slider-item="previous">
                    <a href="#" class="home__panel__nav__icon" uk-slidenav-previous></a>
                </div>
                <div class="uk-position-center-right home__panel__nav home__panel__nav--next" uk-slider-item="next">
                    <a href="#" class="home__panel__nav__icon" uk-slidenav-next></a>
                </div>
            </div>
        </div>
    </div>

    <!--profile-->
    <div id="modal-close-outside-profile" class="modal uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-dialog-m688 modal__body uk-modal-body uk-margin-auto-vertical">
            <button class="uk-modal-close-outside modal__close" type="button" uk-close></button>
            <div>
                <div class="modal__item18">
                    <div class="modal__box16">
                        <div class="modal__boxProfile">
                            <div class="uk-flex-middle uk-grid-20" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-cover-container uk-border-circle">
                                        <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                        <canvas width="111" height="111"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="modal__item9">
                                        <div class="uk-flex-middle" uk-grid>
                                            <div class="uk-width-expand">
                                                <div class="modal__boxProfile__name">Vũ Khắc Minh</div>
                                            </div>
                                            <div class="uk-width-auto">
                                                <div class="uk-flex-middle uk-grid-9" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <span class="modal__boxProfile__iconFlah"></span>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <div class="modal__boxProfile__progress uk-border-pill">
                                                            <div class="modal__boxProfile__box1 uk-position-relative">
                                                                <div class="uk-position-cover modal__boxProfile__box2 uk-border-pill" style="width: 55%">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-auto">
                                                        <div class="modal__boxProfile__txt">2D</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal__item9">
                                        <div class="uk-child-width-auto uk-grid-27" uk-grid>
                                            <div>
                                                <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                    <div>
                                                        <span class="home__top__icon home__top__icon--c1"></span>
                                                    </div>
                                                    <div>
                                                        <span class="home__top__txt">98</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                    <div>
                                                        <span class="home__top__icon home__top__icon--c2"></span>
                                                    </div>
                                                    <div>
                                                        <span class="home__top__txt">46</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__item18">
                    <div class="modal__item35">
                        <div class="uk-overflow-auto">
                            <div class="modal__gridUser uk-child-width-auto uk-grid-17 uk-flex-middle uk-flex-nowrap" uk-grid>
                                <?php for ($i=0;$i<=20;$i++): ?>
                                    <div class="modal__gridUser__column">
                                        <label>
                                            <input class="uk-radio modal__gridUser__radio" hidden type="radio" name="radio2" <?= ($i==0)?'checked':'' ?>>
                                            <div class="modal__gridUser__boxAvarta uk-cover-container uk-border-circle">
                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                                <canvas width="57" height="57"></canvas>
                                                <div class="modal__gridUser__boxAvarta__bg uk-position-cover"></div>
                                            </div>
                                        </label>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal__item35">
                        <div class="modal__btnBox">
                            <div class="uk-child-width-auto uk-flex-between" uk-grid>
                                <div>
                                    <a href="#modal-close-outside-changeaccount" uk-toggle class="modal__btnChange uk-button uk-button-default uk-border-pill"><span class="modal__btnChange__txt">Chuyển tài khoản</span></a>
                                </div>
                                <div>
                                    <a href="#modal-close-outside-sound" uk-toggle class="modal__btnChange uk-button uk-button-default uk-border-pill"><span class="modal__btnChange__txt">Kiểm tra thiết bị</span></a>
                                </div>
                                <div>
                                    <button class="modal__btnChange uk-button uk-button-default uk-border-pill logout"><span class="modal__btnChange__txt">Đăng xuất</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/profile-->

    <!--chuyen tai khoan-->
    <div id="modal-close-outside-changeaccount" class="modal uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-dialog-m688 modal__body uk-modal-body uk-margin-auto-vertical">
            <button class="uk-modal-close-outside modal__close" type="button" uk-close></button>
            <a class="modal__back uk-modal-close-outside" href="#modal-close-outside-profile" uk-toggle></a>
            <div class="modal__box1">
                <div class="modal__boxProfile__name">Chuyển tài khoản</div>
            </div>
            <div class="uk-section-xsmall modal__box2">
                <div class="uk-child-width-1-3 uk-grid-16 uk-grid-match" uk-grid>
                    <?php for ($i=0;$i<=4;$i++): ?>
                        <label>
                            <input class="uk-radio uk-hidden modal__box2__radio" type="radio" name="account" <?= ($i==0)?'checked':'' ?>>
                            <div class="modal__box2__card uk-card uk-card-body uk-text-center">
                                <div class="login__item16">
                                    <div class="uk-cover-container uk-border-circle uk-display-inline-block">
                                        <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                        <canvas width="72" height="72"></canvas>
                                    </div>
                                </div>
                                <div class="login__item16">
                                    <div class="modal__item9">
                                        <div class="modal__btnChange__txt">Vũ Khắc Minh</div>
                                    </div>
                                    <div class="modal__item9">
                                        <div class="uk-grid-9 uk-flex-middle uk-flex-center" uk-grid>
                                            <div class="uk-width-auto">
                                                <div class="modal__boxProfile__iconFlah"></div>
                                            </div>
                                            <div class="uk-width-auto">
                                                <div class="modal__boxProfile__progress uk-border-pill">
                                                    <div class="modal__boxProfile__box1 uk-position-relative">
                                                        <div class="uk-position-cover modal__boxProfile__box2 uk-border-pill" style="width: 55%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-auto">
                                                <div class="modal__boxProfile__txt">2D</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
    <!--/chuyen tai khoan-->

    <!--kiem tra sound-->
    <div id="modal-close-outside-sound" class="modal uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-dialog-m688 modal__body1 uk-modal-body uk-margin-auto-vertical">
            <button class="uk-modal-close-outside modal__close" type="button" uk-close></button>
            <a class="modal__back uk-modal-close-outside" href="#modal-close-outside-profile" uk-toggle></a>
            <div>
                <div class="modal__item32">
                    <div class="home__item24">
                        <div class="modal__boxProfile__name">Kiểm tra thiết bị</div>
                    </div>
                    <div class="home__item24">
                        <div class="modal__box3">
                            <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                                <div>
                                    <div class="uk-text-center active">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>1</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra âm thanh</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-text-center">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra Microphone</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-text-center">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>3</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra Camera</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__item32">
                    <div class="uk-grid-60" uk-grid>
                        <div class="uk-width-expand">
                            <div class="home__item12">
                                <div class="modal__box3__txt1">Nhấn vào <span>“Nghe đoạn âm thanh"</span> để kiểm tra loa của bạn</div>
                            </div>
                            <div class="home__item12">
                                <button type="button" class="home__panel__btn home__panel__btn__video sound uk-button uk-button-default uk-border-pill">
                                    <span class="home__panel__btn__txt">Nghe đoạn âm thanh</span>
                                </button>
                            </div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="login__item16">
                                <div class="modal__box3__txt1"><span>Bạn có nghe thấy không?</span></div>
                            </div>
                            <div class="login__item16">
                                <div class="uk-child-width-auto uk-grid-16" uk-grid>
                                    <div>
                                        <button class="modal__btnChange modal__btnChange--c1 uk-button uk-button-default uk-border-pill"><span class="modal__btnChange__txt">Không</span></button>
                                    </div>
                                    <div>
                                        <button uk-toggle="#modal-close-outside-mic1" class="modal__btnChange modal__btnChange--c1 uk-button uk-button-default uk-border-pill"><span class="modal__btnChange__txt">Có</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/kiem tra sound-->

    <!--kiem tra mic1-->
    <div id="modal-close-outside-mic1" class="modal uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-dialog-m688 modal__body1 uk-modal-body uk-margin-auto-vertical">
            <button class="uk-modal-close-outside modal__close" type="button" uk-close></button>
            <a class="modal__back uk-modal-close-outside" href="#modal-close-outside-sound" uk-toggle></a>
            <div>
                <div class="modal__item32">
                    <div class="home__item24">
                        <div class="modal__boxProfile__name">Kiểm tra thiết bị</div>
                    </div>
                    <div class="home__item24">
                        <div class="modal__box3">
                            <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                                <div>
                                    <div class="uk-text-center finish">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>1</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra âm thanh</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-text-center active">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra Microphone</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-text-center">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>3</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra Camera</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__item32">
                    <div class="uk-grid-60" uk-grid>
                        <div class="uk-width-expand">
                            <div class="home__item12">
                                <div class="modal__box3__txt1">Nhấn vào <span>“Ghi âm"</span> để kiểm tra Mic của bạn</div>
                            </div>
                            <div class="home__item12">
                                <button type="button" uk-toggle="#modal-close-outside-mic2" class="home__panel__btn home__panel__btn__inClass record inrecord uk-button uk-button-default uk-border-pill">
                                    <span class="home__panel__btn__txt">Ghi âm</span>
                                </button>
                            </div>
                        </div>
                        <div class="uk-width-auto">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/kiem tra mic1-->

    <!--kiem tra mic2-->
    <div id="modal-close-outside-mic2" class="modal uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-dialog-m688 modal__body1 uk-modal-body uk-margin-auto-vertical">
            <button class="uk-modal-close-outside modal__close" type="button" uk-close></button>
            <a class="modal__back uk-modal-close-outside" href="#modal-close-outside-mic1" uk-toggle></a>
            <div>
                <div class="modal__item32">
                    <div class="home__item24">
                        <div class="modal__boxProfile__name">Kiểm tra thiết bị</div>
                    </div>
                    <div class="home__item24">
                        <div class="modal__box3">
                            <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                                <div>
                                    <div class="uk-text-center finish">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>1</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra âm thanh</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-text-center active">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra Microphone</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-text-center">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>3</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra Camera</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__item32">
                    <div class="uk-grid-60" uk-grid>
                        <div class="uk-width-expand">
                            <div class="home__item12">
                                <div class="modal__box3__txt1">Nhấn vào <span>“Ghi âm"</span> để kiểm tra Mic của bạn</div>
                            </div>
                            <div class="home__item12">
                                <button type="button" uk-toggle="#modal-close-outside-mic3" class="home__panel__btn home__panel__btn__inClass record notrecord uk-button uk-button-default uk-border-pill">
                                    <span class="home__panel__btn__txt">Dừng ghi âm</span>
                                </button>
                            </div>
                        </div>
                        <div class="uk-width-auto">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/kiem tra mic2-->

    <!--kiem tra mic3-->
    <div id="modal-close-outside-mic3" class="modal uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-dialog-m688 modal__body1 uk-modal-body uk-margin-auto-vertical">
            <button class="uk-modal-close-outside modal__close" type="button" uk-close></button>
            <a class="modal__back uk-modal-close-outside" href="#modal-close-outside-mic2" uk-toggle></a>
            <div>
                <div class="modal__item32">
                    <div class="home__item24">
                        <div class="modal__boxProfile__name">Kiểm tra thiết bị</div>
                    </div>
                    <div class="home__item24">
                        <div class="modal__box3">
                            <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                                <div>
                                    <div class="uk-text-center finish">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>1</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra âm thanh</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-text-center active">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra Microphone</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-text-center">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>3</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra Camera</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__item32">
                    <div class="uk-grid-60" uk-grid>
                        <div class="uk-width-expand">
                            <div class="home__item12">
                                <div class="modal__box3__txt1">Nhấn vào <span>“Ghi âm"</span> để kiểm tra Mic của bạn</div>
                            </div>
                            <div class="home__item12">
                                <div class="uk-child-width-auto uk-grid-12" uk-grid>
                                    <div>
                                        <button type="button" uk-toggle="#modal-close-outside-mic1" class="home__panel__btn home__panel__btn__inClass record inrecord uk-button uk-button-default uk-border-pill">
                                            <span class="home__panel__btn__txt">Ghi âm</span>
                                        </button>
                                    </div>
                                    <div>
                                        <button type="button" class="home__panel__btn home__panel__btn__video sound uk-button uk-button-default uk-border-pill">
                                            <span class="home__panel__btn__txt">Nghe đoạn ghi âm</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="login__item16">
                                <div class="modal__box3__txt1"><span>Bạn có nghe thấy không?</span></div>
                            </div>
                            <div class="login__item16">
                                <div class="uk-child-width-auto uk-grid-16" uk-grid>
                                    <div>
                                        <button class="modal__btnChange modal__btnChange--c1 uk-button uk-button-default uk-border-pill"><span class="modal__btnChange__txt">Không</span></button>
                                    </div>
                                    <div>
                                        <button uk-toggle="#modal-close-outside-cam1" class="modal__btnChange modal__btnChange--c1 uk-button uk-button-default uk-border-pill"><span class="modal__btnChange__txt">Có</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/kiem tra mic3-->

    <!--kiem tra cam1-->
    <div id="modal-close-outside-cam1" class="modal uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-dialog-m688 modal__body1 uk-modal-body uk-margin-auto-vertical">
            <button class="uk-modal-close-outside modal__close" type="button" uk-close></button>
            <a class="modal__back uk-modal-close-outside" href="#modal-close-outside-mic2" uk-toggle></a>
            <div>
                <div class="modal__item32">
                    <div class="home__item24">
                        <div class="modal__boxProfile__name">Kiểm tra thiết bị</div>
                    </div>
                    <div class="home__item24">
                        <div class="modal__box3">
                            <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                                <div>
                                    <div class="uk-text-center finish">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>1</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra âm thanh</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-text-center finish">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra Microphone</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-text-center active">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>3</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra Camera</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__item32">
                    <div class="uk-grid-32" uk-grid>
                        <div class="uk-width-auto">
                            <div class="chitietlophoc__boxVideo uk-cover-container">
                                <div>
                                    <video class="uk-position-center" src="https://yootheme.com/site/images/media/yootheme-pro.mp4" loop muted playsinline uk-video="autoplay: inview"></video>
                                </div>
                                <canvas width="220" height="124"></canvas>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="login__item16">
                                <div class="modal__box3__txt1"><span>Bạn có thấy hình ảnh của mình không?</span></div>
                            </div>
                            <div class="login__item16">
                                <div class="uk-child-width-auto uk-grid-16" uk-grid>
                                    <div>
                                        <button class="modal__btnChange modal__btnChange--c1 uk-button uk-button-default uk-border-pill"><span class="modal__btnChange__txt">Không</span></button>
                                    </div>
                                    <div>
                                        <button uk-toggle="#modal-close-outside-cam2" class="modal__btnChange modal__btnChange--c1 uk-button uk-button-default uk-border-pill"><span class="modal__btnChange__txt">Có</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/kiem tra cam1-->

    <!--kiem tra cam2-->
    <div id="modal-close-outside-cam2" class="modal uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-dialog-m688 modal__body1 uk-modal-body uk-margin-auto-vertical">
            <button class="uk-modal-close-outside modal__close" type="button" uk-close></button>
            <a class="modal__back uk-modal-close-outside" href="#modal-close-outside-mic2" uk-toggle></a>
            <div>
                <div class="modal__item32">
                    <div class="home__item24">
                        <div class="modal__boxProfile__name">Kiểm tra thiết bị</div>
                    </div>
                    <div class="home__item24">
                        <div class="modal__box3">
                            <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                                <div>
                                    <div class="uk-text-center finish">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>1</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra âm thanh</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-text-center finish">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>2</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra Microphone</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-text-center finish">
                                        <div class="home__item8">
                                            <div class="modal__box3__step">
                                                <span>3</span>
                                            </div>
                                        </div>
                                        <div class="home__item8">
                                            <div class="modal__box3__txt">Kiểm tra Camera</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__item32">
                    <div class="uk-grid-32" uk-grid>
                        <div class="uk-width-auto">
                            <div class="chitietlophoc__boxVideo uk-cover-container">
                                <div>
                                    <video class="uk-position-center" src="https://yootheme.com/site/images/media/yootheme-pro.mp4" loop muted playsinline uk-video="autoplay: inview"></video>
                                </div>
                                <canvas width="220" height="124"></canvas>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="login__item16">
                                <div class="modal__box3__txt1"><span>Bạn có thấy hình ảnh của mình không?</span></div>
                            </div>
                            <div class="login__item16">
                                <div class="uk-child-width-auto uk-grid-16" uk-grid>
                                    <div>
                                        <button uk-toggle="#modal-close-outside-device-fail" class="modal__btnChange modal__btnChange--c1 uk-button uk-button-default uk-border-pill"><span class="modal__btnChange__txt">Không</span></button>
                                    </div>
                                    <div>
                                        <button uk-toggle="#modal-close-outside-device-done" class="modal__btnChange modal__btnChange--c1 uk-button uk-button-default uk-border-pill"><span class="modal__btnChange__txt">Có</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/kiem tra cam2-->

    <!--kiem tra device done-->
    <div id="modal-close-outside-device-done" class="modal uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-dialog-m400 modal__body1 uk-modal-body uk-margin-auto-vertical">
            <div class="uk-text-center">
                <div class="home__item24">
                    <img src="images/congrats1.png" alt="">
                </div>
                <div class="home__item24">
                    <div class="modal__desc">Chúc mừng bạn đã hoàn thành kiểm tra thiết bị.
                        Bạn đã sẵn sàng để học.</div>
                </div>
                <div class="home__item24">
                    <button class="modal__btnChange modal__btnChange--c1 modal__btnChange--c2 uk-button uk-button-default uk-border-pill uk-modal-close"><span class="modal__btnChange__txt">Xong</span></button>
                </div>
            </div>
        </div>
    </div>
    <!--/kiem tra device done-->

    <!--kiem tra device fail-->
    <div id="modal-close-outside-device-fail" class="modal uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-dialog-m400 modal__body1 uk-modal-body uk-margin-auto-vertical">
            <div class="uk-text-center">
                <div class="home__item24">
                    <img src="images/fail.png" alt="">
                </div>
                <div class="home__item24">
                    <div class="modal__desc">Hmm! Thiết bị của bạn đang bị lỗi?
                        Vui lòng báo lỗi cho Chip Chip hoặc liên hệ hotline CSKH 0359123656 / 0986225107 để được hỗ trợ.</div>
                </div>
                <div class="home__item24">
                    <div class="uk-child-width-auto uk-flex-center uk-grid-16" uk-grid>
                        <div>
                            <button class="modal__btnChange modal__btnChange--c1 modal__btnChange--c2 uk-button uk-button-default uk-border-pill uk-modal-close"><span class="modal__btnChange__txt">Báo lỗi</span></button>
                        </div>
                        <div>
                            <button uk-toggle="#modal-close-outside-sound" class="modal__btnChange modal__btnChange--c1 modal__btnChange--c2 modal__btnChange--c3 uk-button uk-button-default uk-border-pill"><span class="modal__btnChange__txt">Làm lại</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/kiem tra device fail-->


    <!--xem nội dung bài giảng-->
    <div id="modal-close-outside-noidungbaigiang" class="modal uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-dialog-m708 modal__body1 uk-modal-body uk-margin-auto-vertical">
            <button class="uk-modal-close-outside modal__close" type="button" uk-close></button>
            <div>
                <div class="modal__item32">
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="modal__boxProfile__name">What’s the weather like today?</div>
                        </div>
                        <div class="uk-width-auto">
                            <span class="chitietlophoc__card__unit uk-border-pill uk-label uk-label-success">Level 1 Unit 2 Lesson 1</span>
                        </div>
                    </div>
                </div>
                <div class="modal__item32">
                    <div class="home__item24">
                        <div class="modal__txt1">Trong bài học, con sẽ được học các nội dung kiến thức sau:</div>
                    </div>
                    <div class="home__item24">
                        <div class="login__item16">
                            <div class="modal__txt1">1. <span>Từ vựng:</span> build sandcastles, go hiking, go camping, go surfing, go sightseeing.</div>
                        </div>
                        <div class="login__item16">
                            <div class="home__item8">
                                <div class="modal__txt1">2. <span>Mẫu câu:</span></div>
                            </div>
                            <div class="home__item8">
                                <ul class="uk-list uk-list-bullet modal__list">
                                    <li>Where are you going next Monday? - I’m going to visit Bali.</li>
                                    <li>What is he going to go tomorrow? - He’s going to build sandcastles.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="login__item16">
                            <div class="modal__txt1">3. <span>Ngữ pháp:</span> Thì tương lai gần (Be going to + V)</div>
                        </div>
                        <div class="login__item16">
                            <div class="modal__txt1">4. <span>Ngữ âm:</span> Luyện phát âm các từ có âm /w/ (white, whale, win, weight)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/xem nội dung bài giảng-->

    <!--Chưa tới giờ vào lớp-->
    <div id="modal-close-outside-chuatoigiovaolop" class="modal uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-dialog-m320 modal__body1 uk-modal-body uk-margin-auto-vertical">
            <div class="uk-text-center">
                <div class="home__item24">
                    <img src="images/chi-tiet-lop-hoc/congrats2.png" alt="">
                </div>
                <div class="home__item24 home__panel__countdown">
                    <div class="modal__desc">
                        Chưa tới giờ vào lớp.
                        Lớp học sẽ bắt đầu sau
                        <div class="uk-grid-collapse uk-child-width-auto uk-flex-center uk-flex-inline" uk-grid uk-countdown="date: 2021-12-20T17:35:10+00:00">
                            <div>
                                <div class="uk-countdown-number uk-countdown-days"></div>
                            </div>
                            <div class="uk-countdown-separator">:</div>
                            <div>
                                <div class="uk-countdown-number uk-countdown-hours"></div>
                            </div>
                            <div class="uk-countdown-separator">:</div>
                            <div>
                                <div class="uk-countdown-number uk-countdown-minutes"></div>
                            </div>
                            <div class="uk-countdown-separator">:</div>
                            <div>
                                <div class="uk-countdown-number uk-countdown-seconds"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home__item24">
                    <div class="uk-child-width-auto uk-flex-center uk-grid-16" uk-grid>
                        <div>
                            <button class="modal__btnChange modal__btnChange--c1 modal__btnChange--c2 uk-button uk-button-default uk-border-pill uk-modal-close"><span class="modal__btnChange__txt">Thoát</span></button>
                        </div>
                        <div>
                            <a href="chitietlophoc-chuavaolop.php" class="modal__btnChange modal__btnChange--c1 modal__btnChange--c2 modal__btnChange--c3 uk-button uk-button-default uk-border-pill"><span class="modal__btnChange__txt">Vẫn vào</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Chưa tới giờ vào lớp-->

    <!--Modal full-->
    <div id="modal-full" class="uk-modal-full" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
            <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                <div class="uk-background-cover" style="background-image: url('images/photo.jpg');" uk-height-viewport></div>
                <div class="uk-padding-large">
                    <h1>Headline</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
    <!--/Modal full-->

    <!--đã học thử/kết quả đánh giá-->
    <div id="modal-close-outside-ketquadanhgia" class="modal uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-dialog-m808 modal__body1 uk-modal-body uk-margin-auto-vertical">
            <button class="uk-modal-close-outside modal__close" type="button" uk-close></button>
            <div>
                <div class="home__item24">
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="modal__boxProfile__name">Đánh giá sau học thử</div>
                        </div>
                        <div class="uk-width-auto">
                            <a href="muagoihoc.php" class="home__panel__btn home__panel__btn__buy uk-button uk-button-default uk-border-pill">
                                <span class="home__panel__btn__txt">Mua gói học</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="home__item24">
                    <div class="home__item24">
                        <div class="modal__ketquadanhgia__label uk-border-pill"><span>Level 3B</span></div>
                    </div>
                    <div class="home__item24">
                        <ul class="modal__ketquadanhgia__accordion" uk-accordion>
                            <li class="uk-open modal__ketquadanhgia__accordion__li">
                                <a class="uk-accordion-title modal__ketquadanhgia__accordion__title" href="#"><span>Nhận xét của giáo viên</span></a>
                                <div class="uk-accordion-content modal__ketquadanhgia__accordion__content">
                                    <p>Qui ad blanditiis qui suscipit hic iure possimus. Quia qui illum sed repudiandae. Sit officia magnam consequatur. Ut et natus facere porro laudantium aut ratione aperiam. Omnis adipisci aut facere consequuntur modi at aut a voluptas. Ut et natus facere porro laudantium aut ratione aperiam. Omnis adipisci aut facere consequuntur modi at aut a voluptas.</p>
                                </div>
                            </li>
                            <li class="modal__ketquadanhgia__accordion__li">
                                <a class="uk-accordion-title modal__ketquadanhgia__accordion__title" href="#"><span>Ưu điểm</span></a>
                                <div class="uk-accordion-content modal__ketquadanhgia__accordion__content">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                </div>
                            </li>
                            <li class="modal__ketquadanhgia__accordion__li">
                                <a class="uk-accordion-title modal__ketquadanhgia__accordion__title" href="#"><span>Điểm cần cải thiện</span></a>
                                <div class="uk-accordion-content modal__ketquadanhgia__accordion__content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/đã học thử/kết quả đánh giá-->

    <!--home/dự án cá nhân/tải lên dự án-->
    <div id="modal-close-outside-tailenduan" class="modal uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-dialog-m688 modal__body1 uk-modal-body uk-margin-auto-vertical">
            <button class="uk-modal-close-outside modal__close" type="button" uk-close></button>
            <div>
                <div class="modal__item18">
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="modal__boxProfile__name">Tải lên dự án</div>
                        </div>
                        <div class="uk-width-auto">
                            <div uk-form-custom>
                                <input type="file">
                                <button type="button" class="home__panel__btn home__panel__btn__video addImage uk-button uk-button-default uk-border-pill">
                                    <span class="home__panel__btn__txt">Thêm ảnh</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__item18">
                    <div class="home__item12">
                        <div uk-slider>
                            <div class="uk-position-relative">
                                <div class="uk-slider-container uk-light">
                                    <ul class="uk-slider-items uk-child-width-1-1">
                                        <li>
                                            <img src="images/light.jpg" alt="">
                                        </li>
                                        <li>
                                            <img src="images/dark.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="">
                                    <a class="modal__tailenduan__nav modal__tailenduan__nav--left uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="modal__tailenduan__nav modal__tailenduan__nav--right uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home__item12 uk-text-center">
                        <button type="button" uk-toggle="#modal-close-outside-chuatoigiovaolop" class="home__panel__btn home__panel__btn__inClass deleteImage uk-button uk-button-default uk-border-pill" aria-expanded="false">
                            <span class="home__panel__btn__txt">Xóa ảnh này</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/home/dự án cá nhân/tải lên dự án-->

    <!--home/dự án cá nhân/hướng dẫn-->
    <div id="modal-close-outside-huongdan" class="modal uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-dialog-m688 modal__body1 uk-modal-body uk-margin-auto-vertical">
            <button class="uk-modal-close-outside modal__close" type="button" uk-close></button>
            <div>
                <div class="home__item24">
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="modal__boxProfile__name">Hướng dẫn làm dự án</div>
                        </div>
                        <div class="uk-width-auto">

                        </div>
                    </div>
                </div>
                <div class="home__item24">
                    <div class="home__item12">
                        <div uk-slider>
                            <div class="uk-position-relative">
                                <div class="uk-slider-container uk-light">
                                    <ul class="uk-slider-items uk-child-width-1-1">
                                        <li>
                                            <img src="images/light.jpg" alt="">
                                        </li>
                                        <li>
                                            <img src="images/dark.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="">
                                    <a class="modal__tailenduan__nav modal__tailenduan__nav--left uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="modal__tailenduan__nav modal__tailenduan__nav--right uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/home/dự án cá nhân/hướng dẫn-->

    <script>
        UIkit.modal('#modal-close-outside-huongdan').show();
    </script>
</div>

<!--Chat-->
<div id="offcanvas-flip-faq" class="bottom__offcanvas" uk-offcanvas="flip: true; overlay: true">
    <button class="uk-offcanvas-close bottom__offcanvas__close" type="button" uk-close></button>
    <div class="uk-offcanvas-bar bottom__offcanvas__bar uk-flex uk-flex-column">
        <div class="home__item24">
            <ul class="uk-child-width-expand home__offcanvas__tab" uk-tab="connect: .my-class">
                <li class="home__offcanvas__tab__li"><a class="home__offcanvas__tab__a" href="#"><span class="home__offcanvas__tab__txt">Câu hỏi thường gặp</span></a></li>
                <li class="home__offcanvas__tab__li uk-active"><a class="home__offcanvas__tab__a" href="#"><span class="home__offcanvas__tab__txt">Liên hệ</span></a></li>
            </ul>
        </div>
        <div class="home__item24 uk-flex-auto">
            <ul class="uk-switcher uk-margin my-class uk-height-1-1">
                <li>
                    <ul class="home__offcanvas__accordion" uk-accordion>
                        <li class="home__offcanvas__accordion__li">
                            <a class="home__offcanvas__accordion__title uk-accordion-title" href="#"><span>Về giáo viên Chip Chip</span></a>
                            <div class="uk-accordion-content home__offcanvas__accordion__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </li>
                        <li class="home__offcanvas__accordion__li">
                            <a class="home__offcanvas__accordion__title uk-accordion-title" href="#"><span>Về lịch học tại Chip Chip</span></a>
                            <div class="uk-accordion-content home__offcanvas__accordion__content">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                            </div>
                        </li>
                        <li class="home__offcanvas__accordion__li">
                            <a class="home__offcanvas__accordion__title uk-accordion-title" href="#"><span>Chương trình học tại Chip Chip</span></a>
                            <div class="uk-accordion-content home__offcanvas__accordion__content">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="uk-height-1-1">
                    <div class="uk-height-1-1 uk-flex uk-flex-column">
                        <div class="uk-flex-auto uk-overflow-auto" style="height: 50vh;padding-bottom: 20px;">
                            <?php
                            $data = array(
                                array(
                                    'txt' => 'In error magnam rerum. In error magnam rerum.In error magnam rerum.',
                                    'you' => false,
                                ),
                                array(
                                    'txt' => 'In error magnam rerum. In error magnam rerum.In error magnam rerum.',
                                    'you' => true,
                                ),
                                array(
                                    'txt' => 'In error magnam rerum',
                                    'you' => false,
                                ),
                                array(
                                    'txt' => 'In error magnam rerum',
                                    'you' => true,
                                ),
                                array(
                                    'txt' => 'In error magnam rerum. In error magnam rerum.In error magnam rerum.',
                                    'you' => false,
                                ),
                                array(
                                    'txt' => 'In error magnam rerum. In error magnam rerum.In error magnam rerum.',
                                    'you' => true,
                                ),
                                array(
                                    'txt' => 'In error magnam rerum',
                                    'you' => true,
                                ),

                                array(
                                    'txt' => 'In error magnam rerum. In error magnam rerum.In error magnam rerum.',
                                    'you' => false,
                                ),
                                array(
                                    'txt' => 'In error magnam rerum. In error magnam rerum.In error magnam rerum.',
                                    'you' => true,
                                ),
                                array(
                                    'txt' => 'In error magnam rerum',
                                    'you' => false,
                                ),
                                array(
                                    'txt' => 'In error magnam rerum',
                                    'you' => true,
                                ),
                                array(
                                    'txt' => 'In error magnam rerum. In error magnam rerum.In error magnam rerum.',
                                    'you' => false,
                                ),
                                array(
                                    'txt' => 'In error magnam rerum. In error magnam rerum.In error magnam rerum.',
                                    'you' => true,
                                ),
                                array(
                                    'txt' => 'In error magnam rerum',
                                    'you' => true,
                                ),
                            );
                            foreach ($data as $k=>$v): ?>
                                <div class="login__item16 uk-flex <?= ($v['you'])?'uk-flex-right':'uk-flex-left' ?>">
                                    <div class="bottom__offcanvas__chat__content <?= ($v['you'])?'bottom__offcanvas__chat__content--right':'bottom__offcanvas__chat__content--left' ?>">
                                        <?= $v['txt'] ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div>
                            <form class="uk-grid-24 uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <input class="uk-input bottom__offcanvas__input" type="text" placeholder="Nhập nội dung chat...">
                                </div>
                                <div class="uk-width-auto">
                                    <button type="button" class="bottom__offcanvas__btnSend uk-button uk-button-default"></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--/Chat-->
<script>
    // UIkit.modal('#offcanvas-flip-faq').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>