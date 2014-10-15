<?php

/**
 * This is the model class for table "hoja_de_vida".
 *
 * The followings are the available columns in table 'hoja_de_vida':
 * @property integer $id_hoja
 * @property integer $id_compania
 * @property string $id_comuna
 * @property integer $id_solicitud
 * @property string $rut
 * @property string $nombre
 * @property string $ap_paterno
 * @property string $ap_materno
 * @property string $direccion
 * @property string $email
 * @property string $estado_civil
 * @property string $profesion
 * @property string $g_sanguineo
 * @property string $s_militar
 * @property string $fono_fijo
 * @property string $celular
 * @property string $patrocinador
 * @property string $fecha_in
 * @property string $fecha_r_in
 *
 * The followings are the available model relations:
 * @property Baja[] $bajas
 * @property EspProfesion[] $espProfesions
 * @property Hobby[] $hobbies
 * @property HojaCargo[] $hojaCargos
 * @property HojaCurso[] $hojaCursos
 * @property Compania $idCompania
 * @property Comuna $idComuna
 * @property Solicitud $idSolicitud
 * @property HojaPremio[] $hojaPremios
 * @property Otro[] $otros
 * @property PremioEspecial[] $premioEspecials
 * @property Recomendacion[] $recomendacions
 * @property Sancion[] $sancions
 */
class HojaDeVida extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hoja_de_vida';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_compania, id_comuna, rut, nombre, ap_paterno, ap_materno, direccion, g_sanguineo, s_militar, celular, patrocinador, fecha_in', 'required'),
			array('id_compania', 'numerical', 'integerOnly'=>true),
			array('id_comuna', 'length', 'max'=>5),
			array('rut, fono_fijo, celular', 'length', 'max'=>12),
			array('nombre, ap_paterno, ap_materno, estado_civil, patrocinador', 'length', 'max'=>15),
			array('direccion, profesion, s_militar', 'length', 'max'=>50),
			array('email, g_sanguineo', 'length', 'max'=>30),
			array('fecha_r_in', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_hoja, id_compania, id_comuna, rut, nombre, ap_paterno, ap_materno, direccion, email, estado_civil, profesion, g_sanguineo, s_militar, fono_fijo, celular, patrocinador, fecha_in, fecha_r_in', 'safe', 'on'=>'search'),
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
			'bajas' => array(self::HAS_MANY, 'Baja', 'id_hoja'),
			'espProfesions' => array(self::HAS_MANY, 'EspProfesion', 'id_hoja'),
			'hobbies' => array(self::HAS_MANY, 'Hobby', 'id_hoja'),
			'hojaCargos' => array(self::HAS_MANY, 'HojaCargo', 'id_hoja'),
			'hojaCursos' => array(self::HAS_MANY, 'HojaCurso', 'id_hoja'),
			'idCompania' => array(self::BELONGS_TO, 'Compania', 'id_compania'),
			'idComuna' => array(self::BELONGS_TO, 'Comuna', 'id_comuna'),
			//'idSolicitud' => array(self::BELONGS_TO, 'Solicitud', 'id_solicitud'),
			'hojaPremios' => array(self::HAS_MANY, 'HojaPremio', 'id_hoja'),
			'otros' => array(self::HAS_MANY, 'Otro', 'id_hoja'),
			'premioEspecials' => array(self::HAS_MANY, 'PremioEspecial', 'id_hoja'),
			'recomendacions' => array(self::HAS_MANY, 'Recomendacion', 'id_hoja'),
			'sancions' => array(self::HAS_MANY, 'Sancion', 'id_hoja'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_hoja' => 'Id Hoja',
			'id_compania' => 'Id Compania',
			'id_comuna' => 'Comuna',
			//'id_solicitud' => 'Id Solicitud',
			'rut' => 'Rut',
			'nombre' => 'Nombre',
			'ap_paterno' => 'Apellido Paterno',
			'ap_materno' => 'Apeliido Materno',
			'direccion' => 'Direccion',
			'email' => 'Email',
			'estado_civil' => 'Estado Civil',
			'profesion' => 'Profesion',
			'g_sanguineo' => 'Grupo Sanguineo',
			's_militar' => 'Situacion Militar',
			'fono_fijo' => 'Fono Fijo',
			'celular' => 'Celular',
			'patrocinador' => 'Patrocinador',
			'fecha_in' => 'Fecha de Ingreso',
			'fecha_r_in' => 'Fecha de Reingreso',
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

		$criteria->compare('id_hoja',$this->id_hoja);
		$criteria->compare('id_compania',$this->id_compania);
		$criteria->compare('id_comuna',$this->id_comuna,true);
		//$criteria->compare('id_solicitud',$this->id_solicitud);
		$criteria->compare('rut',$this->rut,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('ap_paterno',$this->ap_paterno,true);
		$criteria->compare('ap_materno',$this->ap_materno,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('estado_civil',$this->estado_civil,true);
		$criteria->compare('profesion',$this->profesion,true);
		$criteria->compare('g_sanguineo',$this->g_sanguineo,true);
		$criteria->compare('s_militar',$this->s_militar,true);
		$criteria->compare('fono_fijo',$this->fono_fijo,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('patrocinador',$this->patrocinador,true);
		$criteria->compare('fecha_in',$this->fecha_in,true);
		$criteria->compare('fecha_r_in',$this->fecha_r_in,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HojaDeVida the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
