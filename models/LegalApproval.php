<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "legal_approval".
 *
 * @property integer $id
 * @property string $legal
 * @property string $img
 *
 * @property LegalProjectsRelations[] $legalProjectsRelations
 */
class LegalApproval extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'legal_approval';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['legal', 'img'], 'required'],
            [['legal', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'legal' => 'Legal',
            'img' => 'Img',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLegalProjectsRelations()
    {
        return $this->hasMany(LegalProjectsRelations::className(), ['legal_id' => 'id']);
    }
}
