<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CarnetVisitanteImp;

/**
 * CarnetVisitanteImpSearch represents the model behind the search form about `backend\models\CarnetVisitanteImp`.
 */
class CarnetVisitanteImpSearch extends CarnetVisitanteImp
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcarnet_visitante_imp', 'idcarnet_visitante', 'idusuario'], 'integer'],
            [['modo', 'fecha'], 'safe'],
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
        $query = CarnetVisitanteImp::find();

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
            'idcarnet_visitante_imp' => $this->idcarnet_visitante_imp,
            'idcarnet_visitante' => $this->idcarnet_visitante,
            'idusuario' => $this->idusuario,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'modo', $this->modo]);

        return $dataProvider;
    }
}
