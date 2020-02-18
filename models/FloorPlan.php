<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "floor_plan".
 *
 * @property integer $id
 * @property integer $plan_name
 * @property integer $img
 * @property integer $projects_id
 *
 * @property Projects $projects
 */
class FloorPlan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'floor_plan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['plan_name','img', 'projects_id'], 'required'],
            [['plan_name','img'], 'string'],
            [[  'projects_id'], 'integer'],
            [['projects_id'], 'exist', 'skipOnError' => true, 'targetClass' => Projects::className(), 'targetAttribute' => ['projects_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'plan_name' => 'Plan Name',
            'img' => 'Img',
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
}
