<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Changwat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="changwat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'chwcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chwname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ampcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tmbcode')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
