<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cargue */

$this->title = $model->ide_car;
$this->params['breadcrumbs'][] = ['label' => 'Cargues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cargue-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ide_car], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ide_car], [
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
            'ide_car',
            'posicion_ide_pos',
            'conteo_ide_con',
            'producto_ide_pro',
            'can_pro',
        ],
    ]) ?>

</div>
