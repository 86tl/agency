<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Agency */

$this->title = '录入 中介信息';
$this->params['breadcrumbs'][] = ['label' => 'Agencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i><?= Html::encode($this->title) ?>
        </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>


<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>Form Actions On Bottom
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form class="form-horizontal" action="#">
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Text</label>
                    <div class="col-md-4">
                        <input type="text" placeholder="Enter text" class="form-control input-circle">
														<span class="help-block">
														A block of help text. </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Email Address</label>
                    <div class="col-md-4">
                        <div class="input-group">
															<span class="input-group-addon input-circle-left">
															<i class="fa fa-envelope"></i>
															</span>
                            <input type="email" placeholder="Email Address" class="form-control input-circle-right">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Password</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input type="password" placeholder="Password" class="form-control input-circle-left">
															<span class="input-group-addon input-circle-right">
															<i class="fa fa-user"></i>
															</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Left Icon</label>
                    <div class="col-md-4">
                        <div class="input-icon">
                            <i class="fa fa-bell-o"></i>
                            <input type="text" placeholder="Left icon" class="form-control input-circle">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Right Icon</label>
                    <div class="col-md-4">
                        <div class="input-icon right">
                            <i class="fa fa-microphone"></i>
                            <input type="text" placeholder="Right icon" class="form-control input-circle">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Input With Spinner</label>
                    <div class="col-md-4">
                        <input type="password" placeholder="Password" class="form-control spinner input-circle">
                    </div>
                </div>
                <div class="form-group last">
                    <label class="col-md-3 control-label">Static Control</label>
                    <div class="col-md-4">
														<span class="form-control-static">
														email@example.com </span>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button class="btn btn-circle blue" type="submit">Submit</button>
                        <button class="btn btn-circle default" type="button">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>
