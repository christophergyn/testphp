<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Programa extends \Application\Entity\Programa implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'codProg', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'descProg', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'dataProg', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'statusProg', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'nivelProg', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'tipoProg', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'tituloProg', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'link', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'codUsuar'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'codProg', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'descProg', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'dataProg', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'statusProg', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'nivelProg', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'tipoProg', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'tituloProg', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'link', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Programa' . "\0" . 'codUsuar'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Programa $proxy) {
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
    public function getCodProg()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCodProg();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodProg', []);

        return parent::getCodProg();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescProg($descProg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescProg', [$descProg]);

        return parent::setDescProg($descProg);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescProg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescProg', []);

        return parent::getDescProg();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataProg($dataProg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataProg', [$dataProg]);

        return parent::setDataProg($dataProg);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataProg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataProg', []);

        return parent::getDataProg();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatusProg($statusProg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatusProg', [$statusProg]);

        return parent::setStatusProg($statusProg);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatusProg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatusProg', []);

        return parent::getStatusProg();
    }

    /**
     * {@inheritDoc}
     */
    public function setNivelProg($nivelProg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNivelProg', [$nivelProg]);

        return parent::setNivelProg($nivelProg);
    }

    /**
     * {@inheritDoc}
     */
    public function getNivelProg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNivelProg', []);

        return parent::getNivelProg();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoProg($tipoProg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoProg', [$tipoProg]);

        return parent::setTipoProg($tipoProg);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoProg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoProg', []);

        return parent::getTipoProg();
    }

    /**
     * {@inheritDoc}
     */
    public function setTituloProg($tituloProg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTituloProg', [$tituloProg]);

        return parent::setTituloProg($tituloProg);
    }

    /**
     * {@inheritDoc}
     */
    public function getTituloProg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTituloProg', []);

        return parent::getTituloProg();
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
    public function setLink($link)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLink', [$link]);

        return parent::setLink($link);
    }

    /**
     * {@inheritDoc}
     */
    public function getLink()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLink', []);

        return parent::getLink();
    }

    /**
     * {@inheritDoc}
     */
    public function addCodUsuar(\Application\Entity\Usuario $codUsuar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCodUsuar', [$codUsuar]);

        return parent::addCodUsuar($codUsuar);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCodUsuar(\Application\Entity\Usuario $codUsuar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCodUsuar', [$codUsuar]);

        return parent::removeCodUsuar($codUsuar);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodUsuar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodUsuar', []);

        return parent::getCodUsuar();
    }

}