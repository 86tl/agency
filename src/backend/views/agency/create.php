<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Agency */

$this->title = '录入 中介信息';
$this->params['breadcrumbs'][] = ['label' => 'Agencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agency-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
