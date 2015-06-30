<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "{{%blog}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $detail
 * @property integer $publish
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $tag
 */
class Blog extends \yii\db\ActiveRecord
{

    public function behaviors(){
      return [
        TimestampBehavior::className(),
        BlameableBehavior::className()
      ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blog}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'],'required'],
            [['publish', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['title', 'detail', 'tag'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'รหัส'),
            'title' => Yii::t('app', 'ชื่อเรื่อง'),
            'detail' => Yii::t('app', 'รายละเอียด'),
            'publish' => Yii::t('app', 'เผยแพร่'),
            'created_at' => Yii::t('app', 'สร้างวันที่'),
            'updated_at' => Yii::t('app', 'ปรับปรุงวันที่'),
            'created_by' => Yii::t('app', 'สร้างโดย'),
            'updated_by' => Yii::t('app', 'แก้ไขโดย'),
            'tag' => Yii::t('app', 'คำค้น'),
        ];
    }

    /**
     * @inheritdoc
     * @return BlogQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BlogQuery(get_called_class());
    }

}
