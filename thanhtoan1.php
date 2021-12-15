<?php $data["title"] = "Thanh toan 1"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="thanhtoan__navbarNav uk-navbar-container uk-background-default" uk-navbar>
    <div class="uk-navbar-left">
        <div class="uk-navbar-item">
            <h1 class="uk-h1 uk-margin-remove thanhtoan__navbarNav__title">Thanh toán gói học</h1>
        </div>
    </div>
    <div class="uk-navbar-right">
        <a href="muagoihoc.php" class="uk-navbar-item">
            <span class="thanhtoan__navbarNav__close"></span>
        </a>
    </div>
</nav>
<div class="thanhtoan__section" uk-height-viewport="offset-top: true;offset-bottom: true">
    <div class="uk-container">
        <div class="uk-flex-center" uk-grid>
            <div class="uk-width-auto">
                <div class="thanhtoan__width">
                    <div class="home__item24">
                        <div class="thanhtoan__card">
                            <div class="thanhtoan__card__item">
                                <h3 class="uk-h3 thanhtoan__card__title">Chi tiết thanh toán</h3>
                            </div>
                            <div class="thanhtoan__card__item">
                                <div class="login__item16">
                                    <div class="home__item6">
                                        <div class="uk-flex-middle" uk-grid>
                                            <div class="uk-width-expand">
                                                <span class="thanhtoan__card__txt1">Gói 30 buổi</span>
                                            </div>
                                            <div class="uk-width-auto">
                                                <span class="thanhtoan__card__txt1">3.560.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="home__item6">
                                        <div class="uk-flex-middle" uk-grid>
                                            <div class="uk-width-expand">
                                                <span class="muagoihoc__card__priceOld">30 buổi x 190.000đ</span>
                                            </div>
                                            <div class="uk-width-auto">
                                                <div class="uk-child-width-auto uk-grid-9 uk-flex-middle" uk-grid>
                                                    <div>
                                                        <span class="uk-label muagoihoc__card__label">-25%</span>
                                                    </div>
                                                    <div>
                                                        <del class="muagoihoc__card__priceOld">5.700.000đ</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="login__item16">
                                    <div class="uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <span class="thanhtoan__card__txt1">Ưu đãi mua lần 2</span>
                                        </div>
                                        <div class="uk-width-auto">
                                            <span class="thanhtoan__card__txt1">-700.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="thanhtoan__card__item">
                                <div class="uk-flex-middle" uk-grid>
                                    <div class="uk-width-expand">
                                        <span class="thanhtoan__card__txt1">Tổng tiền</span>
                                    </div>
                                    <div class="uk-width-auto">
                                        <span class="thanhtoan__card__txt1">2.860.000đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home__item24">
                        <div class="thanhtoan__card">
                            <div class="thanhtoan__card__item">
                                <h3 class="uk-h3 thanhtoan__card__title">Hình thức thanh toán</h3>
                            </div>
                            <div class="thanhtoan__card__item">
                                <div class="uk-grid-16 uk-child-width-1-1 uk-grid" uk-grid>
                                    <label>
                                        <input class="uk-radio thanhtoan__radio" type="radio" name="radio2" checked>
                                        <span class="thanhtoan__txtLabel thanhtoan__txtLabel--chuyenkhoan">Chuyển khoản</span>
                                    </label>
                                    <label>
                                        <input class="uk-radio thanhtoan__radio" type="radio" name="radio2">
                                        <span class="thanhtoan__txtLabel thanhtoan__txtLabel--the">Thanh toán qua thẻ</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home__item24">
                        <a href="thanhtoan2.php" class="thanhtoan__btn uk-border-pill uk-button uk-button-default uk-width-1-1"><span>Thanh toán</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>