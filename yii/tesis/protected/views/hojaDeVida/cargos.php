<br>
<?php 
        
        $modelCargo=new HojaCargo('search');
        echo CHtml::button('Agregar Cargo', array('submit'=>'../../hojaCargo/create?id_hoja='.$model->id_hoja));
            $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'hoja-cargo-grid',
            'dataProvider'=>$modelCargo->search($model->id_hoja),
            'filter'=>$modelCargo,
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
                    array(
                            'class'=>'CButtonColumn',
                            'header'=>'Acciones',
                            'template'=>'{update}{delete}', // botones a mostrar
                            'updateButtonUrl'=>'Yii::app()->createUrl("hojaCargo/update", array("id"=>$data->id_hoja_cargo))',
                            'deleteButtonUrl'=>'Yii::app()->createUrl("hojaCargo/delete", array("id"=>$data->id_hoja_cargo))',
                            'deleteConfirmation'=>'¿Está Seguro de Eliminar este Cargo?',
                            //'viewButtonImageUrl'=>Yii::app()->baseUrl.'',
                    ),
            ),
));

?>
