<?php echo CHtml::link('Generar Reporte',array('pdf','id'=>$model->id_hoja), array('target'=>'_blank')); ?>

<?php
  //echo CHtml::link('Reporte',"#", array("submit"=>array('pdf', 'id'=>$model->id_hoja),));
  $this->widget('zii.widgets.jui.CJuiTabs', array(
            'tabs'=>array(
                'Datos' =>array('content' => $this->renderPartial("form_update",
                        array("model"=>$model),true)),
                'Cargos' =>array('content' => $this->renderPartial("cargos",
                        array("model"=>$model),true)),
                'Cursos' =>array('content' => $this->renderPartial("cursos",
                        array("model"=>$model),true)),
                'Premios' =>array('content' => $this->renderPartial("premios",
                        array("model"=>$model),true)),
                'Sanciones' =>array('content' => $this->renderPartial("sanciones",
                        array("model"=>$model),true)),
                'Bajas' =>array('content' => $this->renderPartial("bajas",
                        array("model"=>$model),true)),
                'Recomendaciones' =>array('content' => $this->renderPartial("recomendaciones",
                        array("model"=>$model),true)),
            ),  
            'options'=>array(
                'collapsible'=>true,
            ),
   )); 
  
  ?>