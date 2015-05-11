<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CtrlUsuario;

/**
 * CtrlUsuarioSearch represents the model behind the search form about `backend\models\CtrlUsuario`.
 */
class CtrlUsuarioSearch extends CtrlUsuario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idusuario', 'idgrupoytiempo', 'idcarnet_departamento', 'numero', 'codigo_pin', 'tarjetayopin', 'tienefechalimite', 'rondasguardias', 'skipfpcheck', 'modificable', 'nivel', 'antipassback', 'ced_empleado'], 'integer'],
            [['codigo_id', 'codigo_sitio', 'codigo_tarjeta', 'codigo_bio', 'fechahasta'], 'safe'],
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
        $query = CtrlUsuario::find();

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
            'idusuario' => $this->idusuario,
            'idgrupoytiempo' => $this->idgrupoytiempo,
            'idcarnet_departamento' => $this->idcarnet_departamento,
            'numero' => $this->numero,
            'codigo_pin' => $this->codigo_pin,
            'tarjetayopin' => $this->tarjetayopin,
            'tienefechalimite' => $this->tienefechalimite,
            'fechahasta' => $this->fechahasta,
            'rondasguardias' => $this->rondasguardias,
            'skipfpcheck' => $this->skipfpcheck,
            'modificable' => $this->modificable,
            'nivel' => $this->nivel,
            'antipassback' => $this->antipassback,
            'ced_empleado' => $this->ced_empleado,
        ]);

        $query->andFilterWhere(['like', 'codigo_id', $this->codigo_id])
            ->andFilterWhere(['like', 'codigo_sitio', $this->codigo_sitio])
            ->andFilterWhere(['like', 'codigo_tarjeta', $this->codigo_tarjeta])
            ->andFilterWhere(['like', 'codigo_bio', $this->codigo_bio]);

        return $dataProvider;
    }
}
