<?php

namespace humhub\modules\patreon\models;

use Yii;
use yii\base\Model;

/**
 * ConfigureForm defines the configurable fields.

 */
class ConfigureForm extends Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['serverUrl', 'string'],'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('PatreonModule.base', 'Patreon Widget URL:'),
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
