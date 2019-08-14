<?php

/**
 * Responsavel por todos os serviços do vendedor e técnico
 *
 * @author Tony
 */

namespace Application\Service\Vendas\Pedido;

use Application\Entity\Pedido;
use Application\Service\AbstractService;
use Application\Service\Vendas\PedidoIt\SavePedidoItService;
use DateTime;
use Doctrine\ORM\EntityManager;

class SavePedidoService extends AbstractService {

    private $codPed;
    private $doctoPed;
    private $seriePed;
    private $dataPed;
    private $statusPed;
    private $vltotalPed;
    private $valorPed;
    private $vldescontoPed;
    private $vljurosPed;
    private $vlpagoPed;
    private $vlacrescimoPed;
    private $dtentregaPed;
    private $hrentregaPed;
    private $pacotePed;
    private $liberadoPed;
    private $dtmovtoPed;
    private $tipoPed;
    private $conferePed;
    private $kmPed;
    private $nomeClientePed;
    private $calcbasePed;
    private $volumePed;
    private $pesoPed;
    private $obsPed;
    private $horaPed;
    private $obs1Ped;
    private $obs2Ped;
    private $obs3Ped;
    private $obs4Ped;
    private $fretePed;
    private $indiceMarkupPed;
    private $bcicmsPed;
    private $vlicmsPed;
    private $aliqIcmsPed;
    private $bcicmsstPed;
    private $vlicmsstPed;
    private $bcpisPed;
    private $vlpisPed;
    private $aliqPisPed;
    private $bccofinsPed;
    private $vlcofinsPed;
    private $aliqCofinsPed;
    private $bcipiPed;
    private $vlipiPed;
    private $aliqIpiPed;
    private $dataMigracao;
    private $valorTabelaPed;
    private $percDescontoPed;
    private $valorEntradaPed;
    private $situacaoEntregaPed;
    private $pedidoCompraPed;
    private $animalId;
    private $clienteId;
    private $industriaId;
    private $lojaId;
    private $condpagtoId;
    private $filialId;
    private $enderecoId;
    private $motoristaId;
    private $pedidoOrigemId;
    private $transportadoraId;
    private $veiculoId;
    private $vendedorId;

    public function __construct(EntityManager $em) {
        parent::__construct($em);
        $this->entity = Pedido::class;
        $this->namePrimaryKey = 'cod_ped';
    }

    public function save(array $data = array()) {
        $this->dados = $data;
        $this->isValidBusiness();
        $this->setValue();
        $this->pedido = parent::save($this->dados); //insere Pedido
        $this->salvarItens();
        
        return $this->pedido;
    }

    private function isValidBusiness() {
    }

    private function setValue() {    }
    
    public function salvarItens() {
        if (isset($this->dados['pedidosItem']) && (sizeof($this->dados['pedidosItem']) > 0)) {
            $savePedidoItService = new SavePedidoItService($this->getEm());
            foreach ($this->dados['pedidosItem'] as $arrayPedidoIt){
                $arrayPedidoIt['pedido'] = $this->pedido;
                $savePedidoItService->save($arrayPedidoIt);
            }
        }
    }
    
    
    // sets e gets
    /**
     * Get codPed
     *
     * @return integer
     */
    public function getCodPed()
    {
        return $this->codPed;
    }

    /**
     * Set doctoPed
     *
     * @param string $doctoPed
     *
     * @return SavePedidoService
     */
    public function setDoctoPed($doctoPed)
    {
        $this->doctoPed = $doctoPed;

        return $this;
    }

    /**
     * Get doctoPed
     *
     * @return string
     */
    public function getDoctoPed()
    {
        return $this->doctoPed;
    }

    /**
     * Set seriePed
     *
     * @param string $seriePed
     *
     * @return SavePedidoService
     */
    public function setSeriePed($seriePed)
    {
        $this->seriePed = $seriePed;

        return $this;
    }

