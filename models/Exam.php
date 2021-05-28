<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exam".
 *
 * @property int $id
 * @property string $type
 * @property string $text_date
 * @property string $link
 * @property string $comment
 * @property int $uni
 *
 * @property University $uni0
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
            [['link', 'comment'], 'string'],
            [['uni'], 'required'],
            [['uni'], 'integer'],
            [['type', 'text_date'], 'string', 'max' => 255],
            [['uni'], 'exist', 'skipOnError' => true, 'targetClass' => University::className(), 'targetAttribute' => ['uni' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'text_date' => 'Text Date',
            'link' => 'Link',
            'comment' => 'Comment',
            'uni' => 'Uni',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUni0()
    {
        return $this->hasOne(University::className(), ['id' => 'uni']);
    }
}
