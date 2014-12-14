<?php

class Consulta extends CActiveRecord {

    public $codigo;
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'elemento';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('codigo', 'required'),
        );
    }

    public function attributeLabels() {
        return array(
            'codigo' => 'Código',
        );
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}

?>