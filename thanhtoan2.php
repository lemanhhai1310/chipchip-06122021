<?php $data["title"] = "Thanh toan 2"; ?>
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
                <div class="thanhtoan__width uk-position-relative">
                    <a href="thanhtoan1.php" class="thanhtoan__back"></a>
                    <div>
                        <div class="home__item24">
                            <div class="thanhtoan__card">
                                <div class="thanhtoan__card__item">
                                    <h3 class="uk-h3 thanhtoan__card__title">Thông tin chuyển khoản</h3>
                                </div>
                                <div class="thanhtoan__card__item">

                                </div>
                            </div>
                        </div>
                        <div class="home__item24">
                            <div class="home__item8">
                                <div class="thanhtoan__desc">Nếu bạn đã chuyển khoản thành công, vui lòng nhấn nút xác nhận để hoàn tất giao dịch.</div>
                            </div>
                            <div class="home__item8">
                                <a href="" class="thanhtoan__btn uk-border-pill uk-button uk-button-default uk-width-1-1"><span>Đã chuyển tiền</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>