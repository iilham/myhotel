<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $resvId
 * @property string $roomNo
 * @property double $pay
 * @property double $addCost
 * @property double $disc
 * @property double $change
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['resvId', 'roomNo', 'pay', 'disc', 'change'], 'required'],
            [['resvId'], 'integer'],
            [['pay', 'addCost', 'disc', 'change'], 'number'],
            [['roomNo'], 'string', 'max' => 6],
            [['roomNo'], 'unique'],
            [['resvId'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'resvId' => 'Resv ID',
            'roomNo' => 'Room No',
            'pay' => 'Pay',
            'addCost' => 'Add Cost',
            'disc' => 'Disc',
            'change' => 'Change',
        ];
    }
}
