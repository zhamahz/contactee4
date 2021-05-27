<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StudentRegistration;
use app\models\Country;

/**
 * StudentRegistrationSearch represents the model behind the search form of `app\models\StudentRegistration`.
 */
class StudentRegistrationSearch extends StudentRegistration
{
    public $countryName;
    public $programName;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_user', 'id_country', 'id_uni_1', 'id_program_1', 'id_uni_2', 'id_program_2', 'id_uni_3', 'id_program_3', 'id_uni_4', 'id_program_4', 'id_uni_5', 'id_program_5', 'id_uni_accepted_1', 'id_uni_accepted_2', 'id_uni_accepted_3', 'id_uni_accepted_4', 'id_uni_accepted_5'], 'integer'],
            [['fullname', 'gender', 'birthday', 'email', 'photo_passport', 'pdf_attestat', 'pdf_motivation', 'datetime_reg_1', 'datetime_reg_2', 'datetime_reg_3', 'datetime_reg_4', 'datetime_reg_5', 'visa', 'datetime_visa', 'status_visa','countryName'], 'safe'],
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
        $query = StudentRegistration::find();
        $query->joinWith(['program1']);
        $query->joinWith(['program2']);
        $query->joinWith(['program3']);
        $query->joinWith(['program4']);
        $query->joinWith(['program5']);
        $query->joinWith(['country']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->sort->attributes['countryName'] = [
            'asc' => [Country::tableName() . '.name' => SORT_ASC],
            'desc' => [Country::tableName() . '.name' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['programName'] = [
            'asc' => [Programs::tableName() . '.speciality' => SORT_ASC],
            'desc' => [Programs::tableName() . '.speciality' => SORT_DESC],
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
//            'id_user' => $this->id_user,
//            'birthday' => $this->birthday,
//            'id_country' => $this->id_country,
//            'id_uni_1' => $this->id_uni_1,
//            'id_program_1' => $this->id_program_1,
//            'datetime_reg_1' => $this->datetime_reg_1,
//            'id_uni_2' => $this->id_uni_2,
//            'id_program_2' => $this->id_program_2,
//            'datetime_reg_2' => $this->datetime_reg_2,
//            'id_uni_3' => $this->id_uni_3,
//            'id_program_3' => $this->id_program_3,
//            'datetime_reg_3' => $this->datetime_reg_3,
//            'id_uni_4' => $this->id_uni_4,
//            'id_program_4' => $this->id_program_4,
//            'datetime_reg_4' => $this->datetime_reg_4,
//            'id_uni_5' => $this->id_uni_5,
//            'id_program_5' => $this->id_program_5,
//            'datetime_reg_5' => $this->datetime_reg_5,
//            'id_uni_accepted_1' => $this->id_uni_accepted_1,
//            'id_uni_accepted_2' => $this->id_uni_accepted_2,
//            'id_uni_accepted_3' => $this->id_uni_accepted_3,
//            'id_uni_accepted_4' => $this->id_uni_accepted_4,
//            'id_uni_accepted_5' => $this->id_uni_accepted_5,
//            'datetime_visa' => $this->datetime_visa,
//        ]);

        $query->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'email', $this->email])
//            ->andFilterWhere(['like', University::tableName() . '.name', $this->univerName])
            ->andFilterWhere(['like', Country::tableName() . '.name', $this->countryName])
            ->andFilterWhere(['like', Programs::tableName() . '.speciality', $this->programName])
            ->andFilterWhere(['like', 'photo_passport', $this->photo_passport])
            ->andFilterWhere(['like', 'pdf_attestat', $this->pdf_attestat])
            ->andFilterWhere(['like', 'pdf_motivation', $this->pdf_motivation])
            ->andFilterWhere(['like', 'visa', $this->visa])
            ->andFilterWhere(['like', 'status_visa', $this->status_visa]);

        return $dataProvider;
    }
}
