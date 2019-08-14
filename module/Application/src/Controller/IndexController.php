<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\View\Model\ViewModel;

class IndexController extends AbstractController {
    public function __construct(){
         $this->form = '';
         $this->service = '';
         $this->entity = null;
        $this->controller = IndexController::class;
        $this->route = 'applicaton/default';
    }
    
    public function indexAction(){
		echo 		'estou aqui';
        return new ViewModel(array('controller'=> $this));
    }
	
	public function salvarAction(){
        $this->action = 'index';
        $request = $this->getRequest();
        $pedido = new \Application\Entity\Pedido();
        if ($request->isGet()){
            $pedidos = array(
                        array(
                            'data_cadastro' => \Application\Utils\UtilData::getFormatToString(\Application\Utils\UtilData::getNow()),
                            'vlunit_pedit' => 1,
                        ),
                        array(
                            'data_cadastro' => \Application\Utils\UtilData::getFormatToString(\Application\Utils\UtilData::getNow()),
                            'vlunit_pedit' => 2,
                        ),
            );        
            $pedido = array(
                    'id' => 0,
                    'docto' => '1',
                    'serie' => '1',
                    'data_cadastro' => \Application\Utils\UtilData::getFormatToString(\Application\Utils\UtilData::getNow()),
                    'valor' => 0,
                    'pedidosItem' => $pedidos,
            );
            if ($pedido){
                try {
                    $this->getEm()->getConnection()->setNestTransactionsWithSavepoints(true);
                    $this->getEm()->beginTransaction();
                    $salvarPedidoService = new \Application\Service\Vendas\Pedido\SalvarPedidoService($this->getEm());
                    $pedido = $salvarPedidoService->save($pedido);
                    $this->getEm()->commit();
                } catch (\Exception $exc) {
                        $this->getEm()->rollback();
                        echo $exc->getMessage();
                }
            }
        }
        echo \Zend\Json\Json::encode(array('cod_ped' => $pedido->getId()));
        die;
	}

}
