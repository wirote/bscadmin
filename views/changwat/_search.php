<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChangwatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="changwat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'chwcode') ?>

    <?= $form->field($model, 'chwname') ?>

    <?= $form->field($model, 'ampcode') ?>

    <?= $form->field($model, 'tmbcode') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
