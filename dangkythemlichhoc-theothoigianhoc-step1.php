<?php $data["title"] = "Đăng ký lịch học theo thời gian học - step 1"; ?>
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
                            <li class="dangkythemlichhoc__box3__li uk-active"><a href="" class="dangkythemlichhoc__box3__btn uk-button uk-button-default uk-border-pill">Chọn thời gian</a></li>
                            <li class="dangkythemlichhoc__box3__li"><a href="" class="dangkythemlichhoc__box3__btn uk-button uk-button-default uk-border-pill">Chọn giáo viên</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-margin-top">
            <div class="dangkythemlichhoc__card uk-card uk-card-default uk-card-body">
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-width-auto">
                        <a href="" class="dangkythemlichhoc__icon dangkythemlichhoc__icon--left" uk-icon="icon: arrow-left"></a>
                    </div>
                    <div class="uk-width-expand">
                        <div class="uk-child-width-expand uk-grid-20" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'txt' => 'Hôm nay',
                                    'time' => '18/2',
                                    'active' => true,
                                ),
                                array(
                                    'txt' => 'Thứ 7',
                                    'time' => '19/2',
                                    'active' => false,
                                ),
                                array(
                                    'txt' => 'CN',
                                    'time' => '20/2',
                                    'active' => false,
                                ),
                                array(
                                    'txt' => 'Thứ 2',
                                    'time' => '21/2',
                                    'active' => false,
                                ),
                                array(
                                    'txt' => 'Thứ 3',
                                    'time' => '22/2',
                                    'active' => false,
                                ),
                                array(
                                    'txt' => 'Thứ 4',
                                    'time' => '23/2',
                                    'active' => false,
                                ),
                                array(
                                    'txt' => 'Thứ 5',
                                    'time' => '24/2',
                                    'active' => false,
                                ),
                            );
                            foreach ($data as $k=>$v): ?>
                            <div>
                                <div class="uk-grid-8 uk-child-width-1-1" uk-grid>
                                    <div>
                                        <div class="dangkythemlichhoc__box1 uk-flex uk-flex-middle uk-flex-center uk-text-center <?= ($v['active'])?'uk-active':'' ?>">
                                            <div>
                                                <div class="dangkythemlichhoc__box1__txt1"><?= $v['txt'] ?></div>
                                                <div class="dangkythemlichhoc__box1__txt2"><?= $v['time'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <?php if ($k==0): ?>
                                            <label>
                                                <input class="dangkythemlichhoc__radio uk-radio" type="radio" name="radio2" disabled>
                                                <div class="dangkythemlichhoc__box2 uk-flex uk-flex-middle uk-flex-center">
                                                    <span class="dangkythemlichhoc__box2__txt">7:30</span>
                                                </div>
                                            </label>
                                        <?php else: ?>
                                            <label>
                                                <input class="dangkythemlichhoc__radio uk-radio" type="radio" name="radio2">
                                                <div class="dangkythemlichhoc__box2 uk-flex uk-flex-middle uk-flex-center">
                                                    <span class="dangkythemlichhoc__box2__txt">7:30</span>
                                                </div>
                                            </label>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <?php if ($k==0): ?>
                                            <label>
                                                <input class="dangkythemlichhoc__radio uk-radio" type="radio" name="radio2" disabled>
                                                <div class="dangkythemlichhoc__box2 uk-flex uk-flex-middle uk-flex-center">
                                                    <span class="dangkythemlichhoc__box2__txt">8:00</span>
                                                </div>
                                            </label>
                                        <?php elseif ($k==1): ?>
                                            <label>
                                                <input class="dangkythemlichhoc__radio uk-radio" type="radio" name="radio2" checked>
                                                <div class="dangkythemlichhoc__box2 uk-flex uk-flex-middle uk-flex-center">
                                                    <span class="dangkythemlichhoc__box2__txt">8:00</span>
                                                </div>
                                            </label>
                                        <?php else: ?>
                                        <label>
                                            <input class="dangkythemlichhoc__radio uk-radio" type="radio" name="radio2">
                                            <div class="dangkythemlichhoc__box2 uk-flex uk-flex-middle uk-flex-center">
                                                <span class="dangkythemlichhoc__box2__txt">8:00</span>
                                            </div>
                                        </label>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <?php if ($k==0): ?>
                                            <label>
                                                <input class="dangkythemlichhoc__radio uk-radio" type="radio" name="radio2" disabled>
                                                <div class="dangkythemlichhoc__box2 uk-flex uk-flex-middle uk-flex-center">
                                                    <span class="dangkythemlichhoc__box2__txt">8:30</span>
                                                </div>
                                            </label>
                                        <?php else: ?>
                                            <label>
                                                <input class="dangkythemlichhoc__radio uk-radio" type="radio" name="radio2">
                                                <div class="dangkythemlichhoc__box2 uk-flex uk-flex-middle uk-flex-center">
                                                    <span class="dangkythemlichhoc__box2__txt">8:30</span>
                                                </div>
                                            </label>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <?php if ($k==0): ?>
                                            <label>
                                                <input class="dangkythemlichhoc__radio uk-radio" type="radio" name="radio2" disabled>
                                                <div class="dangkythemlichhoc__box2 uk-flex uk-flex-middle uk-flex-center">
                                                    <span class="dangkythemlichhoc__box2__txt">9:00</span>
                                                </div>
                                            </label>
                                        <?php else: ?>
                                            <label>
                                                <input class="dangkythemlichhoc__radio uk-radio" type="radio" name="radio2">
                                                <div class="dangkythemlichhoc__box2 uk-flex uk-flex-middle uk-flex-center">
                                                    <span class="dangkythemlichhoc__box2__txt">9:00</span>
                                                </div>
                                            </label>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <?php if ($k==0): ?>
                                            <label>
                                                <input class="dangkythemlichhoc__radio uk-radio" type="radio" name="radio2" disabled>
                                                <div class="dangkythemlichhoc__box2 uk-flex uk-flex-middle uk-flex-center">
                                                    <span class="dangkythemlichhoc__box2__txt">9:30</span>
                                                </div>
                                            </label>
                                        <?php else: ?>
                                            <label>
                                                <input class="dangkythemlichhoc__radio uk-radio" type="radio" name="radio2">
                                                <div class="dangkythemlichhoc__box2 uk-flex uk-flex-middle uk-flex-center">
                                                    <span class="dangkythemlichhoc__box2__txt">9:30</span>
                                                </div>
                                            </label>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <label>
                                            <input class="dangkythemlichhoc__radio uk-radio" type="radio" name="radio2">
                                            <div class="dangkythemlichhoc__box2 uk-flex uk-flex-middle uk-flex-center">
                                                <span class="dangkythemlichhoc__box2__txt">10:00</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div>
                                        <label>
                                            <input class="dangkythemlichhoc__radio uk-radio" type="radio" name="radio2">
                                            <div class="dangkythemlichhoc__box2 uk-flex uk-flex-middle uk-flex-center">
                                                <span class="dangkythemlichhoc__box2__txt">10:30</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div>
                                        <label>
                                            <input class="dangkythemlichhoc__radio uk-radio" type="radio" name="radio2">
                                            <div class="dangkythemlichhoc__box2 uk-flex uk-flex-middle uk-flex-center">
                                                <span class="dangkythemlichhoc__box2__txt">11:00</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div>
                                        <label>
                                            <input class="dangkythemlichhoc__radio uk-radio" type="radio" name="radio2">
                                            <div class="dangkythemlichhoc__box2 uk-flex uk-flex-middle uk-flex-center">
                                                <span class="dangkythemlichhoc__box2__txt">11:30</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="uk-width-auto">
                        <a href="" class="dangkythemlichhoc__icon dangkythemlichhoc__icon--right" uk-icon="icon: arrow-right"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>