<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaymentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'resvId') ?>

    <?= $form->field($model, 'nameResv') ?>

    <?= $form->field($model, 'roomNo') ?>

    <?= $form->field($model, 'pay') ?>

    <?= $form->field($model, 'addCost') ?>

    <?php // echo $form->field($model, 'disc') ?>

    <?php // echo $form->field($model, 'change') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
