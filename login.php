<?php $data["title"] = "Login"; ?>
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
                                <label class="uk-form-label" for="form-stacked-text">Tài khoản</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-stacked-text" type="text" placeholder="Some text...">
                                </div>
                            </div>
                            <div class="uk-width-1-1 login__column">
                                <label class="uk-form-label" for="form-stacked-text">Tài khoản</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-stacked-text" type="text" placeholder="Some text...">
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