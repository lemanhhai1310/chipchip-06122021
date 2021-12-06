<?php $data["title"] = "Login"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="login__section signup__section uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-top-left" data-src="images/ImageBackground.png" uk-img uk-height-viewport>
    <div class="uk-width-1-1">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-expand">

                </div>
                <div class="uk-width-auto">
                    <div class="login__box1">
                        <div class="uk-grid-20 uk-form-stacked" uk-grid>
                            <div class="uk-width-1-1 login__column">
                                <h1 class="uk-h1 login__title">Đăng ký</h1>
                            </div>
                            <div class="uk-width-1-2@s login__column">
                                <label class="uk-form-label login__label" for="form-stacked-text">Số điện thoại</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input login__input uk-border-pill" id="form-stacked-text" type="text" placeholder="Nhập số điện thoại...">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s login__column">
                                <label class="uk-form-label login__label" for="form-stacked-text">Mã xác nhận số điện thoại</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input login__input uk-border-pill" id="form-stacked-text" type="text" placeholder="Nhập mã xác nhận">
                                </div>
                            </div>
                            <div class="uk-width-1-1 login__column">
                                <label class="uk-form-label login__label" for="form-stacked-text">Họ và tên bé</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input login__input uk-border-pill" id="form-stacked-text" type="text" placeholder="Nhập tên con...">
                                </div>
                            </div>
                            <div class="uk-width-1-1 login__column">
                                <label class="uk-form-label login__label" for="form-stacked-text">Tuổi của bé</label>
                                <div class="uk-form-controls">
                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                        <select>
                                            <option value="">Chọn tuổi của con</option>
                                            <option value="1">Option 01</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                        </select>
                                        <button class="signup__btnSelect uk-border-pill uk-position-relative uk-button uk-button-default uk-width-1-1" type="button" tabindex="-1">
                                            <span></span>
                                            <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1 login__column uk-text-center">
                                <div class="signup__item20">
                                    <button type="button" class="login__btn uk-button uk-button-primary uk-width-1-1 uk-border-pill"><span>Đăng ký ngay</span></button>
                                </div>
                                <div class="signup__item20">
                                    <span class="login__txt">Đã có tài khoản? <a href="login.php">Đăng nhập</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="login__logo uk-position-bottom-left">
        <img src="images/logo@4x1.png" alt="">
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>