<?php

namespace humhub\modules\patreon\assets;

use Yii;
use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    public $sourcePath = '@patreon/resources';

    public $url = 'https://c6.patreon.com';

    public $publishOptions = [
        'forceCopy' => false
    ];

    public $css = [
        'css/patreon.css'
    ];

    /**
     * Register CSS and JS file based on version.
     * @param \yii\web\View $view the view that the asset files are to be registered with.
     */
    public function registerAssetFiles($view)
    {
        $this->js = [$this->url . '/becomePatronButton.bundle.js'];

        parent::registerAssetFiles($view);
    }
}
