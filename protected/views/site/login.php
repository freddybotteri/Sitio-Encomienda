<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1><strong>Login</strong></h1>


<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note"><span class="required">Ambos campos son requeridos.</span>.</p>

	<div class="row"  class="form-group">
		
		<?php echo $form->textField($model,'username',array("class"=>"form-control","placeholder"=>"Usuario")); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->passwordField($model,'password',array("class"=>"form-control","placeholder"=>"password")); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login',array("class"=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
