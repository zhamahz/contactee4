<?php

namespace app;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MonUch;

/**
 * modelsMonUchSearch represents the model behind the search form of `app\models\MonUch`.
 */
class modelsMonUchSearch extends MonUch
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['kod_uch', 'naim_uch', 'pin_uch', 'reg_uch', 'rai_uch', 'gor_uch', 'd_uch', 'date_r', 'forma_uch'], 'safe'],
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
        $query = MonUch::find();

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

        $query->andFilterWhere(['like', 'kod_uch', $this->kod_uch])
            ->andFilterWhere(['like', 'naim_uch', $this->naim_uch])
            ->andFilterWhere(['like', 'pin_uch', $this->pin_uch])
            ->andFilterWhere(['like', 'reg_uch', $this->reg_uch])
            ->andFilterWhere(['like', 'rai_uch', $this->rai_uch])
            ->andFilterWhere(['like', 'gor_uch', $this->gor_uch])
            ->andFilterWhere(['like', 'd_uch', $this->d_uch])
            ->andFilterWhere(['like', 'date_r', $this->date_r])
            ->andFilterWhere(['like', 'forma_uch', $this->forma_uch]);

        return $dataProvider;
    }
}
