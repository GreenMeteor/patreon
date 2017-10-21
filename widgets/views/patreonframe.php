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
<a class="become-patron-button"
  role="button"
  href="<?= $patreonUrl ?>"><!--
--><span class="patreon-icon"><!--
--><svg viewBox="0 0 8 8" width="12px" height="12px" fill="#fff"><path d="M2.32061871,0.367894189 C3.18961652,-0.0376047918 4.20711396,-0.109604611 5.12711165,0.16039471 C5.93360962,0.39539412 6.6591078,0.894392865 7.17010651,1.55889119 C7.67510524,2.21138955 7.96860451,3.02288751 7.99660444,3.84638544 C8.03210435,4.6978833 7.78560497,5.55788114 7.30110618,6.25987938 C6.59110797,7.31187673 5.35311108,7.98687503 4.07861429,7.999375 C3.44061589,8.000375 2.80261749,7.999875 2.1651191,7.999375 C2.17011908,6.65887837 2.1656191,5.31838174 2.16811909,3.97788511 C2.17011908,3.47138639 2.39811851,2.97288764 2.77711756,2.63638849 C3.13911665,2.30838931 3.6371154,2.13588974 4.12461417,2.17238965 C4.6291129,2.20338957 5.11311169,2.45838893 5.42761089,2.85238794 C5.75061008,3.24938694 5.89160973,3.7853856 5.80860994,4.29038433 C5.72761014,4.82138299 5.39511098,5.30638177 4.93061214,5.57838109 C4.39361349,5.90388027 3.69011526,5.91288025 3.13711665,5.61888099 C3.13761665,6.05337989 3.13661665,6.4883788 3.13761665,6.92337771 C3.63111541,7.06737734 4.15961408,7.09187728 4.66161282,6.97737757 C5.40461095,6.81487798 6.07610926,6.35987912 6.50610818,5.73538069 C6.91610715,5.14988217 7.10560668,4.41738401 7.03460685,3.70738579 C6.97460701,3.05588743 6.69410771,2.42788901 6.25160882,1.94539022 C5.84160985,1.49439136 5.29311123,1.16939217 4.69811273,1.03189252 C4.01411445,0.869392928 3.27411631,0.952892718 2.64611789,1.26789193 C1.6451204,1.7543907 0.962622121,2.82088802 0.952122147,3.93238523 C0.950122152,5.28788182 0.951622148,6.64337841 0.95112215,7.999375 C0.634622945,8.000375 0.317623743,7.999875 0.000124540763,7.999875 C0.000124540763,6.67387833 0.000624539506,5.34838167 0.000124540763,4.022885 C-0.00437544792,3.45688642 0.113124257,2.89038785 0.344123676,2.37338915 C0.7321227,1.49639135 1.4476209,0.769393179 2.32061871,0.367894189"></path></svg><!--
--></span> Become a patron</a>
<?= Html::endTag('div'); ?>

</div>
</div>
