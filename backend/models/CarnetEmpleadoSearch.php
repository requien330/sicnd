<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CarnetEmpleado;

/**
 * CarnetEmpleadoSearch represents the model behind the search form about `backend\models\CarnetEmpleado`.
 */
class CarnetEmpleadoSearch extends CarnetEmpleado
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcarnet_empleado', 'idcarnet_plantilla', 'idcarnet_departamento', 'idcarnet_cargo', 'ced_empleado', 'idcarnet_grupoytiempo'], 'integer'],
            [['fecha_vencimiento'], 'safe'],
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
        $query = CarnetEmpleado::find();

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
            'idcarnet_empleado' => $this->idcarnet_empleado,
            'idcarnet_plantilla' => $this->idcarnet_plantilla,
            'idcarnet_departamento' => $this->idcarnet_departamento,
            'idcarnet_cargo' => $this->idcarnet_cargo,
            'ced_empleado' => $this->ced_empleado,
            'fecha_vencimiento' => $this->fecha_vencimiento,
            'idcarnet_grupoytiempo' => $this->idcarnet_grupoytiempo,
        ]);

        return $dataProvider;
    }
}
