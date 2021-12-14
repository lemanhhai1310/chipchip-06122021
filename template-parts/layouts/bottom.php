<div class="home__top bottom">
    <div class="uk-container uk-padding-remove">
        <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <div class="uk-navbar-item">
                    <a onclick="dodajAktywne(this)" href="#offcanvas-flip-chat" uk-toggle class="bottom__icon bottom__icon--chat"></a>
                </div>
                <div class="uk-navbar-item">
                    <a onclick="dodajAktywne(this)" href="javascript:void(0)" class="bottom__icon bottom__icon--help"></a>
                </div>
                <div class="uk-navbar-item">
                    <a onclick="dodajAktywne(this)" href="javascript:void(0)" class="bottom__icon bottom__icon--image"></a>
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