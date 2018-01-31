<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\patreon\Assets::register($this);
?>

<div class="panel panel-default panel-patreon" id="panel-patreon">
    <?= \humhub\widgets\PanelMenu::widget(['id' => 'panel-patreon']); ?>
  <div class="panel-heading">
    <?=Yii::t('PatreonModule.base', '<strong>Patreon</strong>'); ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<a href="<?= $patreonUrl; ?>" data-patreon-widget-type="become-patron-button">Become a Patron!</a><script async src="https://c6.patreon.com/becomePatronButton.bundle.js"></script>
<?= Html::endTag('div'); ?>

</div>
</div>
