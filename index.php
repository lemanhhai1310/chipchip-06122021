<?php $data["title"] = "Trang chủ"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/ImageBackgroundhome.png" uk-img uk-height-viewport>
    <div class="home__top">
        <div class="uk-container uk-padding-remove">
            <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item">
                        <div class="home__top__box1 uk-border-pill">
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
                                                <button type="button" class="home__panel__btn home__panel__btn__inClass uk-width-1-1 uk-button uk-button-default uk-border-pill">
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
                                                    <button type="button" class="home__panel__btn home__panel__btn__buy uk-width-1-1 uk-button uk-button-default uk-border-pill">
                                                        <span class="home__panel__btn__txt">Mua gói học</span>
                                                    </button>
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
                                        <li>
                                            <div class="uk-panel home__panel1">

                                            </div>
                                        </li>
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
                                                                <button type="button" class="home__panel__btn home__panel__btn__default uk-width-1-1 uk-button uk-button-default uk-border-pill">
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
</div>
<?php require "template-parts/layouts/footer.php"; ?>