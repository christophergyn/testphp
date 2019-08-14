<?php
namespace Application\Utils;

class UtilMascara {

    /**
     * Formata um valor 
     * @param float $valor
     * @param int $casasDecimais
     * @param boolean $arredondar
     * @param string $mascaraMoeda
     * @return string
     */
    public static function inserirMascaraCNPJCPF(string $cnpjCpf){
        $cnpjCpfComMascara = $cnpjCpf;
        $cnpjCpf = self::retirarMascara($cnpjCpf);
        if (strlen($cnpjCpf) === 11){
            $cnpjCpfComMascara = self::inserirMascara($cnpjCpf, '###.###.###-##');
        } else if (strlen($cnpjCpf) === 14){
            $cnpjCpfComMascara = self::inserirMascara($cnpjCpf, '##.###.###/####-##');
        }
        return $cnpjCpfComMascara;
    }
    
    public static function inserirMascaraCEP(string $cep){
        $cepComMascara = $cep; 
        $cep = self::retirarMascara($cep);
        if (strlen($cep) === 8){
            $cepComMascara = self::inserirMascara($cep, '#####-###');
        }
        return $cepComMascara;
    }

    public static function inserirMascaraTelefone(string $telefone){
        $telefoneComMascara = $telefone; 
        $telefone = self::retirarMascara($telefone);
        if (strlen($telefone) === 8){
            $telefoneComMascara = self::inserirMascara($telefone, '####-##-##');
        } else if (strlen($telefone) === 9){
            $telefoneComMascara = self::inserirMascara($telefone, '####-##-##');
        } else if (strlen($telefone) === 10){
            $telefoneComMascara = self::inserirMascara($telefone, '(##)####-##-##');
        } else if (strlen($telefone) === 11){
            $telefoneComMascara = self::inserirMascara($telefone, '(##)#####-##-##');
        }
        return $telefoneComMascara;
    }

    public static function inserirMascara(string $valor, string $mascara = '##/##/####'){
        $mascarado = '';
        $k = 0;
        for($i = 0; $i <= strlen($mascara)-1; $i++) {
            if($mascara[$i] == '#') {
                if(isset($valor[$k])){
                    $mascarado .= $valor[$k++];
                }
            } else {
                if(isset($mascara[$i])){
                    $mascarado .= $mascara[$i];
                }
            }
        }
        return $mascarado;
    }
    
    public static function retirarMascara($valor){
        $arrayFrom = array('.', ',','-','/','(',')'); 
        $arrayTo = array('', '', '', '', '', ''); 
        return str_replace($arrayFrom, $arrayTo, $valor); 
    }
    
    public static function onlyNumber(string $valor){
        return preg_replace("/[^0-9]/", "", $valor);
    }
    
}
