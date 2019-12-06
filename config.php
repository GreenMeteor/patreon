<?php

namespace humhub\modules\patreon;

use humhub\modules\patreon\Events;
use humhub\modules\patreon\Module;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\dashboard\widgets\Sidebar;
use humhub\modules\space\widgets\Sidebar as Spacesidebar;

return [
    'id' => 'patreon',
    'class' => Module::class,
    'namespace' => 'humhub\modules\patreon',
    'events' => [
        ['class' => Sidebar::class, 'event' => Sidebar::EVENT_INIT, 'callback' => [Events::class, 'addPatreonFrame']],
        ['class' => Spacesidebar::class, 'event' => Spacesidebar::EVENT_INIT, 'callback' => [Events::class, 'addPatreonFrame']],
        ['class' => AdminMenu::class, 'event' => AdminMenu::EVENT_INIT, 'callback' => [Events::class, 'onAdminMenuInit']]
    ]
];
?>
