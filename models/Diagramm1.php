<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diagramm1".
 *
 * @property int $id
 * @property string $name
 * @property string $accepted
 * @property string $rejected
 * @property string $sum
 * @property string $accepted2
 * @property string $rejected2
 * @property string $sum2
 * @property string $data1
 */
class Diagramm1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diagramm1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'accepted', 'rejected', 'sum', 'accepted2', 'rejected2', 'sum2', 'data1'], 'string', 'max' => 255],
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
            'accepted' => 'Принятые заявления',
            'rejected' => 'Отклоненные заявления',
            'sum' => 'Общее количество',
            'accepted2' => 'Принятые заявления на визу',
            'rejected2' => 'Принятые заявления на визу',
            'sum2' => 'Общее количество',
            'data1' => 'Data1',
        ];
    }
}
