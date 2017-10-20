<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\patreon\Assets::register($this);
?>

<div class="panel">
  <div class="panel-heading">
    <?=Yii::t('PatreonModule.base', '<strong>Patreon</strong>'); ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>

<?= Html::endTag('div'); ?>

</div>
</div>
