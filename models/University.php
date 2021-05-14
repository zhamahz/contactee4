<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "university".
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $address
 * @property string $email
 *
 * @property StudentRegistration[] $studentRegistrations
 */
class University extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'university';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'type', 'address', 'email'], 'required'],
            [['name', 'type', 'address', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'type' => 'Type',
            'address' => 'Address',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[StudentRegistrations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_uni_1' => 'id']);
    }
}
