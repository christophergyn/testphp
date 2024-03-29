<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Motorista extends \Application\Entity\Motorista implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'codMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'dataMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'descMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'cpfMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'endMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'numMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'bairroMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'cepMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'rgMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'orgaoexpMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'cnhMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'tpcnhMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'validadeMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'emissaoMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'habilita1Mot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'drecover', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'codMunic'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'codMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'dataMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'descMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'cpfMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'endMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'numMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'bairroMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'cepMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'rgMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'orgaoexpMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'cnhMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'tpcnhMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'validadeMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'emissaoMot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'habilita1Mot', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'drecover', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Motorista' . "\0" . 'codMunic'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Motorista $proxy) {
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
    public function getCodMot()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCodMot();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodMot', []);

        return parent::getCodMot();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataMot($dataMot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataMot', [$dataMot]);

        return parent::setDataMot($dataMot);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataMot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataMot', []);

        return parent::getDataMot();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescMot($descMot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescMot', [$descMot]);

        return parent::setDescMot($descMot);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescMot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescMot', []);

        return parent::getDescMot();
    }

    /**
     * {@inheritDoc}
     */
    public function setCpfMot($cpfMot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCpfMot', [$cpfMot]);

        return parent::setCpfMot($cpfMot);
    }

    /**
     * {@inheritDoc}
     */
    public function getCpfMot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCpfMot', []);

        return parent::getCpfMot();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndMot($endMot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndMot', [$endMot]);

        return parent::setEndMot($endMot);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndMot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndMot', []);

        return parent::getEndMot();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumMot($numMot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumMot', [$numMot]);

        return parent::setNumMot($numMot);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumMot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumMot', []);

        return parent::getNumMot();
    }

    /**
     * {@inheritDoc}
     */
    public function setBairroMot($bairroMot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBairroMot', [$bairroMot]);

        return parent::setBairroMot($bairroMot);
    }

    /**
     * {@inheritDoc}
     */
    public function getBairroMot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBairroMot', []);

        return parent::getBairroMot();
    }

    /**
     * {@inheritDoc}
     */
    public function setCepMot($cepMot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCepMot', [$cepMot]);

        return parent::setCepMot($cepMot);
    }

    /**
     * {@inheritDoc}
     */
    public function getCepMot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCepMot', []);

        return parent::getCepMot();
    }

    /**
     * {@inheritDoc}
     */
    public function setRgMot($rgMot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRgMot', [$rgMot]);

        return parent::setRgMot($rgMot);
    }

    /**
     * {@inheritDoc}
     */
    public function getRgMot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRgMot', []);

        return parent::getRgMot();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrgaoexpMot($orgaoexpMot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrgaoexpMot', [$orgaoexpMot]);

        return parent::setOrgaoexpMot($orgaoexpMot);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrgaoexpMot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrgaoexpMot', []);

        return parent::getOrgaoexpMot();
    }

    /**
     * {@inheritDoc}
     */
    public function setCnhMot($cnhMot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCnhMot', [$cnhMot]);

        return parent::setCnhMot($cnhMot);
    }

    /**
     * {@inheritDoc}
     */
    public function getCnhMot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCnhMot', []);

        return parent::getCnhMot();
    }

    /**
     * {@inheritDoc}
     */
    public function setTpcnhMot($tpcnhMot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTpcnhMot', [$tpcnhMot]);

        return parent::setTpcnhMot($tpcnhMot);
    }

    /**
     * {@inheritDoc}
     */
    public function getTpcnhMot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTpcnhMot', []);

        return parent::getTpcnhMot();
    }

    /**
     * {@inheritDoc}
     */
    public function setValidadeMot($validadeMot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValidadeMot', [$validadeMot]);

        return parent::setValidadeMot($validadeMot);
    }

    /**
     * {@inheritDoc}
     */
    public function getValidadeMot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValidadeMot', []);

        return parent::getValidadeMot();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmissaoMot($emissaoMot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmissaoMot', [$emissaoMot]);

        return parent::setEmissaoMot($emissaoMot);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmissaoMot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmissaoMot', []);

        return parent::getEmissaoMot();
    }

    /**
     * {@inheritDoc}
     */
    public function setHabilita1Mot($habilita1Mot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHabilita1Mot', [$habilita1Mot]);

        return parent::setHabilita1Mot($habilita1Mot);
    }

    /**
     * {@inheritDoc}
     */
    public function getHabilita1Mot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHabilita1Mot', []);

        return parent::getHabilita1Mot();
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
    public function setCodMunic(\Application\Entity\Cidade $codMunic = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodMunic', [$codMunic]);

        return parent::setCodMunic($codMunic);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodMunic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodMunic', []);

        return parent::getCodMunic();
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
