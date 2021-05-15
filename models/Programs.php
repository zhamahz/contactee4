<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programs".
 *
 * @property int $id
 * @property string $speciality
 *
 * @property StudentRegistration[] $studentRegistrations
 * @property StudentRegistration[] $studentRegistrations0
 * @property StudentRegistration[] $studentRegistrations1
 * @property StudentRegistration[] $studentRegistrations2
 * @property StudentRegistration[] $studentRegistrations3
 * @property StudentRegistration[] $studentRegistrations4
 */
class Programs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'programs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['speciality'], 'required'],
            [['speciality'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'speciality' => 'Speciality',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_program_3' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations0()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_program_3' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations1()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_program_4' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations2()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_program_5' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations3()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_program_1' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations4()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_program_2' => 'id']);
    }
}
