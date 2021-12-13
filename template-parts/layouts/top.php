<?php $percent = array(20,40,60,80,100); ?>
<div class="home__top">
    <div class="uk-container uk-padding-remove">
        <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <div class="uk-navbar-item">
                    <a href="" class="top__iconBack" data-txt=""></a>
                </div>
            </div>
            <div class="uk-navbar-center">
                <div class="uk-navbar-item">
                    <div class="uk-position-relative uk-display-inline-block">
                        <?php for ($j=0;$j<=4;$j++): ?>
                            <i class="home__panel__icon home__panel__icon__star-o"></i>
                        <?php endfor; ?>
                        <div class="uk-position-cover uk-text-nowrap uk-position-z-index uk-overflow-hidden" style="width: <?= $percent[array_rand($percent)] ?>%">
                            <?php for ($j=0;$j<=4;$j++): ?>
                                <i class="home__panel__icon home__panel__icon__star"></i>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-navbar-right">
                <div class="uk-navbar-item">
                    <a href="" class="top__refresh"></a>
                </div>
            </div>
        </nav>
    </div>
</div>