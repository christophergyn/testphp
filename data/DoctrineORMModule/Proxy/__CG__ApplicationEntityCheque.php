<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cheque extends \Application\Entity\Cheque implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'codCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'bancoCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'agenciaCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'contaCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'numCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'nominalCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'obsCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'vlchequeCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'emissaoCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'predataCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'compensacaoCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'conciliacaoCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'dtdevolucao1Cheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'dtdevolucao2Cheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'dtdevolucao3Cheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'motivo3Cheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'emitenteCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'cpfemitenteCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'tipoCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'statusCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'digagenCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'digcontaCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'dataCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'vlpagoCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'descontoCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'motivo1Cheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'motivo2Cheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'codClien', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'conta', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'codFil', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'codMoeda', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'codUsuar'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'codCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'bancoCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'agenciaCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'contaCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'numCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'nominalCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'obsCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'vlchequeCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'emissaoCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'predataCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'compensacaoCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'conciliacaoCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'dtdevolucao1Cheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'dtdevolucao2Cheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'dtdevolucao3Cheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'motivo3Cheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'emitenteCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'cpfemitenteCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'tipoCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'statusCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'digagenCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'digcontaCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'dataCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'vlpagoCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'descontoCheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'motivo1Cheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'motivo2Cheq', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'codClien', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'conta', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'codFil', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'codMoeda', '' . "\0" . 'Application\\Entity\\Cheque' . "\0" . 'codUsuar'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cheque $proxy) {
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
    public function getCodCheq()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCodCheq();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodCheq', []);

        return parent::getCodCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setBancoCheq($bancoCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBancoCheq', [$bancoCheq]);

        return parent::setBancoCheq($bancoCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getBancoCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBancoCheq', []);

        return parent::getBancoCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgenciaCheq($agenciaCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgenciaCheq', [$agenciaCheq]);

        return parent::setAgenciaCheq($agenciaCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgenciaCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgenciaCheq', []);

        return parent::getAgenciaCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setContaCheq($contaCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContaCheq', [$contaCheq]);

        return parent::setContaCheq($contaCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getContaCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContaCheq', []);

        return parent::getContaCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumCheq($numCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumCheq', [$numCheq]);

        return parent::setNumCheq($numCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumCheq', []);

        return parent::getNumCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setNominalCheq($nominalCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNominalCheq', [$nominalCheq]);

        return parent::setNominalCheq($nominalCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getNominalCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNominalCheq', []);

        return parent::getNominalCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setObsCheq($obsCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObsCheq', [$obsCheq]);

        return parent::setObsCheq($obsCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getObsCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObsCheq', []);

        return parent::getObsCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlchequeCheq($vlchequeCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlchequeCheq', [$vlchequeCheq]);

        return parent::setVlchequeCheq($vlchequeCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlchequeCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlchequeCheq', []);

        return parent::getVlchequeCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmissaoCheq($emissaoCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmissaoCheq', [$emissaoCheq]);

        return parent::setEmissaoCheq($emissaoCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmissaoCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmissaoCheq', []);

        return parent::getEmissaoCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setPredataCheq($predataCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPredataCheq', [$predataCheq]);

        return parent::setPredataCheq($predataCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getPredataCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPredataCheq', []);

        return parent::getPredataCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompensacaoCheq($compensacaoCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompensacaoCheq', [$compensacaoCheq]);

        return parent::setCompensacaoCheq($compensacaoCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompensacaoCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompensacaoCheq', []);

        return parent::getCompensacaoCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setConciliacaoCheq($conciliacaoCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConciliacaoCheq', [$conciliacaoCheq]);

        return parent::setConciliacaoCheq($conciliacaoCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getConciliacaoCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConciliacaoCheq', []);

        return parent::getConciliacaoCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtdevolucao1Cheq($dtdevolucao1Cheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtdevolucao1Cheq', [$dtdevolucao1Cheq]);

        return parent::setDtdevolucao1Cheq($dtdevolucao1Cheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtdevolucao1Cheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtdevolucao1Cheq', []);

        return parent::getDtdevolucao1Cheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtdevolucao2Cheq($dtdevolucao2Cheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtdevolucao2Cheq', [$dtdevolucao2Cheq]);

        return parent::setDtdevolucao2Cheq($dtdevolucao2Cheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtdevolucao2Cheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtdevolucao2Cheq', []);

        return parent::getDtdevolucao2Cheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtdevolucao3Cheq($dtdevolucao3Cheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtdevolucao3Cheq', [$dtdevolucao3Cheq]);

        return parent::setDtdevolucao3Cheq($dtdevolucao3Cheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtdevolucao3Cheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtdevolucao3Cheq', []);

        return parent::getDtdevolucao3Cheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setMotivo3Cheq($motivo3Cheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMotivo3Cheq', [$motivo3Cheq]);

        return parent::setMotivo3Cheq($motivo3Cheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getMotivo3Cheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMotivo3Cheq', []);

        return parent::getMotivo3Cheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmitenteCheq($emitenteCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmitenteCheq', [$emitenteCheq]);

        return parent::setEmitenteCheq($emitenteCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmitenteCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmitenteCheq', []);

        return parent::getEmitenteCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setCpfemitenteCheq($cpfemitenteCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCpfemitenteCheq', [$cpfemitenteCheq]);

        return parent::setCpfemitenteCheq($cpfemitenteCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getCpfemitenteCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCpfemitenteCheq', []);

        return parent::getCpfemitenteCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoCheq($tipoCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoCheq', [$tipoCheq]);

        return parent::setTipoCheq($tipoCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoCheq', []);

        return parent::getTipoCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatusCheq($statusCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatusCheq', [$statusCheq]);

        return parent::setStatusCheq($statusCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatusCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatusCheq', []);

        return parent::getStatusCheq();
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
    public function setDigagenCheq($digagenCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDigagenCheq', [$digagenCheq]);

        return parent::setDigagenCheq($digagenCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getDigagenCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDigagenCheq', []);

        return parent::getDigagenCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setDigcontaCheq($digcontaCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDigcontaCheq', [$digcontaCheq]);

        return parent::setDigcontaCheq($digcontaCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getDigcontaCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDigcontaCheq', []);

        return parent::getDigcontaCheq();
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
    public function setDataCheq($dataCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataCheq', [$dataCheq]);

        return parent::setDataCheq($dataCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataCheq', []);

        return parent::getDataCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlpagoCheq($vlpagoCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlpagoCheq', [$vlpagoCheq]);

        return parent::setVlpagoCheq($vlpagoCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlpagoCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlpagoCheq', []);

        return parent::getVlpagoCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescontoCheq($descontoCheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescontoCheq', [$descontoCheq]);

        return parent::setDescontoCheq($descontoCheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescontoCheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescontoCheq', []);

        return parent::getDescontoCheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setMotivo1Cheq($motivo1Cheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMotivo1Cheq', [$motivo1Cheq]);

        return parent::setMotivo1Cheq($motivo1Cheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getMotivo1Cheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMotivo1Cheq', []);

        return parent::getMotivo1Cheq();
    }

    /**
     * {@inheritDoc}
     */
    public function setMotivo2Cheq($motivo2Cheq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMotivo2Cheq', [$motivo2Cheq]);

        return parent::setMotivo2Cheq($motivo2Cheq);
    }

    /**
     * {@inheritDoc}
     */
    public function getMotivo2Cheq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMotivo2Cheq', []);

        return parent::getMotivo2Cheq();
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
    public function setConta(\Application\Entity\Conta $conta = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConta', [$conta]);

        return parent::setConta($conta);
    }

    /**
     * {@inheritDoc}
     */
    public function getConta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConta', []);

        return parent::getConta();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodFil(\Application\Entity\Filial $codFil = NULL)
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
    public function setCodMoeda(\Application\Entity\Moeda $codMoeda = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodMoeda', [$codMoeda]);

        return parent::setCodMoeda($codMoeda);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodMoeda()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodMoeda', []);

        return parent::getCodMoeda();
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
