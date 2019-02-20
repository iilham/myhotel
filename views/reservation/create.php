<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reservation */

$this->title = 'Create Reservation';
$this->params['breadcrumbs'][] = ['label' => 'Reservations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservation-create">

    <!--<h1><?php // Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
        'nomer_kamar' => $nomer_kamar,
    ]) ?>

</div>
