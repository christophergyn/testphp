<?php
namespace Application\Form;

use Application\Utils\UtilFormat;
use Doctrine\Common\Persistence\ObjectManager;
use Zend\Form\Form;

class AbstractForm extends Form{
    protected $objectManager;

    protected $botoes;

    protected $action;
    protected $btnSalvar;
    protected $btnExcluir;
    protected $btnListar;
    protected $btnLocalizar;
    protected $btnPesquisar;
    protected $btnLimpar;
    protected $btnVoltar;

    const SALVAR = 'Salvar';
    const EDITAR =   'Editar';
    const EXCLUIR = 'Excluir';
    const LISTAR = 'Listar';
    const LOCALIZAR = 'Localizar';
    const LIMPAR = 'Limpar';
    const VOLTAR = 'Voltar';
    const PESQUISAR = 'Pesquisar';

    /**
     * 
     * @param string $btnAction
     * @return AbstractForm
     */
    public function setAction($action)    {
            $this->action = $action;

            return $this;
    }

    /**
     * Get btnAction
     *
     * @return string
     */
    public function getAction() {
        return $this->action;
    }

    /**
     * 
     * @param string $btnSalvar
     * @return AbstractForm
     */
    public function setbtnSalvar($btnSalvar)    {
            $this->btnSalvar = $btnSalvar;

            return $this;
    }

    /**
     * Get btnSalvar
     *
     * @return string
     */
    public function getbtnSalvar()    {
            return $this->btnSalvar;
    }

    /**
     * 
     * @param string $btnLimpar
     * @return AbstractForm
     */
    public function setbtnLimpar($btnLimpar)    {
            $this->btnLimpar = $btnLimpar;

            return $this;
    }

    /**
     * Get btnLimpar
     *
     * @return string
     */
    public function getbtnLimpar()    {
            return $this->btnLimpar;
    }

    /**
     *
     * @param string $btnExcluir
     * @return AbstractForm
     */
    public function setbtnExcluir($btnExcluir)    {
            $this->btnExcluir = $btnExcluir;

            return $this;
    }

    /**
     * Get btnExcluir
     *
     * @return string
     */
    public function getbtnExcluir()    {
            return $this->btnExcluir;
    }

    /**
     * 
     * @param string $btnListar
     * @return AbstractForm
     */
    public function setbtnListar($btnListar)    {
            $this->btnListar = $btnListar;

            return $this;
    }

    /**
     * Get btnListar
     *
     * @return string
     */
    public function getbtnListar()    {
            return $this->btnListar;
    }

    /**
     *
     * @param string $btnVoltar
     * @return AbstractForm
     */
    public function setbtnVoltar($btnVoltar)    {
            $this->btnVoltar = $btnVoltar;

            return $this;
    }
	
    /**
     * Get btnVoltar
     *
     * @return string
     */
    public function getbtnVoltar()    {
            return $this->btnVoltar;
    }

    /**
     *
     * @param string $btnLocalizar
     * @return AbstractForm
     */
    public function setbtnLocalizar($btnLocalizar)    {
        $this->btnLocalizar = $btnLocalizar;

        return $this;
    }
	
    /**
     * Get btnLocalizar
     *
     * @return string
     */
    public function getbtnLocalizar()    {
        return $this->btnLocalizar;
    }

    /**
     *
     * @param string $btnPesquisar
     * @return AbstractForm
     */
    public function setbtnPesquisar($btnPesquisar)    {
        $this->btnPesquisar = $btnPesquisar;

        return $this;
    }
	
    /**
     * Get btnPesquisar
     *
     * @return string
     */
    public function getbtnPesquisar()    {
        return $this->btnPesquisar;
    }

    /**
     * Usado para construir um botão de listar, onde já possui classes padrões, 
     * não é obrigatório passar qualquer parametro
     * @param type $class
     * @param type $icon
     * @param type $label
     * @param type $id
     * @return type
     */
    public function buildButtonListar($class = 'btn btn-success', $icon = 'fa fa-list', $label = 'Listar', $id = 'btnListar'){
        return '<button type="submit" id="'.$id.'" class="'.$class.'" ><span class="'.$icon.'" aria-hidden="true"></span> '.$label.'</button>';
    }
    
