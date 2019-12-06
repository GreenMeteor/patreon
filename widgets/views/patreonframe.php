<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;
use humhub\widgets\PanelMenu;
use humhub\modules\patreon\assets\Assets;

Assets::register($this);
?>

<div class="panel panel-default patreon-snippet" id="patreon-snippet">
    <?= PanelMenu::widget(['id' => 'patreon-snippet']); ?>
  <div class="panel-heading">
    <?= Yii::t('PatreonModule.base', '<strong>Patreon</strong>'); ?>
  </div>

  <div class="panel-body">

<?= Html::beginTag('div') ?>
<a href="<?= $patreonUrl; ?>" data-patreon-widget-type="become-patron-button">Become a Patron!</a><script async src="https://c6.patreon.com/becomePatronButton.bundle.js"></script>
<?= Html::endTag('div'); ?>
</div>
</div>
