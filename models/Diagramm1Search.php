<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Diagramm1;

/**
 * Diagramm1Search represents the model behind the search form of `app\models\Diagramm1`.
 */
class Diagramm1Search extends Diagramm1
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'accepted', 'rejected', 'sum', 'accepted2', 'rejected2', 'sum2', 'data1'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Diagramm1::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'accepted', $this->accepted])
            ->andFilterWhere(['like', 'rejected', $this->rejected])
            ->andFilterWhere(['like', 'sum', $this->sum])
            ->andFilterWhere(['like', 'accepted2', $this->accepted2])
            ->andFilterWhere(['like', 'rejected2', $this->rejected2])
            ->andFilterWhere(['like', 'sum2', $this->sum2])
            ->andFilterWhere(['like', 'data1', $this->data1]);

        return $dataProvider;
    }
}
