<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portlet box">
    <div class="mytitle">
        <?= Yii::$app->params[backend_cates][$this->context->id];?>
    </div>
    <div class="portlet-body form">
        <div >
            <?= Html::a('创建新的数据 ', ['create'], ['class' => 'btn btn-success red']) ?>
        </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'user_id',
            //'status',
            //'rating',
            //'identity_authorized',
            // 'mobile_authorized',
            // 'service_type',
            // 'is_cleaning',
            // 'is_housekeeper',
            // 'is_elderlycare',
            // 'is_matron',
            // 'is_cook',
            // 'is_babysitter',
            // 'intro',
             'age',
             'gender',
             'nationality',
            // 'language',
            // 'last_update',
             'create_time',
            [
                'attribute' => 'image',
                'label'=>'照片',
                'format'=>'raw',
                'value'=>function($model){
                       return '<a href="'.dirname(Yii::$app->getHomeUrl()).'/'.$model->image.'" target="_Blank">'.$model->image.'</a>';
                    }
            ],
            // 'company_id',

            ['class' => 'yii\grid\ActionColumn','header' => '操作'],
        ],
    ]); ?>

    </div>
</div>
