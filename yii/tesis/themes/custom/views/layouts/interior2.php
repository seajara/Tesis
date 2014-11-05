<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sexta Compañía de Bomberos "Bomba Bernardo O´Higgins"</title>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/estilo.css" rel="stylesheet" type="text/css" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
        	
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css"/>
   <!--<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>-->
   <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/script.js"></script>
   <!--<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/functions.js"></script>-->
        
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>

<!-- Start WOWSlider.com HEAD section 
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->theme->baseUrl; ?>/engine2//style.css" media="screen" />
	<script type="text/javascript" src="<?php //echo Yii::app()->theme->baseUrl; ?>/engine2//jquery.js"></script>
End WOWSlider.com HEAD section -->

</head>

<body>
<div id="wrapper">
<div id="header">

<!--<ul>
<li><a href="inicio.php">INICIO</a></li>
<li><a href="instructivo.html">INSTRUCTIVO</a></li>
<li><a href="requisitos.html">REQUISITOS</a></li>
<li><a href="contacto.html">CONTACTO</a></li>
</ul>-->
<div id="mainmenu">
		<?php  $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				//array('label'=>'Contáctanos', 'url'=>array('/site/contact'),'visible'=>!(Yii::app()->user->checkAccess('direccion')||Yii::app()->user->checkAccess('capitania')||Yii::app()->user->checkAccess('voluntario'))),
				array('label'=>'Ver Instructivos', 'url'=>array('/site/page', 'view'=>'about'),'visible'=>!(Yii::app()->user->checkAccess('direccion')||Yii::app()->user->checkAccess('capitania')||Yii::app()->user->checkAccess('voluntario'))),
				array('label'=>'Configuración','url'=>array('/site/page', 'view'=>'about'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),				
                                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
</div><!-- mainmenu -->

</div>
<div id="contenido">
<div id="cajamenusecundario">

<div id="menusecundario">
    
    <div id='cssmenu'>
        <ul>
            <?php if(Yii::app()->user->checkAccess('postulante')): ?>
                <li class='active has-sub'><a href='#'><span>INSCRIBIRSE</span></a>
                    <ul>
                       <li><a href="<?php echo Yii::app()->baseUrl; ?>/solicitud/create"><span>Crear Solicitud</span></a> </li>
                      <li class='last'><a href="<?php echo Yii::app()->baseUrl; ?>/solicitud/admin_postulante"><span>Ver Mis Solicitudes</span></a>
                      </li>
                   </ul>
                </li>
            <?php endif; ?>
            <?php if(Yii::app()->user->checkAccess('direccion')||Yii::app()->user->checkAccess('capitania')): ?>
                <li><a href="<?php echo Yii::app()->baseUrl; ?>/solicitud/admin"><span>SOLICITUDES</span></a></li>
            <?php endif; ?>
            <?php if(Yii::app()->user->checkAccess('direccion')||Yii::app()->user->checkAccess('capitania')||Yii::app()->user->checkAccess('voluntario')): ?>
                <li class='active has-sub'><a href='#'><span>HOJAS DE VIDA</span></a>
                   <ul>
                       <li><a href="<?php echo Yii::app()->baseUrl; ?>/hojaDeVida/create"><span>Crear Hoja de Vida</span></a> </li>
                      <li class='last'><a href="<?php echo Yii::app()->baseUrl; ?>/hojaDeVida/admin"><span>Ver Hojas de Vida</span></a>
                      </li>
                   </ul>
                </li>
           <?php endif; ?>
           <?php if(Yii::app()->user->checkAccess('direccion')||Yii::app()->user->checkAccess('capitania')): ?>
           <li class='active has-sub'><a href='#'><span>INVENTARIOS</span></a>
              <ul>
                 <li><a href="<?php echo Yii::app()->baseUrl; ?>/inventario/create"><span>Agregar Elemento</span></a> </li>
                 <li><a href="<?php echo Yii::app()->baseUrl; ?>/inventario/admin"><span>Ver Inventario</span></a></li>
                 <li class='has-sub'><a href='#'><span>Categorias</span></a>
                     <ul>
                         <li><a href="<?php echo Yii::app()->baseUrl; ?>/categoria/admin"><span>Ver Categorias</span></a> </li>
                         <li><a href="<?php echo Yii::app()->baseUrl; ?>/categoria/create"><span>Agregar Categoria</span></a></li>                   
                     </ul>
                 </li>
                 <li class='has-sub'><a href='#'><span>Subcategorias</span></a>
                     <ul>
                         <li><a href="<?php echo Yii::app()->baseUrl; ?>/subcategoria/admin"><span>Ver Subcategorias</span></a> </li>
                         <li class="last"><a href="<?php echo Yii::app()->baseUrl; ?>/subcategoria/create"><span>Agregar Subcategoria</span></a></li>                   
                     </ul>
                 </li>
              </ul>
           </li>
           <?php endif; ?>
        </ul>
    </div>
	
</div>

</div>

    <div id="cajaderecha" style="height: 771px;">
   
        <div id="cajaparaformularios" style="height: 735px;"><?php echo $content; ?></div>

</div>
</div>

<div id="footer"><strong><em>Sexta Compañia de Bomberos de Chillán</em><em></em></strong> "Bomba Bernardo O'higgins"/ Fono 042-2260964</div>
</div>
</body>
</html>
