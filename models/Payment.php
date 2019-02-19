<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $resvId
 * @property string $nameResv
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
            [['nameResv', 'roomNo', 'pay', 'disc', 'change'], 'required'],
            [['nameResv'], 'string'],
            [['pay', 'addCost', 'disc', 'change'], 'number'],
            [['roomNo'], 'string', 'max' => 6],
            [['roomNo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'resvId' => 'Resv ID',
            'nameResv' => 'Name Resv',
            'roomNo' => 'Room No',
            'pay' => 'Pay',
            'addCost' => 'Add Cost',
            'disc' => 'Disc',
            'change' => 'Change',
        ];
    }
}
