<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Changwat */

$this->title = 'Create Changwat';
$this->params['breadcrumbs'][] = ['label' => 'Changwats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="changwat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
