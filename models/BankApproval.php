<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank_approval".
 *
 * @property integer $id
 * @property string $bank
 * @property string $img
 *
 * @property BankProjectsRelation[] $bankProjectsRelations
 */
class BankApproval extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bank_approval';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bank', 'img'], 'required'],
            [['bank', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bank' => 'Bank',
            'img' => 'Img',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBankProjectsRelations()
    {
        return $this->hasMany(BankProjectsRelation::className(), ['bank_id' => 'id']);
    }
}
