<?php

/**
 * This is the model class for table "hoja_premio".
 *
 * The followings are the available columns in table 'hoja_premio':
 * @property integer $id_hoja_premio
 * @property integer $id_hoja
 * @property integer $id_premio
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property HojaDeVida $idHoja
 * @property Premio $idPremio
 */
class HojaPremio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hoja_premio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_hoja, id_premio', 'required'),
			array('id_hoja, id_premio', 'numerical', 'integerOnly'=>true),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_hoja_premio, id_hoja, id_premio, fecha', 'safe', 'on'=>'search'),
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
			'idPremio' => array(self::BELONGS_TO, 'Premio', 'id_premio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_hoja_premio' => 'Id Hoja Premio',
			'id_hoja' => 'Id Hoja',
			'id_premio' => 'Premio',
			'fecha' => 'Fecha',
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
	public function search($id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_hoja_premio',$this->id_hoja_premio);
		$criteria->compare('id_hoja',$id);
		$criteria->compare('id_premio',$this->id_premio);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HojaPremio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
