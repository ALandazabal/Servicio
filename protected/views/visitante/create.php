<?php
/* @var $this VisitanteController */
/* @var $model Visitante */

$this->breadcrumbs=array(
	'Visitantes'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Manage Visitante', 'url'=>array('admin')),
);
?>

<h1>Crear Visitante</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>