    /**
     * Get seriePed
     *
     * @return string
     */
    public function getSeriePed()
    {
        return $this->seriePed;
    }

    /**
     * Set dataPed
     *
     * @param DateTime $dataPed
     *
     * @return SavePedidoService
     */
    public function setDataPed($dataPed)
    {
        $this->dataPed = DateTime::createFromFormat("Y-m-d", $dataPed);
        return $this;
    }

    /**
     * Get dataPed
     *
     * @return DateTime
     */
    public function getDataPed()
    {
        if($this->dataPed){
            return $this->dataPed->format('Y-m-d');
        }
        return $this->dataPed;
    }

    /**
     * Set statusPed
     *
     * @param string $statusPed
     *
     * @return SavePedidoService
     */
    public function setStatusPed($statusPed)
    {
        $this->statusPed = $statusPed;

        return $this;
    }

    /**
     * Get statusPed
     *
     * @return string
     */
    public function getStatusPed()
    {
        return $this->statusPed;
    }

    /**
     * Set vltotalPed
     *
     * @param string $vltotalPed
     *
     * @return SavePedidoService
     */
    public function setVltotalPed($vltotalPed)
    {
        $this->vltotalPed = $vltotalPed;

        return $this;
    }

    /**
     * Get vltotalPed
     *
     * @return string
     */
    public function getVltotalPed()
    {
        return $this->vltotalPed;
    }

    /**
     * Set valorPed
     *
     * @param string $valorPed
     *
     * @return SavePedidoService
     */
    public function setValorPed($valorPed)
    {
        $this->valorPed = $valorPed;

        return $this;
    }

    /**
     * Get valorPed
     *
     * @return string
     */
    public function getValorPed()
    {
        return $this->valorPed;
    }

    /**
     * Set percDescontoPed
     *
     * @param string $percDescontoPed
     *
     * @return SavePedidoService
     */
    public function setPercDescontoPed($percDescontoPed)
    {
        $this->percDescontoPed = $percDescontoPed;

        return $this;
    }

    /**
     * Get percDescontoPed
     *
     * @return string
     */
    public function getPercDescontoPed()
    {
        return $this->percDescontoPed;
    }

    /**
     * Set valorEntradaPed
     *
     * @param string $valorEntradaPed
     *
     * @return SavePedidoService
     */
    public function setValorEntradaPed($valorEntradaPed)
    {
        $this->valorEntradaPed = $valorEntradaPed;

        return $this;
    }

    /**
     * Get valorEntradaPed
     *
     * @return string
     */
    public function getValorEntradaPed()
    {
        return $this->valorEntradaPed;
    }

    /**
     * Set vldescontoPed
     *
     * @param string $vldescontoPed
     *
     * @return SavePedidoService
     */
    public function setVldescontoPed($vldescontoPed)
    {
        $this->vldescontoPed = $vldescontoPed;

        return $this;
    }

    /**
     * Get vldescontoPed
     *
     * @return string
     */
    public function getVldescontoPed()
    {
        return $this->vldescontoPed;
    }

    /**
     * Set vljurosPed
     *
     * @param string $vljurosPed
     *
     * @return SavePedidoService
     */
    public function setVljurosPed($vljurosPed)
    {
        $this->vljurosPed = $vljurosPed;

        return $this;
    }

    /**
     * Get vljurosPed
     *
     * @return string
     */
    public function getVljurosPed()
    {
        return $this->vljurosPed;
    }

    /**
     * Set vlpagoPed
     *
     * @param string $vlpagoPed
     *
     * @return SavePedidoService
     */
    public function setVlpagoPed($vlpagoPed)
    {
        $this->vlpagoPed = $vlpagoPed;

        return $this;
    }

    /**
     * Get vlpagoPed
     *
     * @return string
     */
    public function getVlpagoPed()
    {
        return $this->vlpagoPed;
    }

