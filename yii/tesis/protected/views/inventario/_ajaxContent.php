<h1>Inventario</h1>
<?php 
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
            'id'=>'filtro-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>false,
    )); ?>
	<?php echo $form->errorSummary($modelFiltro); ?>
	<div class="row">
		<?php echo $form->labelEx($modelFiltro,'id_categoria'); ?>
		<?php 
                      $categorias = Categoria::model()->findAll(array('order' => 'nombre')); 
                      $lista = CHtml::listData($categorias,'id_categoria','nombre');
                      echo $form->dropDownList($modelFiltro,'id_categoria',$lista,array('empty'=>'Todas', 'onchange'=>'Javascript:filtrarCategoria()'));
                ?>
		<?php echo $form->error($modelFiltro,'id_categoria'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($modelFiltro,'id_dependencia'); ?>
		<?php 
                      $dependencias = Dependencia::model()->findAll(array('order' => 'nombre')); 
                      $lista = CHtml::listData($dependencias,'id_dependencia','nombre');
                      echo $form->dropDownList($modelFiltro,'id_dependencia',$lista,array('empty'=>'Todas', 'onchange'=>'Javascript:filtrarDependencia()'));
                ?>
		<?php echo $form->error($modelFiltro,'id_dependencia'); ?>
	</div>      
        <?php $this->endWidget(); ?>
</div>

<div class="row" style="text-align: right">
<?php //echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button'));
    echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl."/images/pdf.png","PDF",array("title"=>"Exportar a PDF", "width"=>"50px")),array("pdf"),array('target'=>'_blank'));                
?>
<?php //echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button'));
    echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl."/images/grafico.png","PDF",array("title"=>"Generar Gráficos", "width"=>"50px")),array("graficos"));                
?>
</div>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div id="data1">
<?php   if(empty($id_categoria)){
            $subs = Subcategoria::model()->findAll();
        }else{
            $subs = Subcategoria::model()->findAllByAttributes(array('id_categoria'=>$id_categoria));
        }
        $subcategorias = array();
        $i=0;
        foreach($subs as $datos){
            $subcategorias[$i] = $datos->id_subcategoria;
            $i++;
        }
        $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inventario-grid',
	'dataProvider'=>$model->searchBy($subcategorias, $id_dependencia),
	'filter'=>$model,
	'columns'=>array(
		'id_inventario',
                /*array(
                    'name'=>'id_subcategoria',
                    'header'=>'Categoría',
                    'value'=>'Inventario::getCategoria($data->id_subcategoria)',
                    'filter'=>Inventario::getListCategoria(),
                ),*/
                array(
                    'name'=>'id_subcategoria',
                    'header'=>'Subcategoría',
                    'value'=>'Inventario::getSubcategoria($data->id_subcategoria)',
                    'filter'=>Inventario::getListSubcategoria($subs),
                ),
		//'id_subcategoria',
		//'id_compania',
		'descripcion',
		//'proveedor',
		'fecha_in',
		/*
		'responsable',
		'movil',
		'observaciones',
		
		*/
		'cantidad',
		//'estado',
                array(
                    'name'=>'estado',
                    'header'=>'Estado',
                    'value'=>'Inventario::getEstado($data->id_inventario)',
                    'filter'=>Inventario::getListEstado(),
                    
                ),
		array(
			'class'=>'CButtonColumn',
                    'header'=>'Acciones',
		),
	),
)); ?>
</div>