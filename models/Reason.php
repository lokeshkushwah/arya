<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reason".
 *
 * @property integer $id
 * @property string $reason
 *
 * @property Projects[] $projects
 */
class Reason extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reason';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reason'], 'required'],
            [['reason'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'reason' => 'Reason',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Projects::className(), ['reason_id' => 'id']);
    }
}
