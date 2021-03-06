<?php

class Filtro extends CActiveRecord {

    public $id_categoria;
    public $id_dependencia;
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'inventario';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id_categoria, id_dependencia', 'required'),
        );
    }

    public function attributeLabels() {
        return array(
            'id_categoria' => 'Categoria',
            'id_dependencia' => 'Dependencia',
        );
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}

?>