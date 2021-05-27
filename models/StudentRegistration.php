<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student_registration".
 *
 * @property int $id
 * @property int $id_user
 * @property string $fullname
 * @property string $gender
 * @property string $birthday
 * @property int $id_country
 * @property string $email
 * @property resource $photo_passport
 * @property resource $pdf_attestat
 * @property resource $pdf_motivation
 * @property int $id_uni_1
 * @property int $id_program_1
 * @property string $datetime_reg_1
 * @property int $id_uni_2
 * @property int $id_program_2
 * @property string $datetime_reg_2
 * @property int $id_uni_3
 * @property int $id_program_3
 * @property string $datetime_reg_3
 * @property int $id_uni_4
 * @property int $id_program_4
 * @property string $datetime_reg_4
 * @property int $id_uni_5
 * @property int $id_program_5
 * @property string $datetime_reg_5
 * @property int $id_uni_accepted_1
 * @property int $id_uni_accepted_2
 * @property int $id_uni_accepted_3
 * @property int $id_uni_accepted_4
 * @property int $id_uni_accepted_5
 * @property string $visa
 * @property string $datetime_visa
 * @property string $status_visa
 * @property string $status_vuz
 *
 * @property User $user
 * @property Programs $program3
 * @property Programs $program30
 * @property Programs $program4
 * @property Programs $program5
 * @property University $uniAccepted1
 * @property University $uniAccepted2
 * @property University $uniAccepted3
 * @property University $uniAccepted4
 * @property University $uniAccepted5
 * @property Country $country
 * @property Programs $program1
 * @property University $uni1
 * @property University $uni2
 * @property University $uni3
 * @property University $uni4
 * @property University $uni5
 * @property Programs $program2
 */
