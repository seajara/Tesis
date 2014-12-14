<?php
/* @var $this ElementoController */
/* @var $model Elemento */

$this->breadcrumbs=array(
	'Elementos'=>array('index'),
	$model->id_elemento=>array('view','id'=>$model->id_elemento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Elemento', 'url'=>array('index')),
	array('label'=>'Create Elemento', 'url'=>array('create')),
	array('label'=>'View Elemento', 'url'=>array('view', 'id'=>$model->id_elemento)),
	array('label'=>'Manage Elemento', 'url'=>array('admin')),
);
?>

<h1>Modificar Elemento <?php echo $model->codigo_elemento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>