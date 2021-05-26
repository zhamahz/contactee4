<?php

namespace app\models;

use app\models\Chat;
use app\models\Exam;
use app\models\StudentRegistration;
use app\models\University;
use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $confirmation_token
 * @property int $status
 * @property int $superadmin
 * @property int $created_at
 * @property int $updated_at
 * @property string $registration_ip
 * @property string $bind_to_ip
 * @property string $email
 * @property int $email_confirmed
 * @property int $id_university
 *
 * @property Chat[] $chats
 * @property Exam[] $exams
 * @property StudentRegistration[] $studentRegistrations
 * @property University $university
 */
class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['auth_key', 'password_hash', 'created_at', 'updated_at'], 'required'],
            [['status', 'superadmin', 'created_at', 'updated_at', 'email_confirmed', 'id_university'], 'integer'],
            [['username', 'password_hash', 'confirmation_token', 'bind_to_ip'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['registration_ip'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 128],
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
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'confirmation_token' => 'Confirmation Token',
            'status' => 'Status',
            'superadmin' => 'Superadmin',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'registration_ip' => 'Registration Ip',
            'bind_to_ip' => 'Bind To Ip',
            'email' => 'Email',
            'email_confirmed' => 'Email Confirmed',
            'id_university' => 'Id University',
        ];
    }
    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChats()
    {
        return $this->hasMany(Chat::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExams()
    {
        return $this->hasMany(Exam::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations()
    {
        return $this->hasMany(StudentRegistration::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUniversity()
    {
        return $this->hasOne(University::className(), ['id' => 'id_university']);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
