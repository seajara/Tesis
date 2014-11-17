<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id_usuario
 * @property integer $id_compania
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $login
 * @property string $pass
 * @property string $email
 * @property string $tipo
 *
 * The followings are the available model relations:
 * @property Solicitud[] $solicituds
 * @property Compania $idCompania
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_compania, nombre, apellido_paterno, login, pass, email, tipo', 'required'),
			array('id_compania', 'numerical', 'integerOnly'=>true),
			array('nombre, email', 'length', 'max'=>30),
			array('apellido_paterno, apellido_materno, login, tipo', 'length', 'max'=>20),
			array('pass', 'length', 'max'=>15),
                        array('login', 'unique'),
                        array('email', 'email'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_usuario, id_compania, nombre, apellido_paterno, apellido_materno, login, pass, email, tipo', 'safe', 'on'=>'search'),
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
			'solicituds' => array(self::HAS_MANY, 'Solicitud', 'id_usuario'),
			'idCompania' => array(self::BELONGS_TO, 'Compania', 'id_compania'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_usuario' => 'Id Usuario',
			'id_compania' => 'Id Compania',
			'nombre' => 'Nombre',
			'apellido_paterno' => 'Apellido Paterno',
			'apellido_materno' => 'Apellido Materno',
			'login' => 'Usuario',
			'pass' => 'Contraseña',
			'email' => 'Email',
			'tipo' => 'Tipo',
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

		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('id_compania',$this->id_compania);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido_paterno',$this->apellido_paterno,true);
		$criteria->compare('apellido_materno',$this->apellido_materno,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('pass',$this->pass,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('tipo',$this->tipo,true);
                //$criteria->compare('tipo',array('direccion', 'capitania', 'voluntario'),true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
