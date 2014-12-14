<h1>Inventarios</h1>
<?php
/* @var $this InventarioController */
/* @var $model Inventario */

$this->breadcrumbs=array(
	'Inventarios'=>array('index'),
	'Buscar',
);

/*$this->widget('application.extensions.qrcode.QRCodeGenerator',array(
    'data' => 'http://www.bryantan.info',
    'subfolderVar' => false,
    'matrixPointSize' => 5,
    'displayImage'=>true, // default to true, if set to false display a URL path
    'errorCorrectionLevel'=>'L', // available parameter is L,M,Q,H
    'matrixPointSize'=>4, // 1 to 10 only
));*/

$this->menu=array(
	array('label'=>'Agregar Elemento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#inventario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'consulta-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>false,
    )); ?>
	<?php echo $form->errorSummary($modelConsulta); ?>
        
        <div class="row">
            <?php echo $form->labelEx($modelConsulta,'codigo'); ?>
            <?php echo $form->textField($modelConsulta, 'codigo', array('autofocus'=>true)); ?>
            <?php echo $form->error($modelConsulta, 'codigo'); ?>
        </div>
        
        <div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Consultar' : 'Aceptar'); ?>
	</div>
    
        <?php $this->endWidget(); ?>
</div>

<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'filtro-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>false,
    )); ?>
	<?php echo $form->errorSummary($modelFiltro); ?>

            <?php echo $form->labelEx($modelFiltro,'id_categoria'); ?>
            <?php 
                  $categorias = Categoria::model()->findAll(array('order' => 'nombre')); 
                  $lista = CHtml::listData($categorias,'id_categoria','nombre');
                  echo $form->dropDownList($modelFiltro,'id_categoria',$lista,array('empty'=>'Todas', 'onchange'=>'Javascript:filtrarCategoria()'));
            ?>
            <?php echo $form->error($modelFiltro,'id_categoria'); ?>
            
            <?php 
                echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl."/images/busquedaavanzada.png","PDF",array('class'=>'search-button',"title"=>"Búsqueda Avanzada", "width"=>"50px")),array("pdf"),array('target'=>'_blank'));                
            ?>
            <?php //echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button'));
                echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl."/images/pdf.png","PDF",array("title"=>"Exportar a PDF", "width"=>"50px")),array("pdf"),array('target'=>'_blank'));                
            ?>
            <?php //echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button'));
                echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl."/images/grafico.png","PDF",array("title"=>"Generar Gráficos", "width"=>"50px")),array("graficos"));                
            ?>
	
        <?php $this->endWidget(); ?>
</div>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div id="data1">
<?php  
        $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inventario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_inventario',
                'codigo',
                /*array(
                    'name'=>'codigo',
                    'value'=>'Inventario::getFormatoCodigo($data->codigo)',
                ),*/
                array(
                    'name'=>'id_subcategoria',
                    'header'=>'Subcategoría',
                    'value'=>'Inventario::getSubcategoria($data->id_subcategoria)',
                    'filter'=>CHtml::listData(Subcategoria::model()->findAll(),'id_subcategoria','nombre'),
                ),
		//'id_subcategoria',
                'nombre',
		//'descripcion',
		//'proveedor',
		//'cantidad',
                array(
                    'name'=>'cantidad',
                    'header'=>'Cantidad',
                    'value'=>'Elemento::getCantidad($data->id_inventario)',
                ),
		//'estado',
                /*array(
                    'name'=>'id_dependencia',
                    'header'=>'Dependencia',
                    'value'=>'Inventario::getDependencia($data->id_dependencia)',
                    'filter'=>CHtml::listData(Dependencia::model()->findAll(),'id_dependencia','nombre'),
                ),*/
		array(
                    'class'=>'CButtonColumn',
                    'header'=>'Acciones',
                    'template'=>'{view}{update}{delete}',
                    'viewButtonUrl'=>'Yii::app()->createUrl("elemento/admin", array("id"=>$data->id_inventario))',
		),
	),
)); ?>
</div>
