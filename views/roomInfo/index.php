<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;;
use yii\grid\GridView;
use app\models\RoomInfo;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RoomInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Room Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-info-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Room Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
            'number',
                [
                'attribute' => 'type',
                'filter' => ArrayHelper::map(RoomInfo::find()->asArray()->all(), 'ID', 'type'),
            ],
            'type:ntext',
            'price',
            'amenities:ntext',
            'status',
                ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
