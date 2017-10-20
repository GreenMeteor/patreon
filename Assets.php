<?php


namespace humhub\modules\patreon;

use Yii;
use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public $publishOptions = [
        'forceCopy' => true
    ];

    public $js = [
        'becomePatronButton.bundle.js'
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/assets';
        parent::init();
    }
}
