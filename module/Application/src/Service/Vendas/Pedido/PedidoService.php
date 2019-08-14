<?php

/**
 * Responsavel por todos os serviços do vendedor e técnico
 *
 * @author Tony
 */

namespace Application\Service\Vendas\Pedido;

use Application\Entity\Pedido;
use Application\Service\AbstractService;
use Doctrine\ORM\EntityManager;

class PedidoService extends AbstractService {

    public function __construct(EntityManager $em) {
        parent::__construct($em);
        $this->entity = Pedido::class;
    }

    /**
     * 
     * @param string $dataInicio
     * @param string $dataFim
     * @return array
     */
    public function listaPedidoPorPeriodoDeEmissao(string $dataInicio, string $dataFim) {
        return $this->em->getRepository($this->entity)->listPedidoPorPeriodoDeEmissao($dataInicio, $dataFim);
    }

    /**
     * 
     * @param string $dataInicio
     * @param string $dataFim
     * @return array
     */
    public function listaPedidoPorPeriodoDeBaixa(string $dataInicio, string $dataFim) {
        return $this->em->getRepository($this->entity)->listPedidoPorPeriodoDeBaixa($dataInicio, $dataFim);
    }

    /**
     * 
     * @param string $dataInicio
     * @param string $dataFim
     * @return array
     */
    public function listaVendasPorPeriodoDeEmissao(string $dataInicio, string $dataFim) {
        return $this->em->getRepository($this->entity)->listVendasPorPeriodoDeEmissao($dataInicio, $dataFim);
    }

    /**
     * 
     * @param string $dataInicio
     * @param string $dataFim
     * @return array
     */
    public function listaVendasPorPeriodoDeBaixa(string $dataInicio, string $dataFim) {
        return $this->em->getRepository($this->entity)->listVendasPorPeriodoDeBaixa($dataInicio, $dataFim);
    }

    /**
     * Pegar o proximo pedido a ser salvo
     * @return int
     */
    public function getProximoPedido() {
        return $this->getNumeroUltimoPedido() + 1;
    }

    /**
     * Pegar o último pedido salvo
     * @return Pedido
     */
    public function getUltimoPedido() {
        return $this->em->getRepository($this->entity)->findUltimoPedido();
    }
    
    /**
     * Pegar o número do último pedido salvo
     * @return int
     */
    public function getNumeroUltimoPedido() {
        $pedidoId = $this->em->getRepository($this->entity)->findUltimoPedido();
        if ($pedidoId) {
            return $pedidoId->getCodPed() + 1;
        }
        return 1;
    }

    public function alterarClienteCondPagamentoVendedor(int $pedidoId, int $clienteId, int $vendedorId, int $condpagtoId) {
        return $this->em->getRepository($this->entity)->updateClienteCondPagamentoVendedor($pedidoId, $clienteId, $vendedorId, $condpagtoId);
    }
}
