<div class="row" style="text-align: right">
    <?php $hoy = getdate();print("<strong>Fecha de emisión: </strong>".$hoy[mday]."/".$hoy[mon]."/".$hoy[year]); ?>  
</div>

<div class="row" style="text-align: center">
     <?php echo CHtml::image(Yii::app()->theme->baseUrl.'/images/logo.png',"imagen",array("width"=>100)); ?>
    <h2>Sexta Compañía de Bomberos de Chillán</h2>
</div>
<br>
<h3><strong>Listado de Inventarios</strong></h3>

<table border="1">
    <thead >
        <tr bgcolor="#D6D6D6">
        <th>Código</th>
        <th>Nombre</th>
        <th>Categoría</th>
        <th>Cantidad</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $inventarios = Inventario::model()->findAll(array('limit'=>'20, 0'));
        $total = 0;
        $i=0;
        foreach ($inventarios as $datos) {
        //for ($i=0; $i<sizeof($inventarios);$i++) {
            echo "<tr>"
            . "<td>" . $datos->codigo . "</td>"
            . "<td>" . $datos->nombre . "</td>"
            . "<td>" . $datos->idSubcategoria->idCategoria->nombre . "</td>"
            . "<td>" . $datos->cantidad . "</td>"
            . "</tr>";
            $total = $total + $datos->cantidad;
            $i++;
        }
    ?>
    </tbody>
    <tfoot>
    <tr>
        <td bgcolor="#D6D6D6"><strong>SubTotal</strong></td>
      <td></td>
      <td></td>
      <td></td>
      <td><strong><?php echo $total;?></strong></td>
      <td></td>
    </tr>
  </tfoot>
</table>
<br/>
<br/>
<br/>
<table border="1">
    <thead >
        <tr bgcolor="#D6D6D6">
        <th>Código</th>
        <th>Nombre</th>
        <th>Categoría</th>
        <th>Cantidad</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $inventarios = Inventario::model()->findAll(array('limit'=>'29, 0'));
        //$total = 0;
        $i=0;
        foreach ($inventarios as $datos) {
        //for ($i=0; $i<sizeof($inventarios);$i++) {
            echo "<tr>"
            . "<td>" . $datos->codigo . "</td>"
            . "<td>" . $datos->nombre . "</td>"
            . "<td>" . $datos->idSubcategoria->idCategoria->nombre . "</td>"
            . "<td>" . $datos->cantidad . "</td>"
            . "</tr>";
            $total = $total + $datos->cantidad;
            $i++;
        }
    ?>
    </tbody>
    <tfoot>
    <tr>
        <td bgcolor="#D6D6D6"><strong>SubTotal</strong></td>
      <td></td>
      <td></td>
      <td></td>
      <td><strong><?php echo $total;?></strong></td>
      <td></td>
    </tr>
  </tfoot>
</table>
<br/>
<br/>
<br/>
<table border="1">
    <thead >
        <tr bgcolor="#D6D6D6">
        <th>Código</th>
        <th>Descripción</th>
        <th>Categoría</th>
        <th>Cantidad</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $inventarios = Inventario::model()->findAll(array('limit'=>'29, 0'));
        //$total = 0;
        $i=0;
        foreach ($inventarios as $datos) {
        //for ($i=0; $i<sizeof($inventarios);$i++) {
            echo "<tr>"
            . "<td>" . $datos->codigo . "</td>"
            . "<td>" . $datos->nombre . "</td>"
            . "<td>" . $datos->idSubcategoria->idCategoria->nombre . "</td>"
            . "<td>" . $datos->cantidad . "</td>"
            . "</tr>";
            $total = $total + $datos->cantidad;
            $i++;
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
<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */
?>
