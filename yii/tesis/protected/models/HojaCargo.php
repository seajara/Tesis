<?php

/**
 * This is the model class for table "hoja_cargo".
 *
 * The followings are the available columns in table 'hoja_cargo':
 * @property integer $id_hoja_cargo
 * @property integer $id_hoja
 * @property integer $id_cargo
 * @property string $fecha_ini
 * @property string $fecha_fin
 *
 * The followings are the available model relations:
 * @property HojaDeVida $idHoja
 * @property Cargo $idCargo
 */
class HojaCargo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hoja_cargo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_hoja, id_cargo', 'required'),
			array('id_hoja, id_cargo', 'numerical', 'integerOnly'=>true),
			array('fecha_ini, fecha_fin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_hoja_cargo, id_hoja, id_cargo, fecha_ini, fecha_fin', 'safe', 'on'=>'search'),
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
			'idHoja' => array(self::BELONGS_TO, 'HojaDeVida', 'id_hoja'),
			'idCargo' => array(self::BELONGS_TO, 'Cargo', 'id_cargo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_hoja_cargo' => 'Id Hoja Cargo',
			'id_hoja' => 'Id Hoja',
			'id_cargo' => 'Cargo',
			'fecha_ini' => 'Fecha Inicio',
			'fecha_fin' => 'Fecha Fin',
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

		$criteria->compare('id_hoja_cargo',$this->id_hoja_cargo);
		$criteria->compare('id_hoja',$this->id_hoja);
		$criteria->compare('id_cargo',$this->id_cargo);
		$criteria->compare('fecha_ini',$this->fecha_ini,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HojaCargo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
