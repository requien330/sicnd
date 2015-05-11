<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CtrlVisitantes;

/**
 * CtrlVisitantesSearch represents the model behind the search form about `backend\models\CtrlVisitantes`.
 */
class CtrlVisitantesSearch extends CtrlVisitantes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idvisitante', 'ced_visitante', 'cedcontacto', 'idmotivos', 'codigo_pin'], 'integer'],
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
        $query = CtrlVisitantes::find();

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
            'idvisitante' => $this->idvisitante,
            'ced_visitante' => $this->ced_visitante,
            'cedcontacto' => $this->cedcontacto,
            'idmotivos' => $this->idmotivos,
            'codigo_pin' => $this->codigo_pin,
            'fentrada' => $this->fentrada,
            'fsalida' => $this->fsalida,
        ]);

        return $dataProvider;
    }
}