    /**
     * Usado para construir um botão de imprimir, onde já possui classes padrões, 
     * não é obrigatório passar qualquer parametro
     * @param type $class
     * @param type $icon
     * @param type $label
     * @param type $id
     * @param type $type
     * @return type
     */
    public function buildButtonImprimir($class = 'btn btn-primary', $icon = 'fa fa-print', $label = 'Imprimir', $id = 'btnImprimir', $type = 'button'){
        return '<button type="'.$type.'" id="'.$id.'" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span> '.$label.'</button>';
    }
    
    /**
     * Usado para construir um botão de pdf, onde já possui classes padrões, 
     * não é obrigatório passar qualquer parametro
     * @param type $class
     * @param type $icon
     * @param type $label
     * @param type $id
     * @param type $type
     * @return type
     */
    public function buildButtonPDF($class = 'btn btn-warning', $icon = 'fa fa-file-pdf-o', $label = 'PDF', $id = 'btnPdf', $type = 'submit'){
        return '<button type="'.$type.'" id="'.$id.'" class="'.$class.'" onclick="$(\'#tipoImpressao\').val(\'pdf\');return true;"><span class="'.$icon.'" aria-hidden="true"></span> '.$label.'</button>';
    }

    /**
     * Usado para construir um conjunto de botões padrão para telas como cadastros
     * @param string $link
     * @param string $descricao
     *
     * @return string
     */
    public function buildAnchor($link, $descricao, $icon = 'fa fa-floppy-o'){
        $class = 'btn btn-success';
        switch ($descricao) {
            case AbstractForm::EXCLUIR: //-- Excluir
                    $class = 'btn btn-danger';
                    $icon = 'fa fa-trash';
                    break;
            case AbstractForm::LISTAR: //-- Listar
                    $class = 'btn btn-info';
                    $icon = 'fa fa-list';
                    break;
            case AbstractForm::VOLTAR: //-- Voltar
                    $class = 'btn btn-primary';
                    $icon = 'fa fa-arrow-left';
                    break;
            case AbstractForm::LOCALIZAR: //-- Localizar
                    $class = 'btn btn-dark';
                    $icon = 'fa fa-search';
                    break;
            case AbstractForm::LIMPAR: //-- Limpar
                    $class = 'btn btn-default';
                    $icon = 'fa fa-file';
                    break;
            case AbstractForm::PESQUISAR: //-- Localizar
                    $class = 'btn btn-warning';
                    $icon = 'fa fa-search';
                    break;
            default:
                    $class = 'btn btn-success';
                    break;
        }
        if ($descricao == AbstractForm::SALVAR) {
            return '<button type="submit" id="btnSalvar" class="'.$class.'" ><span class="'.$icon.'" aria-hidden="true"></span> '.$descricao.'</button>';
        } else if  ($descricao == AbstractForm::LIMPAR){		
            return '<button type="reset" id="btnLimpar" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span> '.$descricao.'</button>';
        } else if  ($descricao == AbstractForm::PESQUISAR){		
            return '<button type="button" id="btnPesquisar" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span> '.$descricao.'</button>';
        } else {
            return '<a href="'.$link.'" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span> '.$descricao.'</a>';
        }
    }
    
    /**
     * Usado para criar uma linha, onde poderá ser fechada a linha automaticamente, 
     * ou se o parametro for false, não será fechada a div
     * @param type $fechaDiv
     * @return type
     */
    public function getLine($fechaDiv = false){
        return '<div class="col-md-12 col-sm-12 col-xs-12"><div class="ln_solid"></div>'.($fechaDiv?'</div>':'');
    }
    
    /**
     * Usado para construir um label, que será incluso dentro do tag "H", padrão H3
     * 
     * @param type $texto
     * @param type $class
     * @param type $id
     * @param int $h
     * @return type
     */
    public function buildLabel($texto, $class = 'label label-warning', $id = '', int $h = 3){
        return $this->getH($h, '<label class="'.$class.'" '.($id ===''?$id:'id="'.$id.'"').'>'.$texto.'</label>');
    }

    /**
     * Criar os botões de salvar, editar, limpar entre outros.
     * 
     * @return string
     */
    public function getBotoes($isSalvar){

            $botoes = $this->getbtnVoltar();
            $botoes = $botoes.$this->getbtnSalvar();
            if ($isSalvar){ //-- Salvar
                $botoes = $botoes.$this->getbtnListar();
                $botoes = $botoes.$this->getbtnLimpar();
                $botoes = $botoes.$this->getbtnLocalizar();
                $botoes = $botoes.$this->getbtnPesquisar();
                $botoes = $botoes.$this->getbtnExcluir();
            } else { //-- Edição
                $botoes = $botoes.$this->getbtnExcluir();
            } //-- faltou o listar
            return self::getLine().$botoes.'</div>';
    }

