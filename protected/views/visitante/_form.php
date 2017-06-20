<?php
/* @var $this VisitanteController */
/* @var $model Visitante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'visitante-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'idVisitante'); ?>
		<?php echo $form->textField($model,'idVisitante'); ?>
		<?php echo $form->error($model,'idVisitante'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'nombreV'); ?>
		<?php echo $form->textField($model,'nombreV',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombreV'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'apellidoV'); ?>
		<?php echo $form->textField($model,'apellidoV',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellidoV'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fkMunicipio'); ?>
		<?php echo $form->textField($model,'fkMunicipio'); ?>
		<?php echo $form->error($model,'fkMunicipio'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fkNac'); ?>
		<?php echo $form->textField($model,'fkNac'); ?>
		<?php echo $form->error($model,'fkNac'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->