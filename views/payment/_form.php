<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Payment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'resvId')->textInput() ?>

    <?= $form->field($model, 'roomNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pay')->textInput() ?>

    <?= $form->field($model, 'addCost')->textInput() ?>

    <?= $form->field($model, 'disc')->textInput() ?>

    <?= $form->field($model, 'change')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
