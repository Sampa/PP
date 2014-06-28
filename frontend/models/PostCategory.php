<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_postcategory".
 *
 * @property integer $id
 * @property integer $categoryId
 * @property integer $postId
 */
class PostCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_postcategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categoryId', 'postId'], 'required'],
            [['categoryId', 'postId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'categoryId' => Yii::t('app', 'Category ID'),
            'postId' => Yii::t('app', 'Post ID'),
        ];
    }
}
