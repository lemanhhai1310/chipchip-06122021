<?php $data["title"] = "Mua goi hoc"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/ImageBackgroundhome.png" uk-img uk-height-viewport>
    <div class="home__top">
        <div class="uk-container uk-padding-remove">
            <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item">
                        <a href="." class="top__iconBack" data-txt="Các gói học của Chip Chip"></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="uk-flex uk-flex-middle" uk-height-viewport="offset-top: true;offset-bottom: true">
        <div class="muagoihoc__section uk-width-1-1">
            <div class="uk-container">
                <div class="uk-child-width-1-4 uk-flex-middle uk-grid-14" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'name' => 'Gói 12 buổi',
                            'price' => '1.500.000đ',
                            'priceOld' => '1.650.000đ',
                            'percent' => 'Tiết kiệm 10%',
                            'active' => false,
                        ),
                        array(
                            'name' => 'Gói 30 buổi',
                            'price' => '3.560.000',
                            'priceOld' => '4.500.000đ',
                            'percent' => 'Tiết kiệm 20%',
                            'active' => false,
                        ),
                        array(
                            'name' => 'Gói 60 buổi',
                            'price' => '6.000.000đ',
                            'priceOld' => '7.500.000đ',
                            'percent' => 'Tiết kiệm 25%',
                            'active' => true,
                        ),
                        array(
                            'name' => 'Gói 12 buổi',
                            'price' => '1.500.000đ',
                            'priceOld' => '1.650.000đ',
                            'percent' => 'Tiết kiệm 10%',
                            'active' => false,
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                    <div>
                        <div class="muagoihoc__card uk-position-relative uk-card uk-card-body uk-card-default <?= ($v['active'])?'uk-light':'' ?>">
                            <?php if ($v['active']): ?>
                                <div class="uk-position-top-right muagoihoc__card__tag">
                                    <span>Phổ biến</span>
                                </div>
                            <?php endif; ?>
                            <div>
                                <div class="muagoihoc__item56">
                                    <div class="home__item24">
                                        <div class="home__item4">
                                            <div class="muagoihoc__card__name"><?= $v['name'] ?></div>
                                        </div>
                                        <div class="home__item4">
                                            <div class="muagoihoc__card__price"><?= $v['price'] ?></div>
                                        </div>
                                        <div class="home__item4">
                                            <div class="uk-child-width-auto uk-grid-9 uk-flex-middle" uk-grid>
                                                <div>
                                                    <span class="uk-label muagoihoc__card__label"><?= $v['percent'] ?></span>
                                                </div>
                                                <div>
                                                    <del class="muagoihoc__card__priceOld"><?= $v['priceOld'] ?></del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="home__item24">
                                        <div class="login__item16">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="muagoihoc__card__txt2">Thời gian</div>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <span class="muagoihoc__card__txt1">4 tháng</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="login__item16">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="muagoihoc__card__txt2">Bù lỗi kỹ thuật</div>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <span class="muagoihoc__card__txt1">2 buổi</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="login__item16">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="muagoihoc__card__txt2">Hỗ trợ học tập</div>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <span class="muagoihoc__card__txt1">24/7</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="muagoihoc__item56">
                                    <a href="thanhtoan1.php" class="login__btn uk-button uk-button-primary uk-width-1-1 uk-border-pill"><span>Thanh toán</span></a>
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
<?php require "template-parts/layouts/footer.php"; ?>