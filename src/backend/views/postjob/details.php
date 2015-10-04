<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use  app\models\User;
use yii\widgets\ActiveForm;
?>
<div id="msg">
    <div id="topper_msg">
       <div style="color: red;font-size: 16px">
            <?=$model->id?>
            </div>
            <div class="col-md-6 my_display_left">
                <div class="col-md-3 my_display_left">工作种类:</div>
                <div class="col-md-3">222</div>
            </div>
            <div class="col-md-6">
                <div class="col-md-3">附加信息</div>
                <div class="col-md-3">222</div>
            </div>
            <div class="col-md-6 my_display_left">
                <div class="col-md-3 my_display_left">开工日期:</div>
                <div class="col-md-3">222</div>
            </div>
            <div class="col-md-6">
                <div class="col-md-3">时间:</div>
                <div class="col-md-3">222</div>
            </div>
            <div class="col-md-6 my_display_left">
                <div class="col-md-3 my_display_left">宝宝年龄:</div>
                <div class="col-md-3">222</div>
            </div>
            <div class="col-md-6">
                <div class="col-md-3">每周:</div>
                <div class="col-md-3">222</div>
            </div>
            <div class="col-md-6 my_display_left">
                <div class="col-md-3 my_display_left">预产期:</div>
                <div class="col-md-3">222</div>
            </div>
            <div class="col-md-6">
                <div class="col-md-3">面积大小:</div>
                <div class="col-md-3">222</div>
            </div>
    </div>

    <div class="col-md-12" style="margin: 10px 0px;height: 1px;border:1px solid #ddd;"></div>
    <div id="upper_msg">
        <div class="col-md-6 my_display_left">
            <div class="col-md-3 my_display_left">地区:</div>
            <div class="col-md-3">222</div>
        </div>
        <div class="col-md-6">
            <div class="col-md-3">地址:</div>
            <div class="col-md-3">222</div>
        </div>
        <div class="col-md-6 my_display_left">
            <div class="col-md-3 my_display_left">地址:</div>
            <div class="col-md-3">222</div>
        </div>
    </div>
 </div>
<?php $flag=($model->worker>=2)?1:0;?>
<div class="clearfix">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout'=>"<div class='wrap'>{pager}</div>{items}\n",
        'columns' => [
            ['header' => '操作',
             'class'=>'yii\grid\CheckboxColumn'],
            [
                'label'=>'姓名',
                'format'=>'raw',
                'value'=>function($model)
                    {
                        return $model->name;
                    },
            ],
            tel,
            [
                'label'=>'工作种类',
                'format'=>'raw',
                'value'=>function($model){
                        foreach(Yii::$app->params['empl_type_real'] as $k=> $v)
                        {
                            if($model[$v]==1)
                            {
                                $s .=Yii::$app->params['empl_type'][$k].' ';
                            }
                        }
                        return $s;

                    }
            ],
            //'user_id',
            [
                'label'=>'状态',
                'format'=>'raw',
                'value'=>function($model){
                        return Yii::$app->params['empl_status'][$model->status];
                    }
            ],
            'age',
            [
                'label'=>'语言',
                'format'=>'text',
                'value'=>function($model){
                        foreach($model->language as $v)
                        {
                            $s .=Yii::$app->params['empl_lan'][$v].' ';
                        }
                        return $s;
                    }
            ],
        ],
    ]);  echo Html::a('确认接单',['assign','job_id'=>$model->id], ['id'=>'take','class' => 'btn btn-success red']); ?>
</div>
<script type="text/javascript">
    $('#take').click(function()
    {
        var s='';
        $('span.checked').children().each(function(k,v)
       {
          s = v.value+','+s;
       });
        s=s.substring(0, s.length-1);
        var count = $('span.checked').children().length;
        var flag = <?=($model->worker>=2)?1:0;?>;
        var raw_count =<?=$model->worker?>;
        if(flag==0 && count>1)
        {
            alert('这个订单最多只能选择1个员工，请重新选择!');
        }else
        {
            location.href = $(this).attr('href')+'&employee_id='+s;
        }
        return false;
    })
</script>
