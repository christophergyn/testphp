<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Utils;

/**
 * Description of UtilSession
 *
 * @author Onix
 */
class UtilSession {
    public static function criarItemNaSessao($nomeDoItem, $data){
        $container = new \Zend\Session\Container($nomeDoItem);
        $container->item =  $data;
    }
    
    public static function getItemDaSessao($nomeDoItem){
        $container = new \Zend\Session\Container($nomeDoItem);
        return $container->item;
    }
}
