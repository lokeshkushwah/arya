<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "state".
 *
 * @property integer $id
 * @property string $state_name
 * @property string $country
 *
 * @property City[] $cities
 */
class State extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'state';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_name'], 'required'],
            [['state_name', 'country'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'state_name' => 'State Name',
            'country' => 'Country',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(City::className(), ['state_id' => 'id']);
    }
}
