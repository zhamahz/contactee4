<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Exam;

/**
 * ExamSearch represents the model behind the search form of `app\models\Exam`.
 */
class ExamSearch extends Exam
{
    public $uniName;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'uni'], 'integer'],
            [['type', 'text_date', 'link', 'comment', 'uniName'], 'safe'],
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
        $query = Exam::find();
        $query->joinWith(['uni0']);
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->sort->attributes['countryName'] = [
            'asc' => [University::tableName() . '.name' => SORT_ASC],
            'desc' => [University::tableName() . '.name' => SORT_DESC],
        ];
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
//        $query->andFilterWhere([
//            'id' => $this->id,
//            'uni' => $this->uni,
//        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'text_date', $this->text_date])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', University::tableName() . '.name', $this->uniName]);

        return $dataProvider;
    }
}
