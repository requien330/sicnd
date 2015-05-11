<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CarnetEmpleadoImp;

/**
 * CarnetEmpleadoImpSearch represents the model behind the search form about `backend\models\CarnetEmpleadoImp`.
 */
class CarnetEmpleadoImpSearch extends CarnetEmpleadoImp
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcarnet_empleado_imp', 'idcarnet_empleado', 'idusuario'], 'integer'],
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
        $query = CarnetEmpleadoImp::find();

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
            'idcarnet_empleado_imp' => $this->idcarnet_empleado_imp,
            'idcarnet_empleado' => $this->idcarnet_empleado,
            'idusuario' => $this->idusuario,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'modo', $this->modo]);

        return $dataProvider;
    }
}
