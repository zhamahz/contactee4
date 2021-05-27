<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\University;

/**
 * User4Search represents the model behind the search form of `app\models\User4`.
 */
class User4Search extends User4
{
    public $uniName;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status', 'superadmin', 'created_at', 'updated_at', 'email_confirmed', 'id_university'], 'integer'],
            [['username', 'auth_key', 'password_hash', 'confirmation_token', 'registration_ip', 'bind_to_ip', 'email',  'uniName'], 'safe'],
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
        $query = User4::find();
        $query->joinWith(['university']);


        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['uniName'] = [
            'asc' => [University::tableName().'.name' => SORT_ASC],
            'desc' => [University::tableName().'.name' => SORT_DESC],
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
//            'status' => $this->status,
//            'superadmin' => $this->superadmin,
//            'created_at' => $this->created_at,
//            'updated_at' => $this->updated_at,
//            'email_confirmed' => $this->email_confirmed,
//            'id_university' => $this->id_university,
//        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'confirmation_token', $this->confirmation_token])
            ->andFilterWhere(['like', 'registration_ip', $this->registration_ip])
            ->andFilterWhere(['like', 'bind_to_ip', $this->bind_to_ip])
            ->andFilterWhere(['like', 'email', $this->email])
        ->andFilterWhere(['like', University::tableName().'.name', $this->uniName]);


        return $dataProvider;
    }
}
