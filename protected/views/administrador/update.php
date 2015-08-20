<?php
/* @var $this AdministradorController */
/* @var $model Administrador */

$this->breadcrumbs=array(
	'Administradors'=>array('index'),
	$model->RUTADMIN=>array('view','id'=>$model->RUTADMIN),
	'Update',
);

$this->menu=array(
	array('label'=>'List Administrador', 'url'=>array('index')),
	array('label'=>'Create Administrador', 'url'=>array('create')),
	array('label'=>'View Administrador', 'url'=>array('view', 'id'=>$model->RUTADMIN)),
	array('label'=>'Manage Administrador', 'url'=>array('admin')),
);
?>

<h1>Update Administrador <?php echo $model->RUTADMIN; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>