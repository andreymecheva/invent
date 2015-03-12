<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cargue */

$this->title = 'Create Cargue';
$this->params['breadcrumbs'][] = ['label' => 'Cargues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cargue-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
