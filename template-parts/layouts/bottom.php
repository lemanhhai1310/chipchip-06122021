<div class="home__top bottom">
    <div class="uk-container uk-padding-remove">
        <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <div class="uk-navbar-item">
                    <a onclick="dodajAktywne(this)" href="#offcanvas-flip-chat" class="uk-text-center uk-link-toggle" uk-toggle>
                        <div class="bottom__icon bottom__icon--chat"></div>
                        <div class="uk-navbar-subtitle bottom__subtitle">Subtitle</div>
                    </a>
                </div>
                <div class="uk-navbar-item">
                    <a onclick="dodajAktywne(this)" href="#offcanvas-flip-help" class="uk-text-center uk-link-toggle" uk-toggle>
                        <div class="bottom__icon bottom__icon--help"></div>
                        <div class="uk-navbar-subtitle bottom__subtitle">Subtitle</div>
                    </a>
                </div>
                <div class="uk-navbar-item">
                    <a onclick="dodajAktywne(this)" href="#offcanvas-flip-image" class="uk-text-center uk-link-toggle" uk-toggle>
                        <div class="bottom__icon bottom__icon--image"></div>
                        <div class="uk-navbar-subtitle bottom__subtitle">Subtitle</div>
                    </a>
                </div>
            </div>
            <div class="uk-navbar-right">
                <div class="uk-navbar-item" uk-toggle="#offcanvas-flip-chat">
                    <div class="uk-grid-16 uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <div class="uk-cover-container uk-border-circle">
                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                <canvas width="46" height="46"></canvas>
                            </div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="uk-padding-small bottom__box">
                                <div class="bottom__box__txt">In error magnam rerum. In error magnam rerum.In error magnam rerum.</div>
                            </div>
                        </div>
                    </div>
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
            <h3 class="uk-h3 bottom__offcanvas__title">Tin nh???n</h3>
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
                <div class="uk-grid-10" uk-grid>
                    <div class="uk-width-auto <?= ($v['you'])?'uk-flex-last':'uk-flex-first' ?>">
                        <div class="uk-cover-container uk-border-circle">
                            <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                            <canvas width="36" height="36"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="bottom__offcanvas__chat__content <?= ($v['you'])?'bottom__offcanvas__chat__content--right uk-margin-auto-left':'bottom__offcanvas__chat__content--left' ?>">
                            <div class="bottom__offcanvas__chat__name">Hai LE Manh</div>
                            <div><?= $v['txt'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="bottom__offcanvas__footer bottom__offcanvas__item">
            <form class="uk-grid-24 uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <input class="uk-input bottom__offcanvas__input" type="text" placeholder="Nh???p n???i dung chat...">
                </div>
                <div class="uk-width-auto">
                    <button type="button" class="bottom__offcanvas__btnSend uk-button uk-button-default"></button>
                </div>
            </form>
        </div>

    </div>
</div>
<!--/Chat-->

<!--Tr??? gi??p-->
<div id="offcanvas-flip-help" class="bottom__offcanvas" uk-offcanvas="flip: true; overlay: true">
    <button class="uk-offcanvas-close bottom__offcanvas__close" type="button" uk-close></button>
    <div class="uk-offcanvas-bar bottom__offcanvas__bar uk-flex uk-flex-column">
        <div class="bottom__offcanvas__header bottom__offcanvas__item">
            <h3 class="uk-h3 bottom__offcanvas__title">Tr??? gi??p</h3>
        </div>
        <div class="bottom__offcanvas__body bottom__offcanvas__item uk-flex-auto uk-overflow-auto">
            <div class="login__item16">
                <div class="home__item24">
                    <div class="home__item12">
                        <div class="bottom__offcanvas__help__box1">C??ch 1: T???i l???i l???p h???c</div>
                    </div>
                    <div class="home__item12">
                        <button type="button" class="home__panel__btn home__panel__btn__video home__panel__btn__refresh uk-button uk-button-default uk-border-pill">
                            <span class="home__panel__btn__txt">T???i l???i l???p</span>
                        </button>
                    </div>
                </div>
                <div class="home__item24">
                    <div class="home__item12">
                        <div class="bottom__offcanvas__help__box1">C??ch 2: ????a thi???t b??? l???i g???n n??i c?? s??ng wifi m???nh</div>
                    </div>
                </div>
                <div class="home__item24">
                    <div class="home__item12">
                        <div class="bottom__offcanvas__help__box1">C??ch 3: ?????i sang k???t n???i Internet m???nh h??n</div>
                    </div>
                    <div class="home__item12">
                        <div class="bottom__offcanvas__help__txt">N???u b???n ???? th??? c??c c??ch tr??n m?? v???n kh??ng kh???c ph???c ???????c, h??y g???i y??u c???u cho Admin Chip Chip ????? ???????c h??? tr???.</div>
                    </div>
                </div>
            </div>
            <div class="login__item16">
                <div class="home__item12">
                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                        <select>
                            <option value="">B???n ??ang g???p v???n ????? g???</option>
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
                        <span class="home__panel__btn__txt">G???i y??u c???u tr??? gi??p</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Tr??? gi??p-->

<!--H??nh n???n-->
<div id="offcanvas-flip-image" class="bottom__offcanvas" uk-offcanvas="flip: true; overlay: true">
    <button class="uk-offcanvas-close bottom__offcanvas__close" type="button" uk-close></button>
    <div class="uk-offcanvas-bar bottom__offcanvas__bar uk-flex uk-flex-column">
        <div class="bottom__offcanvas__header bottom__offcanvas__item">
            <h3 class="uk-h3 bottom__offcanvas__title">H??nh n???n</h3>
        </div>
        <div class="bottom__offcanvas__body bottom__offcanvas__item uk-flex-auto uk-overflow-auto">
            <?php for ($i=0;$i<=5;$i++): ?>
            <div class="home__item24 uk-position-relative">
                <label>
                    <input class="uk-radio uk-hidden bottom__offcanvas__image__radio" type="radio" name="radio2" <?= ($i==0)?'checked':'' ?>>
                    <div class="bottom__offcanvas__image__txt uk-position-top-right uk-position-z-index">H??nh n???n ??ang ch???n</div>
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
<!--/H??nh n???n-->