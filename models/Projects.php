<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property integer $reason_id
 * @property string $project_name
 * @property string $possession
 * @property integer $built_area
 * @property integer $total_area
 * @property integer $area_id
 * @property integer $no_of_units
 * @property string $location
 * @property string $address
 * @property string $lat_long_address
 * @property string $short_desc
 * @property string $long_desc
 * @property string $extra_note
 * @property integer $city_id
 * @property integer $status_id
 * @property integer $type_id
 * @property integer $classification_id
 * @property integer $user_id
 * @property string $img
 * @property string $approved
 *
 * @property AmenitiesProjectsRelation[] $amenitiesProjectsRelations
 * @property BankProjectsRelation[] $bankProjectsRelations
 * @property FloorPlan[] $floorPlans
 * @property LegalProjectsRelations[] $legalProjectsRelations
 * @property Price[] $prices
 * @property Area $area
 * @property Reason $reason
 * @property City $city
 * @property PropClassification $classification
 * @property PropType $type
 * @property User $user
 * @property PropStatus $status
 * @property PropImage[] $propImages
 * @property PropSlider[] $propSliders
 * @property Specification[] $specifications
 * @property SpecificationProjectsRelation[] $specificationProjectsRelations
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reason_id', 'project_name', 'possession', 'built_area', 'total_area', 'area_id', 'no_of_units', 'location', 'address', 'lat_long_address', 'short_desc', 'long_desc', 'extra_note', 'city_id', 'status_id', 'type_id', 'classification_id', 'user_id', 'img', 'approved'], 'required'],
            [['reason_id', 'built_area', 'total_area', 'area_id', 'no_of_units', 'city_id', 'status_id', 'type_id', 'classification_id', 'user_id'], 'integer'],
            [['possession'], 'safe'],
            [['long_desc', 'approved'], 'string'],
            [['project_name', 'location', 'address', 'short_desc', 'extra_note', 'img'], 'string', 'max' => 255],
            [['lat_long_address'], 'string', 'max' => 25],
            [['area_id'], 'exist', 'skipOnError' => true, 'targetClass' => Area::className(), 'targetAttribute' => ['area_id' => 'id']],
            [['reason_id'], 'exist', 'skipOnError' => true, 'targetClass' => Reason::className(), 'targetAttribute' => ['reason_id' => 'id']],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['classification_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropClassification::className(), 'targetAttribute' => ['classification_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropType::className(), 'targetAttribute' => ['type_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropStatus::className(), 'targetAttribute' => ['status_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'reason_id' => 'Reason ID',
            'project_name' => 'Project Name',
            'possession' => 'Possession',
            'built_area' => 'Built Area',
            'total_area' => 'Total Area',
            'area_id' => 'Area ID',
            'no_of_units' => 'No Of Units',
            'location' => 'Location',
            'address' => 'Address',
            'lat_long_address' => 'Lat Long Address',
            'short_desc' => 'Short Desc',
            'long_desc' => 'Long Desc',
            'extra_note' => 'Extra Note',
            'city_id' => 'City ID',
            'status_id' => 'Status ID',
            'type_id' => 'Type ID',
            'classification_id' => 'Classification ID',
            'user_id' => 'User ID',
            'img' => 'Img',
            'approved' => 'Approved',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAmenitiesProjectsRelations()
    {
        return $this->hasMany(AmenitiesProjectsRelation::className(), ['projects_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBankProjectsRelations()
    {
        return $this->hasMany(BankProjectsRelation::className(), ['projects_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFloorPlans()
    {
        return $this->hasMany(FloorPlan::className(), ['projects_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLegalProjectsRelations()
    {
        return $this->hasMany(LegalProjectsRelations::className(), ['project_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrices()
    {
        return $this->hasMany(Price::className(), ['projects_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArea()
    {
        return $this->hasOne(Area::className(), ['id' => 'area_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReason()
    {
        return $this->hasOne(Reason::className(), ['id' => 'reason_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassification()
    {
        return $this->hasOne(PropClassification::className(), ['id' => 'classification_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(PropType::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(PropStatus::className(), ['id' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropImages()
    {
        return $this->hasMany(PropImage::className(), ['project_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropSliders()
    {
        return $this->hasMany(PropSlider::className(), ['project_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpecifications()
    {
        return $this->hasMany(Specification::className(), ['project_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpecificationProjectsRelations()
    {
        return $this->hasMany(SpecificationProjectsRelation::className(), ['projects_id' => 'id']);
    }
}
