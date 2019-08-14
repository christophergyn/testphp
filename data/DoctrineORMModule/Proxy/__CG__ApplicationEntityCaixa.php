<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Caixa extends \Application\Entity\Caixa implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'dataCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'debitoCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'creditoCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldoCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldantCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'cheqCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'cuponCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'cartaocCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'cartaodCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'dinheiroCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'cheqdevolCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'fechmtoCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'socioCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'boletoCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'chequepreCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldoboletoCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldochequeCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldochequebxCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldoboletobxCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldosocioCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldosociobxCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldocartaocCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldocartaocbxCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'codCaixa', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'codUsuar'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'dataCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'debitoCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'creditoCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldoCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldantCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'cheqCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'cuponCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'cartaocCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'cartaodCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'dinheiroCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'cheqdevolCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'fechmtoCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'socioCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'boletoCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'chequepreCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldoboletoCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldochequeCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldochequebxCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldoboletobxCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldosocioCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldosociobxCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldocartaocCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'saldocartaocbxCx', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'codCaixa', '' . "\0" . 'Application\\Entity\\Caixa' . "\0" . 'codUsuar'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Caixa $proxy) {
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataCx($dataCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataCx', [$dataCx]);

        return parent::setDataCx($dataCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataCx', []);

        return parent::getDataCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setDebitoCx($debitoCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDebitoCx', [$debitoCx]);

        return parent::setDebitoCx($debitoCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getDebitoCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDebitoCx', []);

        return parent::getDebitoCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreditoCx($creditoCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreditoCx', [$creditoCx]);

        return parent::setCreditoCx($creditoCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreditoCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreditoCx', []);

        return parent::getCreditoCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldoCx($saldoCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldoCx', [$saldoCx]);

        return parent::setSaldoCx($saldoCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldoCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldoCx', []);

        return parent::getSaldoCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldantCx($saldantCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldantCx', [$saldantCx]);

        return parent::setSaldantCx($saldantCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldantCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldantCx', []);

        return parent::getSaldantCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheqCx($cheqCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheqCx', [$cheqCx]);

        return parent::setCheqCx($cheqCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheqCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheqCx', []);

        return parent::getCheqCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setCuponCx($cuponCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCuponCx', [$cuponCx]);

        return parent::setCuponCx($cuponCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getCuponCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCuponCx', []);

        return parent::getCuponCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setCartaocCx($cartaocCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCartaocCx', [$cartaocCx]);

        return parent::setCartaocCx($cartaocCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getCartaocCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCartaocCx', []);

        return parent::getCartaocCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setCartaodCx($cartaodCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCartaodCx', [$cartaodCx]);

        return parent::setCartaodCx($cartaodCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getCartaodCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCartaodCx', []);

        return parent::getCartaodCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setDinheiroCx($dinheiroCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDinheiroCx', [$dinheiroCx]);

        return parent::setDinheiroCx($dinheiroCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getDinheiroCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDinheiroCx', []);

        return parent::getDinheiroCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheqdevolCx($cheqdevolCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheqdevolCx', [$cheqdevolCx]);

        return parent::setCheqdevolCx($cheqdevolCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheqdevolCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheqdevolCx', []);

        return parent::getCheqdevolCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechmtoCx($fechmtoCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechmtoCx', [$fechmtoCx]);

        return parent::setFechmtoCx($fechmtoCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechmtoCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechmtoCx', []);

        return parent::getFechmtoCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setSocioCx($socioCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSocioCx', [$socioCx]);

        return parent::setSocioCx($socioCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getSocioCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSocioCx', []);

        return parent::getSocioCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setBoletoCx($boletoCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBoletoCx', [$boletoCx]);

        return parent::setBoletoCx($boletoCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getBoletoCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBoletoCx', []);

        return parent::getBoletoCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setChequepreCx($chequepreCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChequepreCx', [$chequepreCx]);

        return parent::setChequepreCx($chequepreCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getChequepreCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChequepreCx', []);

        return parent::getChequepreCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldoboletoCx($saldoboletoCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldoboletoCx', [$saldoboletoCx]);

        return parent::setSaldoboletoCx($saldoboletoCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldoboletoCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldoboletoCx', []);

        return parent::getSaldoboletoCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldochequeCx($saldochequeCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldochequeCx', [$saldochequeCx]);

        return parent::setSaldochequeCx($saldochequeCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldochequeCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldochequeCx', []);

        return parent::getSaldochequeCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldochequebxCx($saldochequebxCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldochequebxCx', [$saldochequebxCx]);

        return parent::setSaldochequebxCx($saldochequebxCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldochequebxCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldochequebxCx', []);

        return parent::getSaldochequebxCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldoboletobxCx($saldoboletobxCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldoboletobxCx', [$saldoboletobxCx]);

        return parent::setSaldoboletobxCx($saldoboletobxCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldoboletobxCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldoboletobxCx', []);

        return parent::getSaldoboletobxCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldosocioCx($saldosocioCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldosocioCx', [$saldosocioCx]);

        return parent::setSaldosocioCx($saldosocioCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldosocioCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldosocioCx', []);

        return parent::getSaldosocioCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldosociobxCx($saldosociobxCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldosociobxCx', [$saldosociobxCx]);

        return parent::setSaldosociobxCx($saldosociobxCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldosociobxCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldosociobxCx', []);

        return parent::getSaldosociobxCx();
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
    public function setSaldocartaocCx($saldocartaocCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldocartaocCx', [$saldocartaocCx]);

        return parent::setSaldocartaocCx($saldocartaocCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldocartaocCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldocartaocCx', []);

        return parent::getSaldocartaocCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldocartaocbxCx($saldocartaocbxCx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldocartaocbxCx', [$saldocartaocbxCx]);

        return parent::setSaldocartaocbxCx($saldocartaocbxCx);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldocartaocbxCx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldocartaocbxCx', []);

        return parent::getSaldocartaocbxCx();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodCaixa(\Application\Entity\CaixaUsuario $codCaixa = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodCaixa', [$codCaixa]);

        return parent::setCodCaixa($codCaixa);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodCaixa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodCaixa', []);

        return parent::getCodCaixa();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodUsuar(\Application\Entity\Usuario $codUsuar = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodUsuar', [$codUsuar]);

        return parent::setCodUsuar($codUsuar);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodUsuar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodUsuar', []);

        return parent::getCodUsuar();
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