    /**
     * Set vlacrescimoPed
     *
     * @param string $vlacrescimoPed
     *
     * @return SavePedidoService
     */
    public function setVlacrescimoPed($vlacrescimoPed)
    {
        $this->vlacrescimoPed = $vlacrescimoPed;

        return $this;
    }

    /**
     * Get vlacrescimoPed
     *
     * @return string
     */
    public function getVlacrescimoPed()
    {
        return $this->vlacrescimoPed;
    }

    /**
     * Set dtentregaPed
     *
     * @param DateTime $dtentregaPed
     *
     * @return SavePedidoService
     */
    public function setDtentregaPed($dtentregaPed)
    {
        $this->dtentregaPed = DateTime::createFromFormat("Y-m-d", $dtentregaPed);
        return $this;
    }

    /**
     * Get dtentregaPed
     *
     * @return DateTime
     */
    public function getDtentregaPed()
    {
        if($this->dtentregaPed){
            return $this->dtentregaPed->format('Y-m-d');
        }
        return $this->dtentregaPed;
    }

    /**
     * Set hrentregaPed
     *
     * @param DateTime $hrentregaPed
     *
     * @return SavePedidoService
     */
    public function setHrentregaPed($hrentregaPed)
    {
        $this->hrentregaPed = DateTime::createFromFormat("Y-m-d", $hrentregaPed);
        return $this;
    }

    /**
     * Get hrentregaPed
     *
     * @return DateTime
     */
    public function getHrentregaPed()
    {
        if($this->hrentregaPed){
            return $this->hrentregaPed->format('Y-m-d H-i-s');
        }
        return $this->hrentregaPed;
    }

    /**
     * Set pacotePed
     *
     * @param string $pacotePed
     *
     * @return SavePedidoService
     */
    public function setPacotePed($pacotePed)
    {
        $this->pacotePed = $pacotePed;

        return $this;
    }

    /**
     * Get pacotePed
     *
     * @return string
     */
    public function getPacotePed()
    {
        return $this->pacotePed;
    }

    /**
     * Set liberadoPed
     *
     * @param string $liberadoPed
     *
     * @return SavePedidoService
     */
    public function setLiberadoPed($liberadoPed)
    {
        $this->liberadoPed = $liberadoPed;

        return $this;
    }

    /**
     * Get liberadoPed
     *
     * @return string
     */
    public function getLiberadoPed()
    {
        return $this->liberadoPed;
    }

    /**
     * Set dtmovtoPed
     *
     * @param DateTime $dtmovtoPed
     *
     * @return SavePedidoService
     */
    public function setDtmovtoPed($dtmovtoPed)
    {
        $this->dtmovtoPed = DateTime::createFromFormat("Y-m-d", $dtmovtoPed);
        return $this;
    }

    /**
     * Get dtmovtoPed
     *
     * @return DateTime
     */
    public function getDtmovtoPed()
    {
        if($this->dtmovtoPed){
            return $this->dtmovtoPed->format('Y-m-d');
        }
        return $this->dtmovtoPed;
    }

    /**
     * Set tipoPed
     *
     * @param string $tipoPed
     *
     * @return SavePedidoService
     */
    public function setTipoPed($tipoPed)
    {
        $this->tipoPed = $tipoPed;

        return $this;
    }

    /**
     * Get tipoPed
     *
     * @return string
     */
    public function getTipoPed()
    {
        return $this->tipoPed;
    }

    /**
     * Set ddelete
     *
     * @param string $ddelete
     *
     * @return SavePedidoService
     */
    public function setDdelete($ddelete)
    {
        $this->ddelete = $ddelete;

        return $this;
    }

    /**
     * Get ddelete
     *
     * @return string
     */
    public function getDdelete()
    {
        return $this->ddelete;
    }

