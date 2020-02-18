<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prop_type".
 *
 * @property integer $id
 * @property string $type
 * @property string $img
 *
 * @property Projects[] $projects
 */
class PropType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prop_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'img'], 'required'],
            [['type', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'img' => 'Img',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Projects::className(), ['type_id' => 'id']);
    }
}
