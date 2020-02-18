<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "amenities".
 *
 * @property integer $id
 * @property string $amenities
 * @property string $img
 *
 * @property AmenitiesProjectsRelation[] $amenitiesProjectsRelations
 */
class Amenities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'amenities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['amenities', 'img'], 'required'],
            [['amenities', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'amenities' => 'Amenities',
            'img' => 'Img',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAmenitiesProjectsRelations()
    {
        return $this->hasMany(AmenitiesProjectsRelation::className(), ['amenities_id' => 'id']);
    }
}
