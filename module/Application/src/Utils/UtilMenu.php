<?php
namespace Application\Utils;

class UtilMenu {
    public static $conexao;
    public function __construct(\Doctrine\ORM\EntityManager $em){
        $this->conexao = $em;
    }
    
    public static function getMenuPorUsuario($userId){
//        $serviceMenu = new \Application\Service\Seguranca\Menu\MenuService($this->conexao);
//        $listaDeMenus = $serviceMenu->listaMenuPorUsuario($userId);
        return self::getMenuAdmin();
    }
    
    public static function montaMenu($controller, $listaMenus){
        $menu = '';
        foreach ($listaMenus as $menus){
            foreach ($menus as $keyMenu => $valueMenu){
                $menu .= self::montaModulo($controller, $keyMenu, $valueMenu, self::getMenuIcone($keyMenu));
            }
        }
        return $menu;
    }
    
    private static function montaModulo($controller, $keyModulo, $valueModulo, $icone = ''){
        
        $modulo =   '<li><a>'.($icone === ''?'':'<i '.$icone.'></i>').$controller->translate($keyModulo).'<span class="fa fa-chevron-down"></span></a>'.
                    '<ul class="nav child_menu">';
        foreach ($valueModulo as $key => $value){
            $modulo .= self::montaItem($controller, $key, $value);
        }
        $modulo .= '</ul></li>';
        
        return $modulo;
    }
    
    private static function montaItem($controller, $key, $value){
        $menu = '';
        if (!is_array($value)) {
            $menu .= '<li class="sub_menu"><a href="'.$controller->url($key, array('action'=> 'index')).'">'.$controller->translate($value).'</a></li>';
        } else {
            $menu .= self::montaModulo($controller, $key, $value);
        }
        return $menu;
    }
    
    private static function getMenuIcone($key){
        switch ($key) {
            case 'Cadastros':return 'class="fa fa-cloud"';
            case 'Convênio':return 'class="fa fa-gears"';
            case 'Contratos':return 'class="fa fa-envelope"';
            case 'Oferta de Vaga':return 'class="fa fa-bookmark"';
            case 'Listagem':return 'class="fa fa-list"';
            case 'Consultas':return 'class="fa fa-search"';
            case 'Fechamento de Contas':return 'class="fa fa-calendar"';
            case 'Segurança':return 'class="fa fa-lock"';
            case 'RH':return 'class="fa fa-vcard"';
                
            default: return 'class="fa fa-cloud"';
        }
    }
    
    private static function getMenuAdmin(){
        return array(
            array('Cadastros' => 
                array(
                    'cadastro-cliente' =>'Cliente', // menus
                    'cadastro-cacamba' =>'Caçamba',
                    'cadastro-produto' =>'Produto',
                    'cadastro-vendedor' =>'Vendedor',
                    'cadastro-motorista' =>'Motorista',
                    'cadastro-veiculo' =>'Veículo',
                ),//Cadatros
            ),// Modulo
            array('Movimento' => 
                array(
                    'contrato' =>'Contrato', // menus
                    'historico-cacamba' =>'Histórico', // menus
                    'painel-cacamba' =>'Painel',
                    'estorno-locacao' =>'Estorno',
                    'alteracao-locacao' =>'Alteração de Contrato',
                ),// Convenio // sem submodulos
            ),// Módulo
            array('Consulta' => 
                array(
                    'consulta-locacao' =>'Locações', // menus
                ),// Consulta
            ),// Módulo
            array('Relatórios' => 
                array(
                    'Financeiro' => array(
                        'consulta-contrato' =>'Contratos',
                    ),
                    'Serviços' => array(
                        'relatorio-servicos-retiradas' =>'Serviços x Retirada',
                        'relatorio-situacao-cacamba' =>'Situação Caçamba',
                        'relatorio-por-endereco' =>'Serviços por Endereço',
                    ),
                ),// Contratos
            ),// Módulo
            array('Listagem' => 
                array(
                    'Cadastros' => array(
                        'lista-cliente' =>'Cliente', // menus
                        'lista-cacamba' =>'Caçamba', // menus
                        'lista-produto' =>'Produto', // menus
                        'lista-motorista' =>'Motorista', // menus
                        'lista-veiculo' =>'Veículo', // menus
                    ),//Curricular
                    'Movimento' => array(
                        'lista-servicos' =>'Serviços', // menus
                    ),//Curricular
                ),// Contratos
            ),// Módulo
            array('Segurança' => 
                array(
                    'altera-senha' =>'Alterar Senha',
                    'gerar-senha' =>'Gerar Senha',
                    'editar-usuario' =>'Editar',
                ),// Contratos
            ),// Módulo
        );
    }
}            
