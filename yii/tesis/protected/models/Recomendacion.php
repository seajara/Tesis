<?php

/**
 * This is the model class for table "recomendacion".
 *
 * The followings are the available columns in table 'recomendacion':
 * @property integer $id_recomendacion
 * @property integer $id_hoja
 * @property string $fecha
 * @property string $procede
 * @property string $sinopsis
 *
 * The followings are the available model relations:
 * @property HojaDeVida $idHoja
 */
class Recomendacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'recomendacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_hoja, fecha', 'required'),
			array('id_hoja', 'numerical', 'integerOnly'=>true),
			array('procede, sinopsis', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_recomendacion, id_hoja, fecha, procede, sinopsis', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_recomendacion' => 'Id Recomendacion',
			'id_hoja' => 'Id Hoja',
			'fecha' => 'Fecha',
			'procede' => 'Procede',
			'sinopsis' => 'Sinopsis',
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

		$criteria->compare('id_recomendacion',$this->id_recomendacion);
		$criteria->compare('id_hoja',$this->id_hoja);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('procede',$this->procede,true);
		$criteria->compare('sinopsis',$this->sinopsis,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchBy($id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_recomendacion',$this->id_recomendacion);
		$criteria->compare('id_hoja',$id);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('procede',$this->procede,true);
		$criteria->compare('sinopsis',$this->sinopsis,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Recomendacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
