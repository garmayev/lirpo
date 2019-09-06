<?php
	use yii\helpers\Html;
	use lirpo\assets\AppAsset;
	AppAsset::register($this);
	$this->beginPage() 
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
	<head>
	    <meta charset="<?= Yii::$app->charset ?>">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <?= Html::csrfMetaTags() ?>
	    <title><?= Html::encode($this->title) ?></title>
	    <?php $this->head() ?>
	</head>
	<body>
		<?php $this->beginBody() ?>
		<div id="page-wrap">
			<nav id="left-nav">
				<?= $this->render('left-nav.php') ?>
			</nav>
			<div id="page-content">
	        	<?= $content ?>
			</div>
	        <nav id="right-nav">
	        	<?= $this->render('right-nav.php') ?>
	        </nav>
		</div>
		<footer id="page-footer">
			<?= $this->render('footer.php') ?>
		</footer>
		<?php $this->endBody() ?>
	</body>
</html>
<?php $this->endPage() ?>