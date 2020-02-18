<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "specification_projects_relation".
 *
 * @property integer $id
 * @property integer $specification_id
 * @property integer $projects_id
 *
 * @property Projects $projects
 * @property Specification $specification
 */
class SpecificationProjectsRelation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'specification_projects_relation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['specification_id', 'projects_id'], 'required'],
            [['specification_id', 'projects_id'], 'integer'],
            [['projects_id'], 'exist', 'skipOnError' => true, 'targetClass' => Projects::className(), 'targetAttribute' => ['projects_id' => 'id']],
            [['specification_id'], 'exist', 'skipOnError' => true, 'targetClass' => Specification::className(), 'targetAttribute' => ['specification_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'specification_id' => 'Specification ID',
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
    public function getSpecification()
    {
        return $this->hasOne(Specification::className(), ['id' => 'specification_id']);
    }
}
