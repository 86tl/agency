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
    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rating')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'identity_authorized')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile_authorized')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'service_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_cleaning')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_housekeeper')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_elderlycare')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_matron')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_cook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_babysitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'language')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_update')->textInput() ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success  btn-circle' : 'btn btn-primary  btn-circle']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
