<br>

<?php echo CHtml::button('Agregar Recomendacion', array('submit'=>'../../recomendacion/create?id_hoja='.$model->id_hoja));
            $modelRecomendacion=new Recomendacion('search');
            $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'recomendacion-grid',
            'dataProvider'=>$modelRecomendacion->searchBy($model->id_hoja),
            'filter'=>$modelRecomendacion,
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
                    array(
                            'class'=>'CButtonColumn',
                            'header'=>'Acciones',
                            'template'=>'{update}{delete}', // botones a mostrar
                            'updateButtonUrl'=>'Yii::app()->createUrl("recomendacion/update", array("id"=>$data->id_recomendacion))',
                            'deleteButtonUrl'=>'Yii::app()->createUrl("recomendacion/delete", array("id"=>$data->id_recomendacion))',
                            'deleteConfirmation'=>'¿Está Seguro de Eliminar esta Recomendacion?',
                            //'viewButtonImageUrl'=>Yii::app()->baseUrl.'',
                    ),
            ),
)); ?>    