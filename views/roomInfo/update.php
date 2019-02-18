<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RoomInfo */

$this->title = 'Update Room Info: ' . $model->number;
$this->params['breadcrumbs'][] = ['label' => 'Room Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->number, 'url' => ['view', 'id' => $model->number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="room-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
