<?php

/**
 * This is the model class for table "inventario".
 *
 * The followings are the available columns in table 'inventario':
 * @property string $id_inventario
 * @property integer $id_subcategoria
 * @property integer $id_compania
 * @property string $descripcion
 * @property string $proveedor
 * @property string $fecha_in
 * @property string $responsable
 * @property string $movil
 * @property integer $cantidad
 * @property string $observaciones
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Subcategoria $idSubcategoria
 */
class Inventario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inventario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_inventario, id_subcategoria, id_compania, descripcion, fecha_in', 'required'),
			array('id_subcategoria, id_compania, cantidad, estado', 'numerical', 'integerOnly'=>true),
			array('id_inventario', 'length', 'max'=>15),
			array('descripcion, observaciones', 'length', 'max'=>200),
			array('proveedor, responsable', 'length', 'max'=>50),
			array('movil', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_inventario, id_subcategoria, id_compania, descripcion, proveedor, fecha_in, responsable, movil, cantidad, observaciones, estado', 'safe', 'on'=>'search'),
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
			'idSubcategoria' => array(self::BELONGS_TO, 'Subcategoria', 'id_subcategoria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_inventario' => 'Id Inventario',
			'id_subcategoria' => 'Id Subcategoria',
			'id_compania' => 'Id Compania',
			'descripcion' => 'Descripcion',
			'proveedor' => 'Proveedor',
			'fecha_in' => 'Fecha In',
			'responsable' => 'Responsable',
			'movil' => 'Movil',
			'cantidad' => 'Cantidad',
			'observaciones' => 'Observaciones',
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

		$criteria->compare('id_inventario',$this->id_inventario,true);
		$criteria->compare('id_subcategoria',$this->id_subcategoria);
		$criteria->compare('id_compania',$this->id_compania);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('proveedor',$this->proveedor,true);
		$criteria->compare('fecha_in',$this->fecha_in,true);
		$criteria->compare('responsable',$this->responsable,true);
		$criteria->compare('movil',$this->movil,true);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Inventario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
