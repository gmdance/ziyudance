<div class="hero-unit" id="logo">
    <span id="introduction">introduction</span>
</div>

<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=> CHtml::encode(Yii::app()->name),
)); ?>

<?php $this->endWidget(); ?>
