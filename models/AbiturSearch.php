<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Abitur;
use app\models\University;
use app\models\Country;
use app\models\Programs;

/**
 * AbiturSearch represents the model behind the search form of `app\models\Abitur`.
 */
class AbiturSearch extends Abitur
{
    public $univer2Name;
    public $country2Name;
    public $programms2Name;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_university', 'id_country', 'id_speciality'], 'integer'],
            [['univer2Name', 'country2Name', 'programms2Name','fullname', 'status1', 'date1', 'status2', 'date2', 'dop'], 'safe'],
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
        $query->joinWith(['university']);
        $query->joinWith(['speciality']);
        $query->joinWith(['country']);
        // add conditions that should always apply here



        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['univer2Name'] = [
            'asc' => [University::tableName() . '.name' => SORT_ASC],
            'desc' => [University::tableName() . '.name' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['programms2Name'] = [
            'asc' => [Programs::tableName() . '.speciality' => SORT_ASC],
            'desc' => [Programs::tableName() . '.speciality' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['country2Name'] = [
            'asc' => [Country::tableName() . '.name' => SORT_ASC],
            'desc' => [Country::tableName() . '.name' => SORT_DESC],
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
//            'id_university' => $this->id_university,
//            'id_country' => $this->id_country,
//            'id_speciality' => $this->id_speciality,
//            'date1' => $this->date1,
//            'date2' => $this->date2,
//        ]);

        $query->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', University::tableName() . '.name', $this->univer2Name])
            ->andFilterWhere(['like', Country::tableName() . '.name', $this->country2Name])
            ->andFilterWhere(['like', Programs::tableName() . '.speciality', $this->programms2Name])
            ->andFilterWhere(['like', 'status1', $this->status1])
            ->andFilterWhere(['like', 'status2', $this->status2])
            ->andFilterWhere(['like', 'dop', $this->dop]);
        return $dataProvider;
    }
}
