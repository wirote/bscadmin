<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Changwat */

$this->title = 'Update Changwat: ' . $model->chwcode;
$this->params['breadcrumbs'][] = ['label' => 'Changwats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->chwcode, 'url' => ['view', 'id' => $model->chwcode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="changwat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
