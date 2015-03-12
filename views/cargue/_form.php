<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cargue */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cargue-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'posicion_ide_pos')->textInput() ?>

    <?= $form->field($model, 'conteo_ide_con')->textInput() ?>

    <?= $form->field($model, 'producto_ide_pro')->textInput() ?>

    <?= $form->field($model, 'can_pro')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
