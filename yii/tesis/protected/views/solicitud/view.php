<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */

$this->breadcrumbs=array(
	'Mis Solicitudes'=>array('admin_postulante'),
	//$model->id_solicitud,
);

$this->menu=array(
        array('label'=>'Mis Solicitudes', 'url'=>array('admin_postulante')),
	/*array('label'=>'Lista de Solicitudes', 'url'=>array('index')),
	array('label'=>'Eliminar Solicitud', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_solicitud),'confirm'=>'¿Está seguro?')),
	array('label'=>'Buscar  Solicitud', 'url'=>array('admin')),*/
);
?>

<h1>Ver Solicitud n°<?php echo $model->id_solicitud; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_solicitud',
		'id_compania',
		'id_comuna',
                'id_usuario',
		'rut',
		'nombre',
		'ap_paterno',
		'ap_materno',
		'fecha_nac',
		'estado_civil',
		'profesion',
		'direccion',
		'trabajo',
		'calidad',
		'patrocinador',
		'rut_pat',
		'estado',
	),
)); ?>
