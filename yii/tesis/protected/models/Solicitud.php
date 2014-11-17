<?php

/**
 * This is the model class for table "solicitud".
 *
 * The followings are the available columns in table 'solicitud':
 * @property integer $id_solicitud
 * @property integer $id_compania
 * @property string $id_comuna
 * @property string $rut
 * @property string $nombre
 * @property string $ap_paterno
 * @property string $ap_materno
 * @property string $fecha_nac
 * @property string $estado_civil
 * @property string $profesion
 * @property string $direccion
 * @property string $trabajo
 * @property string $calidad
 * @property string $patrocinador
 * @property string $rut_pat
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property HojaDeVida[] $hojaDeVidas
 * @property Compania $idCompania
 * @property Comuna $idComuna
 * @property CuentaPostulante $rut0
 */
class Solicitud extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
         public $email;
         public $cc;
         public $asunto;
         public $contenido;
         
	public function tableName()
	{
		return 'solicitud';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_compania, id_comuna, id_usuario, rut, nombre, ap_paterno, ap_materno, patrocinador, rut_pat, estado, email, contenido, fecha', 'required'),
			array('id_compania', 'numerical', 'integerOnly'=>true),
                        array('rut', 'unique'),
                        //array('rut', 'validateRut'),
			array('id_comuna', 'length', 'max'=>5),
                        array('id_usuario', 'length', 'max'=>11),
			array('rut, rut_pat', 'length', 'max'=>12),
			array('nombre, profesion, patrocinador', 'length', 'max'=>30),
			array('ap_paterno, ap_materno', 'length', 'max'=>15),
			array('estado_civil, estado', 'length', 'max'=>10),
			array('direccion, trabajo, calidad', 'length', 'max'=>50),
                        array('email', 'email'),
			array('fecha_nac, fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_solicitud, id_compania, id_comuna, id_usuario, rut, nombre, ap_paterno, ap_materno, fecha_nac, estado_civil, profesion, direccion, trabajo, calidad, patrocinador, rut_pat, estado, fecha, email, contenido', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'hojaDeVidas' => array(self::HAS_MANY, 'HojaDeVida', 'id_solicitud'),
			'idCompania' => array(self::BELONGS_TO, 'Compania', 'id_compania'),
			'idComuna' => array(self::BELONGS_TO, 'Comuna', 'id_comuna'),
			'idUsuario' => array(self::BELONGS_TO, 'Usuario', 'id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_solicitud' => 'Id Solicitud',
			'id_compania' => 'Id Companía',
			'id_comuna' => 'Comuna',
                        'id_usuario' => 'Id Usuario',
			'rut' => 'Rut',
			'nombre' => 'Nombre',
			'ap_paterno' => 'Apellido Paterno',
			'ap_materno' => 'Apellido Materno',
			'fecha_nac' => 'Fecha de Nacimiento',
			'estado_civil' => 'Estado Civil',
			'profesion' => 'Profesión',
			'direccion' => 'Dirección',
			'trabajo' => 'Trabajo',
			'calidad' => 'Calidad',
			'patrocinador' => 'Patrocinador',
			'rut_pat' => 'Rut del Patrocinador',
			'estado' => 'Estado',
                        'fecha' => 'Fecha Emisión',
                        'email' => 'Destinatario'
                        
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_solicitud',$this->id_solicitud);
		$criteria->compare('id_compania',$this->id_compania);
		$criteria->compare('id_comuna',$this->id_comuna,true);
                $criteria->compare('id_usuario',$this->id_usuario,true);
		$criteria->compare('rut',$this->rut,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('ap_paterno',$this->ap_paterno,true);
		$criteria->compare('ap_materno',$this->ap_materno,true);
		$criteria->compare('fecha_nac',$this->fecha_nac,true);
		$criteria->compare('estado_civil',$this->estado_civil,true);
		$criteria->compare('profesion',$this->profesion,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('trabajo',$this->trabajo,true);
		$criteria->compare('calidad',$this->calidad,true);
		$criteria->compare('patrocinador',$this->patrocinador,true);
		$criteria->compare('rut_pat',$this->rut_pat,true);
		$criteria->compare('estado',$this->estado,true);
                $criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchBy($id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_solicitud',$this->id_solicitud);
		$criteria->compare('id_compania',$this->id_compania);
		$criteria->compare('id_comuna',$this->id_comuna,true);
                $criteria->compare('id_usuario',$id,true);
		$criteria->compare('rut',$this->rut,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('ap_paterno',$this->ap_paterno,true);
		$criteria->compare('ap_materno',$this->ap_materno,true);
		$criteria->compare('fecha_nac',$this->fecha_nac,true);
		$criteria->compare('estado_civil',$this->estado_civil,true);
		$criteria->compare('profesion',$this->profesion,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('trabajo',$this->trabajo,true);
		$criteria->compare('calidad',$this->calidad,true);
		$criteria->compare('patrocinador',$this->patrocinador,true);
		$criteria->compare('rut_pat',$this->rut_pat,true);
		$criteria->compare('estado',$this->estado,true);
                $criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Solicitudrecibidas the static model class
	 */
        public function validateRut() {
            $data = explode('-', $this->rut);
            $evaluate = strrev($data[0]);
            $multiply = 2;
            $store = 0;
            for ($i = 0; $i < strlen($evaluate); $i++) {
                $store += $evaluate[$i] * $multiply;
                $multiply++;
                if ($multiply > 7)
                    $multiply = 2;
            }
            isset($data[1]) ? $verifyCode = strtolower($data[1]) : $verifyCode = '';
            $result = 11 - ($store % 11);
            if ($result == 10)
                $result = 'k';
            if ($result == 11)
                $result = 0;
            if ($verifyCode != $result)
                $this->addError('rut', 'Rut inválido.');
        }
        
        public function getFormattedRut() {
            $unformattedRut = $this->rut;
            if (strpos($unformattedRut, '-') !== false ) {
                $splittedRut = explode('-', $unformattedRut);
                $number = number_format($splittedRut[0], 0, ',', '.');
                $verifier = strtoupper($splittedRut[1]);
                return $number . '-' . $verifier;
            }
            return number_format($unformattedRut, 0, ',', '.');
        }
        
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
