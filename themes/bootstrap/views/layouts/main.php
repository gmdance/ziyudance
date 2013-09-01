<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<?php Yii::app()->bootstrap->register(); ?>
</head>
<body>
<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'type'=>'inverse',
    'brand' => '子予舞蹈',
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'公司介绍', 'url'=>array('/site/index')),
                /*
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                 */
            ),
        ),
    ),
)); ?>

<div class="container" id="page">
	<div class="hero-unit" id="logo"><img src=<?php echo Yii::app()->baseUrl . '/../static/logo.jpg'?> alt=""/>
		<span id="introduction">简介</span>
	</div>
	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
