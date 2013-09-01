<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'欢迎来到'.CHtml::encode(Yii::app()->name),
)); ?>

<?php $this->endWidget(); ?>
