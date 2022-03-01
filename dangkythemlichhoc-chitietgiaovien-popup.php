<?php $data["title"] = "Đăng ký lịch học - chi tiet giao vien - popup"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="thanhtoan__navbarNav uk-navbar-container uk-background-default" uk-navbar>
    <div class="uk-navbar-left">
        <div class="uk-navbar-item">
            <h1 class="uk-h1 uk-margin-remove thanhtoan__navbarNav__title">Đăng ký lịch học</h1>
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
        <div class="uk-margin">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-child-width-auto uk-grid-10" uk-grid>
                        <div>
                            <a href="" class="dangkythemlichhoc__btn uk-button-large uk-button uk-button-default uk-border-pill uk-active"><span>Theo thời gian học</span></a>
                        </div>
                        <div>
                            <a href="" class="dangkythemlichhoc__btn uk-button-large uk-button uk-button-default uk-border-pill"><span>Theo giáo viên</span></a>
                        </div>
                    </div>
                </div>
                <div class="uk-width-auto">
                    <div class="dangkythemlichhoc__box3 uk-border-pill">
                        <ul class="uk-child-width-auto dangkythemlichhoc__box3__nav" uk-grid>
                            <li class="dangkythemlichhoc__box3__li finish"><a href="" class="dangkythemlichhoc__box3__btn uk-button uk-button-default uk-border-pill">8:00 AM | Thứ 7 19/02</a></li>
                            <li class="dangkythemlichhoc__box3__li uk-active"><a href="" class="dangkythemlichhoc__box3__btn uk-button uk-button-default uk-border-pill">Chọn giáo viên</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-margin-top">
            <div class="dangkythemlichhoc__card uk-card uk-card-default uk-card-body">
                <div class="uk-margin">
                    <div uk-grid>
                        <div class="uk-width-expand">
                            <div class="uk-h1 uk-margin-remove thanhtoan__navbarNav__title">Chọn giáo viên</div>
                        </div>
                        <div class="uk-width-auto">
                            <form class="uk-search uk-search-default dangkythemlichhoc__search">
                                <span class="dangkythemlichhoc__search__icon" uk-search-icon></span>
                                <input class="uk-search-input uk-form-large dangkythemlichhoc__search__input" type="search" placeholder="Tìm theo tên giáo viên">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-top">
                    <div class="uk-child-width-1-3 uk-grid-20" uk-grid>
                        <?php for ($i=0;$i<=10;$i++): ?>
                        <div>
                            <div class="uk-card uk-card-body dangkythemlichhoc__box4">
                                <div class="login__item16">
                                    <div class="uk-flex-middle uk-grid-8" uk-grid>
                                        <div class="uk-width-auto">
                                            <div class="uk-cover-container uk-border-circle">
                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                                <canvas width="48" height="48"></canvas>
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="dangkythemlichhoc__box4__name">Thầy Edward</div>
                                                    <div class="dangkythemlichhoc__box4__txt1">1234 lớp đã dạy</div>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <div class="uk-text-right">
                                                        <div class="dangkythemlichhoc__box4__rate uk-flex uk-flex-right">
                                                            <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                            <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                            <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                            <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                            <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                        </div>
                                                        <div class="dangkythemlichhoc__box4__txt1">5 đánh giá</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="login__item16">
                                    <div class="dangkythemlichhoc__box4__txt2">Chứng chỉ: TESOL, TEFL</div>
                                    <div class="dangkythemlichhoc__box4__txt2">Kinh nghiệm: 3 - 5 years</div>
                                </div>
                                <div class="login__item16">
                                    <div class="uk-child-width-auto uk-grid-8" uk-grid>
                                        <div>
                                            <div class="dangkythemlichhoc__box4__tag uk-button uk-button-default uk-button-small uk-border-pill"><span>Chú ý sửa lỗi</span></div>
                                        </div>
                                        <div>
                                            <div class="dangkythemlichhoc__box4__tag uk-button uk-button-default uk-button-small uk-border-pill"><span>Tập trung kết quả</span></div>
                                        </div>
                                        <div>
                                            <div class="dangkythemlichhoc__box4__tag uk-button uk-button-default uk-button-small uk-border-pill"><span>Sáng tạo</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="login__item16">
                                    <div class="uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <a href="#modal-close-outside-xacnhandatlich" uk-toggle class="login__btn uk-button uk-button-primary uk-width-1-1 uk-border-pill"><span>Đặt lịch</span></a>
                                        </div>
                                        <div class="uk-width-auto">
                                            <a href="" class="dangkythemlichhoc__box4__linkchitiet">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-close-outside-chitietgiaovien" class="modal dangkythemlichhoc__modal uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-dialog-m976 modal__body1 uk-modal-body uk-margin-auto-vertical">
        <div class="" id="container-1">
            <div class="uk-margin">
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <div class="uk-grid-10 uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <a href="" class="dangkythemlichhoc__icon dangkythemlichhoc__icon--left" uk-icon="icon: arrow-left"></a>
                            </div>
                            <div class="uk-width-expand">
                                <div class="dangkythemlichhoc__chitietgiaovien__title">Chi tiết giáo viên</div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-auto">
                        <a href="" class="login__btn uk-button uk-button-primary uk-width-1-1 uk-border-pill"><span>Đặt lịch</span></a>
                    </div>
                </div>
            </div>
            <div class="uk-margin-top">
                <div class="uk-grid-20" uk-grid>
                    <div class="uk-width-expand">
                        <div class="uk-margin-small">
                            <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
                        </div>
                        <div class="uk-margin-small-top">
                            <div class="uk-padding-small uk-display-inline-block dangkythemlichhoc__chitietgiaovien__box">🔥 Giáo viên hot: 31 lớp được đặt trong 3 ngày qua</div>
                        </div>
                    </div>
                    <div class="uk-width-2-5">
                        <div class="dangkythemlichhoc__chitietgiaovien__scroll" style="overflow-x: hidden" uk-overflow-auto>
                            <div class="uk-margin">
                                <div class="uk-margin-small">
                                    <div class="uk-flex-middle uk-grid-8" uk-grid>
                                        <div class="uk-width-auto">
                                            <div class="uk-cover-container uk-border-circle">
                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                                <canvas width="48" height="48"></canvas>
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="dangkythemlichhoc__box4__name">Thầy Edward</div>
                                                    <div class="dangkythemlichhoc__box4__txt1">1234 lớp đã dạy</div>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <div class="uk-text-right">
                                                        <div class="dangkythemlichhoc__box4__rate uk-flex uk-flex-right">
                                                            <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                            <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                            <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                            <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                            <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                        </div>
                                                        <div class="dangkythemlichhoc__box4__txt1">5 đánh giá</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-margin-small-top">
                                    <div class="uk-padding-small dangkythemlichhoc__chitietgiaovien__box1">
                                        <div class="uk-child-width-1-2 uk-grid-divider uk-text-center" uk-grid>
                                            <div>
                                                <div class="dangkythemlichhoc__chitietgiaovien__box1__txt1">Chứng chỉ</div>
                                                <div class="dangkythemlichhoc__chitietgiaovien__box1__txt2">TESOL, TEFL</div>
                                            </div>
                                            <div>
                                                <div class="dangkythemlichhoc__chitietgiaovien__box1__txt1">Kinh nghiệm</div>
                                                <div class="dangkythemlichhoc__chitietgiaovien__box1__txt2">3 - 5 years</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="dangkythemlichhoc__chitietgiaovien__label home__item6">Giới thiệu</div>
                                <div class="home__item6">
                                    <div class="dangkythemlichhoc__chitietgiaovien__desc">Qui ad blanditiis qui suscipit hic iure possimus. Quia qui illum sed repudiandae. Sit officia magnam consequatur. Ut et natus facere porro laudantium aut ratione aperiam.</div>
                                </div>
                                <div class="home__item6">
                                    <div class="uk-child-width-auto uk-grid-8" uk-grid>
                                        <div>
                                            <div class="dangkythemlichhoc__box4__tag uk-button uk-button-default uk-button-small uk-border-pill"><span>Chú ý sửa lỗi</span></div>
                                        </div>
                                        <div>
                                            <div class="dangkythemlichhoc__box4__tag uk-button uk-button-default uk-button-small uk-border-pill"><span>Mở rộng bài</span></div>
                                        </div>
                                        <div>
                                            <div class="dangkythemlichhoc__box4__tag uk-button uk-button-default uk-button-small uk-border-pill"><span>SD nhiều giáo cụ</span></div>
                                        </div>
                                        <div>
                                            <div class="dangkythemlichhoc__box4__tag uk-button uk-button-default uk-button-small uk-border-pill"><span>Tập trung vào hội thoại</span></div>
                                        </div>
                                        <div>
                                            <div class="dangkythemlichhoc__box4__tag uk-button uk-button-default uk-button-small uk-border-pill"><span>Nhiệt huyết</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="dangkythemlichhoc__chitietgiaovien__label home__item6">Trình độ</div>
                                <div class="home__item6">
                                    <div class="uk-text-center uk-padding-small dangkythemlichhoc__modal__box1">
                                        <span class="dangkythemlichhoc__modal__txt">Bachelor’s</span>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="dangkythemlichhoc__chitietgiaovien__label home__item6">Chứng chỉ</div>
                                <div class="home__item6">
                                    <div class="dangkythemlichhoc__chitietgiaovien__box2 uk-overflow-auto">
                                        <div class="uk-child-width-auto uk-flex-nowrap dangkythemlichhoc__chitietgiaovien__box2__grid uk-grid-small" uk-grid>
                                            <?php for ($i=1;$i<=3;$i++): ?>
                                                <div>
                                                    <div class="home__item4">
                                                        <div class="uk-label uk-border-pill dangkythemlichhoc__chitietgiaovien__box2__label">TOEIC</div>
                                                    </div>
                                                    <div class="home__item4">
                                                        <div class="uk-cover-container">
                                                            <img src="images/image1-chungchi.png" alt="" uk-cover="">
                                                            <canvas width="300" height="230"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="dangkythemlichhoc__chitietgiaovien__label home__item6">Đánh giá từ phụ huynh</div>
                                <div class="home__item6">
                                    <div class="home__item4">
                                        <div class="uk-flex-middle uk-grid-8" uk-grid>
                                            <div class="uk-width-auto">
                                                <div class="uk-cover-container uk-border-circle">
                                                    <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                                    <canvas width="60" height="60"></canvas>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <div class="uk-flex-middle" uk-grid>
                                                    <div class="uk-width-expand">
                                                        <div class="dangkythemlichhoc__box4__name">Vũ Đức Hoàng</div>
                                                        <div class="dangkythemlichhoc__box4__txt1">1234 lớp đã dạy</div>
                                                    </div>
                                                    <div class="uk-width-auto">
                                                        <div class="uk-text-right">
                                                            <div class="dangkythemlichhoc__box4__rate uk-flex uk-flex-right">
                                                                <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="home__item4">
                                        <div class="dangkythemlichhoc__chitietgiaovien__desc">Qui ad blanditiis qui suscipit hic iure possimus. Quia qui illum sed repudiandae. Sit officia magnam consequatur. Ut et natus facere porro laudantium...</div>
                                    </div>
                                </div>
                                <div class="home__item6">
                                    <div class="home__item4">
                                        <div class="uk-flex-middle uk-grid-8" uk-grid>
                                            <div class="uk-width-auto">
                                                <div class="uk-cover-container uk-border-circle">
                                                    <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                                    <canvas width="60" height="60"></canvas>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <div class="uk-flex-middle" uk-grid>
                                                    <div class="uk-width-expand">
                                                        <div class="dangkythemlichhoc__box4__name">Vũ Đức Hoàng</div>
                                                        <div class="dangkythemlichhoc__box4__txt1">1234 lớp đã dạy</div>
                                                    </div>
                                                    <div class="uk-width-auto">
                                                        <div class="uk-text-right">
                                                            <div class="dangkythemlichhoc__box4__rate uk-flex uk-flex-right">
                                                                <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="home__item4">
                                        <div class="dangkythemlichhoc__chitietgiaovien__desc">Qui ad blanditiis qui suscipit hic iure possimus. Quia qui illum sed repudiandae. Sit officia magnam consequatur. Ut et natus facere porro laudantium...</div>
                                    </div>
                                </div>
                                <div class="home__item6">
                                    <a href="" class="dangkythemlichhoc__chitietgiaovien__btn1 uk-button uk-button-default uk-width-1-1"><span>Xem tất cả 23 đánh giá</span></a>
                                </div>
                            </div>
                            <div class="uk-margin-top">
                                <div class="dangkythemlichhoc__chitietgiaovien__label home__item6">Giáo viên tương tự</div>
                                <div class="home__item6">
                                    <div class="home__item4">
                                        <div class="uk-padding-small dangkythemlichhoc__chitietgiaovien__box1">
                                            <div class="uk-flex-middle uk-grid-8" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="uk-cover-container uk-border-circle">
                                                        <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                                        <canvas width="48" height="48"></canvas>
                                                    </div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="uk-flex-middle" uk-grid>
                                                        <div class="uk-width-expand">
                                                            <div class="dangkythemlichhoc__box4__name">Lola Mohr</div>
                                                        </div>
                                                        <div class="uk-width-auto">
                                                            <div class="uk-text-right">
                                                                <div class="dangkythemlichhoc__box4__rate uk-flex uk-flex-right">
                                                                    <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                    <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                    <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                    <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                    <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="home__item4">
                                        <div class="uk-padding-small dangkythemlichhoc__chitietgiaovien__box1">
                                            <div class="uk-flex-middle uk-grid-8" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="uk-cover-container uk-border-circle">
                                                        <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                                        <canvas width="48" height="48"></canvas>
                                                    </div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="uk-flex-middle" uk-grid>
                                                        <div class="uk-width-expand">
                                                            <div class="dangkythemlichhoc__box4__name">Jared Kuphal</div>
                                                        </div>
                                                        <div class="uk-width-auto">
                                                            <div class="uk-text-right">
                                                                <div class="dangkythemlichhoc__box4__rate uk-flex uk-flex-right">
                                                                    <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                    <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                    <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                    <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                    <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="home__item4">
                                        <div class="uk-padding-small dangkythemlichhoc__chitietgiaovien__box1">
                                            <div class="uk-flex-middle uk-grid-8" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="uk-cover-container uk-border-circle">
                                                        <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                                        <canvas width="48" height="48"></canvas>
                                                    </div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="uk-flex-middle" uk-grid>
                                                        <div class="uk-width-expand">
                                                            <div class="dangkythemlichhoc__box4__name">Lena Reichel</div>
                                                        </div>
                                                        <div class="uk-width-auto">
                                                            <div class="uk-text-right">
                                                                <div class="dangkythemlichhoc__box4__rate uk-flex uk-flex-right">
                                                                    <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                    <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                    <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                    <span class="dangkythemlichhoc__box4__rate__icon"></span>
                                                                    <span class="dangkythemlichhoc__box4__rate__icon"></span>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    UIkit.modal('#modal-close-outside-chitietgiaovien').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>