<?php

/**
 * This is the model class for table "elemento".
 *
 * The followings are the available columns in table 'elemento':
 * @property integer $id_elemento
 * @property integer $id_inventario
 * @property integer $id_dependencia
 * @property string $fecha_in
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property Inventario $idInventario
 */
class Elemento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'elemento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_elemento, id_inventario, id_dependencia, fecha_in, estado', 'required'),
			array('id_elemento, id_inventario, id_dependencia', 'numerical', 'integerOnly'=>true),
			array('estado', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_elemento, id_inventario, id_dependencia, fecha_in, estado', 'safe', 'on'=>'search'),
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
			'idInventario' => array(self::BELONGS_TO, 'Inventario', 'id_inventario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_elemento' => 'Código',
			'id_inventario' => 'Id Inventario',
			'id_dependencia' => 'Dependencia',
			'fecha_in' => 'Fecha Ingreso',
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

		$criteria->compare('id_elemento',$this->id_elemento);
		$criteria->compare('id_inventario',$this->id_inventario);
		$criteria->compare('id_dependencia',$this->id_dependencia);
		$criteria->compare('fecha_in',$this->fecha_in,true);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Elemento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
