<?php
namespace Application\Utils;

use Application\Form\AbstractForm;
class ComponentesForm {
	protected $botoes;
	protected $btnSalvar;
	protected $btnExcluir;
	protected $btnListar;
	protected $btnLocalizar;
	protected $btnLimpar;
	protected $btnVoltar;
	protected $btnEditar;
	
	const SALVAR = 'Salvar';
	const EXCLUIR = 'Excluir';
	const LISTAR = 'Listar';
	const LOCALIZAR = 'Localizar';
	const LIMPAR = 'Limpar';
	const VOLTAR = 'Voltar';
	
	/**
	 *
	 * @param string $btnSalvar
	 * @return AbstractForm
	 */
	public function setbtnSalvar($btnSalvar)
	{
		$this->btnSalvar = $btnSalvar;
	
		return $this;
	}
	
	/**
	 * Get btnSalvar
	 *
	 * @return string
	 */
	public function getbtnSalvar()
	{
		return $this->btnSalvar;
	}
	
	/**
	 *
	 * @param string $btnLimpar
	 * @return AbstractForm
	 */
	public function setbtnLimpar($btnLimpar)
	{
		$this->btnLimpar = $btnLimpar;
	
		return $this;
	}
	
	/**
	 * Get btnLimpar
	 *
	 * @return string
	 */
	public function getbtnLimpar()
	{
		return $this->btnLimpar;
	}
	
	
	/**
	 *
	 * @param string $btnListar
	 * @return AbstractForm
	 */
	public function setbtnListar($btnListar)
	{
		$this->btnListar = $btnListar;
	
		return $this;
	}
	
	/**
	 * Get btnListar
	 *
	 * @return string
	 */
	public function getbtnListar()
	{
		return $this->btnListar;
	}
	
	/**
	 *
	 * @param string $btnLocalizar
	 * @return AbstractForm
	 */
	public function setbtnLocalizar($btnLocalizar)
	{
		$this->btnLocalizar = $btnLocalizar;
	
		return $this;
	}
	
	/**
	 * Get btnLocalizar
	 *
	 * @return string
	 */
	public function getbtnLocalizar()
	{
		return $this->btnLocalizar;
	}
	
	/**
	 *
	 * @param string $btnVoltar
	 * @return AbstractForm
	 */
	public function setbtnVoltar($btnVoltar)
	{
		$this->btnVoltar = $btnVoltar;
	
		return $this;
	}
	
	/**
	 * Get btnVoltar
	 *
	 * @return string
	 */
	public function getbtnVoltar()
	{
		return $this->btnVoltar;
	}
	
	/**
	 *
	 * @param string $btnEditar
	 * @return AbstractForm
	 */
	private function setbtnEditar($btnEditar)
	{
		$this->btnEditar = $btnEditar;
	
		return $this;
	}
	
	/**
	 * Get btnEditar
	 *
	 * @return string
	 */
	public function getbtnEditar($url = '')
	{
 		return '<a href="'.$url.'" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
	}
	
	/**
	 *
	 * @param string $btnExcluir
	 * @return AbstractForm
	 */
	private function setbtnExcluir($btnExcluir)
	{
		$this->btnExcluir = $btnExcluir;
	
		return $this;
	}
	
	/**
	 * Get btnExcluir
	 *
	 * @return string
	 */
	public function getbtnExcluir($url = '')
	{
 		return '<a href="'.$url.'" class="btn btn-danger"><span class="fa fa-trash" aria-hidden="true"></span></a>';
	}
	
	/**
	 * Get btnExcluir
	 *
	 * @return string
	 */
	public function getbtnSalvarGrid($url = '')
	{
 		return $this->buildBotaoGrid($url, AbstractForm::SALVAR)->getbtnSalvar();
	}
	