    public function setBotoes($botao){
            $this->botoes = $botao;
    }

    /**
     * Set the object manager
     *
     * @param ObjectManager $objectManager
     */
    public function setObjectManager(ObjectManager $objectManager)
    {
            $this->objectManager = $objectManager;
    }

    /**
     * Get the object manager
     *
     * @return ObjectManager
     */
    public function getObjectManager()
    {
            return $this->objectManager;
    }

    /**
     * Método responsável por construir um campo em cima do outro com form-group
     * @param string $campo
     * @return type
     */       
    public function buildField(string $campo = ''){
        return '<div class="form-group"">'.$campo.'</div>';
    }

    /**
     * Usado para criar um checkbox, pois suas caracteristicas de layout são diferenciadas,
     * então deverá ser usado este método para construção do mesmo.
     * @param string $conteudo
     * @param type $posicaoColuna
     * @param type $posicaoLeft
     * @param type $id
     * @return type
     */
    public function buildFieldCheckbox(string $conteudo, $posicaoColuna = 12, $posicaoLeft = 0, $id = ''){
        return '<div '.($id == ''?'':'id="'.$id.'"').' class="col-md-'.$posicaoColuna.' col-sm-12 col-xs-12 '.
                (($posicaoLeft > 0)?'col-md-offset-'.$posicaoLeft.'">':' checkbox">').
                $conteudo.'</div>';
    }

    /**
     * Método usado para construir um layout de mesma linha ou seja, onde será permitido
     * a inclusão de inputs na mesma linha, e não um input por linha.
     * @param type $conteudo
     * @param type $posicaoColuna
     * @param type $posicaoLeft
     * @param type $idDiv
     * @return type
     */
    public function buildFieldInLine($conteudo, $posicaoColuna = 12, $posicaoLeft = 0, $idDiv = ''){
        return '<div '.($idDiv == ''?'':'id="'.$idDiv.'"').' class="col-md-'.$posicaoColuna.' col-sm-12 col-xs-12 '.
                (($posicaoLeft > 0)?'col-md-offset-'.$posicaoLeft.'">':' form-group">').
                $conteudo.'</div>';
    }

    public function buildFieldCadastro($nomeCadastro, $complemento){
        return '<span class="input-group-btn">'.
            '<a class="btn btn-default" href="#">'.$nomeCadastro.'</a>'.
            '</span>'.$complemento;
    }
    
    /**
     * Usado para construção do componente html button, onde poderá ser informado seu tipo
     * @param type $class
     * @param type $icon
     * @param type $descricao
     * @param type $id
     * @param type $type
     * @return type
     */
    public function buildButton($class, $icon, $descricao, $id = '', $type = 'button'){
        return '<button type="'.$type.'" '.($id == ''?'':'id="'.$id.'"').' class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span> '.$descricao.'</button>';
    }
    
    /**
     * Usado na construção de um botão de cadastro, onde será informado apenas o ID.
     * @param type $id
     * @return type
     */
    public function buildButtonCadastro($id){
        return $this->buildButton('btn btn-success', 'glyphicon glyphicon-plus', '', $id);
    }
    
    /**
     * Usado para criar um grupo de botões de cadastro e pesquisa, na mesma linha do input.
     * @param type $classCadastro
     * @param type $iconCadastro
     * @param type $idCadastro
     * @param type $classPesquisa
     * @param type $iconPesquisa
     * @param type $idPesquisa
     * @return type
     */
    public function buildGroupButtonCadastroPesquisa($classCadastro, $iconCadastro, $idCadastro, $classPesquisa, $iconPesquisa, $idPesquisa){
        return $this->abreGroupButton().
                $this->buildButton($classCadastro,$iconCadastro,'',$idCadastro).
                $this->buildButton($classPesquisa,$iconPesquisa,'',$idPesquisa).
                $this->fechaGroupButton();
    }
    
    /**
     *  Usado para criar um grupo de botões de cadastro, na mesma linha do input.
     * @param type $idCadastro
     * @param type $classCadastro
     * @param type $iconCadastro
     * @return type
     */
    public function buildGroupButtonCadastro($idCadastro, $classCadastro = 'btn btn-default', $iconCadastro = 'glyphicon glyphicon-plus'){
        return $this->abreGroupButton().
                $this->buildButton($classCadastro, $iconCadastro,'',$idCadastro).
                $this->fechaGroupButton();
    }

