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

class PedidoItService extends AbstractService{
    public function __construct(EntityManager $em) {
        parent::__construct($em);
        $this->entity = Pedidoit::class;
    }
    
    public function listaPorPedidoId(int $pedidoId){
        return $this->em->getRepository($this->entity)->listPorPedidoId($pedidoId);
    }
    
    public function findItensPedido(string $idPedido){
        return $this->em->getRepository($this->entity)->findByPedidoId($idPedido);
    }
    
    public function alterarTecnicoCascade(int $pedidoId, int $tecnicoId){
        return $this->em->getRepository($this->entity)->updateTecnicoCascade($pedidoId, $tecnicoId);
    }
}
