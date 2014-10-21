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
			array('id_compania, id_comuna, id_cuenta_postulante, rut, nombre, ap_paterno, ap_materno, patrocinador, rut_pat, estado', 'required'),
			array('id_compania', 'numerical', 'integerOnly'=>true),
			array('id_comuna', 'length', 'max'=>5),
                        array('id_cuenta_postulante', 'length', 'max'=>11),
			array('rut, rut_pat', 'length', 'max'=>12),
			array('nombre, profesion, patrocinador', 'length', 'max'=>30),
			array('ap_paterno, ap_materno', 'length', 'max'=>15),
			array('estado_civil, estado', 'length', 'max'=>10),
			array('direccion, trabajo, calidad', 'length', 'max'=>50),
			array('fecha_nac', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_solicitud, id_compania, id_comuna, id_cuenta_postulante, rut, nombre, ap_paterno, ap_materno, fecha_nac, estado_civil, profesion, direccion, trabajo, calidad, patrocinador, rut_pat, estado', 'safe', 'on'=>'search'),
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
			'idCuentaPostulante' => array(self::BELONGS_TO, 'CuentaPostulante', 'id_cuenta_postulante'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_solicitud' => 'Id Solicitud',
			'id_compania' => 'Id Compania',
			'id_comuna' => 'Comuna',
                        'id_cuenta_postulante' => 'Id Cuenta',
			'rut' => 'Rut',
			'nombre' => 'Nombre',
			'ap_paterno' => 'Apellido Paterno',
			'ap_materno' => 'Apellido Materno',
			'fecha_nac' => 'Fecha de Nacimiento',
			'estado_civil' => 'Estado Civil',
			'profesion' => 'Profesion',
			'direccion' => 'Direccion',
			'trabajo' => 'Trabajo',
			'calidad' => 'Calidad',
			'patrocinador' => 'Patrocinador',
			'rut_pat' => 'Rut del Patrocinador',
			'estado' => 'Estado',
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
                $criteria->compare('id_cuenta_postulante',$this->id_cuenta_postulante,true);
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
                $criteria->compare('id_cuenta_postulante',$id,true);
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
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
