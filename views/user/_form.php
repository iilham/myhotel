<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>


    <?php //= $form->field($model, 'created_at')->textInput() ?>

    <?php //= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>


    <?php //= $form->field($model, 'profil')->textInput(['maxlength' => true]) ?>
    <?=
    $form->field($model, 'level')->dropDownList([
        '0' => 'Admin',
        '1' => 'Pengguna',
            ], ['disabled' => Yii::$app->user->identity->level != 0])
    ?>
    <?=
    $form->field($model, 'status')->dropDownList([
        '10' => 'Aktif',
        '0' => 'Non Aktif',
    ], ['disabled' => Yii::$app->user->identity->level != 0])
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
