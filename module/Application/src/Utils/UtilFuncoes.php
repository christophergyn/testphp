<?php
namespace Application\Utils;

class UtilFuncoes {

    /**
     * Incrementar caracteres em palavras.
     * 
     * @param string $valor
     * @param string $caracter
     * @param int $tamanho
     * @param bool $esquerda
     * @return string
     */
    public static function incrementaCaracter(string $valor, string $caracter, int $tamanho, bool $esquerda = false){
        $palavra = $valor;
        while (strlen($palavra) < $tamanho){
            if ($esquerda){
                $palavra = $caracter.$palavra;
            } else {
                $palavra = $palavra.$caracter;
            }
        }
        return $palavra;
    }
}
