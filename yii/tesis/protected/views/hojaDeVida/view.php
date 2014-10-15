<?php
/* @var $this HojaDeVidaController */
/* @var $model HojaDeVida */

$this->breadcrumbs=array(
	'Hoja De Vida'=>array('index'),
	$model->id_hoja,
);

$this->menu=array(
	//array('label'=>'List HojaDeVida', 'url'=>array('index')),
	array('label'=>'Crear Nueva Hoja de Vida', 'url'=>array('create')),
	array('label'=>'Actualizar Hoja de Vida', 'url'=>array('update', 'id'=>$model->id_hoja)),
	array('label'=>'Eliminar Hoja de Vida', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_hoja),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Hojas de Vida', 'url'=>array('admin')),
);
?>

<h1>Hoja de Vida #<?php echo $model->id_hoja; ?></h1>

<?php   $comuna=Comuna::model()->findByAttributes(array('id_comuna'=>$model->id_comuna));
        $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_hoja',
		//'id_compania',
		//'id_comuna',
		'rut',
		'nombre',
		'ap_paterno',
		'ap_materno',
                array(
                    'label'=>'Lugar de Nacimiento',
                    'value'=>$comuna->nombre,
                ),
		'direccion',
		'email',
		'estado_civil',
		'profesion',
		'g_sanguineo',
		's_militar',
		'fono_fijo',
		'celular',
		'patrocinador',
		'fecha_in',
		'fecha_r_in',
	),
)); ?>
