<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property integer $ide_pro
 * @property string $cod_pro
 * @property string $des_pro
 * @property string $uni_med
 *
 * @property Cargue[] $cargues
 * @property Consolidado[] $consolidados
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'producto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cod_pro', 'uni_med'], 'string', 'max' => 45],
            [['des_pro'], 'string', 'max' => 145]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ide_pro' => Yii::t('app', 'Ide Pro'),
            'cod_pro' => Yii::t('app', 'Cod Pro'),
            'des_pro' => Yii::t('app', 'Des Pro'),
            'uni_med' => Yii::t('app', 'Uni Med'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCargues()
    {
        return $this->hasMany(Cargue::className(), ['producto_ide_pro' => 'ide_pro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConsolidados()
    {
        return $this->hasMany(Consolidado::className(), ['producto_ide_pro' => 'ide_pro']);
    }
}