	/**
	 *
	 * @param string $link
	 * @param string $descricao
	 *
	 * @return string
	 */
	public function buildBotaoCadastro($link, $descricao){
		$class = 'btn btn-success';
		$icon = 'fa fa-floppy-o';
		switch ($descricao) {
			case AbstractForm::EXCLUIR: //-- Excluir
				$class = 'btn btn-danger';
				$icon = 'fa fa-trash';
				$this->setbtnExcluir('<a href="'.$link.'" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span> '.$descricao.'</a>');
				break;
			case AbstractForm::LISTAR: //-- Listar
				$class = 'btn btn-info';
				$icon = 'fa fa-list';
				$this->setbtnListar('<a href="'.$link.'" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span> '.$descricao.'</a>');
				break;
			case AbstractForm::VOLTAR: //-- Voltar
				$class = 'btn btn-primary';
				$icon = 'fa fa-arrow-left';
				$this->setbtnVoltar('<a href="'.$link.'" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span> '.$descricao.'</a>');
				break;
			case AbstractForm::LOCALIZAR: //-- Localizar
				$class = 'fa fa-search';
				$icon = 'fa fa-search';
				$this->setbtnLocalizar('<a href="'.$link.'" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span> '.$descricao.'</a>');
				break;
			case AbstractForm::LIMPAR: //-- Limpar
				$class = 'btn btn-default';
				$icon = 'fa fa-refresh';
				$this->setbtnLimpar('<button type="reset" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span> '.$descricao.'</button>');
				break;
			default:
				$class = 'btn btn-success';
				$icon = 'fa fa-floppy-o';
				$this->setbtnSalvar('<button type="submit" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span> '.$descricao.'</button>');
				break;
		}
		
		return $this;
	}
	
	/**
	 *
	 * @param string $link
	 * @param string $descricao
	 *
	 * @return string
	 */
	public function buildBotaoGrid($link, $tipo){
		$class = 'btn btn-success';
		$icon = 'fa fa-floppy-o';
		switch ($tipo) {
			case AbstractForm::EXCLUIR: //-- Excluir
				$class = 'btn btn-danger';
				$icon = 'fa fa-trash';
				$this->setbtnExcluir('<a href="#" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span></a>');
				break;
			case AbstractForm::EDITAR: //-- Editar
				$class = 'btn btn-success';
				$icon = 'glyphicon glyphicon-pencil';
				$this->setbtnEditar('<a href="#" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span></a>');
				break;
			case AbstractForm::LISTAR: //-- Listar
				$class = 'btn btn-info';
				$icon = 'fa fa-list';
				$this->setbtnListar('<a href="'.$link.'" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span></a>');
				break;
			case AbstractForm::VOLTAR: //-- Voltar
				$class = 'btn btn-primary';
				$icon = 'fa fa-arrow-left';
				$this->setbtnVoltar('<a href="'.$link.'" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span></a>');
				break;
			case AbstractForm::LOCALIZAR: //-- Localizar
				$class = 'fa fa-search';
				$icon = 'fa fa-search';
				$this->setbtnLocalizar('<a href="'.$link.'" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span></a>');
				break;
			case AbstractForm::LIMPAR: //-- Limpar
				$class = 'btn btn-default';
				$icon = 'fa fa-refresh';
				$this->setbtnLimpar('<button type="reset" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span></button>');
				break;
			default:
				$class = 'btn btn-success';
				$icon = 'fa fa-floppy-o';
				$this->setbtnSalvar('<a href="'.$link.'" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span></a>');
				//$this->setbtnSalvar('<button type="submit" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span></button>');
				break;
		}
		
		return $this;
	}
	
	/**
	 * Criar os botões de salvar e editar
	 *
	 * @return string
	 */
	public function getBotoesCadastro($salvar){
	
		$botoes = $this->getbtnVoltar();
		$botoes = $botoes.$this->getbtnSalvar();
		if ($salvar){ //-- Salvar
			$botoes = $botoes.$this->getbtnListar();
			$botoes = $botoes.$this->getbtnLimpar();
		} else { //-- Edição
			$botoes = $botoes.$this->getbtnExcluir();
		} //-- faltou o listar
		return $botoes;
	}

	/**
	 * Retorna os botões para grid
	 * 
	 * @return string
	 */
	public function getBotoesGrid(){
		$botoes = $this->getbtnExcluir()->btnExcluir;
		$botoes = $botoes.$this->getbtnEditar()->btnEditar;
		$botoes = $botoes.$this->getbtnVoltar();
		return $botoes;
	}
	
	public function getBotoes(){
		return $this->botoes;
	}

	public function setBotoes($botao){
		$this->botoes = $this->botoes.$botao;
	}
	
	public function emptyBotao(){
		$this->botoes = '';
	}
	
}