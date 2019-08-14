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
use Exception;

class SalvarPedidoService extends AbstractService{
    protected $pedido;
    protected $pedidoOrigem;
    protected $pedidoIt;
    protected $pedidoitComplemento;
    
    public function __construct(EntityManager $em) {
        parent::__construct($em);
        $this->entity = Pedido::class;
    }
    
    public function save(array $data = array()) {
        $this->dados = $data;
        $this->isValidBusiness();
        $this->setValue();
        
        $this->pedido = $this->salvarPedido();
        
        return $this->pedido;
    }
    
    public function isValidBusiness(){
    }

    public function setValue(){
//        $this->pedidoitComplemento = array(
//            'dataCadastro' => $this->dados['dataEmissao'],
//            'quantidade' => $pedidoIt->getQtdPedit(),
//            'valor' => $this->dados['vlunit_pedit'],
//            'vao' => 0,
//            'carga' => 0,
//            'revestimento' => 0,
//            'fck' => 0,
//            'alvenaria' => 0,
//            'beta' => 0,
//            'espessura' => 0,
//            'parede' => 0,
//            'enchimento' => 0,
//            'status' => \Application\Utils\UtilConstantes::ATIVO_SIGLA,
//            'desconto' => 0,
//            'acrescimo' => 0,
//            'quantidadeFaturada' => 0,
//            'pavimentoId' => 0,
//            'pedidoit' => 0,
//            'produtoComplementoId' => $this->dados['produtoComplementoId'],
//        );
//        
//        $this->pedidoIt = array(
//            'qtd_pedit' => $pedidoIt->getQtdPedit(),
//            'vlunit_pedit' => $this->dados['vlunit_pedit'],
//            'vldesc_pedit' => 0,
//            'vlacrescimo_pedit' => 0,
//            'qtdconfere_pedit' => 0,
//            'vao_pedit' => 0,
//            'carga_pedit' => 0,
//            'revestimento_pedit' => 0,
//            'fck_pedit' => 0,
//            'alvenaria_pedit' => 0,
//            'enchimento_pedit' => 0,
//            'beta_pedit' => 0,
//            'pavimento_pedit' => 0,
//            'tipoLaje_pedit' => 0,
//            'espessura_pedit' => 0,
//            'parede_pedit' => 0,
//            'qtdFatura_pedit' => 0,
//            'indiceMarkup_pedit' => $this->calcularMarkup($this->dados['vlunit_pedit'], $pedidoIt->getCodProd()->getCustoProd()),
//            'bcicms_pedit' => 0,
//            'vlicms_pedit' => 0,
//            'aliqIcms_pedit' => 0,
//            'bcicmsst_pedit' => 0,
//            'vlicmsst_pedit' => 0,
//            'bcpis_pedit' => 0,
//            'vlpis_pedit' => 0,
//            'aliqPis_pedit' => 0,
//            'bccofins_pedit' => 0,
//            'vlcofins_pedit' => 0,
//            'aliqCofins_pedit' => 0,
//            'bcipi_pedit' => 0,
//            'vlipi_pedit' => 0,
//            'aliqIpi_pedit' => 0,
//            'observacao_pedit' => $pedidoIt->getObservacaoPedit(),
//            'vlunitTabela_pedit' => $pedidoIt->getCodProd()->getVlvendaProd(),
//            'vlunitTabelaA_pedit' => $pedidoIt->getCodProd()->getVlvendaatacProd(),
//            'nrPedidoCompra_pedit' => 0,
//            'nrItemCompra_pedit' => 0,
//            'frete_pedit' => 0,
//            'percDesconto_pedit' => 0,
//            'isVlliquido_pedit' => 0,
//            'cfopId' => $pedidoIt->getCfopPedit()->getCodCfop(),
//            'localId' => $pedidoIt->getCodLoc()->getCodLoc(),
//            'pedidoId' => 0,
//            'produtoId' => $pedidoIt->getCodProd()->getCodProd(),
//            'tecnicoId' => ($pedidoIt->getCodVend()?$pedidoIt->getCodVend()->getCodVend():$this->pedidoOrigem->getCodVend()->getCodVend()),
//            'motoristaId' => $this->dados['motoristaId'],
//            'pedidoitComplementos' => array($this->pedidoitComplemento),
//        );        
//        $this->pedido = array(
//            'cod_ped' => 0,
//            'docto_ped' => $servicePedido->getNumeroUltimoPedido(),
//            'serie_ped' => $this->pedidoOrigem->getSeriePed(),
//            'data_ped' => $this->dados['dataEmissao'],
//            'status_ped' => \Application\Utils\UtilConstantes::STATUS_DIGITADO,
//            'vltotal_ped' => $this->pedidoOrigem->getVltotalPed(),
//            'valor_ped' => $this->dados['vlunit_pedit'],
//            'vldesconto_ped' => 0,
//            'vljuros_ped' => 0,
//            'vlpago_ped' => 0,
//            'vlacrescimo_ped' => 0,
//            'dtentrega_ped' => $this->dados['dataEntrega'],
//            'hrentrega_ped' => \Application\Utils\UtilData::getNowTime(),
//            'pacote_ped' => $this->pedidoOrigem->getPacotePed(),
//            'liberado_ped' => '',
//            'dtmovto_ped' => $this->dados['dataEmissao'],
//            'tipo_ped' => $this->pedidoOrigem->getTipoPed(),
//            'confere_ped' => \Application\Utils\UtilConstantes::NAO,
//            'km_ped' => 0,
//            'nome_cliente_ped' => $this->pedidoOrigem->getNomeClientePed(),
//            'calcbase_ped' => 0,
//            'volume_ped' => 0,
//            'peso_ped' => 0, 
//            'obs_ped' => $this->pedidoOrigem->getObsPed(),
//            'hora_ped' => \Application\Utils\UtilData::getNowTime(),
//            'obs1_ped' => $this->pedidoOrigem->getObs1Ped(),
//            'obs2_ped' => $this->pedidoOrigem->getObs2Ped(),
//            'obs3_ped' => $this->pedidoOrigem->getObs3Ped(),
//            'obs4_ped' => $this->pedidoOrigem->getObs4Ped(),
//            'frete_ped' => 0,
//            'indice_markup_ped' => $this->calcularMarkup($this->dados['vlunit_pedit'], $pedidoIt->getCodProd()->getCustoProd()),
//            'bcicms_ped' => $this->pedidoOrigem->getBcicmsPed(),
//            'vlicms_ped' => $this->pedidoOrigem->getVlicmsPed(),
//            'aliqIcms_ped' => $this->pedidoOrigem->getAliqIcmsPed(),
//            'bcicmsst_ped' => $this->pedidoOrigem->getBcicmsstPed(),
//            'vlicmsst_ped' => $this->pedidoOrigem->getVlicmsstPed(),
//            'bcpis_ped' => $this->pedidoOrigem->getBcpisPed(),
//            'vlpis_ped' => $this->pedidoOrigem->getVlpisPed(),
//            'aliq_pis_ped' => $this->pedidoOrigem->getAliqPisPed(),
//            'bccofins_ped' => $this->pedidoOrigem->getBccofinsPed(),
//            'vlcofins_ped' => $this->pedidoOrigem->getVlcofinsPed(),
//            'aliq_cofins_ped' => $this->pedidoOrigem->getAliqCofinsPed(),
//            'bcipi_ped' => $this->pedidoOrigem->getBcipiPed(),
//            'vlipi_ped' => $this->pedidoOrigem->getVlipiPed(),
//            'aliqIpi_ped' => $this->pedidoOrigem->getAliqIpiPed(),
//            'data_migracao' => $this->dados['dataEmissao'],
//            'valor_tabela_ped' => $this->pedidoOrigem->getValorTabelaPed(),
//            'perc_desconto_ped' => 0,
//            'valor_entrada_ped' => 0,
//            'situacao_entrega_ped' => \Application\Utils\UtilConstantes::NAO,
//            'pedido_compra_ped' => 0,
//            'animalId' => 0,
//            'clienteId' => $this->pedidoOrigem->getCodClien()->getCodClien(),
//            'industriaId' => 0,
//            'lojaId' => 0,
//            'condpagtoId' => $this->pedidoOrigem->getCodCondpagto()->getCodCondpagto(),
//            'filialId' => $this->pedidoOrigem->getCodFil()->getCodFil(),
//            'enderecoId' => ($this->pedidoOrigem->getEndereco()?$this->pedidoOrigem->getEndereco()->getId():0),
//            'motoristaId' => $this->dados['motoristaId'],
//            'pedidoOrigemId' => $this->pedidoOrigem->getCodPed(),
//            'usuario' => $this->pedidoOrigem->getUsuario(),
//            'transportadoraId' => 0,
//            'veiculoId' => 0,
//            'vendedorId' => $this->pedidoOrigem->getCodVend()->getCodVend(),
//            'pedidosItem' => array($this->pedidoIt),
//        );
    }

    public function salvarPedido(){
        $savePedidoService = new SavePedidoService($this->getEm());
        return $savePedidoService->save($this->dados);
    }
  }
