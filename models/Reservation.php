<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservation".
 *
 * @property int $resvId
 * @property string $name
 * @property string $address
 * @property int $capacity
 * @property string $dateIn
 * @property string $dateOut
 * @property string $roomType
 * @property string $RoomNo
 */
class Reservation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reservation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'address', 'capacity', 'dateIn', 'dateOut', 'roomType', 'RoomNo'], 'required'],
            [['address', 'roomType'], 'string'],
            [['capacity'], 'integer'],
            [['name'], 'string', 'max' => 25],
            [['dateIn', 'dateOut'], 'string', 'max' => 15],
            [['RoomNo'], 'string', 'max' => 6],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'resvId' => 'Resv ID',
            'name' => 'Name',
            'address' => 'Address',
            'capacity' => 'Capacity',
            'dateIn' => 'Date In',
            'dateOut' => 'Date Out',
            'roomType' => 'Room Type',
            'RoomNo' => 'Room No',
        ];
    }
}
