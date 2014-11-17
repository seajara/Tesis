<?php

class SolicitudController extends Controller
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
				'actions'=>array('index','view', 'admin', 'delete', 'revision'),
				'roles'=>array('direccion','capitania'),
                                //'ips' => array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index', 'create','update','delete','admin_postulante'),
				'roles'=>array('postulante'),
			),
			/*array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),*/
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
	
	public function actionVista($id)
	{
		$this->render('vista',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{

		$model=new Solicitud;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Solicitud']))
		{  
			$model->attributes=$_POST['Solicitud'];
			if($model->save())
				$this->redirect(array('admin_postulante'));
		}

		$this->render('create',array(
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

		if(isset($_POST['Solicitud']))
		{
			$model->attributes=$_POST['Solicitud'];
			if($model->save())
				$this->redirect(array('admin_postulante'));
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
		$dataProvider=new CActiveDataProvider('Solicitud');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Solicitud('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Solicitud']))
			$model->attributes=$_GET['Solicitud'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
        public function actionAdmin_Postulante()
	{
		$model=new Solicitud('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Solicitud']))
			$model->attributes=$_GET['Solicitud'];

		$this->render('admin_postulante',array(
			'model'=>$model,
		));
	}
	
        public function actionRevision($id)
	{
		$model=$this->loadModel($id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Solicitud']))
		{    
			$model->attributes=$_POST['Solicitud'];
                        if($model->estado=='Aceptado'||$model->estado=='Rechazado'){
                            $this->enviarCorreo($model);
                        }
			if($model->save())
				$this->redirect(array('admin'));
		}
                
		$this->render('revision',array(
			'model'=>$model,
		));
		
	}
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Solicitudrecibidas the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Solicitud::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Solicitudrecibidas $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='solicitud-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        protected function enviarCorreo($model) {
            //$usuario = Usuario::model()->findByPk($model->id_usuario);            
            $email = $model->email;
            Yii::import("ext.Mailer.*");
            $mail = new PHPMailer();
            $mail->IsSMTP(); // telling the class to use SMTP
            //$mail->Host       = "mail.yourdomain.com"; // SMTP server
            //$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
            // 1 = errors and messages
            // 2 = messages only
            $mail->SMTPAuth = true;                  // enable SMTP authentication
            $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
            $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
            $mail->Port = 587;                   // set the SMTP port for the GMAIL server
            $mail->Username = "plataforma.sexta.chillan@gmail.com";  // GMAIL username
            $mail->Password = "sextachillan";            // GMAIL password
            $mail->CharSet = 'UTF-8';
            $mail->setFrom("plataforma.sexta.chillan@gmail.com", "Sexta Compañía de Bomberos Chillán");
            $mail->Subject = "Solicitud de incorporación";
            $mail->msgHTML("<p>".$model->contenido."</p>");
            $mail->addAddress($email, "Sexta Compañía de Bomberos Chillán");
            //$mail->IsHTML(true);
            $mail->send();
    }
}
