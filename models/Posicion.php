<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posicion".
 *
 * @property integer $ide_pos
 * @property string $nom_pos
 *
 * @property Cargue[] $cargues
 * @property Consolidado[] $consolidados
 */
class Posicion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posicion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nom_pos'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ide_pos' => Yii::t('app', 'Ide Pos'),
            'nom_pos' => Yii::t('app', 'Nom Pos'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCargues()
    {
        return $this->hasMany(Cargue::className(), ['posicion_ide_pos' => 'ide_pos']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConsolidados()
    {
        return $this->hasMany(Consolidado::className(), ['posicion_ide_pos' => 'ide_pos']);
    }
}
