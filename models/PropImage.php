<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prop_image".
 *
 * @property integer $id
 * @property integer $project_id
 * @property string $title
 * @property string $short_desc
 * @property string $image
 *
 * @property Projects $project
 */
class PropImage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prop_image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_id', 'title', 'short_desc', 'image'], 'required'],
            [['project_id'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['short_desc', 'image'], 'string', 'max' => 255],
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
            'project_id' => 'Project ID',
            'title' => 'Title',
            'short_desc' => 'Short Desc',
            'image' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Projects::className(), ['id' => 'project_id']);
    }
}
