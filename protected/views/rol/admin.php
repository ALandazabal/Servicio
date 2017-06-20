<?php
/* @var $this RolController */
/* @var $model Rol */

$this->breadcrumbs=array(
	'Rols'=>array('admin'),
);

$this->menu=array(
	array('label'=>'Create Rol', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rol-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Rols</h1>

<p>

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rol-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'idRol',
		'descripcionR',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
