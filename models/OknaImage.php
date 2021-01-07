<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class OknaImage extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;
    public $delete;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['delete'] , 'string'],
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('images/okna/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
