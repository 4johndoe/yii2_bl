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

    public function uploadFile(UploadedFile $file)
    {
        $file->saveAs(Yii::getAlias('@web') . 'uploads/' . $file->name);
    }
}