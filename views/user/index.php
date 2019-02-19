<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengguna Aplikasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'nama',
            'username',
            [
                'label' => 'Status Akun',
                'format' => 'Raw',
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->status($model->status);
                },
            ],
            [
                'label' => 'Level',
                'format' => 'Raw',
                'attribute' => 'level',
                'value' => function ($model) {
                    return $model->level($model->level);
                },
            ],
//            'profil',
//            'level',
//            'jenis_kelamin',
//            'auth_key',
//            'password_hash',
//            'password_reset_token',
            // 'id',
            // 'email:email',
            // 'created_at',
            // 'updated_at',
            ['class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
                'headerOptions' => ['style' => 'color:#337ab7'],
                'template' => '{view}{update}'],
        ],
    ]);
    ?>
</div>
