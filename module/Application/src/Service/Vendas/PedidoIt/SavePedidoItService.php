<?php

/**
 * Responsavel por todos os serviços do vendedor e técnico
 *
 * @author Tony
 */

namespace Application\Service\Vendas\PedidoIt;

use Application\Entity\Pedidoit;
use Application\Service\AbstractService;
use Doctrine\ORM\EntityManager;
use Exception;

class SavePedidoItService extends AbstractService {

    protected $pedidoItem;
    protected $totalItem;

    public function __construct(EntityManager $em) {
        parent::__construct($em);
        $this->entity = Pedidoit::class;
    }

    public function save(array $data = array()) {
        $this->dados = $data;

        $this->isValidBusiness(); //Valida dados da classe
        $this->setValue(); //Seta valores para o objeto estoqmov e valida
        
        $this->pedidoItem = parent::save($this->dados); //insere PedidoIt

        return $this->pedidoItem;
    }

    private function isValidBusiness() {
        if (!$this->dados['pedido'] || $this->dados['pedido']->getId() <= 0) {
            throw new Exception('Pedido deve ser maior que zero ! Classe ' . self::class . '.');
        }
        if (!$this->dados['vlunit_pedit'] || $this->dados['vlunit_pedit'] <= 0) {
            throw new Exception('Valor Unitário deve ser maior que zero ! Classe ' . self::class . '.');
        }
    }

    private function setValue() {    }

}
