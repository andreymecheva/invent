<?php

use yii\helpers\ArrayHelper;
use app\models\Posicion;
// the grid columns setup (only two column entries are shown here 
// you can add more column entries you need for your use case)

echo "<h1> Conteo ".$id."</h1>";


$gridColumns = [
    // the name column configuration
/*    [
        'class' => 'kartik\grid\EditableColumn',
        'attribute' => 'posicion_ide_pos',
        
        'format'=>'raw',
        'value'=>function($model) {
            return '<b>'.$model->posicion_ide_pos.'</b> &nbsp;'.$model->posicionIdePos->nom_pos.'';
            },
        'pageSummary' => true,
        'editableOptions' => [
        'inputType' => \kartik\editable\Editable::INPUT_SELECT2,
        'options' => [ // your widget settings here
            'i18n'=>[
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => '@kveditable/messages',
            'forceTranslation' => true
            ],
            'data' => ArrayHelper::map(Posicion::find()->all(), 'ide_pos', 'nom_pos'),
            'pluginOptions' => [
                
                ],
            ]
    
        ]
    ],*/
    [
        'attribute' => 'posicion_ide_pos',
        'format'=>'raw',
        'value'=>function($model) {
            return '<b style="width:45px;float:left;">'.$model->posicion_ide_pos.'</b><small>'.$model->posicionIdePos->nom_pos.'</small>';
            },
    ],
    [
        'attribute' => 'producto_ide_pro',
        'format'=>'raw',
        'value'=>function($model) {
            return '<b>'.$model->productoIdePro->cod_pro.'</b> &nbsp;<small>'.$model->productoIdePro->des_pro.'</small>';
            },
    ],
    [
        'class' => 'kartik\grid\EditableColumn',
        'attribute'=>'can_pro',
    ],
    'conteo_ide_con'
];

// the GridView widget (you must use kartik\grid\GridView)

\yii\widgets\Pjax::begin(['enablePushState'=>FALSE]);


echo \kartik\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => $gridColumns
]);

\yii\widgets\Pjax::end();
?>