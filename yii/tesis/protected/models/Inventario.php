<?php

/**
 * This is the model class for table "inventario".
 *
 * The followings are the available columns in table 'inventario':
 * @property string $id_inventario
 * @property integer $id_subcategoria
 * @property integer $id_compania
 * @property integer $id_dependencia
 * @property string $descripcion
 * @property string $proveedor
 * @property string $fecha_in
 * @property string $responsable
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
			array('id_inventario, id_subcategoria, id_compania, id_dependencia, descripcion, fecha_in', 'required'),
			array('id_subcategoria, id_compania, id_dependencia', 'numerical', 'integerOnly'=>true),
                        array('id_inventario' ,'unique'),
                        array('cantidad' ,'numerical', 'min'=>1),
                        //array('fecha_in', 'default', 'setOnEmpty'=>''),
			array('descripcion, observaciones', 'length', 'max'=>200),
			array('proveedor, responsable', 'length', 'max'=>50),
                        array('estado', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_inventario, id_subcategoria, id_compania, id_dependencia, descripcion, proveedor, fecha_in, responsable, cantidad, observaciones, estado', 'safe', 'on'=>'search'),
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
                        'idDependencia' => array(self::BELONGS_TO, 'Dependencia', 'id_dependencia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_inventario' => 'Código',
			'id_subcategoria' => 'Subcategoria',
			'id_compania' => 'Compania',
                        'id_dependencia' => 'Dependencia',
			'descripcion' => 'Nombre',
			'proveedor' => 'Proveedor',
			'fecha_in' => 'Fecha Incorporación',
			'responsable' => 'Responsable',
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
                $criteria->compare('id_dependencia',$this->id_dependencia);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('proveedor',$this->proveedor,true);
		$criteria->compare('fecha_in',$this->fecha_in,true);
		$criteria->compare('responsable',$this->responsable,true);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchBy($subcategorias, $id_dependencia)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_inventario',$this->id_inventario,true);
                /*if(!empty($subcategorias)){
                    $criteria->compare('id_subcategoria',$subcategorias);
                }else{
                    $criteria->compare('id_subcategoria',-1);
                }*/
                if(empty($subcategorias)&&empty($id_dependencia)){
                    $criteria->compare('id_subcategoria',-1);
                    $criteria->compare('id_dependencia',$this->id_dependencia);
                }else{
                    if(empty($subcategorias)){
                        $criteria->compare('id_subcategoria',-1);
                        $criteria->compare('id_dependencia',$id_dependencia);
                    }else{
                        if(empty($id_dependencia)){
                            $criteria->compare('id_subcategoria',$subcategorias);
                            $criteria->compare('id_dependencia',$this->id_dependencia);
                        }else{
                            $criteria->compare('id_subcategoria',$subcategorias);
                            $criteria->compare('id_dependencia',$id_dependencia);
                        }   
                    }
                }
		$criteria->compare('id_compania',$this->id_compania);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('proveedor',$this->proveedor,true);
		$criteria->compare('fecha_in',$this->fecha_in,true);
		$criteria->compare('responsable',$this->responsable,true);
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
        
        public static function getListEstado(){
            return CHtml::listData(Inventario::model()->findAll(),'estado','estado');
        }
        
        public static function getEstado($id){
            return Inventario::model()->findByPk(array('id_inventario'=>$id))->estado;
        }
        
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
