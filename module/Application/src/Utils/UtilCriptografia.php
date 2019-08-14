<?php
namespace Application\Utils;

use Zend\Crypt\Password\Apache;


class UtilCriptografia {
	protected $login;
	protected $senha;
	protected $confirmaSenha;
	protected $senhaCripto;
	const DIGEST_FORMAT = 'digest';	
	
	public function __construct($login, $senha, $confirmaSenha = ''){
		$this->login = $login;
		$this->senha = $senha;
		$this->confirmaSenha = $confirmaSenha;
	}

	/**
	 * Retorna verdadeiro se as senhas depois de criptografadas são iguais
	 * 
	 * @param string $login
	 * @param string $senha1
	 * @param string $senha2
	 * @return boolean
	 */
	public function compararSenha($login, $senha1, $senha2){
		$senha1 = $this->criptografa($login, $senha1);
		$senha2	= $this->criptografa($login, $senha2);
		
		return ($senha1 == $senha2);
	}
	
	/**
	 * Criptografa uma senha apartir do login
	 * @param string $login
	 * @param string $senha
	 * @return string
	 */
	public function criptografa($login, $senha){
		$cripto = new Apache();
		$cripto->setFormat(UtilCriptografia::DIGEST_FORMAT);
		$cripto->setUserName($login);
		$cripto->setAuthName($login);
		
		return $cripto->create($senha);
	}
	
	/**
	 * Pegar valor de Senha 
	 */
	public function getSenhaCripto(){
//		echo $this->criptografa($this->getLogin(), $this->getSenha());die;
		return $this->criptografa($this->getLogin(), $this->getSenha());
	}

	/**
	 * 
	 * @param string $senhaCripto
	 * @return \Application\Utils\UtilCriptografia
	 */
	private function setSenhaCripto($senhaCripto){
		$this->senhaCripto = $senhaCripto;
		
		return $this;
	}
	
	/**
	 * Pegar valor de login 
	 */
	public function getLogin(){
		return $this->login;
	}

	/**
	 * 
	 * @param string $login
	 * @return \Application\Utils\UtilCriptografia
	 */
	private function setLogin($login){
		$this->login = $login;
		
		return $this;
	}

	/**
	 * Pegar valor de Senha 
	 */
	public function getSenha(){
		return $this->senha;
	}

	/**
	 * 
	 * @param string $senha
	 * @return \Application\Utils\UtilCriptografia
	 */
	private function setSenha($senha){
		$this->senha = $senha;
		
		return $this;
	}

	/**
	 * Pegar valor de confirmaSenha 
	 */
	public function getConfirmaSenha(){
		return $this->confirmaSenha;
	}

	/**
	 * 
	 * @param string $confirmaSenha
	 * @return \Application\Utils\UtilCriptografia
	 */
	private function setConfirmaSenha($confirmaSenha){
		$this->confirmaSenha = $confirmaSenha;
		
		return $this;
	}
}