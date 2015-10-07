<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

    <?php  $form = ActiveForm::begin(['options' =>['enctype' => 'multipart/form-data','class'=>'form-horizontal'],'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-md-4\">{input}</div>\n<div class=\"\">{error}</div>",
        'labelOptions' => ['class' => 'col-md-3 control-label'],
    ],]);?>
<div class="form-body">
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intro')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'gender')->dropDownList(Yii::$app->params['empl_sex_flag'],['prompt'=>'请选择']) ?>

    <?= $form->field($model, 'nationality')->dropDownList(Yii::$app->params['empl_nation'],['prompt'=>'请选择']) ?>

    <?= $form->field($model, 'language')->checkboxList(Yii::$app->params['empl_lan']) ?>

    <?= $form->field($model, 'expected_salary')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(Yii::$app->params['empl_status'],['prompt'=>'请选择']) ?>

    <?= $form->field($model, 'rating')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'identity_authorized')->dropDownList(Yii::$app->params['empl_yn_flag'],['prompt'=>'请选择']) ?>

    <?= $form->field($model, 'mobile_authorized')->dropDownList(Yii::$app->params['empl_yn_flag'],['prompt'=>'请选择']) ?>


    <?= $form->field($model, 'is_cleaning',['labelOptions' => ['class' => 'col-md-3 control-label my-line-height']])->checkbox([],$enclosedByLabel=false) ?>

    <?= $form->field($model, 'is_housekeeper',['labelOptions' => ['class' => 'col-md-3 control-label my-line-height']])->checkbox([],$enclosedByLabel=false) ?>

    <?= $form->field($model, 'is_elderlycare',['labelOptions' => ['class' => 'col-md-3 control-label my-line-height']])->checkbox([],$enclosedByLabel=false) ?>

    <?= $form->field($model, 'is_matron',['labelOptions' => ['class' => 'col-md-3 control-label my-line-height']])->checkbox([],$enclosedByLabel=false) ?>

    <?= $form->field($model, 'is_cook',['labelOptions' => ['class' => 'col-md-3 control-label my-line-height']])->checkbox([],$enclosedByLabel=false) ?>

    <?= $form->field($model, 'is_babysitter',['labelOptions' => ['class' => 'col-md-3 control-label my-line-height']])->checkbox([],$enclosedByLabel=false) ?>

    <?= $form->field($model, 'last_update')->textInput(['disabled'=>'true']) ?>

    <?= $form->field($model, 'create_time')->textInput(['disabled'=>'true']) ?>

<!--    --><?//= $form->field($model, 'company_id')->textInput() ?>

    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success  btn-circle' : 'btn btn-primary  btn-circle']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
