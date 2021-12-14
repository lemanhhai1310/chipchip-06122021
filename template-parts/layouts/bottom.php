<div class="home__top bottom">
    <div class="uk-container uk-padding-remove">
        <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <div class="uk-navbar-item">
                    <a onclick="dodajAktywne(this)" href="#offcanvas-flip-chat" uk-toggle class="bottom__icon bottom__icon--chat"></a>
                </div>
                <div class="uk-navbar-item">
                    <a onclick="dodajAktywne(this)" href="#offcanvas-flip-help" uk-toggle class="bottom__icon bottom__icon--help"></a>
                </div>
                <div class="uk-navbar-item">
                    <a onclick="dodajAktywne(this)" href="#offcanvas-flip-image" uk-toggle class="bottom__icon bottom__icon--image"></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<script>
    function dodajAktywne(elem) {
        // get all 'a' elements
        var a = document.getElementsByTagName('a');
        // loop through all 'a' elements
        for (i = 0; i < a.length; i++) {
            // Remove the class 'active' if it exists
            a[i].classList.remove('uk-active')
        }
        // add 'active' classs to the element that was clicked
        elem.classList.add('uk-active');
    }
</script>
<!--Chat-->
<div id="offcanvas-flip-chat" class="bottom__offcanvas" uk-offcanvas="flip: true; overlay: true">
    <button class="uk-offcanvas-close bottom__offcanvas__close" type="button" uk-close></button>
    <div class="uk-offcanvas-bar bottom__offcanvas__bar uk-flex uk-flex-column">
        <div class="bottom__offcanvas__header bottom__offcanvas__item">
            <h3 class="uk-h3 bottom__offcanvas__title">Tin nhắn</h3>
        </div>
        <div class="bottom__offcanvas__body bottom__offcanvas__item uk-flex-auto uk-overflow-auto">
            <?php
            $data = array(
                array(
                    'txt' => 'In error magnam rerum. In error magnam rerum.In error magnam rerum.',
                    'you' => false,
                ),
                array(
                    'txt' => 'In error magnam rerum. In error magnam rerum.In error magnam rerum.',
                    'you' => true,
                ),
                array(
                    'txt' => 'In error magnam rerum',
                    'you' => false,
                ),
                array(
                    'txt' => 'In error magnam rerum',
                    'you' => true,
                ),
                array(
                    'txt' => 'In error magnam rerum. In error magnam rerum.In error magnam rerum.',
                    'you' => false,
                ),
                array(
                    'txt' => 'In error magnam rerum. In error magnam rerum.In error magnam rerum.',
                    'you' => true,
                ),
                array(
                    'txt' => 'In error magnam rerum',
                    'you' => true,
                ),

                array(
                    'txt' => 'In error magnam rerum. In error magnam rerum.In error magnam rerum.',
                    'you' => false,
                ),
                array(
                    'txt' => 'In error magnam rerum. In error magnam rerum.In error magnam rerum.',
                    'you' => true,
                ),
                array(
                    'txt' => 'In error magnam rerum',
                    'you' => false,
                ),
                array(
                    'txt' => 'In error magnam rerum',
                    'you' => true,
                ),
                array(
                    'txt' => 'In error magnam rerum. In error magnam rerum.In error magnam rerum.',
                    'you' => false,
                ),
                array(
                    'txt' => 'In error magnam rerum. In error magnam rerum.In error magnam rerum.',
                    'you' => true,
                ),
                array(
                    'txt' => 'In error magnam rerum',
                    'you' => true,
                ),
            );
            foreach ($data as $k=>$v): ?>
            <div class="login__item16 uk-flex <?= ($v['you'])?'uk-flex-right':'uk-flex-left' ?>">
                <div class="bottom__offcanvas__chat__content <?= ($v['you'])?'bottom__offcanvas__chat__content--right':'bottom__offcanvas__chat__content--left' ?>">
                    <?= $v['txt'] ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="bottom__offcanvas__footer bottom__offcanvas__item">
            <form class="uk-grid-24 uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <input class="uk-input bottom__offcanvas__input" type="text" placeholder="Nhập nội dung chat...">
                </div>
                <div class="uk-width-auto">
                    <button type="button" class="bottom__offcanvas__btnSend uk-button uk-button-default"></button>
                </div>
            </form>
        </div>

    </div>
