<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CarnetPlantilla;

/**
 * CarnetPlantillaSearch represents the model behind the search form about `backend\models\CarnetPlantilla`.
 */
class CarnetPlantillaSearch extends CarnetPlantilla
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcarnet_plantilla'], 'integer'],
            [['carnet_plantilla', 'orientacion', 'archivo_plantilla', 'nombreapellido_color', 'nombreapellido_fuenteletra', 'cedula_color', 'cedula_fuenteletra', 'fecha_color', 'fecha_fuenteletra', 'visitante_color'], 'safe'],
            [['fecha_fuentetamano'], 'number'],
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
        $query = CarnetPlantilla::find();

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
            'idcarnet_plantilla' => $this->idcarnet_plantilla,
            'fecha_fuentetamano' => $this->fecha_fuentetamano,
        ]);

        $query->andFilterWhere(['like', 'carnet_plantilla', $this->carnet_plantilla])
            ->andFilterWhere(['like', 'orientacion', $this->orientacion])
            ->andFilterWhere(['like', 'archivo_plantilla', $this->archivo_plantilla])
            ->andFilterWhere(['like', 'nombreapellido_color', $this->nombreapellido_color])
            ->andFilterWhere(['like', 'nombreapellido_fuenteletra', $this->nombreapellido_fuenteletra])
            ->andFilterWhere(['like', 'cedula_color', $this->cedula_color])
            ->andFilterWhere(['like', 'cedula_fuenteletra', $this->cedula_fuenteletra])
            ->andFilterWhere(['like', 'fecha_color', $this->fecha_color])
            ->andFilterWhere(['like', 'fecha_fuenteletra', $this->fecha_fuenteletra])
            ->andFilterWhere(['like', 'visitante_color', $this->visitante_color]);

        return $dataProvider;
    }
}
