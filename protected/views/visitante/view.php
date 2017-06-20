<?php
/* @var $this VisitanteController */
/* @var $model Visitante */

$this->breadcrumbs=array(
	'Visitantes'=>array('admin'),
	$model->idVisitante,
);

$this->menu=array(
	array('label'=>'Create Visitante', 'url'=>array('create')),
	array('label'=>'Update Visitante', 'url'=>array('update', 'id'=>$model->idVisitante)),
	array('label'=>'Delete Visitante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idVisitante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Visitante', 'url'=>array('admin')),
);
?>

<h1>Visitante #<?php echo $model->idVisitante; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idVisitante',
		'nombreV',
		'apellidoV',
		'direccion',
		'fkMunicipio',
		'fkNac',
	),
)); ?>
