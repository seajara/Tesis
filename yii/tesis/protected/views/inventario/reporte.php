<div class="row" style="text-align: right">
    <?php $hoy = getdate();print("Fecha de emisión: ".$hoy[mday]."/".$hoy[mon]."/".$hoy[year]); ?>  
</div>

<div class="row">
     <?php echo CHtml::image(Yii::app()->theme->baseUrl.'/images/logo.png',"imagen",array("width"=>75)); ?>
</div>

<br><h2><strong>Listado de Inventarios</strong></h2>

<table border="1">
    <thead >
        <tr bgcolor="#D6D6D6">
        <th>Código</th>
        <th>Descripción</th>
        <th>Categoría</th>
        <th>Fecha de Ingreso</th>
        <th>Cantidad</th>
        <th>Estado</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $inventarios = Inventario::model()->findAll();
        $total = 0;
        foreach ($inventarios as $datos) {
            echo "<tr>"
            . "<td>" . $datos->id_inventario . "</td>"
            . "<td>" . $datos->descripcion . "</td>"
            . "<td>" . $datos->idSubcategoria->idCategoria->nombre . "</td>"
            . "<td>" . $datos->fecha_in . "</td>"
            . "<td>" . $datos->cantidad . "</td>"
            . "<td>" . $datos->estado . "</td>"
            . "</tr>";
            $total = $total + $datos->cantidad;
        }
    ?>
    </tbody>
    <tfoot>
    <tr>
        <td bgcolor="#D6D6D6"><strong>Total</strong></td>
      <td></td>
      <td></td>
      <td></td>
      <td><strong><?php echo $total;?></strong></td>
      <td></td>
    </tr>
  </tfoot>
</table>
<br/>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));
?>

