<?php
namespace Application\Utils;

use Application\Utils\UtilConstantes;

class UtilStatus {
    const ATIVO_SIGLA = 'A';
    const INATIVO_SIGLA = 'I';
    const ATIVO = 'ATIVO';
    const INATIVO = 'INATIVO';
    const CANCELADO_SIGLA = 'CA';
    const CANCELADO = 'CANCELADO';
    const DIGITADO = 'DIGITADO';
    
    /**
     * Retornar o descritivo da sigla da situação
     * 
     * @param string $status
     * @return string
     */
    public static function getStatusTitulo(string $status ){
        switch ($status) {
            case UtilStatus::ATIVO_SIGLA:
                return UtilStatus::ATIVO;
            case UtilStatus::INATIVO_SIGLA:
                return UtilStatus::INATIVO;
            case UtilStatus::CANCELADO_SIGLA:
                return UtilStatus::CANCELADO;
            case UtilConstantes::STATUS_DIGITADO:
                return UtilStatus::DIGITADO;
            default : 
                return $status;
        }
    }
    
    /**
     * Retornar o descritivo da sigla da situação
     * 
     * @param string $status
     * @return string
     */
    public static function getStatusPedido(string $status ){
        switch ($status) {
            case UtilConstantes::STATUS_ORCAMENTO:
                return UtilConstantes::ORCAMENTO;
            case UtilConstantes::STATUS_PEDIDO:
                return UtilConstantes::PEDIDO;
            case UtilConstantes::STATUS_BAIXADO:
                return UtilConstantes::PEDIDO;
            case UtilConstantes::STATUS_FATURADO:
                return UtilConstantes::FATURADO;
            case UtilConstantes::STATUS_CANCELADO:
                return UtilConstantes::CANCELADO;
            case UtilConstantes::STATUS_PRODUZINDO:
                return UtilConstantes::PRODUZINDO;
            case UtilConstantes::STATUS_EM_ANALISE:
                return UtilConstantes::EM_ANALISE;
            case UtilConstantes::STATUS_BLOQUEADO:
                return UtilConstantes::BLOQUEADO;
            case UtilConstantes::STATUS_INUTILIZADO:
                return UtilConstantes::INUTILIZADO;
            case UtilConstantes::STATUS_DESCARTADO:
                return UtilConstantes::DESCARTADO;
            case UtilConstantes::STATUS_CARREGADO:
                return UtilConstantes::CARREGADO;
            case UtilConstantes::STATUS_AGUARDANDO_ESTOQUE:
                return UtilConstantes::AGUARDANDO_ESTOQUE;
            case UtilConstantes::STATUS_ORDEM_SERVICO:
                return UtilConstantes::ORDEM_SERVICO;
            default : 
                return $status;
        }
    }
    public static function getStatusAtivo(string $status ){
        switch ($status) {
            case UtilConstantes::ATIVO_SIGLA:
                return UtilConstantes::ATIVO;
            case UtilConstantes::INATIVO_SIGLA:
                return UtilConstantes::INATIVO;
            default : 
                return $status;
        }
    }
    
    public static function getStatusEntrada(string $status){
        switch ($status) {
            case UtilConstantes::ENTRADA:
                return 'ENTRADA';
            case UtilConstantes::SAIDA:
                return 'SAIDA';
            default : 
                return $status;
        }
    }
    
    public static function getTipoProduto(string $tipo){
        switch ($tipo) {
            case UtilConstantes::PRODUTO:
                return 'PRODUTO';
            case UtilConstantes::SERVICO:
                return 'SERVIÇO';
            default : 
                return $tipo;
        }
    }
    
    public static function getStatusChequeBolReq(string $status){
        switch ($status) {
            case UtilConstantes::STATUS_DIGITADO:
              return 'ABERTO';
            case UtilConstantes::STATUS_COMPENSADO:
              return 'COMPENSADO';
            case UtilConstantes::STATUS_ABERTO:
              return 'ABERTO';
            case UtilConstantes::STATUS_BAIXADO:
              return 'BAIXADO';
            case UtilConstantes::STATUS_CANCELADO:
              return 'CANCELADO';
            case UtilConstantes::STATUS_DEPOSITADO:
              return 'DEPOSITADO';
            case UtilConstantes::STATUS_DOCUMENTO_DEVOLVIDO1:
              return 'DEVOLVIDO 1';
            case UtilConstantes::STATUS_DOCUMENTO_DEVOLVIDO2:
              return 'DEVOLVIDO 2';
            case UtilConstantes::STATUS_DOCUMENTO_DEVOLVIDO3:
              return 'DEVOLVIDO 3';
            case UtilConstantes::STATUS_DOCUMENTO_DEVOLVIDO_PAGO:
              return 'DEVOLVIDO PAGO';
            default:
                return $status;
        }
    }

    public static function getStatusInpagto(string $status){
        switch ($status) {
            case UtilConstantes::INPAGTO_BOLETO:
              return 'BOLETO';
            case UtilConstantes::INPAGTO_CARTAO:
              return 'CARTAO';
            case UtilConstantes::INPAGTO_BORDERO:
              return 'BORDERO';
            case UtilConstantes::INPAGTO_CHEQUE:
              return 'CHEQUE';
            case UtilConstantes::INPAGTO_CREDITO_CLIENTE:
              return 'CRED. CLIENTE';
            case UtilConstantes::INPAGTO_DUPLICATA:
              return 'DUPLICATA';
            case UtilConstantes::INPAGTO_TRANSFORMADO:
              return 'TRANSFORMADO';
            default:
                return $status;
        }
    }
                
    /**
     * Retorna situação do caixa conforme a data de fechamento.
     * 
     * @param \DateTime $dataFechmto
     * @return type
     */    
    public function getStatusCaixa($dataFechmto){
        return ($dataFechmto === null?"ABERTO":"FECHADO");
    }
}
