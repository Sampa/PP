<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_postattachment".
 *
 * @property integer $id
 * @property integer $attachmentId
 * @property integer $postId
 */
class PostAttachment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_postattachment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attachmentId', 'postId'], 'required'],
            [['attachmentId', 'postId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'attachmentId' => Yii::t('app', 'Attachment ID'),
            'postId' => Yii::t('app', 'Post ID'),
        ];
    }
}
