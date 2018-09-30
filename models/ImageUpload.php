<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 9/29/18
 * Time: 5:55 PM
 */

namespace app\models;


use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model
{
    public $image;

    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'file', 'extensions' => 'jpg,jpeg,png']
        ];
    }

    public function uploadFile(UploadedFile $file, $currentImage)
    {
        $this->image = $file;

        if ($this->validate())
        {
            if (file_exists($this->getFolder() . $currentImage))
            {
                unlink($this->getFolder() . $currentImage);
            }

            $filename = strtolower(md5(uniqid($file->baseName)) . '.' . $file->extension);

            $file->saveAs($this->getFolder() . $filename);

            return $filename;
        }
    }

    public function getFolder()
    {
        return Yii::getAlias('@web') . 'uploads/';
    }
}