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
                                    <ul class="uk-child-width-expand thanhtoan__tab" uk-tab>
                                        <li class="uk-active thanhtoan__tab__li">
                                            <a class="thanhtoan__tab__a" href="#">
                                                <span class="thanhtoan__tab__logo" data-src="images/thanhtoan/techcombank.png" uk-img></span>
                                            </a>
                                        </li>
                                        <li class="thanhtoan__tab__li">
                                            <a class="thanhtoan__tab__a" href="#">
                                                <span class="thanhtoan__tab__logo" data-src="images/thanhtoan/mbank.png" uk-img></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="uk-switcher">
                                        <li>
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-1-2">
                                                    <div class="home__item4">
                                                        <span class="thanhtoan__tabContent__label">Ngân hàng</span>
                                                    </div>
                                                    <div class="home__item4">
                                                        <div class="thanhtoan__tabContent__txt">Techcombank</div>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-2">
                                                    <div class="home__item4">
                                                        <span class="thanhtoan__tabContent__label">Chi nhánh</span>
                                                    </div>
                                                    <div class="home__item4">
                                                        <div class="thanhtoan__tabContent__txt">Thanh Xuân</div>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-2">
                                                    <div class="home__item4">
                                                        <span class="thanhtoan__tabContent__label">Tên tài khoản</span>
                                                    </div>
                                                    <div class="home__item4">
                                                        <div class="thanhtoan__tabContent__txt">Phan Mạnh Quỳnh</div>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-2">
                                                    <div class="home__item4">
                                                        <span class="thanhtoan__tabContent__label">Số tài khoản</span>
                                                    </div>
                                                    <div class="home__item4">
                                                        <div class="uk-position-relative">
                                                            <div class="thanhtoan__tabContent__txt">9103 7168 6761</div>
                                                            <span class="uk-position-top-right thanhtoan__tabContent__copy"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-1">
                                                    <div class="home__item4">
                                                        <span class="thanhtoan__tabContent__label">Số tiền</span>
                                                    </div>
                                                    <div class="home__item4">
                                                        <div class="uk-position-relative">
                                                            <div class="thanhtoan__tabContent__txt">2.860.000</div>
                                                            <span class="uk-position-top-right thanhtoan__tabContent__copy"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-1">
                                                    <div class="home__item4">
                                                        <span class="thanhtoan__tabContent__label">Nội dung chuyển khoản</span>
                                                    </div>
                                                    <div class="home__item4">
                                                        <div class="uk-position-relative">
                                                            <div class="thanhtoan__tabContent__txt">21561571617 HS Vu Khac Minh gia han lan 1</div>
                                                            <span class="uk-position-top-right thanhtoan__tabContent__copy"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    </ul>
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