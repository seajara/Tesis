<br>

<?php echo CHtml::button('Agregar Sancion', array('submit'=>'../../sancion/create?id_hoja='.$model->id_hoja));
            $modelSancion=new Sancion('search');
            $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'sancion-grid',
            'dataProvider'=>$modelSancion->searchBy($model->id_hoja),
            'filter'=>$modelSancion,
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
                    array(
                            'class'=>'CButtonColumn',
                            'header'=>'Acciones',
                            'template'=>'{update}{delete}', // botones a mostrar
                            'updateButtonUrl'=>'Yii::app()->createUrl("sancion/update", array("id"=>$data->id_sancion))',
                            'deleteButtonUrl'=>'Yii::app()->createUrl("sancion/delete", array("id"=>$data->id_sancion))',
                            'deleteConfirmation'=>'¿Está Seguro de Eliminar esta Sancion?',
                            //'viewButtonImageUrl'=>Yii::app()->baseUrl.'',
                    ),
            ),
)); ?>