<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "room_info".
 *
 * @property string $number
 * @property string $type
 * @property double $price
 * @property string $amenities
 * @property int $status
 */
class RoomInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'type', 'price', 'amenities', 'status'], 'required'],
            [['type', 'amenities'], 'string'],
            [['price'], 'number'],
            [['status'], 'integer'],
            [['number'], 'string', 'max' => 6],
            [['number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'number' => 'Number',
            'type' => 'Type',
            'price' => 'Price',
            'amenities' => 'Amenities',
            'status' => 'Status',
        ];
    }
}
