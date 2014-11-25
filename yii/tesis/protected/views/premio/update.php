<?php
/* @var $this PremioController */
/* @var $model Premio */

$this->breadcrumbs=array(
	'Premios'=>array('index'),
	$model->id_premio=>array('view','id'=>$model->id_premio),
	'Update',
);

$this->menu=array(
	array('label'=>'List Premio', 'url'=>array('index')),
	array('label'=>'Create Premio', 'url'=>array('create')),
	array('label'=>'View Premio', 'url'=>array('view', 'id'=>$model->id_premio)),
	array('label'=>'Manage Premio', 'url'=>array('admin')),
);
?>

<h1>Modificar Premio <?php //echo $model->id_premio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>