<?php

namespace humhub\modules\patreon\models;

use Yii;

/**
 * ConfigureForm defines the configurable fields.

 */
class ConfigureForm extends \yii\base\Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('PatreonModule.base', 'Patreon URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('PatreonModule.base', 'e.g. https://www.patreon.com/bePatron?u={id}'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('patreon')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('patreon')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
