<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "legal_projects_relations".
 *
 * @property integer $id
 * @property integer $legal_id
 * @property integer $project_id
 *
 * @property Projects $project
 * @property LegalApproval $legal
 */
class LegalProjectsRelations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'legal_projects_relations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['legal_id', 'project_id'], 'required'],
            [['legal_id', 'project_id'], 'integer'],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Projects::className(), 'targetAttribute' => ['project_id' => 'id']],
            [['legal_id'], 'exist', 'skipOnError' => true, 'targetClass' => LegalApproval::className(), 'targetAttribute' => ['legal_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'legal_id' => 'Legal ID',
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
    public function getLegal()
    {
        return $this->hasOne(LegalApproval::className(), ['id' => 'legal_id']);
    }
}
