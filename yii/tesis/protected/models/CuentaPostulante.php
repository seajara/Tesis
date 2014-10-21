<?php

/**
 * This is the model class for table "cuenta_postulante".
 *
 * The followings are the available columns in table 'cuenta_postulante':
 * @property integer $id_cuenta_postulante
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $pass
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Solicitud[] $solicituds
 */
class CuentaPostulante extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cuenta_postulante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido_paterno, apellido_materno, pass, email', 'required'),
			array('nombre, email', 'length', 'max'=>30),
			array('apellido_paterno, apellido_materno', 'length', 'max'=>20),
			array('pass', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cuenta_postulante, nombre, apellido_paterno, apellido_materno, pass, email', 'safe', 'on'=>'search'),
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
			'solicituds' => array(self::HAS_MANY, 'Solicitud', 'id_cuenta_postulante'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cuenta_postulante' => 'Id Cuenta Postulante',
			'nombre' => 'Nombre',
			'apellido_paterno' => 'Apellido Paterno',
			'apellido_materno' => 'Apellido Materno',
			'pass' => 'Pass',
			'email' => 'Email',
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

		$criteria->compare('id_cuenta_postulante',$this->id_cuenta_postulante);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido_paterno',$this->apellido_paterno,true);
		$criteria->compare('apellido_materno',$this->apellido_materno,true);
		$criteria->compare('pass',$this->pass,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CuentaPostulante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
