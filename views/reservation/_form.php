<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\form\ActiveForm;
use app\models\RoomInfo;

/* @var $this yii\web\View */
/* @var $model app\models\Reservation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservation-form">

    <?php $form = ActiveForm::begin(); ?>


    <div class="form-group">
        <label class="col-sm-4 control-label"><span style="font-weight: lighter; font-size: 12px;">Nama</span></label>
        <div class="col-sm-8">
            <?= $form->field($model, 'name')->label(false)->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label"><span style="font-weight: lighter; font-size: 12px;">Alamat</span></label>
        <div class="col-sm-8">
            <?= $form->field($model, 'address')->label(false)->textarea(['rows' => 6]) ?>
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-4 control-label"><span style="font-weight: lighter; font-size: 12px;">Kapasitas</span></label>
        <div class="col-sm-8">
            <?=
            $form->field($model, 'capacity')->label(false)->dropDownList([
                '1' => '1', '2', '3', '4', '5', '6', '7', '8', '9', '10',
                '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',
                '21', '22', '23', '24', '25', '26', '27', '28', '29', '30',
                '31', '32', '33', '34', '35', '36', '37', '38', '39', '40',
                '41', '42', '43', '44', '45', '46', '47', '48', '49', '50',
                '51', '52', '53', '54', '55', '56', '57', '58', '59', '60',
                '61', '62', '63', '64', '65', '66', '67', '68', '69', '70',
                '71', '72', '73', '74', '75', '76', '77', '78', '79', '80',
                '81', '82', '83', '84', '85', '86', '87', '88', '89', '90',
                '91', '92', '93', '94', '95', '96', '97', '98', '99', '100',
                    ], ['prompt' => '-Kapasitas-'])
            ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label"><span style="font-weight: lighter; font-size: 12px;">Tanggal Pemesanan</span></label>
        <div class="col-sm-8">
            <?php
            echo DatePicker::widget([
                'model' => $model,
                'attribute' => 'dateIn',
                'attribute2' => 'dateOut',
                'options' => ['placeholder' => 'Mulai Tanggal'],
                'options2' => ['placeholder' => 'Sampai Tanggal'],
                'type' => DatePicker::TYPE_RANGE,
                'form' => $form,
                'pluginOptions' => [
                    'format' => 'dd-M-yyyy',
                    'autoclose' => true,
                ]
            ]);
            echo '<br>';
            ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label"><span style="font-weight: lighter; font-size: 12px;">Tipe Kamar</span></label>
        <div class="col-sm-8">
            <?=
            $form->field($model, 'roomType')->dropDownList(RoomInfo::getType(), [
                'prompt' => 'Pilih tipe Kamar...', 'onchange' => '
                            $.post( "listkamar?type=' . '"+$(this).val(),function (data){
                                $("select#no_kamar").html(data);
                            });'
            ])->label(false);
            ?>
        </div>
    </div >
    <div class="form-group">
        <label class="col-sm-4 control-label"><span style="font-weight: lighter; font-size: 12px;">Nomer Kamar</span></label>
        <div class="col-sm-8">
            <?=
            $form->field($model, 'RoomNo')->dropDownList($nomer_kamar, [
                'id' => 'no_kamar', 'prompt' => 'Pilih nomer kamar...',
                    ]
            )->label(false);
            ?>
        </div>
    </div >


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
