<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CarnetCargo;

/**
 * CarnetCargoSearch represents the model behind the search form about `backend\models\CarnetCargo`.
 */
class CarnetCargoSearch extends CarnetCargo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcarnet_cargo', 'idcarnet_plantilla'], 'integer'],
            [['cargo_nombre', 'cargo_letracolor', 'cargo_fuenteletra', 'cargo_color'], 'safe'],
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
        $query = CarnetCargo::find();

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
            'idcarnet_cargo' => $this->idcarnet_cargo,
            'idcarnet_plantilla' => $this->idcarnet_plantilla,
        ]);

        $query->andFilterWhere(['like', 'cargo_nombre', $this->cargo_nombre])
            ->andFilterWhere(['like', 'cargo_letracolor', $this->cargo_letracolor])
            ->andFilterWhere(['like', 'cargo_fuenteletra', $this->cargo_fuenteletra])
            ->andFilterWhere(['like', 'cargo_color', $this->cargo_color]);

        return $dataProvider;
    }
}
