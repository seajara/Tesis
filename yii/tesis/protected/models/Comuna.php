<?php

/**
 * This is the model class for table "comuna".
 *
 * The followings are the available columns in table 'comuna':
 * @property string $id_comuna
 * @property string $nombre
 * @property string $id_provincia
 *
 * The followings are the available model relations:
 * @property Compania[] $companias
 * @property Provincia $idProvincia
 * @property HojaDeVida[] $hojaDeVidas
 * @property Solicitud[] $solicituds
 */
class Comuna extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comuna';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_comuna', 'required'),
			array('id_comuna, id_provincia', 'length', 'max'=>5),
			array('nombre', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_comuna, nombre, id_provincia', 'safe', 'on'=>'search'),
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
			'companias' => array(self::HAS_MANY, 'Compania', 'id_comuna'),
			'idProvincia' => array(self::BELONGS_TO, 'Provincia', 'id_provincia'),
			'hojaDeVidas' => array(self::HAS_MANY, 'HojaDeVida', 'id_comuna'),
			'solicituds' => array(self::HAS_MANY, 'Solicitud', 'id_comuna'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_comuna' => 'Id Comuna',
			'nombre' => 'Nombre',
			'id_provincia' => 'Id Provincia',
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

		$criteria->compare('id_comuna',$this->id_comuna,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('id_provincia',$this->id_provincia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comuna the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
