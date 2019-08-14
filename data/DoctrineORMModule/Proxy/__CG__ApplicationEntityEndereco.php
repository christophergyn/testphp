<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Endereco extends \Application\Entity\Endereco implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'endereco', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'numero', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'bairro', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'complemento', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'cep', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'pontoreferenciaClien', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'pontoReferencia', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'tipoEndereco', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'latitude', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'longitude', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'inscricaoEstadual', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'idMunicipio', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'idParceiro'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'endereco', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'numero', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'bairro', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'complemento', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'cep', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'pontoreferenciaClien', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'pontoReferencia', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'tipoEndereco', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'latitude', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'longitude', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'inscricaoEstadual', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'idMunicipio', '' . "\0" . 'Application\\Entity\\Endereco' . "\0" . 'idParceiro'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Endereco $proxy) {
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
    public function setEndereco($endereco)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndereco', [$endereco]);

        return parent::setEndereco($endereco);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndereco()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndereco', []);

        return parent::getEndereco();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumero($numero)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumero', [$numero]);

        return parent::setNumero($numero);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumero()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumero', []);

        return parent::getNumero();
    }

    /**
     * {@inheritDoc}
     */
    public function setBairro($bairro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBairro', [$bairro]);

        return parent::setBairro($bairro);
    }

    /**
     * {@inheritDoc}
     */
    public function getBairro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBairro', []);

        return parent::getBairro();
    }

    /**
     * {@inheritDoc}
     */
    public function setComplemento($complemento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComplemento', [$complemento]);

        return parent::setComplemento($complemento);
    }

    /**
     * {@inheritDoc}
     */
    public function getComplemento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComplemento', []);

        return parent::getComplemento();
    }

    /**
     * {@inheritDoc}
     */
    public function setCep($cep)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCep', [$cep]);

        return parent::setCep($cep);
    }

    /**
     * {@inheritDoc}
     */
    public function getCep()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCep', []);

        return parent::getCep();
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
    public function setPontoreferenciaClien($pontoreferenciaClien)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPontoreferenciaClien', [$pontoreferenciaClien]);

        return parent::setPontoreferenciaClien($pontoreferenciaClien);
    }

    /**
     * {@inheritDoc}
     */
    public function getPontoreferenciaClien()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPontoreferenciaClien', []);

        return parent::getPontoreferenciaClien();
    }

    /**
     * {@inheritDoc}
     */
    public function setPontoReferencia($pontoReferencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPontoReferencia', [$pontoReferencia]);

        return parent::setPontoReferencia($pontoReferencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getPontoReferencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPontoReferencia', []);

        return parent::getPontoReferencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoEndereco($tipoEndereco)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoEndereco', [$tipoEndereco]);

        return parent::setTipoEndereco($tipoEndereco);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoEndereco()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoEndereco', []);

        return parent::getTipoEndereco();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitude($latitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitude', [$latitude]);

        return parent::setLatitude($latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitude', []);

        return parent::getLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitude($longitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitude', [$longitude]);

        return parent::setLongitude($longitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitude', []);

        return parent::getLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setInscricaoEstadual($inscricaoEstadual)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInscricaoEstadual', [$inscricaoEstadual]);

        return parent::setInscricaoEstadual($inscricaoEstadual);
    }

    /**
     * {@inheritDoc}
     */
    public function getInscricaoEstadual()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInscricaoEstadual', []);

        return parent::getInscricaoEstadual();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdMunicipio(\Application\Entity\Cidade $idMunicipio = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdMunicipio', [$idMunicipio]);

        return parent::setIdMunicipio($idMunicipio);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdMunicipio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdMunicipio', []);

        return parent::getIdMunicipio();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdParceiro(\Application\Entity\Cliente $idParceiro = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdParceiro', [$idParceiro]);

        return parent::setIdParceiro($idParceiro);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdParceiro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdParceiro', []);

        return parent::getIdParceiro();
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
