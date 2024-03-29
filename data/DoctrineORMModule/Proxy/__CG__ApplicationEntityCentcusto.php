<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Centcusto extends \Application\Entity\Centcusto implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'codCentcusto', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'dataCentcusto', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'descCentcusto', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'tipoAnaliticoCentcusto', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'contaCredito', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'contaDebito'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'codCentcusto', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'dataCentcusto', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'descCentcusto', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'tipoAnaliticoCentcusto', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'contaCredito', '' . "\0" . 'Application\\Entity\\Centcusto' . "\0" . 'contaDebito'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Centcusto $proxy) {
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
    public function getCodCentcusto()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCodCentcusto();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodCentcusto', []);

        return parent::getCodCentcusto();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodCentcusto($codCentcusto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodCentcusto', [$codCentcusto]);

        return parent::setCodCentcusto($codCentcusto);
    }

    /**
     * {@inheritDoc}
     */
    public function setDataCentcusto($dataCentcusto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataCentcusto', [$dataCentcusto]);

        return parent::setDataCentcusto($dataCentcusto);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataCentcusto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataCentcusto', []);

        return parent::getDataCentcusto();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescCentcusto($descCentcusto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescCentcusto', [$descCentcusto]);

        return parent::setDescCentcusto($descCentcusto);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescCentcusto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescCentcusto', []);

        return parent::getDescCentcusto();
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
    public function setTipoAnaliticoCentcusto($tipoAnaliticoCentcusto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoAnaliticoCentcusto', [$tipoAnaliticoCentcusto]);

        return parent::setTipoAnaliticoCentcusto($tipoAnaliticoCentcusto);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoAnaliticoCentcusto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoAnaliticoCentcusto', []);

        return parent::getTipoAnaliticoCentcusto();
    }

    /**
     * {@inheritDoc}
     */
    public function setContaCredito(\Application\Entity\PlanoConta $contaCredito = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContaCredito', [$contaCredito]);

        return parent::setContaCredito($contaCredito);
    }

    /**
     * {@inheritDoc}
     */
    public function getContaCredito()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContaCredito', []);

        return parent::getContaCredito();
    }

    /**
     * {@inheritDoc}
     */
    public function setContaDebito(\Application\Entity\PlanoConta $contaDebito = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContaDebito', [$contaDebito]);

        return parent::setContaDebito($contaDebito);
    }

    /**
     * {@inheritDoc}
     */
    public function getContaDebito()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContaDebito', []);

        return parent::getContaDebito();
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
