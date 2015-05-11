<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MEmpleados;

/**
 * MEmpleadosSearch represents the model behind the search form about `backend\models\MEmpleados`.
 */
class MEmpleadosSearch extends MEmpleados
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ced_empleado', 'edo_empleado', 'cod_nivel'], 'integer'],
            [['ape_empleado', 'nom_empleado', 'dir_empleado', 'fec_empleado', 'log_empleado', 'pass_empleado', 'url_foto'], 'safe'],
            [['es_venezolano', 'es_masculino'], 'boolean'],
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
        $query = MEmpleados::find();

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
            'ced_empleado' => $this->ced_empleado,
            'es_venezolano' => $this->es_venezolano,
            'es_masculino' => $this->es_masculino,
            'fec_empleado' => $this->fec_empleado,
            'edo_empleado' => $this->edo_empleado,
            'cod_nivel' => $this->cod_nivel,
        ]);

        $query->andFilterWhere(['like', 'ape_empleado', $this->ape_empleado])
            ->andFilterWhere(['like', 'nom_empleado', $this->nom_empleado])
            ->andFilterWhere(['like', 'dir_empleado', $this->dir_empleado])
            ->andFilterWhere(['like', 'log_empleado', $this->log_empleado])
            ->andFilterWhere(['like', 'pass_empleado', $this->pass_empleado])
            ->andFilterWhere(['like', 'url_foto', $this->url_foto]);

        return $dataProvider;
    }
}
