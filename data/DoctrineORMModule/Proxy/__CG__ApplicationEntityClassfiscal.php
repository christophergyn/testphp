<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Classfiscal extends \Application\Entity\Classfiscal implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'codCfiscal', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'codfiscalCfiscal', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'descCfiscal', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'ipiCfiscal', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'aliqnacCfiscal', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'aliqimpCfiscal', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'versaoIbptCfiscal', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'cest'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'codCfiscal', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'codfiscalCfiscal', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'descCfiscal', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'ipiCfiscal', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'aliqnacCfiscal', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'aliqimpCfiscal', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'versaoIbptCfiscal', '' . "\0" . 'Application\\Entity\\Classfiscal' . "\0" . 'cest'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Classfiscal $proxy) {
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
    public function getCodCfiscal()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCodCfiscal();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodCfiscal', []);

        return parent::getCodCfiscal();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodfiscalCfiscal($codfiscalCfiscal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodfiscalCfiscal', [$codfiscalCfiscal]);

        return parent::setCodfiscalCfiscal($codfiscalCfiscal);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodfiscalCfiscal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodfiscalCfiscal', []);

        return parent::getCodfiscalCfiscal();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescCfiscal($descCfiscal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescCfiscal', [$descCfiscal]);

        return parent::setDescCfiscal($descCfiscal);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescCfiscal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescCfiscal', []);

        return parent::getDescCfiscal();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpiCfiscal($ipiCfiscal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpiCfiscal', [$ipiCfiscal]);

        return parent::setIpiCfiscal($ipiCfiscal);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpiCfiscal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpiCfiscal', []);

        return parent::getIpiCfiscal();
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
    public function setAliqnacCfiscal($aliqnacCfiscal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAliqnacCfiscal', [$aliqnacCfiscal]);

        return parent::setAliqnacCfiscal($aliqnacCfiscal);
    }

    /**
     * {@inheritDoc}
     */
    public function getAliqnacCfiscal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAliqnacCfiscal', []);

        return parent::getAliqnacCfiscal();
    }

    /**
     * {@inheritDoc}
     */
    public function setAliqimpCfiscal($aliqimpCfiscal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAliqimpCfiscal', [$aliqimpCfiscal]);

        return parent::setAliqimpCfiscal($aliqimpCfiscal);
    }

    /**
     * {@inheritDoc}
     */
    public function getAliqimpCfiscal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAliqimpCfiscal', []);

        return parent::getAliqimpCfiscal();
    }

    /**
     * {@inheritDoc}
     */
    public function setVersaoIbptCfiscal($versaoIbptCfiscal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVersaoIbptCfiscal', [$versaoIbptCfiscal]);

        return parent::setVersaoIbptCfiscal($versaoIbptCfiscal);
    }

    /**
     * {@inheritDoc}
     */
    public function getVersaoIbptCfiscal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersaoIbptCfiscal', []);

        return parent::getVersaoIbptCfiscal();
    }

    /**
     * {@inheritDoc}
     */
    public function setCest(\Application\Entity\Cest $cest = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCest', [$cest]);

        return parent::setCest($cest);
    }

    /**
     * {@inheritDoc}
     */
    public function getCest()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCest', []);

        return parent::getCest();
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
