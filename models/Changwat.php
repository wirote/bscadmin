<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "changwat".
 *
 * @property string $chwcode
 * @property string $chwname
 * @property string $ampcode
 * @property string $tmbcode
 */
class Changwat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'changwat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['chwcode'], 'required'],
            [['chwcode'], 'string', 'max' => 2],
            [['chwname'], 'string', 'max' => 50],
            [['ampcode'], 'string', 'max' => 4],
            [['tmbcode'], 'string', 'max' => 6],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'chwcode' => 'รหัสจังหวัด',
            'chwname' => 'จังหวัด',
            'ampcode' => 'อำเภอ',
            'tmbcode' => 'ตำบล',
        ];
    }
}
