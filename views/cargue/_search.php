<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CargueSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cargue-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ide_car') ?>

    <?= $form->field($model, 'posicion_ide_pos') ?>

    <?= $form->field($model, 'conteo_ide_con') ?>

    <?= $form->field($model, 'producto_ide_pro') ?>

    <?= $form->field($model, 'can_pro') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
