<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "session".
 *
 * @property int $id
 * @property string $location
 * @property string $address
 * @property string $dow
 * @property string $time
 * @property string $commencement_date
 * @property string $contact
 * @property int $contact_number
 * @property int $run_time
 * @property string $cost
 */
class Session extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'session';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['location', 'address', 'dow', 'time', 'commencement_date', 'contact', 'run_time', 'cost'], 'required'],
            [['location', 'address', 'contact', 'cost'], 'string'],
            [['commencement_date'], 'safe'],
            [['contact_number', 'run_time'], 'integer'],
            [['dow', 'time'], 'string', 'max' => 127],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location' => 'Location',
            'address' => 'Address',
            'dow' => 'Dow',
            'time' => 'Time',
            'commencement_date' => 'Commencement Date',
            'contact' => 'Contact',
            'contact_number' => 'Contact Number',
            'run_time' => 'Run Time',
            'cost' => 'Cost',
        ];
    }
}
