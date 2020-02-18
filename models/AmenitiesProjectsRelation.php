<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "amenities_projects_relation".
 *
 * @property integer $id
 * @property integer $amenities_id
 * @property integer $projects_id
 *
 * @property Projects $projects
 * @property Amenities $amenities
 */
class AmenitiesProjectsRelation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'amenities_projects_relation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['amenities_id', 'projects_id'], 'required'],
            [['amenities_id', 'projects_id'], 'integer'],
            [['projects_id'], 'exist', 'skipOnError' => true, 'targetClass' => Projects::className(), 'targetAttribute' => ['projects_id' => 'id']],
            [['amenities_id'], 'exist', 'skipOnError' => true, 'targetClass' => Amenities::className(), 'targetAttribute' => ['amenities_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'amenities_id' => 'Amenities ID',
            'projects_id' => 'Projects ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasOne(Projects::className(), ['id' => 'projects_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAmenities()
    {
        return $this->hasOne(Amenities::className(), ['id' => 'amenities_id']);
    }
}
