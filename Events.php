<?php

namespace humhub\modules\patreon;

use Yii;
use yii\helpers\Url;
use yii\base\BaseObject;
use humhub\models\Setting;

class Events extends BaseObject
{

    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => Yii::t('PatreonModule.base', 'Patreon Settings'),
            'url' => Url::toRoute('/patreon/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fab fa-patreon"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'patreon' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addPatreonFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(assets\Assets::class);
        $event->sender->addWidget(widgets\PatreonFrame::class, [], [
            'sortOrder' => Setting::Get('timeout', 'patreon')
        ]);
    }
}
