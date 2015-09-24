<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

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
<!--        <div >-->
<!--            --><?//= Html::a('创建新的数据 ', ['create'], ['class' => 'btn btn-success red']) ?>
<!--        </div>-->
        <div class="">
            <table>
                <tr>
                    <td>
                        <select  class="select_status form-control">
                            <option value="-1">选择状态</option>
                            <?foreach(Yii::$app->params['empl_status'] as $k=>$v):?>
                                <option value="<?=$k?>"><?=$v?></option>
                            <?endforeach;?>
                        </select>
                    </td>
                    <td>
                        &nbsp;  &nbsp;  &nbsp;
                    </td>
                    <td>
                        <select class="select_type form-control">
                            <option value="-1">选择工作种类</option>
                            <?foreach(Yii::$app->params['empl_type'] as $k=>$v):?>
                                <option value="<?=$k?>"><?=$v?></option>
                            <?endforeach;?>
                        </select>
                    </td>
                    <td>
                        &nbsp;  &nbsp;  &nbsp;
                    </td>
                    <td>
                        <input type="text" class="user_value">
                        <a href="<?=Url::toRoute(['index','st'=>'1']);?>" class="btn green searchname">搜索员工 </a>
                    </td>
                    <td>
                        &nbsp;  &nbsp;  &nbsp;
                    </td>
                    <td>
                        <input type="text" class="tel_value">
                        <a href="<?=Url::toRoute(['index','st'=>'2']);?>" class="btn green searchtel">搜索电话 </a>
                    </td>
                </tr>
            </table>
        </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout'=>"<div class='wrap'>{summary}{pager}</div>{items}\n<div class='wrap'>{summary}{pager}</div>",
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
