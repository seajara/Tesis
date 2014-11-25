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
				'actions'=>array('index','view', 'admin', 'create', 'crear', 'update', 'delete','updateajax', 'pdf', 'graficos', 'reporteMovil','hola'),
				'roles'=>array('direccion','capitania'),
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
		$model=new Inventario;
                $modelFiltro = new Filtro();
                if(isset($_POST['Filtro'])){     
                    $modelFiltro->attributes=$_POST['Filtro'];
                        $data["model"] = $model;
                        $data["modelFiltro"] = $modelFiltro;
                        $data["id_categoria"] = $modelFiltro->id_categoria;
                        $data["id_dependencia"] = $modelFiltro->id_dependencia;
                        $this->render('_form', $data);
                }else{
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Inventario']))
		{
			$model->attributes=$_POST['Inventario'];
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('create',array(
			'model'=>$model,
                ));
                
                }
	}
        
        public function actionCrear()
	{
		$model=new Inventario;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Inventario']))
		{
			$model->attributes=$_POST['Inventario'];
                        $inventario = new Inventario;
                        $criteria=new CDbCriteria;
                        $criteria->select='max(id_inventario) AS id_inventario';
                        $row = $inventario->model()->find($criteria);
                        $max = $row['id_inventario'];
                        $model->id_inventario = $max+1;
                        /*$model->id_subcategoria = 1;
                        $model->id_compania = 6;
                        $model->descripcion = 'adsfs';
                        $model->fecha_in = '2014-11-21';*/
                        //$model->save();
			if($model->save()){
                            $cantidad = $model->cantidad;
                            if($cantidad>1){
                                $cod=$model->id_inventario+1;
                                for($i=0;$i<$cantidad-1;$i++){
                                    $fila=new Inventario;
                                    $fila->attributes=$_POST['Inventario'];
                                    $fila->id_inventario=$cod;
                                    $fila->save();
                                    $cod++;
                                }
                            }
                            $this->redirect(array('admin'));
                        }
		}

		$this->render('crear',array(
			'model'=>$model,
		));
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
			$model->attributes=$_POST['Inventario'];
			if($model->save())
				$this->redirect(array('admin'));
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
			'model'=>$model, 'modelFiltro'=>$modelFiltro
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
