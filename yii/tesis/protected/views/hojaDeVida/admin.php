<?php
/* @var $this HojaDeVidaController */
/* @var $model HojaDeVida */

$this->breadcrumbs=array(
	'Hojas de Vida'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'Listar Hojas de Vida', 'url'=>array('index')),
	array('label'=>'Crear Hoja de Vida', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#hoja-de-vida-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Hojas De Vidas</h1>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'hoja-de-vida-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_hoja',
		/*'id_solicitud',
		'id_compania',
		'id_comuna',*/
		'rut',
		'nombre',
		'ap_paterno',
		'ap_materno',
		'direccion',
		'email',
		/*'estado_civil',
		'profesion',
		'g_sanguineo',
		's_militar',
		'fono_fijo',
		'celular',
		'patrocinador',
		'fecha_in',
		'fecha_r_in',*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
