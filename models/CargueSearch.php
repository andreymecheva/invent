<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cargue;

/**
 * CargueSearch represents the model behind the search form about `app\models\Cargue`.
 */
class CargueSearch extends Cargue
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ide_car', 'posicion_ide_pos', 'conteo_ide_con', 'producto_ide_pro', 'can_pro'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params,$conteo)
    {
        $query = Cargue::find()->where(['conteo_ide_con'=>$conteo]);
        $dataProvider = new ActiveDataProvider(['query' => $query,]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ide_car' => $this->ide_car,
            'posicion_ide_pos' => $this->posicion_ide_pos,
            'conteo_ide_con' => $this->conteo_ide_con,
            'producto_ide_pro' => $this->producto_ide_pro,
            'can_pro' => $this->can_pro,
        ]);

        return $dataProvider;
    }
}
