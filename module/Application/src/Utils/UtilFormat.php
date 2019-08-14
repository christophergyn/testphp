<?php
namespace Application\Utils;

class UtilFormat {

    /**
     * Formata um valor 
     * @param float $valor
     * @param int $casasDecimais
     * @param boolean $arredondar
     * @param string $mascaraMoeda
     * @return string
     */
    public static function formatValue(float $valor, int $casasDecimais = 2, bool $arredondar = false, string $mascaraMoeda = ''){
        if ($arredondar){
            $valor = round($valor, $casasDecimais);
        }
        $valor = number_format($valor, $casasDecimais, ',', '.');
        if (strlen($mascaraMoeda) > 0){
            $valor = $mascaraMoeda.' '.$valor;
        }
        return $valor;
    }
}
