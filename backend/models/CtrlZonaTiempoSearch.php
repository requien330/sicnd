<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CtrlZonaTiempo;

/**
 * CtrlZonaTiempoSearch represents the model behind the search form about `backend\models\CtrlZonaTiempo`.
 */
class CtrlZonaTiempoSearch extends CtrlZonaTiempo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['indice', 'nivel', 'indicelink', 'domingodesde', 'domingohasta', 'lunesdesde', 'luneshasta', 'martesdesde', 'marteshasta', 'miercolesdesde', 'miercoleshasta', 'juevesdesde', 'jueveshasta', 'viernesdesde', 'vierneshasta', 'sabadodesde', 'sabadohasta'], 'integer'],
            [['descripcion'], 'safe'],
            [['disp_feriado'], 'boolean'],
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
        $query = CtrlZonaTiempo::find();

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
            'indice' => $this->indice,
            'disp_feriado' => $this->disp_feriado,
            'nivel' => $this->nivel,
            'indicelink' => $this->indicelink,
            'domingodesde' => $this->domingodesde,
            'domingohasta' => $this->domingohasta,
            'lunesdesde' => $this->lunesdesde,
            'luneshasta' => $this->luneshasta,
            'martesdesde' => $this->martesdesde,
            'marteshasta' => $this->marteshasta,
            'miercolesdesde' => $this->miercolesdesde,
            'miercoleshasta' => $this->miercoleshasta,
            'juevesdesde' => $this->juevesdesde,
            'jueveshasta' => $this->jueveshasta,
            'viernesdesde' => $this->viernesdesde,
            'vierneshasta' => $this->vierneshasta,
            'sabadodesde' => $this->sabadodesde,
            'sabadohasta' => $this->sabadohasta,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
