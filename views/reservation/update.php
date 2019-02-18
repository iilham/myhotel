<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reservation */

$this->title = 'Update Reservation: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Reservations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->resvId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reservation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