    /**
     *  Usado para criar um grupo de botões de pesquisa, na mesma linha do input.
     * @param type $idPesquisa
     * @param type $classPesquisa
     * @param type $iconPesquisa
     * @return type
     */
    public function buildDropdownButton($idPesquisa, $classPesquisa = 'btn btn-default', $iconPesquisa = 'fa fa-search'){
        return '';
        
        return $this->abreGroupButton().
                $this->buildButton($classPesquisa,$iconPesquisa,'',$idPesquisa).
                $this->fechaGroupButton();
    }

    /**
     * Cria um group-button com um botão de pesquisa e um botão/link para redirecionar a página
     * @param type $idPesquisa
     * @param type $urlRef
     * @param type $iconRef
     * @param type $classRef
     * @param type $classPesquisa
     * @param type $iconPesquisa
     * @return type
     */
    public function buildGroupButtonPesquisaECadastroLink($idPesquisa, $urlRef, $iconRef, $classRef = 'btn btn-default', $classPesquisa = 'btn btn-default', $iconPesquisa = 'fa fa-search', $title = ''){
        return $this->abreGroupButton().
                $this->buildButton($classPesquisa, $iconPesquisa, '', $idPesquisa).
                $this->buildLink($urlRef, $iconRef, $classRef, $title).
                $this->fechaGroupButton();
    }
    
    /**
     * Cria um group-button com um botão/link para redirecionar a página
     * @param type $urlRef
     * @param type $iconRef
     * @param type $classRef
     * @return type
     */
    public function buildGroupButtonCadastroLink($urlRef, $iconRef = 'glyphicon glyphicon-plus', $classRef = 'btn btn-default'){
        return $this->abreGroupButton().
                $this->buildLink($urlRef, $iconRef, $classRef).
                $this->fechaGroupButton();
    }
    
    public function buildLink($urlRef, $iconRef, $classRef, $title = '', $newTab = '_blank'){
        return '<a target="'.$newTab.'" href="'.$urlRef.'" class="'.$classRef.'" '.($title !== '' ? 'title="'.$title.'"' : '').'><span class="'.$iconRef.'" aria-hidden="true"></span></a>';
    }

    /**
     *  Usado para criar um grupo de botões de pesquisa, na mesma linha do input.
     * @param type $idPesquisa
     * @param type $classPesquisa
     * @param type $iconPesquisa
     * @return type
     */
    public function buildGroupButtonPesquisa($idPesquisa, $classPesquisa = 'btn btn-default', $iconPesquisa = 'fa fa-search'){
        return $this->abreGroupButton().
                $this->buildButton($classPesquisa,$iconPesquisa,'',$idPesquisa).
                $this->fechaGroupButton();
    }

    /**
     * cria drop down do tipo botão com links
     * @param type $itensArray
     * @param type $descricao
     * @param type $btnClass
     * @return type
     */
    public function dropdownButtonItens($itensArray = array(), $target = '_blank', $descricao = '', $btnClass = ''){
        if(isset($itensArray) && count($itensArray) > 0){
            if($descricao == '' && $btnClass == ''){
                $retorno = $this->abreDropdownButton();
            }else if($descricao != '' && $btnClass != ''){
                $retorno = $this->abreDropdownButton($descricao, $btnClass);
            }else if($descricao != ''){
                $retorno = $this->abreDropdownButton($descricao);
            }else if($btnClass != ''){
                $retorno = $this->abreDropdownButton($btnClass);
            }

            foreach ($itensArray as $item){
                $retorno .= '<li role="presentation"><a role="menuitem" tabindex="-1" target="'.$target.'" href="'.$item['href'].'">'.$item['descricao'].'</a>
                        </li>';
            }
            return $retorno.'</ul></div>';
        }else{
            return '';
        }
    }

    /**
     * Abre uma tag de grupo de componentes
     * @param type $descricao
     * @param type $btnClass
     * @return type
     */
    public function abreDropdownButton($descricao = 'Opções ', $btnClass = 'btn btn-default'){
        //<button class="btn dropdown-toggle sr-only" id="dropdownMenu1"">
        return '<div class="dropdown"><button data-toggle="dropdown" class="'.$btnClass.' dropdown-toggle" type="button" aria-expanded="false">'
                .$descricao.'<span class="caret"></span></button><ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">';
    }

    /**
     * Abrir uma tag de grupo de componentes, para que possa ficar na mesma linha do input.
     * @return string
     */
    public function abreGroupButton(){
        return '<span class="input-group-btn">';
    }

