<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "specification".
 *
 * @property integer $id
 * @property string $specification
 * @property string $img
 * @property integer $project_id
 *
 * @property Projects $project
 * @property SpecificationProjectsRelation[] $specificationProjectsRelations
 */
class Specification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'specification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['specification', 'img', 'project_id'], 'required'],
            [['project_id'], 'integer'],
            [['specification', 'img'], 'string', 'max' => 255],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Projects::className(), 'targetAttribute' => ['project_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'specification' => 'Specification',
            'img' => 'Img',
            'project_id' => 'Project ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Projects::className(), ['id' => 'project_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpecificationProjectsRelations()
    {
        return $this->hasMany(SpecificationProjectsRelation::className(), ['specification_id' => 'id']);
    }
}
