<?php

class InventarioController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			/*array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),*/
                        array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'admin', 'create', 'update', 'delete','updateajax', 'pdf', 'graficos', 'reporteMovil','hola','codigo'),
				'roles'=>array('direccion'),
			),
                        array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'admin','updateajax', 'pdf', 'graficos', 'reporteMovil'),
				'roles'=>array('capitania'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
            function count_digit($number) {
                $digit = 0;
                do {
                    $number /= 10;      //$number = $number / 10; 
                    $number = intval($number);
                    $digit++;
                } while ($number != 0);
                return $digit;
            }
		$model=new Inventario;
                $modelFiltro = new Filtro();
                if(isset($_POST['Filtro'])){     
                    $modelFiltro->attributes=$_POST['Filtro'];
                        $data["model"] = $model;
                        $data["modelFiltro"] = $modelFiltro;
                        $data["id_categoria"] = $modelFiltro->id_categoria;
                        $this->render('_form', $data);
                }else{
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Inventario']))
		{
			$model->attributes=$_POST['Inventario'];
                        $criteria=new CDbCriteria;
                        $criteria->select='max(id_inventario) AS id_inventario';
                        $row = Inventario::model()->find($criteria);
                        $max = $row['id_inventario'];
                        $model->id_inventario = $max+1;
                        $com=''; $sub=''; $num='';
                        switch (count_digit($model->id_subcategoria)) {
                                case 1:
                                $sub = '0'.$model->id_subcategoria;
                                break;

                                default:
                                $sub = $model->id_subcategoria;
                                break;
                        }
                        switch (count_digit($model->id_inventario)) {
                                case 1:
                                $num = '00'.$model->id_inventario;
                                break;

                                case 2:
                                $num = '0'.$model->id_inventario;
                                break;

                                default:
                                $num = $model->id_inventario;
                                break;
                        }
                        $model->codigo = '006'.$sub.$num;
			if($model->save()){
                                $crr='';
                                for($i=1;$i<=$model->cantidad;$i++){
                                    switch (count_digit($i)) {
                                        case 1:
                                        $crr = '000'.$i;
                                        break;

                                        case 2:
                                        $crr = '00'.$i;
                                        break;
                                        
                                        case 3:
                                        $crr = '0'.$i;
                                        break;
                                    
                                        default:
                                        $crr = $i;
                                        break;
                                    }
                                    $elemento = new Elemento;
                                    $elemento->id_dependencia = 1;
                                    $elemento->id_inventario=$model->id_inventario;
                                    $elemento->codigo_elemento=$model->codigo.$crr;
                                    $elemento->fecha_in=$model->fecha_in;
                                    $elemento->estado=$model->estado;
                                    $width  = 275;  
                                    $height = 100;
                                    $quality = 200;
                                    $text =$elemento->codigo_elemento;
                                    $location = Yii::getPathOfAlias("webroot").'/barcodes/'.$elemento->codigo_elemento;
                                    Yii::import("application.extensions.barcode.*");                      
                                    barcode::Barcode39($elemento->codigo_elemento, $width , $height , $quality, $text, $location);
                                    $elemento->save();
                                }
				$this->redirect(array('admin'));
                        }
		}

		$this->render('create',array(
			'model'=>$model,
                ));
                
                }
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Inventario']))
		{
			//$model->attributes=$_POST['Inventario'];
                        $model->attributes=$_POST['Inventario'];
                        /*$elemento = new Elemento;
                        $criteria=new CDbCriteria;
                        $criteria->select='max(id_elemento) AS id_elemento';
                        $row = $elemento->model()->find($criteria);
                        $max = $row['id_elemento'];*/
                        
			if($model->save()){
                            $cantidad = $model->cantidad;
                                for($i=0;$i<$cantidad;$i++){
                                    $elemento=new Elemento;
                                    $elemento->id_inventario = $model->id_inventario;
                                    $elemento->id_dependencia = $model->id_dependencia;
                                    $elemento->fecha_in = $model->fecha_in;
                                    $elemento->estado = $model->estado;
                                    $elemento->save();
                                }
                            $this->redirect(array('admin'));
                        }
			/*if($model->save())
				$this->redirect(array('admin'));*/
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Inventario');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
                
	}
        
        public function actionAdmin()
	{       
                $model=new Inventario('search');
		$model->unsetAttributes();  // clear any default values
                $modelConsulta = new Consulta();
                if(isset($_POST['Consulta'])){
                    //$this->redirect('create');
                    $modelConsulta->attributes=$_POST['Consulta'];
                    //print $modelConsulta->codigo;
                    $elemento = Elemento::model()->findByAttributes(array('codigo_elemento'=>$modelConsulta->codigo));
                    if(isset($elemento)){
                        $this->redirect('../elemento/view/'.$elemento->id_elemento);
                    }
                }
                $data = array();
                $modelFiltro = new Filtro();
                if(isset($_POST['Filtro'])){     
                    $modelFiltro->attributes=$_POST['Filtro'];
                    //if($modelFiltro->id_categoria==''){
                    if(false){
                        $this->render('admin',array(
                            'model'=>$model, 'modelFiltro'=>$modelFiltro
                        ));
                    }else{
                        $data["model"] = $model;
                        $data["modelFiltro"] = $modelFiltro;
                        $data["id_categoria"] = $modelFiltro->id_categoria;
                        $data["id_dependencia"] = $modelFiltro->id_dependencia;
                        $this->render('_ajaxContent', $data);
                    }
                    //$this->renderPartial('_ajaxContent', $data, false, true);
                    //$this->actionUpdateAjax(1);
                }else{               
 		
		if(isset($_GET['Inventario']))
			$model->attributes=$_GET['Inventario'];
                
                //$this->render('admin', $data);

		$this->render('admin',array(
			'model'=>$model, 
                        'modelFiltro'=>$modelFiltro,
                        'modelConsulta'=>$modelConsulta
                ));
                }
	}
        
        public function actionUpdateAjax()
        {
            $data = array();
            $data["myValue"] = 'se actualizo correctamente';
            
                $this->renderPartial('_div', $data, false, true);
        }
        
        public function actionPdf(){     
                //$this->render('reporte');
                $dataProvider=new CActiveDataProvider('Inventario');
                $this->layout="//layouts/pdf";
                # mPDF
                $mPDF1 = Yii::app()->ePdf->mpdf();
                $mPDF1->WriteHTML($this->render('reporte',array('dataProvider'=>$dataProvider), true));
                $mPDF1->Output("Inventario".date("YmdHis"),  EYiiPdf::OUTPUT_TO_BROWSER);
        }
        
        public function actionGraficos(){
            $this->render('graficos');
        }
        
        public function actionreporteMovil(){
            $this->render('reporteMovil');
        }
        
        public function actionHola(){
            @$s1= $_POST['FromLB'];
            if(is_array($s1)){
                $this->render('hola', array('s1'=>$s1));
            }
            $this->render('hola', array('s1'=>$s1));
        }
        
       

    public function actionCodigo(){
            /*function count_digit($number) {
            $digit = 0;
            do {
                $number /= 10;      //$number = $number / 10; 
                $number = intval($number);
                $digit++;
            } while ($number != 0);
            return $digit;
            }
            $model=Inventario::model()->findAll();
            foreach($model as $i){
                for($a=1; $a<=$i->cantidad; $a++){
                    $elemento = new Elemento;
                    $num_elemento = '';
                    switch (count_digit($a)) {
                        case 1:
                        $num_elemento = '000'.$a;
                        break;

                        case 2:
                        $num_elemento = '00'.$a;
                        break;
                    
                        case 3:
                        $num_elemento = '0'.$a;
                        break;

                        default:
                        $num_elemento = $a;
                        break;
                    }
                    $elemento->id_inventario = $i->id_inventario;
                    $elemento->codigo_elemento = $i->codigo.$num_elemento;
                    $elemento->id_dependencia = $i->id_dependencia;
                    $elemento->fecha_in = date("dmY");
                    $elemento->estado = 'Operativo';
                    $elemento->save();
                }  
            }
            $this->redirect(array('admin'));*/
            /*$elementos=  Elemento::model()->findAll();
            foreach($elementos as $model){
                //Widht of the barcode image. 
                $width  = 275;  
                //Height of the barcode image.
                $height = 100;
                //Quality of the barcode image. Only for JPEG.
                $quality = 200;
                //1 if text should appear below the barcode. Otherwise 0.
                $text =$model->codigo_elemento;
                // Location of barcode image storage.
                $location = Yii::getPathOfAlias("webroot").'/barcodes/'.$model->codigo_elemento;

                Yii::import("application.extensions.barcode.*");                      
                barcode::Barcode39($model->codigo_elemento, $width , $height , $quality, $text, $location);
            }
            $this->redirect(array('admin'));*/
            /*function count_digit($number) {
            $digit = 0;
            do {
                $number /= 10;      //$number = $number / 10; 
                $number = intval($number);
                $digit++;
            } while ($number != 0);
            return $digit;
            }
            $inventarios=Inventario::model()->findAll();
            $a=1;
            $num_inventario='';
            foreach($inventarios as $model){   
                $sub='';
                switch (count_digit($model->id_subcategoria)) {
                        case 1:
                        $sub = '0'.$model->id_subcategoria;
                        break;

                        default:
                        $sub = $model->id_subcategoria;
                        break;
                }
                switch (count_digit($a)) {
                        case 1:
                        $num_inventario = '00'.$a;
                        break;

                        case 2:
                        $num_inventario = '0'.$a;
                        break;

                        default:
                        $num_inventario = $a;
                        break;
                }
                $a++;
                $model->codigo = '006'.$sub.$num_inventario;
                $model->save();
            }*/
            /*foreach($inventarios as $model){
                $model->descripcion = null; 
                $model->save();
            }
            $this->redirect(array('admin'));*/
        //Widht of the barcode image. 
        
        }
	/**
	 * Manages all models.
	 */

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Inventario the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Inventario::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Inventario $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='inventario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
