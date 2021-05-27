<?php

namespace app\models;

use app\models\Country;
use app\models\University;
use yii\base\Model;
use yii\data\ActiveDataProvider;


/**
 * StudentRegistration4Search represents the model behind the search form of `app\models\StudentRegistration4`.
 */
class StudentRegistration4Search extends StudentRegistration4
{
    public $uni1Name;
    public $uni2Name;
    public $uni3Name;
    public $uni4Name;
    public $uni5Name;
    public $uniAccepted1Name;
    public $uniAccepted2Name;
    public $uniAccepted3Name;
    public $uniAccepted4Name;
    public $uniAccepted5Name;
    public $country1Name;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_user', 'id_country', 'id_uni_1', 'id_program_1', 'id_uni_2', 'id_program_2', 'id_uni_3', 'id_program_3', 'id_uni_4', 'id_program_4', 'id_uni_5', 'id_program_5', 'id_uni_accepted_1', 'id_uni_accepted_2', 'id_uni_accepted_3', 'id_uni_accepted_4', 'id_uni_accepted_5'], 'integer'],
            [['fullname', 'gender', 'birthday',
                'email', 'photo_passport', 'pdf_attestat', 'pdf_motivation', 'datetime_reg_1',
                'datetime_reg_2', 'datetime_reg_3', 'datetime_reg_4', 'datetime_reg_5', 'visa',
                'datetime_visa', 'status_visa', 'uni1Name', 'uni2Name', 'uni3Name', 'uni4Name', 'uni5Name',
                'uniAccepted1Name','uniAccepted2Name','uniAccepted3Name','uniAccepted4Name','uniAccepted5Name','country1Name'], 'safe'],
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
        $query = StudentRegistration4::find();
        $query->joinWith(['uni1']);
        $query->joinWith(['uni2']);
        $query->joinWith(['uni3']);
        $query->joinWith(['uni4']);
        $query->joinWith(['uni5']);

        $query->joinWith(['uniAccepted1']);
        $query->joinWith(['uniAccepted2']);
        $query->joinWith(['uniAccepted3']);
        $query->joinWith(['uniAccepted4']);
        $query->joinWith(['uniAccepted5']);

        $query->joinWith(['country']);
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['uni1Name'] = [
            'asc' => [University::tableName() . '.name' => SORT_ASC],
            'desc' => [University::tableName() . '.name' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['uni2Name'] = [
            'asc' => [University::tableName() . '.name' => SORT_ASC],
            'desc' => [University::tableName() . '.name' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['uni3Name'] = [
            'asc' => [University::tableName() . '.name' => SORT_ASC],
            'desc' => [University::tableName() . '.name' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['uni4Name'] = [
            'asc' => [University::tableName() . '.name' => SORT_ASC],
            'desc' => [University::tableName() . '.name' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['uni5Name'] = [
            'asc' => [University::tableName() . '.name' => SORT_ASC],
            'desc' => [University::tableName() . '.name' => SORT_DESC],
        ];


        $dataProvider->sort->attributes['uniAccepted1Name'] = [
            'asc' => [University::tableName() . '.name' => SORT_ASC],
            'desc' => [University::tableName() . '.name' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['uniAccepted2Name'] = [
            'asc' => [University::tableName() . '.name' => SORT_ASC],
            'desc' => [University::tableName() . '.name' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['uniAccepted3Name'] = [
            'asc' => [University::tableName() . '.name' => SORT_ASC],
            'desc' => [University::tableName() . '.name' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['uniAccepted4Name'] = [
            'asc' => [University::tableName() . '.name' => SORT_ASC],
            'desc' => [University::tableName() . '.name' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['uniAccepted5Name'] = [
            'asc' => [University::tableName() . '.name' => SORT_ASC],
            'desc' => [University::tableName() . '.name' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['country1Name'] = [
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
            ->andFilterWhere(['like', Country::tableName() . '.name', $this->country1Name])
            ->andFilterWhere(['like', University::tableName() . '.name', $this->uni1Name])
            ->andFilterWhere(['like', University::tableName() . '.name', $this->uni2Name])
            ->andFilterWhere(['like', University::tableName() . '.name', $this->uni3Name])
            ->andFilterWhere(['like', University::tableName() . '.name', $this->uni4Name])
            ->andFilterWhere(['like', University::tableName() . '.name', $this->uni5Name])
            ->andFilterWhere(['like', University::tableName() . '.name', $this->uniAccepted1Name])
            ->andFilterWhere(['like', University::tableName() . '.name', $this->uniAccepted2Name])
            ->andFilterWhere(['like', University::tableName() . '.name', $this->uniAccepted3Name])
            ->andFilterWhere(['like', University::tableName() . '.name', $this->uniAccepted4Name])
            ->andFilterWhere(['like', University::tableName() . '.name', $this->uniAccepted5Name])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'photo_passport', $this->photo_passport])
            ->andFilterWhere(['like', 'pdf_attestat', $this->pdf_attestat])
            ->andFilterWhere(['like', 'pdf_motivation', $this->pdf_motivation])
            ->andFilterWhere(['like', 'visa', $this->visa])
            ->andFilterWhere(['like', 'status_visa', $this->status_visa]);

        return $dataProvider;
    }
}
