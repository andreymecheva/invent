<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cargue */

$this->title = 'Update Cargue: ' . ' ' . $model->ide_car;
$this->params['breadcrumbs'][] = ['label' => 'Cargues', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ide_car, 'url' => ['view', 'id' => $model->ide_car]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cargue-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
