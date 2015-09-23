<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Schedules';
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

            'id',
            'job_id',
            'user_id',
            'agency_id',
            'employee_id',
            // 'create_time',
            // 'update_time',

            ['class' => 'yii\grid\ActionColumn','header' => '操作'],
        ],
    ]); ?>

    </div>
</div>
