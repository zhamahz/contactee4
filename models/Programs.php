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
     * Gets query for [[StudentRegistrations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_program_1' => 'id']);
    }
}
