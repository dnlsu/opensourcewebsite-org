<?php

use app\modules\bot\components\helpers\Emoji;

?>
<b><?= Emoji::AD_SEARCH . ' ' . Yii::t('bot', $sectionName) ?></b>
<?php if ($inDevelopment) : ?>
 <b>(<?= Yii::t('bot', 'in development') ?>)</b>
<?php endif; ?>
