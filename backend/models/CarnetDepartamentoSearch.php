<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CarnetDepartamento;

/**
 * CarnetDepartamentoSearch represents the model behind the search form about `backend\models\CarnetDepartamento`.
 */
class CarnetDepartamentoSearch extends CarnetDepartamento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcarnet_departamento', 'idcarnet_plantilla'], 'integer'],
            [['departamento_nombre', 'departamento_color', 'departamento_fuenteletra', 'departamento_letracolor'], 'safe'],
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
        $query = CarnetDepartamento::find();

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
            'idcarnet_departamento' => $this->idcarnet_departamento,
            'idcarnet_plantilla' => $this->idcarnet_plantilla,
        ]);

        $query->andFilterWhere(['like', 'departamento_nombre', $this->departamento_nombre])
            ->andFilterWhere(['like', 'departamento_color', $this->departamento_color])
            ->andFilterWhere(['like', 'departamento_fuenteletra', $this->departamento_fuenteletra])
            ->andFilterWhere(['like', 'departamento_letracolor', $this->departamento_letracolor]);

        return $dataProvider;
    }
}
