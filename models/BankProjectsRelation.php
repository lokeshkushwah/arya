<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank_projects_relation".
 *
 * @property integer $id
 * @property integer $bank_id
 * @property integer $projects_id
 *
 * @property Projects $projects
 * @property BankApproval $bank
 */
class BankProjectsRelation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bank_projects_relation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bank_id', 'projects_id'], 'required'],
            [['bank_id', 'projects_id'], 'integer'],
            [['projects_id'], 'exist', 'skipOnError' => true, 'targetClass' => Projects::className(), 'targetAttribute' => ['projects_id' => 'id']],
            [['bank_id'], 'exist', 'skipOnError' => true, 'targetClass' => BankApproval::className(), 'targetAttribute' => ['bank_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bank_id' => 'Bank ID',
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
    public function getBank()
    {
        return $this->hasOne(BankApproval::className(), ['id' => 'bank_id']);
    }
}
