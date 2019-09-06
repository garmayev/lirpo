<?php
use yii\widgets\Breadcrumbs;
use yii\helpers\Html;

use dmstr\widgets\Alert;

if (Yii::$app->controller->action->id === 'login') { 
    echo $this->render('main-login', ['content' => $content] );
} else {
    if (class_exists('lirpo\assets\AppAsset')) {
        lirpo\assets\AppAsset::register($this);
    }
    dmstr\web\AdminLteAsset::register($this);
    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <?= $this->render('header.php') ?>
        <?= $this->render('left.php') ?>
        <div class="content-wrapper">
            <?php
                if (Yii::$app->user->isGuest) {
                    echo $content;
                } else {
            ?>
            <section class="content-header">
                <?=
                Breadcrumbs::widget(
                    [
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]
                ) ?>
            </section>

            <section class="content">
                <?= Alert::widget() ?>
                <?php \yii\widgets\Pjax::begin(); ?>
                <?= $content ?>
                <?php \yii\widgets\Pjax::end(); ?>
            </section>
            <?php
                }
            ?>
        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>