</div>
<!--/Chat-->

<!--Trợ giúp-->
<div id="offcanvas-flip-help" class="bottom__offcanvas" uk-offcanvas="flip: true; overlay: true">
    <button class="uk-offcanvas-close bottom__offcanvas__close" type="button" uk-close></button>
    <div class="uk-offcanvas-bar bottom__offcanvas__bar uk-flex uk-flex-column">
        <div class="bottom__offcanvas__header bottom__offcanvas__item">
            <h3 class="uk-h3 bottom__offcanvas__title">Trợ giúp</h3>
        </div>
        <div class="bottom__offcanvas__body bottom__offcanvas__item uk-flex-auto uk-overflow-auto">
            <div class="login__item16">
                <div class="home__item24">
                    <div class="home__item12">
                        <div class="bottom__offcanvas__help__box1">Cách 1: Tải lại lớp học</div>
                    </div>
                    <div class="home__item12">
                        <button type="button" class="home__panel__btn home__panel__btn__video home__panel__btn__refresh uk-button uk-button-default uk-border-pill">
                            <span class="home__panel__btn__txt">Tải lại lớp</span>
                        </button>
                    </div>
                </div>
                <div class="home__item24">
                    <div class="home__item12">
                        <div class="bottom__offcanvas__help__box1">Cách 2: Đưa thiết bị lại gần nơi có sóng wifi mạnh</div>
                    </div>
                </div>
                <div class="home__item24">
                    <div class="home__item12">
                        <div class="bottom__offcanvas__help__box1">Cách 3: Đổi sang kết nối Internet mạnh hơn</div>
                    </div>
                    <div class="home__item12">
                        <div class="bottom__offcanvas__help__txt">Nếu bạn đã thử các cách trên mà vẫn không khắc phục được, hãy gửi yêu cầu cho Admin Chip Chip để được hỗ trợ.</div>
                    </div>
                </div>
            </div>
            <div class="login__item16">
                <div class="home__item12">
                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                        <select>
                            <option value="">Bạn đang gặp vấn đề gì?</option>
                            <option value="1">Option 01</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <button class="bottom__offcanvas__help__btnSelect uk-button uk-button-default uk-width-1-1" type="button" tabindex="-1">
                            <span></span>
                            <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                        </button>
                    </div>
                </div>
                <div class="home__item12">
                    <button type="button" class="home__panel__btn home__panel__btn__send uk-width-1-1 uk-button uk-button-default uk-border-pill">
                        <span class="home__panel__btn__txt">Gửi yêu cầu trợ giúp</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Trợ giúp-->

<!--Hình nền-->
<div id="offcanvas-flip-image" class="bottom__offcanvas" uk-offcanvas="flip: true; overlay: true">
    <button class="uk-offcanvas-close bottom__offcanvas__close" type="button" uk-close></button>
    <div class="uk-offcanvas-bar bottom__offcanvas__bar uk-flex uk-flex-column">
        <div class="bottom__offcanvas__header bottom__offcanvas__item">
            <h3 class="uk-h3 bottom__offcanvas__title">Hình nền</h3>
        </div>
        <div class="bottom__offcanvas__body bottom__offcanvas__item uk-flex-auto uk-overflow-auto">
            <?php for ($i=0;$i<=5;$i++): ?>
            <div class="home__item24 uk-position-relative">
                <label>
                    <input class="uk-radio uk-hidden bottom__offcanvas__image__radio" type="radio" name="radio2" <?= ($i==0)?'checked':'' ?>>
                    <div class="bottom__offcanvas__image__txt uk-position-top-right uk-position-z-index">Hình nền đang chọn</div>
                    <div class="uk-cover-container bottom__offcanvas__image__box1">
                        <img src="images/chi-tiet-lop-hoc/Rectangle10.png" alt="" uk-cover="">
                        <canvas width="382" height="192"></canvas>
                    </div>
                </label>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<!--/Hình nền-->