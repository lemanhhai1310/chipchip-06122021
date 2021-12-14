<?php $data["title"] = "Chi tiet lop hoc"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/chi-tiet-lop-hoc/ImageBackground.png" uk-img uk-height-viewport>
    <?php require "template-parts/layouts/top.php"; ?>
    <div class="uk-flex uk-flex-middle" uk-height-viewport="offset-top: true;offset-bottom: true">
        <div class="chitietlophoc__section uk-width-1-1">
            <div class="uk-container">
                <div class="uk-grid-24 uk-grid-match" uk-grid>
                    <div class="uk-width-expand">
                        <div class="chitietlophoc__card uk-card uk-card-default uk-flex uk-flex-column">
                            <div class="chitietlophoc__card__header uk-card-header">
                                <div class="uk-child-width-auto uk-flex-middle uk-grid-small uk-flex-between" uk-grid>
                                    <div>
                                        <h1 class="uk-h1 chitietlophoc__card__title">What’s weather like today?</h1>
                                    </div>
                                    <div>
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
                                    <div>
                                        <span class="chitietlophoc__card__unit uk-border-pill uk-label uk-label-success">Level 1 Unit 2 Lesson 1</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chitietlophoc__card__body uk-card-body uk-flex-auto uk-flex-middle uk-flex uk-flex-center">
                                <div class="uk-text-center">
                                    <div class="home__item8">
                                        <img src="images/chi-tiet-lop-hoc/congrats2.png" alt="">
                                    </div>
                                    <div class="home__item8">
                                        <span class="chitietlophoc__card__txt">Lớp học chưa tới giờ bắt đầu.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3">
                        <div class="uk-grid-24 uk-grid-match" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'src' => 'images/chi-tiet-lop-hoc/Rectangle13.png',
                                    'name' => 'Thầy Edward',
                                ),
                                array(
                                    'src' => 'images/chi-tiet-lop-hoc/Rectangle14.png',
                                    'name' => '',
                                ),
                            );
                            foreach ($data as $k=>$v): ?>
                            <div class="uk-width-1-1">
                                <div class="chitietlophoc__boxVideo uk-cover-container">
                                    <?php if ($k==0): ?>
                                        <div class="chitietlophoc__boxVideo__avarta uk-cover-container uk-border-circle uk-position-center">
                                            <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                                            <canvas width="80" height="80"></canvas>
                                        </div>
                                    <?php else: ?>
                                        <div>
                                            <video class="uk-position-center" src="https://yootheme.com/site/images/media/yootheme-pro.mp4" loop muted playsinline uk-video="autoplay: inview"></video>
                                        </div>
                                    <?php endif; ?>
                                    <canvas width="420" height="238"></canvas>
                                    <div class="chitietlophoc__boxVideo__box uk-position-bottom uk-position-small">
                                        <div class="uk-flex-middle uk-grid-small" uk-grid>
                                            <div class="uk-width-expand">
                                                <?php if ($k==0): ?>
                                                    <span class="chitietlophoc__boxVideo__name"><?= $v['name'] ?></span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="uk-width-auto">
                                                <?php if ($k==0): ?>
                                                    <div class="chitietlophoc__boxVideo__signal error">Chưa kết nối</div>
                                                <?php else: ?>
                                                    <div class="chitietlophoc__boxVideo__signal">Tín hiệu tốt</div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require "template-parts/layouts/bottom.php"; ?>
</div>
<?php require "template-parts/layouts/footer.php"; ?>