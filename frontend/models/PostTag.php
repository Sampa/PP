<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_posttag".
 *
 * @property integer $id
 * @property integer $tagId
 * @property integer $postId
 */
class PostTag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_posttag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tagId', 'postId'], 'required'],
            [['tagId', 'postId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tagId' => Yii::t('app', 'Tag ID'),
            'postId' => Yii::t('app', 'Post ID'),
        ];
    }
}
