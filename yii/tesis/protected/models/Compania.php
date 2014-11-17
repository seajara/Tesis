<?php

/**
 * This is the model class for table "compania".
 *
 * The followings are the available columns in table 'compania':
 * @property integer $id_compania
 * @property string $id_comuna
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Categoria[] $categorias
 * @property Comuna $idComuna
 * @property HojaDeVida[] $hojaDeVidas
 * @property Solicitud[] $solicituds
 * @property Usuario[] $usuarios
 */
class Compania extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'compania';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_compania, id_comuna, nombre', 'required'),
			array('id_compania', 'numerical', 'integerOnly'=>true),
			array('id_comuna', 'length', 'max'=>5),
			array('nombre, direccion, email', 'length', 'max'=>100),
			array('telefono', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_compania, id_comuna, nombre, direccion, telefono, email', 'safe', 'on'=>'search'),
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
			'categorias' => array(self::HAS_MANY, 'Categoria', 'id_compania'),
			'idComuna' => array(self::BELONGS_TO, 'Comuna', 'id_comuna'),
			'hojaDeVidas' => array(self::HAS_MANY, 'HojaDeVida', 'id_compania'),
			'solicituds' => array(self::HAS_MANY, 'Solicitud', 'id_compania'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'id_compania'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_compania' => 'Id Compania',
			'id_comuna' => 'Id Comuna',
			'nombre' => 'Nombre Compañía',
			'direccion' => 'Dirección',
			'telefono' => 'Fono',
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

		$criteria->compare('id_compania',$this->id_compania);
		$criteria->compare('id_comuna',$this->id_comuna,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Compania the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
