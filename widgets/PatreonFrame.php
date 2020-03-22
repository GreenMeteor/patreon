<?php

namespace humhub\modules\patreon\widgets;

use Yii;
use humhub\components\Widget;

/**
 *
 * @author Felli
 */
class PatreonFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $url = Yii::$app->getModule('patreon')->getServerUrl() . '';
        return $this->render('patreonframe', ['patreonUrl' => $url]);
    }

}
