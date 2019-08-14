<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Comissao extends \Application\Entity\Comissao implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'codCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'descCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'dataCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'metaCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'valorCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'vlpagoCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'ultpagtoCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'ultcomissaoCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'qtdvendaCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'statusCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'codFil', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'drecover', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'tipoComissaoCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'codClien'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'codCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'descCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'dataCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'metaCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'valorCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'vlpagoCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'ultpagtoCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'ultcomissaoCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'qtdvendaCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'statusCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'codFil', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'drecover', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'tipoComissaoCom', '' . "\0" . 'Application\\Entity\\Comissao' . "\0" . 'codClien'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Comissao $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getCodCom()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCodCom();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodCom', []);

        return parent::getCodCom();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescCom($descCom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescCom', [$descCom]);

        return parent::setDescCom($descCom);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescCom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescCom', []);

        return parent::getDescCom();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataCom($dataCom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataCom', [$dataCom]);

        return parent::setDataCom($dataCom);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataCom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataCom', []);

        return parent::getDataCom();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaCom($metaCom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaCom', [$metaCom]);

        return parent::setMetaCom($metaCom);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaCom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaCom', []);

        return parent::getMetaCom();
    }

    /**
     * {@inheritDoc}
     */
    public function setValorCom($valorCom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValorCom', [$valorCom]);

        return parent::setValorCom($valorCom);
    }

    /**
     * {@inheritDoc}
     */
    public function getValorCom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorCom', []);

        return parent::getValorCom();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlpagoCom($vlpagoCom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlpagoCom', [$vlpagoCom]);

        return parent::setVlpagoCom($vlpagoCom);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlpagoCom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlpagoCom', []);

        return parent::getVlpagoCom();
    }

    /**
     * {@inheritDoc}
     */
    public function setUltpagtoCom($ultpagtoCom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUltpagtoCom', [$ultpagtoCom]);

        return parent::setUltpagtoCom($ultpagtoCom);
    }

    /**
     * {@inheritDoc}
     */
    public function getUltpagtoCom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUltpagtoCom', []);

        return parent::getUltpagtoCom();
    }

    /**
     * {@inheritDoc}
     */
    public function setUltcomissaoCom($ultcomissaoCom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUltcomissaoCom', [$ultcomissaoCom]);

        return parent::setUltcomissaoCom($ultcomissaoCom);
    }

    /**
     * {@inheritDoc}
     */
    public function getUltcomissaoCom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUltcomissaoCom', []);

        return parent::getUltcomissaoCom();
    }

    /**
     * {@inheritDoc}
     */
    public function setQtdvendaCom($qtdvendaCom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQtdvendaCom', [$qtdvendaCom]);

        return parent::setQtdvendaCom($qtdvendaCom);
    }

    /**
     * {@inheritDoc}
     */
    public function getQtdvendaCom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQtdvendaCom', []);

        return parent::getQtdvendaCom();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatusCom($statusCom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatusCom', [$statusCom]);

        return parent::setStatusCom($statusCom);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatusCom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatusCom', []);

        return parent::getStatusCom();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodFil($codFil)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodFil', [$codFil]);

        return parent::setCodFil($codFil);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodFil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodFil', []);

        return parent::getCodFil();
    }

    /**
     * {@inheritDoc}
     */
    public function setDdelete($ddelete)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDdelete', [$ddelete]);

        return parent::setDdelete($ddelete);
    }

    /**
     * {@inheritDoc}
     */
    public function getDdelete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDdelete', []);

        return parent::getDdelete();
    }

    /**
     * {@inheritDoc}
     */
    public function setDinsert($dinsert)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDinsert', [$dinsert]);

        return parent::setDinsert($dinsert);
    }

    /**
     * {@inheritDoc}
     */
    public function getDinsert()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDinsert', []);

        return parent::getDinsert();
    }

    /**
     * {@inheritDoc}
     */
    public function setDupdate($dupdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDupdate', [$dupdate]);

        return parent::setDupdate($dupdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDupdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDupdate', []);

        return parent::getDupdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDrecover($drecover)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDrecover', [$drecover]);

        return parent::setDrecover($drecover);
    }

    /**
     * {@inheritDoc}
     */
    public function getDrecover()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDrecover', []);

        return parent::getDrecover();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuario($usuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario', [$usuario]);

        return parent::setUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario', []);

        return parent::getUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrograma($programa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrograma', [$programa]);

        return parent::setPrograma($programa);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrograma()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrograma', []);

        return parent::getPrograma();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstacao($estacao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstacao', [$estacao]);

        return parent::setEstacao($estacao);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstacao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstacao', []);

        return parent::getEstacao();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoComissaoCom($tipoComissaoCom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoComissaoCom', [$tipoComissaoCom]);

        return parent::setTipoComissaoCom($tipoComissaoCom);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoComissaoCom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoComissaoCom', []);

        return parent::getTipoComissaoCom();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodClien(\Application\Entity\Cliente $codClien = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodClien', [$codClien]);

        return parent::setCodClien($codClien);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodClien()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodClien', []);

        return parent::getCodClien();
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', []);

        return parent::toArray();
    }

    /**
     * {@inheritDoc}
     */
    public function arrayToObject($data = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'arrayToObject', [$data]);

        return parent::arrayToObject($data);
    }

}
