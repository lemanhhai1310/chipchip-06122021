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
                        <a href=""><img src="images/Frame11.png" alt=""></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="uk-container uk-container-expand-right">

        <div uk-slider="finite: true;sets: true;">

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light" style="overflow: inherit">
                    <ul class="uk-slider-items uk-grid uk-grid-24 uk-child-width-auto" uk-grid>
                        <?php for ($i=0;$i<=10;$i++): ?>
                            <?php if ($i==2): ?>
                                <li>
                                    <div class="uk-panel home__panel1">

                                    </div>
                                </li>
                            <?php else: ?>
                                <li>
                                    <div class="uk-panel home__panel">

                                    </div>
                                </li>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>