<?php

/**
 * This is the model class for table "inventario".
 *
 * The followings are the available columns in table 'inventario':
 * @property string $id_inventario
 * @property integer $id_subcategoria
 * @property integer $id_dependencia
 * @property string $codigo
 * @property string $nombre
 * @property string $descripcion
 * @property string $proveedor
 * @property integer $cantidad
 *
 * The followings are the available model relations:
 * @property Subcategoria $idSubcategoria
 */
class Inventario extends CActiveRecord
{
        public $fecha_in;
        public $estado;
        //public $dependencia;
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
			array('id_subcategoria, nombre, cantidad, fecha_in, estado', 'required'),
			array('id_subcategoria', 'numerical', 'integerOnly'=>true),
                        array('codigo' ,'unique'),
                        array('cantidad' ,'numerical', 'min'=>1),
			array('descripcion', 'length', 'max'=>200),
			array('proveedor', 'length', 'max'=>50),
                        //array('estado', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_inventario, id_subcategoria, codigo, nombre, descripcion, proveedor, cantidad, fecha_in, estado', 'safe', 'on'=>'search'),
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
			'id_inventario' => 'ID',
                        'codigo' => 'Código',
			'id_subcategoria' => 'Subcategoria',
                        'nombre' => 'Nombre',
			'descripcion' => 'Descripción',
			'proveedor' => 'Proveedor',
			'fecha_in' => 'Fecha Ingreso',
			'cantidad' => 'Cantidad',
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
                $criteria->compare('codigo',$this->codigo);
                $criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('proveedor',$this->proveedor,true);
		$criteria->compare('cantidad',$this->cantidad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchBy($subcategorias)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_inventario',$this->id_inventario,true);
                if(!empty($subcategorias)){
                    $criteria->compare('id_subcategoria',$subcategorias);
                }else{
                    $criteria->compare('id_subcategoria',-1);
                }
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('proveedor',$this->proveedor,true);
		$criteria->compare('cantidad',$this->cantidad);

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

        public static function getListSubcategoria($subs){
            return CHtml::listData($subs,'id_subcategoria','nombre');
        }
        
        public static function getSubcategoria($id){
            return Subcategoria::model()->findByPk(array('id_subcategoria'=>$id))->nombre;
        }
        
        public static function getListCategoria(){
            return CHtml::listData(Categoria::model()->findAll(),'id_categoria','nombre');
            //return CHtml::listData(Subcategoria::model()->findAll(),'id_subcategoria','idCategoria->nombre');
        }
        
        public static function getCategoria($id){
            return Subcategoria::model()->findByPk(array('id_subcategoria'=>$id))->idCategoria->nombre;
        }
        
        public static function getListDependencia(){
            return CHtml::listData(Dependencia::model()->findAll(),'id_dependencia','nombre');
            //return CHtml::listData(Subcategoria::model()->findAll(),'id_subcategoria','idCategoria->nombre');
        }
        
        public static function getDependencia($id){
            return Dependencia::model()->findByPk(array('id_dependencia'=>$id))->nombre;
        }
        
        public static function getFormatoCodigo($id){
            return $id.'-xxxx';
        }
        
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
