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
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Param PO', 'url'=>array('/paramPo/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Barang', 'url'=>array('/Barang/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Supplier', 'url'=>array('/Suplier/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'PO', 'url'=>array('/po/admin'), 'visible'=>!Yii::app()->user->isGuest,
				/*'items'=>array(
				array('label'=>'Param PO', 'url'=>array('/paramPo/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Barang', 'url'=>array('/Barang/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Supplier', 'url'=>array('/Suplier/admin'), 'visible'=>!Yii::app()->user->isGuest),
				),*/
				
				),
				array('label'=>'Laporan PO', 'url'=>array('/po/laporan'),'linkOptions'=>array('target'=>'_blank'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>