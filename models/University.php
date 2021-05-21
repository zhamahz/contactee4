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
 * @property StudentRegistration[] $studentRegistrations0
 * @property StudentRegistration[] $studentRegistrations1
 * @property StudentRegistration[] $studentRegistrations2
 * @property StudentRegistration[] $studentRegistrations3
 * @property StudentRegistration[] $studentRegistrations4
 * @property StudentRegistration[] $studentRegistrations5
 * @property StudentRegistration[] $studentRegistrations6
 * @property StudentRegistration[] $studentRegistrations7
 * @property StudentRegistration[] $studentRegistrations8
 * @property User[] $users
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
            'name' => 'Название ВУЗа',
            'type' => 'Тип учреждения',
            'address' => 'Адрес',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_uni_accepted_1' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations0()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_uni_accepted_2' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations1()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_uni_accepted_3' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations2()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_uni_accepted_4' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations3()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_uni_accepted_5' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations4()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_uni_1' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations5()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_uni_2' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations6()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_uni_3' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations7()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_uni_4' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations8()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_uni_5' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['id_university' => 'id']);
    }
}
