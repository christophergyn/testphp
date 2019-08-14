<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Agencia extends \Application\Entity\Agencia implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'codAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'dataAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'descAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'agenciaAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'digitoAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'endAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'numeroAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'bairAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'ddd1Agen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'foneAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'dddfaxAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'faxAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'cepAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'codBco', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'codMunic'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'codAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'dataAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'descAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'agenciaAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'digitoAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'endAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'numeroAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'bairAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'ddd1Agen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'foneAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'dddfaxAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'faxAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'cepAgen', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'codBco', '' . "\0" . 'Application\\Entity\\Agencia' . "\0" . 'codMunic'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Agencia $proxy) {
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
    public function getCodAgen()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCodAgen();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodAgen', []);

        return parent::getCodAgen();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataAgen($dataAgen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataAgen', [$dataAgen]);

        return parent::setDataAgen($dataAgen);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataAgen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataAgen', []);

        return parent::getDataAgen();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescAgen($descAgen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescAgen', [$descAgen]);

        return parent::setDescAgen($descAgen);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescAgen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescAgen', []);

        return parent::getDescAgen();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgenciaAgen($agenciaAgen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgenciaAgen', [$agenciaAgen]);

        return parent::setAgenciaAgen($agenciaAgen);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgenciaAgen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgenciaAgen', []);

        return parent::getAgenciaAgen();
    }

    /**
     * {@inheritDoc}
     */
    public function setDigitoAgen($digitoAgen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDigitoAgen', [$digitoAgen]);

        return parent::setDigitoAgen($digitoAgen);
    }

    /**
     * {@inheritDoc}
     */
    public function getDigitoAgen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDigitoAgen', []);

        return parent::getDigitoAgen();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndAgen($endAgen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndAgen', [$endAgen]);

        return parent::setEndAgen($endAgen);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndAgen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndAgen', []);

        return parent::getEndAgen();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroAgen($numeroAgen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroAgen', [$numeroAgen]);

        return parent::setNumeroAgen($numeroAgen);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroAgen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroAgen', []);

        return parent::getNumeroAgen();
    }

    /**
     * {@inheritDoc}
     */
    public function setBairAgen($bairAgen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBairAgen', [$bairAgen]);

        return parent::setBairAgen($bairAgen);
    }

    /**
     * {@inheritDoc}
     */
    public function getBairAgen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBairAgen', []);

        return parent::getBairAgen();
    }

    /**
     * {@inheritDoc}
     */
    public function setDdd1Agen($ddd1Agen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDdd1Agen', [$ddd1Agen]);

        return parent::setDdd1Agen($ddd1Agen);
    }

    /**
     * {@inheritDoc}
     */
    public function getDdd1Agen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDdd1Agen', []);

        return parent::getDdd1Agen();
    }

    /**
     * {@inheritDoc}
     */
    public function setFoneAgen($foneAgen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFoneAgen', [$foneAgen]);

        return parent::setFoneAgen($foneAgen);
    }

    /**
     * {@inheritDoc}
     */
    public function getFoneAgen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFoneAgen', []);

        return parent::getFoneAgen();
    }

    /**
     * {@inheritDoc}
     */
    public function setDddfaxAgen($dddfaxAgen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDddfaxAgen', [$dddfaxAgen]);

        return parent::setDddfaxAgen($dddfaxAgen);
    }

    /**
     * {@inheritDoc}
     */
    public function getDddfaxAgen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDddfaxAgen', []);

        return parent::getDddfaxAgen();
    }

    /**
     * {@inheritDoc}
     */
    public function setFaxAgen($faxAgen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFaxAgen', [$faxAgen]);

        return parent::setFaxAgen($faxAgen);
    }

    /**
     * {@inheritDoc}
     */
    public function getFaxAgen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaxAgen', []);

        return parent::getFaxAgen();
    }

    /**
     * {@inheritDoc}
     */
    public function setCepAgen($cepAgen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCepAgen', [$cepAgen]);

        return parent::setCepAgen($cepAgen);
    }

    /**
     * {@inheritDoc}
     */
    public function getCepAgen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCepAgen', []);

        return parent::getCepAgen();
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
    public function setCodBco(\Application\Entity\Banco $codBco = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodBco', [$codBco]);

        return parent::setCodBco($codBco);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodBco()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodBco', []);

        return parent::getCodBco();
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