    /**
     * Set dinsert
     *
     * @param string $dinsert
     *
     * @return SavePedidoService
     */
    public function setDinsert($dinsert)
    {
        $this->dinsert = $dinsert;

        return $this;
    }

    /**
     * Get dinsert
     *
     * @return string
     */
    public function getDinsert()
    {
        return $this->dinsert;
    }

    /**
     * Set dupdate
     *
     * @param string $dupdate
     *
     * @return SavePedidoService
     */
    public function setDupdate($dupdate)
    {
        $this->dupdate = $dupdate;

        return $this;
    }

    /**
     * Get dupdate
     *
     * @return string
     */
    public function getDupdate()
    {
        return $this->dupdate;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return SavePedidoService
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set programa
     *
     * @param string $programa
     *
     * @return SavePedidoService
     */
    public function setPrograma($programa)
    {
        $this->programa = $programa;

        return $this;
    }

    /**
     * Get programa
     *
     * @return string
     */
    public function getPrograma()
    {
        return $this->programa;
    }

    /**
     * Set estacao
     *
     * @param string $estacao
     *
     * @return SavePedidoService
     */
    public function setEstacao($estacao)
    {
        $this->estacao = $estacao;

        return $this;
    }

    /**
     * Get estacao
     *
     * @return string
     */
    public function getEstacao()
    {
        return $this->estacao;
    }

    /**
     * Set conferePed
     *
     * @param string $conferePed
     *
     * @return SavePedidoService
     */
    public function setConferePed($conferePed)
    {
        $this->conferePed = $conferePed;

        return $this;
    }

    /**
     * Get conferePed
     *
     * @return string
     */
    public function getConferePed()
    {
        return $this->conferePed;
    }

    /**
     * Set kmPed
     *
     * @param integer $kmPed
     *
     * @return SavePedidoService
     */
    public function setKmPed($kmPed)
    {
        $this->kmPed = $kmPed;

        return $this;
    }

    /**
     * Get kmPed
     *
     * @return integer
     */
    public function getKmPed()
    {
        return $this->kmPed;
    }

    /**
     * Set nomeClientePed
     *
     * @param string $nomeClientePed
     *
     * @return SavePedidoService
     */
    public function setNomeClientePed($nomeClientePed)
    {
        $this->nomeClientePed = $nomeClientePed;

        return $this;
    }

    /**
     * Get nomeClientePed
     *
     * @return string
     */
    public function getNomeClientePed()
    {
        return $this->nomeClientePed;
    }

    /**
     * Set calcbasePed
     *
     * @param string $calcbasePed
     *
     * @return SavePedidoService
     */
    public function setCalcbasePed($calcbasePed)
    {
        $this->calcbasePed = $calcbasePed;

        return $this;
    }

    /**
     * Get calcbasePed
     *
     * @return string
     */
    public function getCalcbasePed()
    {
        return $this->calcbasePed;
    }

    /**
     * Set volumePed
     *
     * @param integer $volumePed
     *
     * @return SavePedidoService
     */
    public function setVolumePed($volumePed)
    {
        $this->volumePed = $volumePed;

        return $this;
    }

    /**
     * Get volumePed
     *
     * @return integer
     */
    public function getVolumePed()
    {
        return $this->volumePed;
    }

    /**
     * Set pesoPed
     *
     * @param string $pesoPed
     *
     * @return SavePedidoService
     */
    public function setPesoPed($pesoPed)
    {
        $this->pesoPed = $pesoPed;

        return $this;
    }

    /**
     * Get pesoPed
     *
     * @return string
     */
    public function getPesoPed()
    {
        return $this->pesoPed;
    }

    /**
     * Set obsPed
     *
     * @param string $obsPed
     *
     * @return SavePedidoService
     */
    public function setObsPed($obsPed)
    {
        $this->obsPed = $obsPed;

        return $this;
    }

    /**
     * Get obsPed
     *
     * @return string
     */
    public function getObsPed()
    {
        return $this->obsPed;
    }

    /**
     * Set horaPed
     *
     * @param string $horaPed
     *
     * @return SavePedidoService
     */
    public function setHoraPed($horaPed)
    {
        $this->horaPed =  DateTime::createFromFormat('H:i:s', $horaPed);
        return $this;
    }

    /**
     * Get horaPed
     *
     * @return string
     */
    public function getHoraPed()
    {
        if($this->horaPed){
            return $this->horaPed->format('H:i:s');
        }
        return $this->horaPed;
    }

    /**
     * Set obs1Ped
     *
     * @param string $obs1Ped
     *
     * @return SavePedidoService
     */
    public function setObs1Ped($obs1Ped)
    {
        $this->obs1Ped = $obs1Ped;

        return $this;
    }

    /**
     * Get obs1Ped
     *
     * @return string
     */
    public function getObs1Ped()
    {
        return $this->obs1Ped;
    }

    /**
     * Set obs2Ped
     *
     * @param string $obs2Ped
     *
     * @return SavePedidoService
     */
    public function setObs2Ped($obs2Ped)
    {
        $this->obs2Ped = $obs2Ped;

        return $this;
    }

    /**
     * Get obs2Ped
     *
     * @return string
     */
    public function getObs2Ped()
    {
        return $this->obs2Ped;
    }

    /**
     * Set obs3Ped
     *
     * @param string $obs3Ped
     *
     * @return SavePedidoService
     */
    public function setObs3Ped($obs3Ped)
    {
        $this->obs3Ped = $obs3Ped;

        return $this;
    }

    /**
     * Get obs3Ped
     *
     * @return string
     */
    public function getObs3Ped()
    {
        return $this->obs3Ped;
    }

    /**
     * Set obs4Ped
     *
     * @param string $obs4Ped
     *
     * @return SavePedidoService
     */
    public function setObs4Ped($obs4Ped)
    {
        $this->obs4Ped = $obs4Ped;

        return $this;
    }

    /**
     * Get obs4Ped
     *
     * @return string
     */
    public function getObs4Ped()
    {
        return $this->obs4Ped;
    }

    /**
     * Set fretePed
     *
     * @param string $fretePed
     *
     * @return SavePedidoService
     */
    public function setFretePed($fretePed)
    {
        $this->fretePed = $fretePed;

        return $this;
    }

    /**
     * Get fretePed
     *
     * @return string
     */
    public function getFretePed()
    {
        return $this->fretePed;
    }

    /**
     * Set indiceMarkupPed
     *
     * @param string $indiceMarkupPed
     *
     * @return SavePedidoService
     */
    public function setIndiceMarkupPed($indiceMarkupPed)
    {
        $this->indiceMarkupPed = $indiceMarkupPed;

        return $this;
    }

    /**
     * Get indiceMarkupPed
     *
     * @return string
     */
    public function getIndiceMarkupPed()
    {
        return $this->indiceMarkupPed;
    }

    /**
     * Set bcicmsPed
     *
     * @param string $bcicmsPed
     *
     * @return SavePedidoService
     */
    public function setBcicmsPed($bcicmsPed)
    {
        $this->bcicmsPed = $bcicmsPed;

        return $this;
    }

    /**
     * Get bcicmsPed
     *
     * @return string
     */
    public function getBcicmsPed()
    {
        return $this->bcicmsPed;
    }

    /**
     * Set vlicmsPed
     *
     * @param string $vlicmsPed
     *
     * @return SavePedidoService
     */
    public function setVlicmsPed($vlicmsPed)
    {
        $this->vlicmsPed = $vlicmsPed;

        return $this;
    }

    /**
     * Get vlicmsPed
     *
     * @return string
     */
    public function getVlicmsPed()
    {
        return $this->vlicmsPed;
    }

    /**
     * Set aliqIcmsPed
     *
     * @param string $aliqIcmsPed
     *
     * @return SavePedidoService
     */
    public function setAliqIcmsPed($aliqIcmsPed)
    {
        $this->aliqIcmsPed = $aliqIcmsPed;

        return $this;
    }

    /**
     * Get aliqIcmsPed
     *
     * @return string
     */
    public function getAliqIcmsPed()
    {
        return $this->aliqIcmsPed;
    }

    /**
     * Set bcicmsstPed
     *
     * @param string $bcicmsstPed
     *
     * @return SavePedidoService
     */
    public function setBcicmsstPed($bcicmsstPed)
    {
        $this->bcicmsstPed = $bcicmsstPed;

        return $this;
    }

    /**
     * Get bcicmsstPed
     *
     * @return string
     */
    public function getBcicmsstPed()
    {
        return $this->bcicmsstPed;
    }

    /**
     * Set vlicmsstPed
     *
     * @param string $vlicmsstPed
     *
     * @return SavePedidoService
     */
    public function setVlicmsstPed($vlicmsstPed)
    {
        $this->vlicmsstPed = $vlicmsstPed;

        return $this;
    }

    /**
     * Get vlicmsstPed
     *
     * @return string
     */
    public function getVlicmsstPed()
    {
        return $this->vlicmsstPed;
    }

    /**
     * Set bcpisPed
     *
     * @param string $bcpisPed
     *
     * @return SavePedidoService
     */
    public function setBcpisPed($bcpisPed)
    {
        $this->bcpisPed = $bcpisPed;

        return $this;
    }

    /**
     * Get bcpisPed
     *
     * @return string
     */
    public function getBcpisPed()
    {
        return $this->bcpisPed;
    }

    /**
     * Set vlpisPed
     *
     * @param string $vlpisPed
     *
     * @return SavePedidoService
     */
    public function setVlpisPed($vlpisPed)
    {
        $this->vlpisPed = $vlpisPed;

        return $this;
    }

    /**
     * Get vlpisPed
     *
     * @return string
     */
    public function getVlpisPed()
    {
        return $this->vlpisPed;
    }

    /**
     * Set aliqPisPed
     *
     * @param string $aliqPisPed
     *
     * @return SavePedidoService
     */
    public function setAliqPisPed($aliqPisPed)
    {
        $this->aliqPisPed = $aliqPisPed;

        return $this;
    }

    /**
     * Get aliqPisPed
     *
     * @return string
     */
    public function getAliqPisPed()
    {
        return $this->aliqPisPed;
    }

    /**
     * Set bccofinsPed
     *
     * @param string $bccofinsPed
     *
     * @return SavePedidoService
     */
    public function setBccofinsPed($bccofinsPed)
    {
        $this->bccofinsPed = $bccofinsPed;

        return $this;
    }

    /**
     * Get bccofinsPed
     *
     * @return string
     */
    public function getBccofinsPed()
    {
        return $this->bccofinsPed;
    }

    /**
     * Set vlcofinsPed
     *
     * @param string $vlcofinsPed
     *
     * @return SavePedidoService
     */
    public function setVlcofinsPed($vlcofinsPed)
    {
        $this->vlcofinsPed = $vlcofinsPed;

        return $this;
    }

    /**
     * Get vlcofinsPed
     *
     * @return string
     */
    public function getVlcofinsPed()
    {
        return $this->vlcofinsPed;
    }

    /**
     * Set aliqCofinsPed
     *
     * @param string $aliqCofinsPed
     *
     * @return SavePedidoService
     */
    public function setAliqCofinsPed($aliqCofinsPed)
    {
        $this->aliqCofinsPed = $aliqCofinsPed;

        return $this;
    }

    /**
     * Get aliqCofinsPed
     *
     * @return string
     */
    public function getAliqCofinsPed()
    {
        return $this->aliqCofinsPed;
    }

    /**
     * Set bcipiPed
     *
     * @param string $bcipiPed
     *
     * @return SavePedidoService
     */
    public function setBcipiPed($bcipiPed)
    {
        $this->bcipiPed = $bcipiPed;

        return $this;
    }

    /**
     * Get bcipiPed
     *
     * @return string
     */
    public function getBcipiPed()
    {
        return $this->bcipiPed;
    }

    /**
     * Set vlipiPed
     *
     * @param string $vlipiPed
     *
     * @return SavePedidoService
     */
    public function setVlipiPed($vlipiPed)
    {
        $this->vlipiPed = $vlipiPed;

        return $this;
    }

    /**
     * Get vlipiPed
     *
     * @return string
     */
    public function getVlipiPed()
    {
        return $this->vlipiPed;
    }

    /**
     * Set aliqIpiPed
     *
     * @param string $aliqIpiPed
     *
     * @return SavePedidoService
     */
    public function setAliqIpiPed($aliqIpiPed)
    {
        $this->aliqIpiPed = $aliqIpiPed;

        return $this;
    }

    /**
     * Get aliqIpiPed
     *
     * @return string
     */
    public function getAliqIpiPed()
    {
        return $this->aliqIpiPed;
    }

    /**
     * Set dataMigracao
     *
     * @param DateTime $dataMigracao
     *
     * @return SavePedidoService
     */
    public function setDataMigracao($dataMigracao)
    {
        $this->dataMigracao = DateTime::createFromFormat("Y-m-d", $dataMigracao);
        return $this;
    }

    /**
     * Get dataMigracao
     *
     * @return DateTime
     */
    public function getDataMigracao()    {
        if($this->dataMigracao){
            return $this->dataMigracao->format('Y-m-d');
        }
        return $this->dataMigracao;
    }

    /**
     * Set valorTabelaPed
     *
     * @param string $valorTabelaPed
     *
     * @return SavePedidoService
     */
    public function setValorTabelaPed($valorTabelaPed)
    {
        $this->valorTabelaPed = $valorTabelaPed;

        return $this;
    }

    /**
     * Get valorTabelaPed
     *
     * @return string
     */
    public function getValorTabelaPed()
    {
        return $this->valorTabelaPed;
    }

    /**
     * Set situacaoEntregaPed
     *
     * @param string $situacaoEntregaPed
     *
     * @return SavePedidoService
     */
    public function setSituacaoEntregaPed($situacaoEntregaPed)
    {
        $this->situacaoEntregaPed = $situacaoEntregaPed;

        return $this;
    }

    /**
     * Get situacaoEntregaPed
     *
     * @return string
     */
    public function getSituacaoEntregaPed()
    {
        return $this->situacaoEntregaPed;
    }

    /**
     * Set pedidoCompraPed
     *
     * @param string $pedidoCompraPed
     *
     * @return SavePedidoService
     */
    public function setPedidoCompraPed($pedidoCompraPed)
    {
        $this->pedidoCompraPed = $pedidoCompraPed;

        return $this;
    }

    /**
     * Get pedidoCompraPed
     *
     * @return string
     */
    public function getPedidoCompraPed()
    {
        return $this->pedidoCompraPed;
    }

    /**
     * Set animalId
     *
     * @param string $animalId
     *
     * @return SavePedidoService
     */
    public function setAnimalId($animalId)
    {
        $this->animalId = $animalId;

        return $this;
    }

    /**
     * Get animalId
     *
     * @return string
     */
    public function getAnimalId()
    {
        return $this->animalId;
    }

    /**
     * Set clienteId
     *
     * @param string $clienteId
     *
     * @return SavePedidoService
     */
    public function setClienteId($clienteId)
    {
        $this->clienteId = $clienteId;

        return $this;
    }

    /**
     * Get clienteId
     *
     * @return string cliente
     */
    public function getClienteId(){
        return $this->clienteId;
    }

    /**
     * Set industriaId
     *
     * @param string $industriaId
     *
     * @return SavePedidoService
     */
    public function setIndustriaId($industriaId){
        $this->industriaId = $industriaId;

        return $this;
    }

    /**
     * Get industriaId
     *
     * @return string $industriaId
     */
    public function getIndustriaId() {
        return $this->industriaId;
    }

    /**
     * Set lojaId
     *
     * @param string $lojaId
     *
     * @return SavePedidoService
     */
    public function setLojaId($lojaId) {
        $this->lojaId = $lojaId;

        return $this;
    }

    /**
     * Get lojaId
     *
     * @return lojaId
     */
    public function getLojaId()
    {
        return $this->lojaId;
    }
    
    /**
     * Set condpagtoId
     *
     * @param string $condpagtoId
     *
     * @return SavePedidoService
     */
    public function setCondpagtoId($condpagtoId)
    {
        $this->condpagtoId = $condpagtoId;

        return $this;
    }

    /**
     * Get condpagtoId
     *
     * @return $condpagtoId
     */
    public function getCondpagtoId()
    {
        return $this->condpagtoId;
    }

    /**
     * Set filialId
     *
     * @param string $filialId
     *
     * @return SavePedidoService
     */
    public function setFilialId($filialId) {
        $this->filialId = $filialId;

        return $this;
    }

    /**
     * Get filialId
     *
     * @return string $filialId
     */
    public function getFilialId() {
        return $this->filialId;
    }

    /**
     * Set enderecoId
     *
     * @param string $enderecoId
     *
     * @return SavePedidoService
     */
    public function setEnderecoId($enderecoId) {
        $this->enderecoId = $enderecoId;

        return $this;
    }

    /**
     * Get enderecoId
     *
     * @return enderecoId
     */
    public function getEnderecoId()
    {
        return $this->enderecoId;
    }

    /**
     * Set motoristaId
     *
     * @param string $motoristaId
     *
     * @return SavePedidoService
     */
    public function setMotoristaId($motoristaId)
    {
        $this->motoristaId = $motoristaId;

        return $this;
    }

    /**
     * Get motoristaId
     *
     * @return string $motoristaId
     */
    public function getMotoristaId()
    {
        return $this->motoristaId;
    }

    /**
     * Set pedidoOrigemId
     *
     * @param string $pedidoOrigemId
     *
     * @return SavePedidoService
     */
    public function setPedidoOrigemId($pedidoOrigemId) {
        $this->pedidoOrigemId = $pedidoOrigemId;

        return $this;
    }

    /**
     * Get pedidoOrigemId
     *
     * @return  string pedidoOrigemId
     */
    public function getPedidoOrigemId()    {
        return $this->pedidoOrigemId;
    }

    /**
     * Set transportadoraId
     *
     * @param string $transportadoraId
     *
     * @return SavePedidoService
     */
    public function setTransportadoraId($transportadoraId) {
        $this->transportadoraId = $transportadoraId;

        return $this;
    }

    /**
     * Get transportadoraId
     *
     * @return string $transportadoraId
     */
    public function getTransportadoraId()
    {
        return $this->transportadoraId;
    }

    /**
     * Set veiculoId
     *
     * @param string $veiculoId
     *
     * @return SavePedidoService
     */
    public function setVeiculoId( $veiculoId )
    {
        $this->veiculoId = $veiculoId;

        return $this;
    }

    /**
     * Get veiculoId
     *
     * @return veiculoId
     */
    public function getVeiculoId()
    {
        return $this->veiculoId;
    }

    /**
     * Set vendedorId
     *
     * @param string $vendedorId
     *
     * @return SavePedidoService
     */
    public function setVendedorId($vendedorId)
    {
        $this->vendedorId = $vendedorId;

        return $this;
    }

    /**
     * Get vendedorId
     *
     * @return string $vendedorId
     */
    public function getVendedorId()
    {
        return $this->vendedorId;
    }
}
