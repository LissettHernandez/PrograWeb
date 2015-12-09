<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tareas;

/**
 * TareasSearch represents the model behind the search form about `app\models\Tareas`.
 */
class TareasSearch extends Tareas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtarea', 'tipo_idtipo', 'usuario_idusuario'], 'integer'],
            [['nombretarea', 'descripcion', 'fechainicio', 'fechafin'], 'safe'],
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
        $query = Tareas::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idtarea' => $this->idtarea,
            'fechainicio' => $this->fechainicio,
            'fechafin' => $this->fechafin,
            'tipo_idtipo' => $this->tipo_idtipo,
            'usuario_idusuario' => $this->usuario_idusuario,
        ]);

        $query->andFilterWhere(['like', 'nombretarea', $this->nombretarea])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
