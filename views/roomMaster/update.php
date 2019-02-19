<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RoomMaster */

$this->title = 'Update Room Master: ' . $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Room Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'id' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="room-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
