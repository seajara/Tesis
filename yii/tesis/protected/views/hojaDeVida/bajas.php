<br>

<?php echo CHtml::button('Agregar Baja', array('submit'=>'../../baja/create?id_hoja='.$model->id_hoja));
            $modelBaja=new Baja('search');
            $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'baja-grid',
            'dataProvider'=>$modelBaja->searchBy($model->id_hoja),
            'filter'=>$modelBaja,
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
                    array(
                            'class'=>'CButtonColumn',
                            'header'=>'Acciones',
                            'template'=>'{update}{delete}', // botones a mostrar
                            'updateButtonUrl'=>'Yii::app()->createUrl("baja/update", array("id"=>$data->id_baja))',
                            'deleteButtonUrl'=>'Yii::app()->createUrl("baja/delete", array("id"=>$data->id_baja))',
                            'deleteConfirmation'=>'¿Está Seguro de Eliminar esta Baja?',
                            //'viewButtonImageUrl'=>Yii::app()->baseUrl.'',
                    ),
            ),
)); ?>