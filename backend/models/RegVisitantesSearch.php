<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RegVisitantes;

/**
 * RegVisitantesSearch represents the model behind the search form about `backend\models\RegVisitantes`.
 */
class RegVisitantesSearch extends RegVisitantes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ced_visitante', 'telefono_visitante', 'telefono_celular_visitante'], 'integer'],
            [['nombre_visitante', 'apellido_visitante', 'sexo_visitante', 'direccion_visitante', 'nacionalidad_visitante', 'fecha_creacion_visitante', 'email_visitante', 'url_foto'], 'safe'],
            [['lista_negra'], 'boolean'],
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
        $query = RegVisitantes::find();

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
            'ced_visitante' => $this->ced_visitante,
            'telefono_visitante' => $this->telefono_visitante,
            'telefono_celular_visitante' => $this->telefono_celular_visitante,
            'fecha_creacion_visitante' => $this->fecha_creacion_visitante,
            'lista_negra' => $this->lista_negra,
        ]);

        $query->andFilterWhere(['like', 'nombre_visitante', $this->nombre_visitante])
            ->andFilterWhere(['like', 'apellido_visitante', $this->apellido_visitante])
            ->andFilterWhere(['like', 'sexo_visitante', $this->sexo_visitante])
            ->andFilterWhere(['like', 'direccion_visitante', $this->direccion_visitante])
            ->andFilterWhere(['like', 'nacionalidad_visitante', $this->nacionalidad_visitante])
            ->andFilterWhere(['like', 'email_visitante', $this->email_visitante])
            ->andFilterWhere(['like', 'url_foto', $this->url_foto]);

        return $dataProvider;
    }
}
