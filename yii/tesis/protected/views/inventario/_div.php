<?php echo $myValue; //mejor recargar todo
    echo $form->labelEx($model,'id_subcategoria'); 
    $subcategorias = Subcategoria::model()->findAll(array('order' => 'nombre')); 
    $lista = CHtml::listData($subcategorias,'id_subcategoria','nombre');
    echo $form->dropDownList($model,'id_subcategoria',$lista,array('empty'=>'Seleccione una Subcategoria'));        
    echo $form->error($model,'id_subcategoria');
?>
