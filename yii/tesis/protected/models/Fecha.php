<?php
class ReporteAtenciones extends CActiveRecord
{
        public $inicio;
        public $fin;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'atencion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('inicio, fin', 'required'),
                        array('inicio','validaFecha'),
		);
	}
        
        public function validaFecha(){
            if($this->inicio > $this->fin){
                $this->addError('inicio', 'La fecha de inicio no puede ser mayor a la fecha de termino.');
            }
        }

	public function attributeLabels()
	{
		return array(
			'inicio' => 'Inicio',
                        'fin' => 'Fin',
		);
	}
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
?>