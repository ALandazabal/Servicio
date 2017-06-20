<?php
/* @var $this AdolescenteController */
/* @var $model Adolescente */

$this->breadcrumbs=array(
	'Adolescentes'=>array('admin'),
);

$this->menu=array(
	array('label'=>'Create Adolescente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#adolescente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Adolescentes</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'adolescente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idAdolescente',
		'nombreA',
		'apellidoA',
		'fkNac',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
