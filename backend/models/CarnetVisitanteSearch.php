<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CarnetVisitante;

/**
 * CarnetVisitanteSearch represents the model behind the search form about `backend\models\CarnetVisitante`.
 */
class CarnetVisitanteSearch extends CarnetVisitante
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcarnet_visitante', 'idcarnet_plantilla', 'ced_visitante'], 'integer'],
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
    public function search($params)
    {
        $query = CarnetVisitante::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idcarnet_visitante' => $this->idcarnet_visitante,
            'idcarnet_plantilla' => $this->idcarnet_plantilla,
            'ced_visitante' => $this->ced_visitante,
        ]);

        return $dataProvider;
    }
}
