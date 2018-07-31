<?php
class Validacao{
	
	public static function testarNome($val){
		$exp='/^[a-zA-ZáÁéÉíÍóÓúÚçÇãõÃÕ]{2,20}$/';
		if(preg_match($exp,$val)){
			return true;
		}else{
			return false;
		}//fecha else
	}//fecha método
	
	public static function testarEmail($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL) ){
			return true;
		}else{
			return false;
		}//fecha else
	}//fecha método
	
	public static function testarTelefone($val){
		$exp='/^[0-9]{8,12}$/';
		if(preg_match($exp,$val)){
			return true;
		}else{
			return false;
		}//fecha else
	}//fecha método	
}//fecha classe
?>