<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prop_status".
 *
 * @property integer $id
 * @property string $status_name
 * @property string $img
 *
 * @property Projects $projects
 */
class PropStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prop_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status_name', 'img'], 'required'],
            [['status_name', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status_name' => 'Status Name',
            'img' => 'Img',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasOne(Projects::className(), ['status_id' => 'id']);
    }
}
