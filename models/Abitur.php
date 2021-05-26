<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "abitur".
 *
 * @property int $id
 * @property string $fullname
 * @property int $id_university
 * @property int $id_country
 * @property int $id_speciality
 * @property string $status1
 * @property string $status2
 * @property string $dop
 *
 * @property Country $country
 * @property Programs $speciality
 * @property University $university
 */
class Abitur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'abitur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'id_university', 'id_country', 'id_speciality', 'status1', 'status2', 'dop'], 'required'],
            [['id_university', 'id_country', 'id_speciality'], 'integer'],
            [['fullname', 'status1', 'status2', 'dop'], 'string', 'max' => 255],
            [['id_country'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['id_country' => 'id']],
            [['id_speciality'], 'exist', 'skipOnError' => true, 'targetClass' => Programs::className(), 'targetAttribute' => ['id_speciality' => 'id']],
            [['id_university'], 'exist', 'skipOnError' => true, 'targetClass' => University::className(), 'targetAttribute' => ['id_university' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'id_university' => 'Id University',
            'id_country' => 'Id Country',
            'id_speciality' => 'Id Speciality',
            'status1' => 'Status1',
            'status2' => 'Status2',
            'dop' => 'Dop',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'id_country']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpeciality()
    {
        return $this->hasOne(Programs::className(), ['id' => 'id_speciality']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUniversity()
    {
        return $this->hasOne(University::className(), ['id' => 'id_university']);
    }
}
