<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RoomInfo */

$this->title = 'Create Room Info';
$this->params['breadcrumbs'][] = ['label' => 'Room Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-info-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
