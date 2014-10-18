<?php

/**
 * This is the model class for table "hoja_curso".
 *
 * The followings are the available columns in table 'hoja_curso':
 * @property integer $id_hoja
 * @property integer $id_curso
 *
 * The followings are the available model relations:
 * @property HojaDeVida $idHoja
 * @property Curso $idCurso
 */
class HojaCurso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hoja_curso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_hoja, id_curso', 'required'),
			array('id_hoja, id_curso', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_hoja_curso, id_hoja, id_curso', 'safe', 'on'=>'search'),
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
			'idCurso' => array(self::BELONGS_TO, 'Curso', 'id_curso'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
                        'id_hoja_curso' => 'Id Hoja Curso',
			'id_hoja' => 'Id Hoja',
			'id_curso' => 'Curso',
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
                
                $criteria->compare('id_hoja_curso',$this->id_hoja_curso);
		$criteria->compare('id_hoja',$id);
		$criteria->compare('id_curso',$this->id_curso);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HojaCurso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
