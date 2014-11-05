<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
        private $id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		/*$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;*/
            /*$conexion = Yii::app()->db;
            
            $consulta1 = "SELECT email, pass FROM cuenta_postulante ";
            $consulta1 .= "WHERE email='".$this->username."' AND ";
            $consulta1 .= "pass='".$this->password."'";
            
            $resultado1 = $conexion->createCommand($consulta1)->query();
            
            $resultado1->bindColumn(1, $this->username);
            $resultado1->bindColumn(2, $this->password);
            
            $consulta2 = "SELECT login, pass FROM cuenta_compania ";
            $consulta2 .= "WHERE login='".$this->username."' AND ";
            $consulta2 .= "pass='".$this->password."'";
            
            $resultado2 = $conexion->createCommand($consulta2)->query();
            
            $resultado2->bindColumn(1, $this->username);
            $resultado2->bindColumn(2, $this->password);
            
            while($resultado1->read()!==false||$resultado2->read()!==false){
                $this->errorCode = self::ERROR_NONE;
                return !$this->errorCode;
            }*/
            $record=  Usuario::model()->findByAttributes(array('login'=>$this->username));
            if($record===null)
                $this->errorCode=self::ERROR_USERNAME_INVALID;
            else if($record->pass!==$this->password)
                $this->errorCode=self::ERROR_PASSWORD_INVALID;
            else
            {
                $this->id=$record->id_usuario;
                $this->setState('roles', $record->tipo);            
                $this->errorCode=self::ERROR_NONE;
            }
            return !$this->errorCode;
        }
        
        public function getId(){
        return $this->id;
    }
}