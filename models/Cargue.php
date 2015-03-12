<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cargue".
 *
 * @property integer $ide_car
 * @property integer $posicion_ide_pos
 * @property integer $conteo_ide_con
 * @property integer $producto_ide_pro
 * @property integer $can_pro
 *
 * @property Conteo $conteoIdeCon
 * @property Posicion $posicionIdePos
 * @property Producto $productoIdePro
 */
class Cargue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cargue';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['posicion_ide_pos', 'conteo_ide_con'], 'required'],
            [['posicion_ide_pos', 'conteo_ide_con'], 'safe'],
            [['posicion_ide_pos', 'conteo_ide_con', 'producto_ide_pro', 'can_pro'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ide_car' => Yii::t('app', 'Ide Car'),
            'posicion_ide_pos' => Yii::t('app', 'Posicion'),
            'conteo_ide_con' => Yii::t('app', 'Conteo'),
            'producto_ide_pro' => Yii::t('app', 'Producto'),
            'can_pro' => Yii::t('app', 'Cantidad'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConteoIdeCon()
    {
        return $this->hasOne(Conteo::className(), ['ide_con' => 'conteo_ide_con']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosicionIdePos()
    {
        return $this->hasOne(Posicion::className(), ['ide_pos' => 'posicion_ide_pos']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductoIdePro()
    {
        return $this->hasOne(Producto::className(), ['ide_pro' => 'producto_ide_pro']);
    }
}
