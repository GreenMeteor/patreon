<?php

namespace humhub\modules\patreon;

return [
    'id' => 'patreon',
    'class' => 'humhub\modules\patreon\Module',
    'namespace' => 'humhub\modules\patreon',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::className(),
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\patreon\Events',
                'addPatreonFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::className(),
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\patreon\Events',
                'addPatreonFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\patreon\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
