<br>

<?php echo CHtml::button('Agregar Premio', array('submit'=>'../../hojaPremio/create?id_hoja='.$model->id_hoja));
            $modelPremio=new HojaPremio('search');
            $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'hoja-premio-grid',
            'dataProvider'=>$modelPremio->search($model->id_hoja),
            'filter'=>$modelPremio,
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
                    array(
                            'class'=>'CButtonColumn',
                            'header'=>'Acciones',
                            'template'=>'{update}{delete}', // botones a mostrar
                            'updateButtonUrl'=>'Yii::app()->createUrl("hojaPremio/update", array("id"=>$data->id_hoja_premio))',
                            'deleteButtonUrl'=>'Yii::app()->createUrl("hojaPremio/delete", array("id"=>$data->id_hoja_premio))',
                            'deleteConfirmation'=>'¿Está Seguro de Eliminar este Premio?',
                            //'viewButtonImageUrl'=>Yii::app()->baseUrl.'',
                    ),
            ),
));
        ?>

<br>

<?php echo CHtml::button('Agregar Premio Especial', array('submit'=>'../../premioEspecial/create?id_hoja='.$model->id_hoja));
            $word='uno';
            $modelPremioEsp=new PremioEspecial('search');
            $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'premio-esp-grid',
            'dataProvider'=>$modelPremioEsp->searchBy($model->id_hoja),
            'filter'=>$modelPremioEsp,
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
                    array(
                        'header'=>'author',
                        'value'=>'$data->procede'
                    ),
                    array(
                            'class'=>'CButtonColumn',
                            'header'=>'Acciones',
                            'template'=> $word=='uno' ? '{update}{delete}' : '{delete}', // botones a mostrar
                            'updateButtonUrl'=>'Yii::app()->createUrl("premioEspecial/update", array("id"=>$data->id_premio_esp))',
                            'deleteButtonUrl'=>'Yii::app()->createUrl("premioEspecial/delete", array("id"=>$data->id_premio_esp))',
                            'deleteConfirmation'=>'¿Está Seguro de Eliminar este Premio?',
                            //'viewButtonImageUrl'=>Yii::app()->baseUrl.'',
                    ),
            ),
)); ?>