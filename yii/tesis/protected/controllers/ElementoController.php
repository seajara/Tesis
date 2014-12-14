<?php

class ElementoController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'admin', 'create', 'update', 'delete'),
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
	public function actionCreate($id)
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
                $model=new Elemento;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Elemento']))
		{
                        $inventario = Inventario::model()->findByPk($id);
			$model->attributes=$_POST['Elemento'];
                        $criteria = new CDbCriteria();
                        $criteria->compare('id_inventario',$id);
                        $i=0;
                        $count = Elemento::model()->count($criteria);
                        if($count>0){
                            $elementos = Elemento::model()->findAllByAttributes(array('id_inventario'=>$id));
                            $codigo='';
                            $j=0;
                            foreach ($elementos as $data) {
                                if($j<$count){
                                    $codigo = $data->codigo_elemento;
                                }else{
                                    break;
                                }
                            }
                            $rest = substr($codigo, -4); 
                            $i=(int)$rest;
                        }
                        $i=$i+1;
                        $crr='';
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
                        $model->id_inventario = $inventario->id_inventario;
                        $model->codigo_elemento = $inventario->codigo.$crr;
			if($model->save())
                            $this->redirect(array('admin','id'=>$id));
		}

		$this->render('create',array(
			'model'=>$model,
                        'id_inventario'=>$id,
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

		if(isset($_POST['Elemento']))
		{
			$model->attributes=$_POST['Elemento'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_elemento));
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
		$dataProvider=new CActiveDataProvider('Elemento');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($id)
	{
		$model=new Elemento('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Elemento']))
			$model->attributes=$_GET['Elemento'];

		$this->render('admin',array(
			'model'=>$model,
                        'id_inventario'=>$id,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Elemento the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Elemento::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Elemento $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='elemento-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
