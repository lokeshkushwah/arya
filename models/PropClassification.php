<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prop_classification".
 *
 * @property integer $id
 * @property string $classification
 * @property integer $img
 *
 * @property Projects[] $projects
 */
class PropClassification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prop_classification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['classification', 'img'], 'required'],
            [['img'], 'integer'],
            [['classification'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'classification' => 'Classification',
            'img' => 'Img',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Projects::className(), ['classification_id' => 'id']);
    }
}