class StudentRegistration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student_registration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
           // [['id_user'], 'required'],
            [['id_user', 'id_country', 'id_uni_1', 'id_program_1', 'id_uni_2', 'id_program_2', 'id_uni_3', 'id_program_3', 'id_uni_4', 'id_program_4', 'id_uni_5', 'id_program_5', 'id_uni_accepted_1', 'id_uni_accepted_2', 'id_uni_accepted_3', 'id_uni_accepted_4', 'id_uni_accepted_5'], 'integer'],
            [['birthday', 'datetime_reg_1', 'datetime_reg_2', 'datetime_reg_3', 'datetime_reg_4', 'datetime_reg_5', 'datetime_visa'], 'safe'],
            [['photo_passport', 'pdf_attestat', 'pdf_motivation'], 'string'],
            [['fullname', 'gender', 'email'], 'string', 'max' => 255],
            [['visa'], 'string', 'max' => 20],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_program_3'], 'exist', 'skipOnError' => true, 'targetClass' => Programs::className(), 'targetAttribute' => ['id_program_3' => 'id']],
            [['id_program_3'], 'exist', 'skipOnError' => true, 'targetClass' => Programs::className(), 'targetAttribute' => ['id_program_3' => 'id']],
            [['id_program_4'], 'exist', 'skipOnError' => true, 'targetClass' => Programs::className(), 'targetAttribute' => ['id_program_4' => 'id']],
            [['id_program_5'], 'exist', 'skipOnError' => true, 'targetClass' => Programs::className(), 'targetAttribute' => ['id_program_5' => 'id']],
            [['id_uni_accepted_1'], 'exist', 'skipOnError' => true, 'targetClass' => University::className(), 'targetAttribute' => ['id_uni_accepted_1' => 'id']],
            [['id_uni_accepted_2'], 'exist', 'skipOnError' => true, 'targetClass' => University::className(), 'targetAttribute' => ['id_uni_accepted_2' => 'id']],
            [['id_uni_accepted_3'], 'exist', 'skipOnError' => true, 'targetClass' => University::className(), 'targetAttribute' => ['id_uni_accepted_3' => 'id']],
            [['id_uni_accepted_4'], 'exist', 'skipOnError' => true, 'targetClass' => University::className(), 'targetAttribute' => ['id_uni_accepted_4' => 'id']],
            [['id_uni_accepted_5'], 'exist', 'skipOnError' => true, 'targetClass' => University::className(), 'targetAttribute' => ['id_uni_accepted_5' => 'id']],
            [['id_country'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['id_country' => 'id']],
            [['id_program_1'], 'exist', 'skipOnError' => true, 'targetClass' => Programs::className(), 'targetAttribute' => ['id_program_1' => 'id']],
            [['id_uni_1'], 'exist', 'skipOnError' => true, 'targetClass' => University::className(), 'targetAttribute' => ['id_uni_1' => 'id']],
            [['id_uni_2'], 'exist', 'skipOnError' => true, 'targetClass' => University::className(), 'targetAttribute' => ['id_uni_2' => 'id']],
            [['id_uni_3'], 'exist', 'skipOnError' => true, 'targetClass' => University::className(), 'targetAttribute' => ['id_uni_3' => 'id']],
            [['id_uni_4'], 'exist', 'skipOnError' => true, 'targetClass' => University::className(), 'targetAttribute' => ['id_uni_4' => 'id']],
            [['id_uni_5'], 'exist', 'skipOnError' => true, 'targetClass' => University::className(), 'targetAttribute' => ['id_uni_5' => 'id']],
            [['id_program_2'], 'exist', 'skipOnError' => true, 'targetClass' => Programs::className(), 'targetAttribute' => ['id_program_2' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'id_user' => 'Пользователь',
            'fullname' => 'ФИО',
            'gender' => 'Пол',
            'birthday' => 'Дата рождения',
            'id_country' => 'Гражданство',
            'email' => 'Электронный адресс',
            'photo_passport' => 'Паспорт',
            'pdf_attestat' => 'Аттестат',
            'pdf_motivation' => 'Мотивационка',
            'id_uni_1' => 'Университет №1',
            'id_program_1' => 'Специальность №1',
            'datetime_reg_1' => 'Дата подачи №1',
            'id_uni_2' => 'Университет №2',
            'id_program_2' => 'Специальность №2',
            'datetime_reg_2' => 'Дата подачи №2',
            'id_uni_3' => 'Университет №3',
            'id_program_3' => 'Специальность №3',
            'datetime_reg_3' => 'Дата подачи №3',
            'id_uni_4' => 'Университет №4',
            'id_program_4' => 'Специальность №4',
            'datetime_reg_4' => 'Дата подачи №4',
            'id_uni_5' => 'Университет №5',
            'id_program_5' => 'Специальность №5',
            'datetime_reg_5' => 'Дата подачи №5',
            'id_uni_accepted_1' => 'Статус',
            'id_uni_accepted_2' => 'Принятый университет №2',
            'id_uni_accepted_3' => 'Принятый университет №3',
            'id_uni_accepted_4' => 'Принятый университет №4',
            'id_uni_accepted_5' => 'Принятый университет №5',
            'visa' => 'Виза',
            'datetime_visa' => 'Дата подачи на визу',
            'status_visa' => 'Статус визы',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgram3()
    {
        return $this->hasOne(Programs::className(), ['id' => 'id_program_3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgram30()
    {
        return $this->hasOne(Programs::className(), ['id' => 'id_program_3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgram4()
    {
        return $this->hasOne(Programs::className(), ['id' => 'id_program_4']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgram5()
    {
        return $this->hasOne(Programs::className(), ['id' => 'id_program_5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUniAccepted1()
    {
        return $this->hasOne(University::className(), ['id' => 'id_uni_accepted_1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUniAccepted2()
    {
        return $this->hasOne(University::className(), ['id' => 'id_uni_accepted_2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUniAccepted3()
    {
        return $this->hasOne(University::className(), ['id' => 'id_uni_accepted_3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUniAccepted4()
    {
        return $this->hasOne(University::className(), ['id' => 'id_uni_accepted_4']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUniAccepted5()
    {
        return $this->hasOne(University::className(), ['id' => 'id_uni_accepted_5']);
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
    public function getProgram1()
    {
        return $this->hasOne(Programs::className(), ['id' => 'id_program_1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUni1()
    {
        return $this->hasOne(University::className(), ['id' => 'id_uni_1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUni2()
    {
        return $this->hasOne(University::className(), ['id' => 'id_uni_2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUni3()
    {
        return $this->hasOne(University::className(), ['id' => 'id_uni_3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUni4()
    {
        return $this->hasOne(University::className(), ['id' => 'id_uni_4']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUni5()
    {
        return $this->hasOne(University::className(), ['id' => 'id_uni_5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgram2()
    {
        return $this->hasOne(Programs::className(), ['id' => 'id_program_2']);
    }
}
