<?php
/* @var $this AdolescenteController */
/* @var $model Adolescente */

$this->breadcrumbs=array(
	'Adolescentes'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Manage Adolescente', 'url'=>array('admin')),
);
?>

<h1>Crear Adolescente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>