<div class="row">
     <?php echo CHtml::image(Yii::app()->theme->baseUrl.'/images/logo.png',"imagen",array("width"=>75)); ?>
</div>

<?php $hoy = getdate();print("Fecha: ".$hoy[mday]."/".$hoy[mon]."/".$hoy[year]); ?>  
<br><h2><strong>Curriculum Bomberil</strong></h2>
     <h3><strong>Datos Personales</strong></h3>
 
        <?php   $comuna=Comuna::model()->findByAttributes(array('id_comuna'=>$model->id_comuna));
        $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_hoja',
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
     <br>
     <div class="example">
        <h3><strong>Cargos</strong></h3>
        <?php $modelCargo=new HojaCargo('search');
            $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'hoja-cargo-grid',
            'dataProvider'=>$modelCargo->search($model->id_hoja),
            //'filter'=>$modelCargo,
                //'itemsCssClass' => 'grid-view',
                //'htmlOptions' => array('class' => 'example'),
                //'pager' => array('cssFile' => Yii::app()->theme->baseUrl.'/css/cgridview.css'),
                //'cssFile' => Yii::app()->theme->baseUrl.'/css/cgridview.css',
            'columns'=>array(
                    //'id_hoja',
                    //'id_cargo',
                    array(
                        //'name' => 'id_premio',
                        'header'=>'Descripcion',
                        'filter' => false, // para que no se muestre el campo de filtrar para el atributo fecha
                        'value'=>'Cargo::model()->findByPk($data->id_cargo)->descripcion',
                     ),
                    array(
                        'name' => 'fecha_ini',
                        'filter' => false, // para que no se muestre el campo de filtrar para el atributo fecha
                     ),
                     array(
                        'name' => 'fecha_fin',
                        'filter' => false, // para que no se muestre el campo de filtrar para el atributo fecha
                     ),                     

            ),
));
        ?>
        
        <h3><strong>Cursos</strong></h3>
        <?php 
            $modelCurso=new HojaCurso('search');
            $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'hoja-curso-grid',
            'dataProvider'=>$modelCurso->search($model->id_hoja),
            //'filter'=>$modelCurso,
            'columns'=>array(
                    //'id_hoja',
                    //'id_curso',
                    array(
                        //'name' => 'id_curso',
                        'header'=>'Nombre',
                        'filter' => false, // para que no se muestre el campo de filtrar para el atributo fecha
                        'value'=>'Curso::model()->findByPk($data->id_curso)->nombre',
                     ),
                     array(
                        //'name' => 'id_curso',
                        'header'=>'Descripcion',
                        'filter' => false, // para que no se muestre el campo de filtrar para el atributo fecha
                        'value'=>'Curso::model()->findByPk($data->id_curso)->descripcion',
                     ),

            ),
));
        ?>

        <h3><strong>Premios</strong></h3>
        <?php 
            $modelPremio=new HojaPremio('search');
            $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'hoja-premio-grid',
            'dataProvider'=>$modelPremio->search($model->id_hoja),
            //'filter'=>$modelPremio,
            'columns'=>array(
                    //'id_hoja',
                    //'id_premio',
                    //'fecha',
                    array(
                        'name' => 'fecha',
                        'filter' => false, // para que no se muestre el campo de filtrar para el atributo fecha
                     ),
                     array(
                        //'name' => 'id_premio',
                        'header'=>'Descripcion',
                        'filter' => false, // para que no se muestre el campo de filtrar para el atributo fecha
                        'value'=>'Premio::model()->findByPk($data->id_premio)->descripcion',
                     ),

            ),
));
        ?>
        
        <h3><strong>Premios Especiales</strong></h3>      
        <?php 
            $modelPremioEsp=new PremioEspecial('search');
            $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'premio-esp-grid',
            'dataProvider'=>$modelPremioEsp->searchBy($model->id_hoja),
            //'filter'=>$modelPremioEsp,
            'columns'=>array(
                    //'id_premio_esp',
                    //'id_hoja',
                    array(
                        'name' => 'fecha',
                        'filter' => false, // para que no se muestre el campo de filtrar para el atributo fecha
                     ),
                    array(
                        'name' => 'procede',
                        'filter' => false, 
                    ),
                    array(
                        'name' => 'clase',
                        'filter' => false,
                    ),
               
            ),
)); ?>
              
        <h3><strong>Sanciones</strong></h3>       
        <?php 
            $modelSancion=new Sancion('search');
            $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'sancion-grid',
            'dataProvider'=>$modelSancion->searchBy($model->id_hoja),
            //'filter'=>$modelSancion,
            'columns'=>array(
                    //'id_sancion',
                    //'id_hoja',
                    array(
                        'name' => 'fecha',
                        'filter' => false, // para que no se muestre el campo de filtrar para el atributo fecha
                     ),
                    array(
                        'name' => 'procede',
                        'filter' => false, 
                    ),
                    array(
                        'name' => 'sinopsis',
                        'filter' => false,
                    ),
                    
            ),
)); ?>
        
        <h3><strong>Bajas</strong></h3>       
        <?php 
            $modelBaja=new Baja('search');
            $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'baja-grid',
            'dataProvider'=>$modelBaja->searchBy($model->id_hoja),
            //'filter'=>$modelBaja,
            'columns'=>array(
                    //'id_baja',
                    //'id_hoja',
                    array(
                        'name' => 'fecha',
                        'filter' => false, // para que no se muestre el campo de filtrar para el atributo fecha
                     ),
                    array(
                        'name' => 'procede',
                        'filter' => false, 
                    ),
                    array(
                        'name' => 'sinopsis',
                        'filter' => false,
                    ),
                    
            ),
)); ?>
        
        <h3><strong>Recomendaciones</strong></h3>       
        <?php 
            $modelRecomendacion=new Recomendacion('search');
            $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'recomendacion-grid',
            'dataProvider'=>$modelRecomendacion->searchBy($model->id_hoja),
            //'filter'=>$modelRecomendacion,
            'columns'=>array(
                    //'id_recomendacion',
                    //'id_hoja',
                    array(
                        'name' => 'fecha',
                        'filter' => false, // para que no se muestre el campo de filtrar para el atributo fecha
                     ),
                    array(
                        'name' => 'procede',
                        'filter' => false, 
                    ),
                    array(
                        'name' => 'sinopsis',
                        'filter' => false,
                    ),
                    
            ),
)); ?>    
        
        <h3><strong>Otros</strong></h3>        
        <?php 
            $modelOtro=new Otro('search');
            $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'otro-grid',
            'dataProvider'=>$modelOtro->searchBy($model->id_hoja),
            //'filter'=>$modelOtro,
            'columns'=>array(
                    //'id_otro',
                    //'id_hoja',
                    array(
                        'name' => 'descripcion',
                        'filter' => false, // para que no se muestre el campo de filtrar para el atributo fecha
                     ),
                   
            ),
)); ?>
</div><!-- form -->