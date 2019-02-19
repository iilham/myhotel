<?php use yii\helpers\Html; ?>
<aside class="main-sidebar" style="background-color: #d1dce0;">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?= Html::img('@web/images/user.png', ['alt' => 'user image', 'class' => 'img-circle',]); ?>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->nama ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Payment', 'icon' => 'file-code-o', 'url' => ['payment/index']],
                    ['label' => 'Reservation', 'icon' => 'dashboard', 'url' => ['reservation/index']],
                    ['label' => 'Room Info', 'icon' => 'dashboard', 'url' => ['roominfo/index']],
                    ['label' => 'Room Master', 'icon' => 'dashboard', 'url' => ['roommaster/index']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>
