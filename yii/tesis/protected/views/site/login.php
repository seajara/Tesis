<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1 class="textotitulos">Ingreso Usuario</h1>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php //echo CHtml::submitButton('Login'); ?>
                <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl."/images/registrate.jpg","Registrarse",array("title"=>" ", "height"=>"28px")),Yii::app()->baseUrl.'/usuario/registrarse',array("submit"=>array('login'))); ?>
                <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl."/images/entrar.jpg","Entrar",array("title"=>" ", "width"=>"63px")),'#',array('onclick'=>'document.getElementById("login-form").submit()',"submit"=>array('login'))); ?>             
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
