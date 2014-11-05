<br>

<?php echo CHtml::button('Agregar Curso', array('submit'=>'../../hojaCurso/create?id_hoja='.$model->id_hoja));
            $modelCurso=new HojaCurso('search');
            $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'hoja-curso-grid',
            'dataProvider'=>$modelCurso->search($model->id_hoja),
            'filter'=>$modelCurso,
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
                    array(
                            'class'=>'CButtonColumn',
                            'header'=>'Acciones',
                            'template'=>'{delete}', // botones a mostrar
                            'deleteButtonUrl'=>'Yii::app()->createUrl("hojaCurso/delete", array("id"=>$data->id_hoja_curso))',
                            'deleteConfirmation'=>'¿Está Seguro de Eliminar este Curso?',
                            //'viewButtonImageUrl'=>Yii::app()->baseUrl.'',
                    ),
            ),
));
        ?>