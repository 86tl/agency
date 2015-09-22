<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

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
                        <select class="select_type form-control">
                            <option value="-1">选择工作种类</option>
                            <?foreach(Yii::$app->params['empl_type'] as $k=>$v):?>
                                <option value="<?=$k?>"><?=$v?></option>
                            <?endforeach;?>
                        </select>
                    </td>
                    <td>
                        <input type="text" class="user_value">
                        <a href="<?=Url::toRoute(['index','st'=>'1']);?>" class="btn green searchname">搜索员工 </a>
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
        'filterModel' => $searchModel,
        'layout'=>"<div class='wrap'>{summary}{pager}</div>{items}\n<div class='wrap'>{summary}{pager}</div>",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id'
            'name',
            [
                'label'=>'工作种类',
                'format'=>'raw',
                'value'=>function($model){
                        return '<a href="'.$model->image.'" target="_Blank">'.$model->id.'</a>';
                    }
            ],
            //'user_id',
            'status',
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
             //'gender',
             //'nationality',
             'language',
             'last_update',
             //'create_time',
//            [
//                'attribute' => 'image',
//                'label'=>'照片',
//                'format'=>'raw',
//                'value'=>function($model){
//                       return '<a href="'.$model->image.'" target="_Blank">'.$model->image.'</a>';
//                    }
//            ],
            // 'company_id',

            ['class' => 'yii\grid\ActionColumn','header' => '操作'],
        ],
    ]); ?>
    </div>
</div>
<script>
 $('.searchname,.searchtel').click(
     function(){
         var url = $(this).attr('href');
         if($('.select_status').val() !=-1)
         {
             url=url+'&status='+$('.select_status').val();
         }
         if($('.select_type').val() !=-1)
         {
             url= url+"&service_type="+$('.select_type').val();
         }
           url = url+'&search_input='+$(this).prev().val();
         location.href = url;
         return false;
     });

</script>

