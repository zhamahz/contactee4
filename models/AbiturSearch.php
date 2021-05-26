<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Abitur;

/**
 * AbiturSearch represents the model behind the search form of `app\models\Abitur`.
 */
class AbiturSearch extends Abitur
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_university', 'id_country', 'id_speciality'], 'integer'],
            [['fullname', 'status1', 'status2', 'dop'], 'safe'],
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
        $query = Abitur::find();

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
            'id_university' => $this->id_university,
            'id_country' => $this->id_country,
            'id_speciality' => $this->id_speciality,
        ]);

        $query->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'status1', $this->status1])
            ->andFilterWhere(['like', 'status2', $this->status2])
            ->andFilterWhere(['like', 'dop', $this->dop]);

        return $dataProvider;
    }
}
