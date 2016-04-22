<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Changwat */

$this->title = $model->chwcode;
$this->params['breadcrumbs'][] = ['label' => 'Changwats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="changwat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->chwcode], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->chwcode], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'chwcode',
            'chwname',
            'ampcode',
            'tmbcode',
        ],
    ]) ?>

</div>