    /**
     * Fechar uma tag de grupo de componentes, para que possa ficar na mesma linha do input.
     * @return string
     */
    public function fechaGroupButton(){
        return '</span>';
    }

    /**
     * Usado para criar uma tag de H, com o tamanho, texto, class e id de sua preferência.
     * @param string $number
     * @param string $texto
     * @param string $class
     * @param type $id
     * @return type
     */    
    public function getH(string $number, string $texto, string $class = '', $id = ''){
        return '<h'.$number.' '.($class === ''?$class:'class="'.$class.'"').
                ($id === ''?$id:'id="'.$id.'"').'>'.
                $texto.'</h'.$number.'>';
    }
    
    /**
     * Usado para abrir um painel, onde permite o agrupamento de informações
     * @param type $id
     * @return type
     */
    public function abrePanel($id = ''){
        return '<div '.($id != ''?'id="'.$id.'"':'').'class="panel panel-default" ><div class="panel-body">';
    }
    
    /**
     *  Usado para fechar um painel, onde permite o agrupamento de informações
     * @return string
     */
    public function fechaPanel(){
        return '</div></div>';
    }
    
    public function buildCanvas($altura = 0, $lagura = 0, $id = ''){
        return '<canvas '.($id != ''?' id ="'.$id.'" ':'').' height="'.$altura.'" width="'.$lagura.'"></canvas>';
    }
    
    
    public function buildFieldInLineInputPesquisa($posicaoColuna, $posicaoLeft, $idDiv, $placeholder = '', $id = '', $idButton = ''){
        $conteudo = '<div class="input-group"><input type="number" '.($id != ''?' id ="'.$id.'" ':'').' class="form-control" '.($placeholder != ''?' placeholder="'.$placeholder.'" ':'').'>'.
                        '<span class="input-group-btn">'.
                            '<button class="btn btn-default fa fa-search" type="button" '.($idButton != ''?' id ="'.$idButton.'" ':'').'></button>'.
                        '</span>'.
                    '</div>';

        return '<div class="title_right">'.$this->buildFieldInLine($conteudo, $posicaoColuna, $posicaoLeft, $idDiv).'</div>';
    }

    /**
     * 
     * @param string $link
     * @param string $descricao
     *
     * @return string
     */
    public function buildAnchorComClass($link, $descricao, $class = 'btn btn-success',$icon = 'fa fa-floppy-o'){
        switch ($descricao) {
            case AbstractForm::EXCLUIR: //-- Excluir
                    $class = 'btn btn-danger';
                    $icon = 'fa fa-trash';
                    break;
            case AbstractForm::LISTAR: //-- Listar
                    $class = 'btn btn-info';
                    $icon = 'fa fa-list';
                    break;
            case AbstractForm::VOLTAR: //-- Voltar
                    $class = 'btn btn-primary';
                    $icon = 'fa fa-arrow-left';
                    break;
            case AbstractForm::LOCALIZAR: //-- Localizar
                    $class = 'fa fa-search';
                    $icon = 'fa fa-search';
                    break;
            case AbstractForm::LIMPAR: //-- Limpar
                    $class = 'btn btn-default';
                    $icon = 'fa fa-refresh';
                    break;
            case AbstractForm::PESQUISAR: //-- Localizar
                    $class = 'btn btn-warning';
                    $icon = 'fa fa-search';
                    break;
            default:
//                    $class = 'btn btn-success';
                    break;
        }
        if ($descricao == AbstractForm::SALVAR) {
            return '<button type="submit" id="btnSalvar" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span> '.$descricao.'</button>';
        } else if  ($descricao == AbstractForm::LIMPAR){		
            return '<button type="reset" id="btnLimpar" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span> '.$descricao.'</button>';
        } else if  ($descricao == AbstractForm::PESQUISAR){		
            return '<button type="button" id="btnPesquisar" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span> '.$descricao.'</button>';
        } else {
            return '<a href="'.$link.'" class="'.$class.'"><span class="'.$icon.'" aria-hidden="true"></span> '.$descricao.'</a>';
        }
    }
    
    /**
     * Usado para formatar moeda conforme parametros passados
     * @param float $valor
     * @param int $decimais
     * @param type $arredondar
     * @return type
     */
    public function formatMoeda(float $valor, int $decimais, $arredondar = false){
        return UtilFormat::formatValue($valor, $decimais, $arredondar);
    }    
}