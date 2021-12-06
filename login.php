<?php $data["title"] = "Signup"; ?>
<?php require "template-parts/layouts/header.php"; ?>
    <div class="login__section uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-top-left" data-src="images/ImageBackground.png" uk-img uk-height-viewport>
        <div class="uk-width-1-1">
            <div class="uk-container">
                <div uk-grid>
                    <div class="uk-width-expand">

                    </div>
                    <div class="uk-width-auto">
                        <div class="login__box1">
                            <div class="uk-grid-20 uk-form-stacked" uk-grid>
                                <div class="uk-width-1-1 login__column">
                                    <h1 class="uk-h1 login__title">Đăng nhập</h1>
                                </div>
                                <div class="uk-width-1-1 login__column">
                                    <label class="uk-form-label login__label" for="form-stacked-text">Tài khoản</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input login__input uk-border-pill" id="form-stacked-text" type="text" placeholder="Nhập tài khoản...">
                                    </div>
                                </div>
                                <div class="uk-width-1-1 login__column">
                                    <div class="login__item16">
                                        <label class="uk-form-label login__label" for="form-stacked-text">Mật khẩu</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input login__input uk-border-pill" id="form-stacked-text" type="text" placeholder="Nhập mật khẩu...">
                                        </div>
                                    </div>
                                    <div class="login__item16">
                                        <div class="uk-grid-small uk-child-width-auto uk-grid">
                                            <label><input class="uk-checkbox login__checkbox" type="checkbox" checked> <span class="login__txt">Hiện mật khẩu</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-1-1 login__column">
                                    <button type="button" class="login__btn uk-button uk-button-primary uk-width-1-1 uk-border-pill"><span>Đăng nhập</span></button>
                                </div>
                                <div class="uk-width-1-1 login__column uk-text-center">
                                    <div class="login__item16">
                                        <span class="login__txt">Chưa có tài khoản? <a href="signup.php">Đăng ký ngay</a></span>
                                    </div>
                                    <div class="login__item16">
                                        <a href="" class="login__forgot">Quên mật khẩu?</a>
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