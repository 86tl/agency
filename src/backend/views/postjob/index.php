<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostJobsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Post Jobs';
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
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'mobile',
            'topic',
            'job_status',
            // 'payment_id',
            // 'service_type',
            // 'intro',
            // 'view_time',
            // 'week',
            // 'period',
            // 'city',
            // 'province',
            // 'district',
            // 'address',
            // 'create_time',
            // 'term_period',
            // 'cleaning_type',
            // 'cleaning_pet_type',
            // 'work_times',
            // 'workingdays_perweek',
            // 'cleaning_time_estimate',
            // 'estimated_date',
            // 'cleaning_size',
            // 'beginning_date',
            // 'end_date',
            // 'beginning_time',
            // 'end_time',
            // 'worker',
            // 'price_range',
            // 'stay_type',
            // 'sex_type',
            // 'cure_type',
            // 'baby_age_type',
            // 'number_family',
            // 'food_type',
            // 'baby_type',
            // 'longitude',
            // 'latitude',

            ['class' => 'yii\grid\ActionColumn','header' => '操作'],
        ],
    ]); ?>

    </div>
</div>
