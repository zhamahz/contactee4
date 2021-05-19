<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exam".
 *
 * @property int $id
 * @property int $id_user
 * @property string $type
 * @property string $text_date
 * @property string $link
 * @property string $comment
 *
 * @property User $user
 */
class Exam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user'], 'integer'],
            [['link', 'comment'], 'string'],
            [['type', 'text_date'], 'string', 'max' => 255],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'type' => 'Type',
            'text_date' => 'Text Date',
            'link' => 'Link',
            'comment' => 'Comment',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
