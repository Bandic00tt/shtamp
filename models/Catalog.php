<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "catalog".
 *
 * @property integer $id
 * @property string $image
 * @property string $desc
 * @property integer $published
 */
class Catalog extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'catalog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['published'], 'integer'],
            [['image', 'desc'], 'string', 'max' => 255],
            [['file'], 'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Изображение',
            'desc' => 'Описание',
            'published' => 'Опубликовано',
            'file' => 'Загрузить файл'
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->file = UploadedFile::getInstance($this, 'file');

            if ( !empty($this->file) ) {
                $path = 'img/catalog/' . $this->file->baseName . "." . $this->file->extension;
                $this->file->saveAs($path);
                if ( !$this->isNewRecord ) {
                    $oldFile = Yii::getAlias('@webroot') . $this->image;
                    if ( file_exists($oldFile) ) {
                        unlink($oldFile);
                    }
                }
                $this->image = '/' . $path;
            }

            return true;
        }
        return false;
    }

    public function beforeDelete()
    {
        if (parent::beforeDelete()) {
            $file = Yii::getAlias('@webroot') . $this->image;
            if ( file_exists($file) ) {
                unlink($file);
            }

            return true;
        }
        return false;
    }
}
