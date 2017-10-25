<?php

namespace humhub\modules\patreon\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;
use humhub\modules\patreon\widgets\ConfigureForm;

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
