<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CarnetGrupoytiempo;

/**
 * CarnetGrupoytiempoSearch represents the model behind the search form about `backend\models\CarnetGrupoytiempo`.
 */
class CarnetGrupoytiempoSearch extends CarnetGrupoytiempo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcarnet_grupoytiempo', 'idcarnet_plantilla'], 'integer'],
            [['grupoytiempo_nombre', 'grupoytiempo_color', 'grupoytiempo_letracolor'], 'safe'],
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
        $query = CarnetGrupoytiempo::find();

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
            'idcarnet_grupoytiempo' => $this->idcarnet_grupoytiempo,
            'idcarnet_plantilla' => $this->idcarnet_plantilla,
        ]);

        $query->andFilterWhere(['like', 'grupoytiempo_nombre', $this->grupoytiempo_nombre])
            ->andFilterWhere(['like', 'grupoytiempo_color', $this->grupoytiempo_color])
            ->andFilterWhere(['like', 'grupoytiempo_letracolor', $this->grupoytiempo_letracolor]);

        return $dataProvider;
    }
}
