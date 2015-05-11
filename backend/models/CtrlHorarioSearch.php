<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CtrlHorario;

/**
 * CtrlHorarioSearch represents the model behind the search form about `backend\models\CtrlHorario`.
 */
class CtrlHorarioSearch extends CtrlHorario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idctrl_horario', 'ced_empleado'], 'integer'],
            [['fentrada', 'fsalida'], 'safe'],
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
        $query = CtrlHorario::find();

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
            'idctrl_horario' => $this->idctrl_horario,
            'ced_empleado' => $this->ced_empleado,
            'fentrada' => $this->fentrada,
            'fsalida' => $this->fsalida,
        ]);

        return $dataProvider;
    }
}
