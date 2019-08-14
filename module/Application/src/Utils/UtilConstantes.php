<?php
namespace Application\Utils;

class UtilConstantes {
    const DIRETORIO_TEMP = __DIR__.'/../../../../data/temp';
    const DIRETORIO_BOLETO = __DIR__.'/../../../../data/boleto';
    const DIRETORIO_BOLETO_REMESSA = __DIR__.'/../../../../data/boleto/remessa';
    const DIRETORIO_BOLETO_RETORNO = __DIR__.'/../../../../data/boleto/retorno';
    const ATIVO_SIGLA = 'A';
    const INATIVO_SIGLA = 'I';
    const ATIVO = 'ATIVO';
    const INATIVO = 'INATIVO';
    const PRODUTO = 'P';
    const SERVICO = 'S';
    const ENTRADA = 'E';
    const SAIDA = 'S';
    // Caixa e Banco - tpGeracao
    const TIPO_GERACAO_BAIXA_CHEQUE = 'BC';
    const TIPO_GERACAO_DEPOSITO_CHEQ = 'DC';
    const TIPO_GERACAO_COMPENSACAO_CARTAO = 'CC';
    //-- Caixa / Banco
    const TIPO_MOVIMENTO_CAIXA = 'M';
    const TIPO_MOVIMENTO_CAIXA_BANCO = 'B';
    const TIPO_MOVIMENTO_CAIXA_ESTORNO = 'E';
    const TIPO_MOVIMENTO_CAIXA_TRANSFERENCIA = 'T';
    const TIPO_MOVIMENTO_CAIXA_TRANSFERIDO = 'TD';
    const ORIGEM_MOV_CAIXA_MOVIMENTO = 'M';
    const ORIGEM_MOV_CAIXA_TITULO = 'T';
    const ORIGEM_MOV_CAIXA_CAIXA = 'C';
    const ORIGEM_MOV_CAIXA_BANCO = 'B';
    const ORIGEM_MOV_CAIXA_BORDERO = 'OB';
    const ORIGEM_MOV_CAIXA_COMPENSACAO = 'CO';
    const ORIGEM_MOV_CAIXA_CONCILIA_CHEQUE = 'CC';
    const ORIGEM_MOV_CAIXA_BAIXA_PEDIDO = 'BP';
    const ORIGEM_MOV_CAIXA_GERACAO_AUTOMATICA = 'AU';
    const ORIGEM_MOV_CAIXA_ESTORNO = 'E';
    const ORIGEM_MOV_CAIXA_ABERTURA_CAIXA = 'AB';
    const ORIGEM_MOV_CAIXA_FECHAMENTO_CAIXA = 'FE';
    const ORIGEM_MOV_CAIXA_TRANSFERENCIA = 'TR';
    const ORIGEM_MOV_CAIXA_CHEQUE_PAGAR = 'CP';
    const ORIGEM_MOV_CAIXA_DEPOSITO = 'DE';
    const ORIGEM_MOV_CAIXA_DEVOLUCAO_CHEQUE = 'DV';
    const ORIGEM_MOV_CAIXA_REAPRESENTA_CHEQUE = 'RC';
    //-- TIPO PAGTO INPAGTO_TIT OU INPAGTO_PARCTIT
    const INPAGTO_TITULO = 'T';
    const INPAGTO_CHEQUE = 'CH';
    const INPAGTO_BOLETO = 'BO';
    const INPAGTO_BORDERO = 'B';
    const INPAGTO_DUPLICATA = 'DU';
    const INPAGTO_CARTAO = 'CT';
    const INPAGTO_TRANSFORMADO = 'T';
    const INPAGTO_CREDITO_CLIENTE = 'CC';
    // Documento
    const DOCUMENTO_TIPO_AGRUPADO = 'T';
    const DOCUMENTO_TIPO_DINHEIRO = 'DH';
    const DOCUMENTO_TIPO_CHEQUE = 'CH';
    const DOCUMENTO_TIPO_DUPLICATA = 'DU';
    const DOCUMENTO_TIPO_REQUISICAO = 'RE';
    const DOCUMENTO_TIPO_BOLETO = 'BO';
    const DOCUMENTO_TIPO_TED = 'TD';
    const DOCUMENTO_TIPO_DOC = 'DO';
    const DOCUMENTO_TIPO_INTERNET = 'IT';
    const DOCUMENTO_TIPO_OUTROS = 'OU';
    const DOCUMENTO_TIPO_CARTAO = 'CT';
    const DOCUMENTO_TIPO_APLICACAO = 'AP';
    const DOCUMENTO_TIPO_CREDITO_CLIENTE = 'C';
    // Boleto
    const BOLETO_PROGRAMA = 'BOLETO_PROGRAMA';
    //-- Titulos
    const DOCUMENTO_TIPO_PAGTO_TITULO = 'T';
    const DOCUMENTO_TIPO_PAGTO_CHEQUE = 'C';
    const DOCUMENTO_TIPO_PAGTO_BOLETO = 'L';
    const DOCUMENTO_TIPO_PAGTO_BORDERO = 'B';
    const DOCUMENTO_TIPO_PAGTO_DUPLICATA = 'DU';
    const DOCUMENTO_TIPO_PAGTO_TRANSFORMADO = 'T';    
    // histpagto
    const TIPO_ESTORNO = 'E';
    //-- cliente
    const CLIENTE = 'C';
    const FORNECEDOR = 'F';
    const TODOS = 'T';
    const TIPO_FISICA = 'F';
    const TIPO_JURIDICA = 'J';
    //-- Operação de estoque
    const ESTORNO_ENTRADA = 'EE';
    const ESTORNO_SAIDA = 'ES';
    //-- Geral
    const SIM = 'S';
    const NAO = 'N';
    // Pedido
    const STATUS_DIGITADO = 'DI';
    const STATUS_EM_ANALISE = 'AN';
    const STATUS_BAIXADO = 'BA';
    const STATUS_BLOQUEADO = 'BL';
    const STATUS_CANCELADO = 'CA';
    const STATUS_INUTILIZADO = 'IN';
    const STATUS_DESCARTADA = 'DE';
    const STATUS_CARREGADO = 'CR';
    const STATUS_COMPENSADO = 'CO';
    const STATUS_DEPOSITADO = 'DE';
    const STATUS_ORCAMENTO = 'OR';
    const STATUS_FATURADO = 'FA';
    const STATUS_AGUARDANDO_ESTOQUE = 'AE';
    const STATUS_DENEGADA = 'DN';
    const STATUS_PRODUZINDO = 'PR';
    const STATUS_PEDIDO = 'PE';
    const STATUS_DESCARTADO = 'DS';
    const STATUS_ORDEM_SERVICO = 'OS';
    // pagto temporario
    const STATUS_ABERTO = 'A';
        // DESCRITIVO
    const EM_ANALISE = 'EM ANÁLISE';
    const BAIXADO = 'BAIXADO';
    const BLOQUEADO = 'BLOQUEADO';
    const CANCELADO = 'CANCELADO';
    const INUTILIZADO = 'INUTILIZADO';
    const DESCARTADA = 'DESCARTADA';
    const CARREGADO = 'CARREGADO';
    const COMPENSADO = 'COMPENSADO';
    const DEPOSITADO = 'DEPOSITADO';
    const ORCAMENTO = 'ORÇAMENTO';
    const DIGITADO = 'DIGITADO';
    const PEDIDO = 'PEDIDO';
    const FATURADO = 'FATURADO';
    const AGUARDANDO_ESTOQUE = 'AGUARDANDO ESTOQUE';
    const DENEGADA = 'DENEGADA';
    const PRODUZINDO = 'PRODUZINDO';
    const DESCARTADO = 'DESCARTADO';
    const ORDEM_SERVICO = 'ORDEM DE SERVIÇO';    
    // Títulos
    const A_RECEBER = 'C';
    const A_PAGAR = 'D';
    // Produto
    const TIPO_PRODUTO = 'P';
    const TIPO_SERVICO = 'S';
    const TIPO_SERVICO_CODIGO = '09';
    // Centro de custos
    const CUSTO_VARIAVEL = 'CUSTO_VARIAVEL';
    const CUSTO_FIXO = 'CUSTO_FIXO';
    const OUTROS = 'OUTROS';
    const CONTRIBUICAO = 'CONTRIBUICAO';
    const RECEITA = 'RECEITA';
    const CREDITO = 'C';
    const DEBITO = 'D';
    // Vendedor 
    const COMISSAO_SOBRE_VENDAS = 'VENDAS';
    const COMISSAO_SOBRE_TABELA = 'TABELA';
    // Cheque, Boleto, Promissoria, Cartao
    const STATUS_DOCUMENTO_DIGITADO = 'DI';
    const STATUS_DOCUMENTO_COMPENSADO = 'CO';
    const STATUS_DOCUMENTO_ABERTO = 'A';
    const STATUS_DOCUMENTO_BAIXADO = 'BA';
    const STATUS_DOCUMENTO_CANCELADO = 'CA';
    const STATUS_DOCUMENTO_TRANSFERERIDO ='T';
    const STATUS_CHEQUE_DEPOSITADO = 'DE';
    const STATUS_CHEQUE_DEVOLVIDO1 = 'D1';
    const STATUS_CHEQUE_DEVOLVIDO2 = 'D2';
    const STATUS_CHEQUE_DEVOLVIDO3 = 'D3';
    const STATUS_CHEQUE_DEVOLVIDO_PAGO = 'DP';
    const CHEQUE_APAGAR = 'D';
    const CHEQUE_ARECEBER = 'C';
    // motivos
    const MOTIVO_NOTA = 'MN';
    const MOTIVO_GARANTIA = 'MG';
    const MOTIVO_RH = 'MR';
    // 
    // Codigo de relatorios
    //-- Listagem do financeiro
    const RELAT_LISTA_ADMINSTRADORA = '0300';
    const RELAT_LISTA_CLASSIFICACAO_CLIENTE = '0301';
    const RELAT_LISTA_CLIENTE = '0319';
    const RELAT_LISTA_CENTRO_CUSTO = '0328';
    const RELAT_LISTA_REGIAO = '0337';
    const RELAT_LISTA_VENDEDOR = '0338';
    const RELAT_LISTA_MOEDA = '0341';
    const RELAT_LISTA_DOCUMENTO = '0342';
    const RELAT_LISTA_COND_PAGAMENTO = '0349';
    const RELAT_LISTA_BANCO = '0350';
    const RELAT_LISTA_AGENCIA = '0351';
    const RELAT_LISTA_CONTA_CORRENTE = '0352';
    const RELAT_LISTA_CHEQUE = '0360';
    //-- Listagem do estoque
    const RELAT_LISTA_PRODUTO = '0324';
    const RELAT_LISTA_SUBGRUPO = '0326';
    const RELAT_LISTA_GRUPO = '0325';
    const RELAT_LISTA_OPERACAO = '0323';
    const RELAT_LISTA_LOCAL = '0235';
    const RELAT_LISTA_PRODUTO_COM_PESO = '0494';
    const RELAT_LISTA_PRODUTO_COM_CUSTO = '0652';
    const RELAT_LISTA_PRODUTO_COM_ESTOQUE = '0653';
    const RELAT_LISTA_FORNECEDOR = '0310';
    const RELAT_LISTA_INVENTARIO = '0520';
    const RELAT_LISTA_TIPO_PRODUTO = '0521';
    const RELAT_LISTA_CLASSIFICACAO_PRODUTO = '0522';
    const RELAT_LISTA_FORMULARIO_INVENTARIO = '0109';
    //-- BAncos
    const BANCO_DO_BRASIL = '001';
    const BANCO_CAIXA = '109';
    const BANCO_BRADESCO = '237';
    const BANCO_ITAU = '341';
    const BANCO_SANTANDER = '33';
    const BANCO_SICOOB = '001';
}
