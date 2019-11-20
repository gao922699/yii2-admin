<?php
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html; ?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <style>
        html, body, .main {
            height: 100%;
        }

    </style>
    <body>
    <?php $this->beginBody() ?>
    <div class="main">
        <div class="content">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>