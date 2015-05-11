<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CarnetColores;

/**
 * CarnetColoresSearch represents the model behind the search form about `backend\models\CarnetColores`.
 */
class CarnetColoresSearch extends CarnetColores
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['color', 'R_color', 'G_color', 'B_color'], 'safe'],
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
        $query = CarnetColores::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'R_color', $this->R_color])
            ->andFilterWhere(['like', 'G_color', $this->G_color])
            ->andFilterWhere(['like', 'B_color', $this->B_color]);

        return $dataProvider;
    }
}
