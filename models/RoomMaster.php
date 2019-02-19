<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "room_master".
 *
 * @property int $no
 * @property string $roomType
 * @property double $price
 * @property string $amenities
 */
class RoomMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room_master';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['roomType', 'price', 'amenities'], 'required'],
            [['roomType', 'amenities'], 'string'],
            [['price'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'roomType' => 'Room Type',
            'price' => 'Price',
            'amenities' => 'Amenities',
        ];
    }
}
