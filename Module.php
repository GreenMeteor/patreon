<?php

namespace humhub\modules\patreon;

use Yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module
{

    public $resourcesPath = 'resources';

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to(['/patreon/admin']);
    }

    public function getServerUrl()
    {
        $url = $this->settings->get('serverUrl');

        if (empty($url)) {
            return 'https://www.patreon.com';
        }

        return $url;
    }

}
