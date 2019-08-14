<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Veiculo extends \Application\Entity\Veiculo implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'codVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'dataVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'descVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'chassiVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'placaVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'renavanVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'marcaVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'anofabVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'pesoliqVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'pesobrutoVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'drecover', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'ufVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'rntcVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'kmVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'volumeVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'tipoVeiculoVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'tipoRodadoVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'tipoCarroceriaVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'tipoPropriedadeVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'codFil', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'codMot', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'idEstado'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'codVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'dataVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'descVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'chassiVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'placaVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'renavanVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'marcaVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'anofabVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'pesoliqVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'pesobrutoVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'drecover', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'ufVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'rntcVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'kmVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'volumeVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'tipoVeiculoVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'tipoRodadoVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'tipoCarroceriaVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'tipoPropriedadeVeic', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'codFil', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'codMot', '' . "\0" . 'Application\\Entity\\Veiculo' . "\0" . 'idEstado'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Veiculo $proxy) {
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
    public function getCodVeic()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCodVeic();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodVeic', []);

        return parent::getCodVeic();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataVeic($dataVeic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataVeic', [$dataVeic]);

        return parent::setDataVeic($dataVeic);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataVeic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataVeic', []);

        return parent::getDataVeic();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescVeic($descVeic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescVeic', [$descVeic]);

        return parent::setDescVeic($descVeic);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescVeic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescVeic', []);

        return parent::getDescVeic();
    }

    /**
     * {@inheritDoc}
     */
    public function setChassiVeic($chassiVeic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChassiVeic', [$chassiVeic]);

        return parent::setChassiVeic($chassiVeic);
    }

    /**
     * {@inheritDoc}
     */
    public function getChassiVeic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChassiVeic', []);

        return parent::getChassiVeic();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlacaVeic($placaVeic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlacaVeic', [$placaVeic]);

        return parent::setPlacaVeic($placaVeic);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlacaVeic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlacaVeic', []);

        return parent::getPlacaVeic();
    }

    /**
     * {@inheritDoc}
     */
    public function setRenavanVeic($renavanVeic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRenavanVeic', [$renavanVeic]);

        return parent::setRenavanVeic($renavanVeic);
    }

    /**
     * {@inheritDoc}
     */
    public function getRenavanVeic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRenavanVeic', []);

        return parent::getRenavanVeic();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarcaVeic($marcaVeic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarcaVeic', [$marcaVeic]);

        return parent::setMarcaVeic($marcaVeic);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarcaVeic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarcaVeic', []);

        return parent::getMarcaVeic();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnofabVeic($anofabVeic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnofabVeic', [$anofabVeic]);

        return parent::setAnofabVeic($anofabVeic);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnofabVeic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnofabVeic', []);

        return parent::getAnofabVeic();
    }

    /**
     * {@inheritDoc}
     */
    public function setPesoliqVeic($pesoliqVeic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPesoliqVeic', [$pesoliqVeic]);

        return parent::setPesoliqVeic($pesoliqVeic);
    }

    /**
     * {@inheritDoc}
     */
    public function getPesoliqVeic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPesoliqVeic', []);

        return parent::getPesoliqVeic();
    }

    /**
     * {@inheritDoc}
     */
    public function setPesobrutoVeic($pesobrutoVeic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPesobrutoVeic', [$pesobrutoVeic]);

        return parent::setPesobrutoVeic($pesobrutoVeic);
    }

    /**
     * {@inheritDoc}
     */
    public function getPesobrutoVeic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPesobrutoVeic', []);

        return parent::getPesobrutoVeic();
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
    public function setUfVeic($ufVeic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUfVeic', [$ufVeic]);

        return parent::setUfVeic($ufVeic);
    }

    /**
     * {@inheritDoc}
     */
    public function getUfVeic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUfVeic', []);

        return parent::getUfVeic();
    }

    /**
     * {@inheritDoc}
     */
    public function setRntcVeic($rntcVeic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRntcVeic', [$rntcVeic]);

        return parent::setRntcVeic($rntcVeic);
    }

    /**
     * {@inheritDoc}
     */
    public function getRntcVeic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRntcVeic', []);

        return parent::getRntcVeic();
    }

    /**
     * {@inheritDoc}
     */
    public function setVolumeVeic($volumeVeic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVolumeVeic', [$volumeVeic]);

        return parent::setVolumeVeic($volumeVeic);
    }

    /**
     * {@inheritDoc}
     */
    public function getVolumeVeic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVolumeVeic', []);

        return parent::getVolumeVeic();
    }

    /**
     * {@inheritDoc}
     */
    public function setKmVeic($kmVeic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKmVeic', [$kmVeic]);

        return parent::setKmVeic($kmVeic);
    }

    /**
     * {@inheritDoc}
     */
    public function getKmVeic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKmVeic', []);

        return parent::getKmVeic();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoVeiculoVeic($tipoVeiculoVeic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoVeiculoVeic', [$tipoVeiculoVeic]);

        return parent::setTipoVeiculoVeic($tipoVeiculoVeic);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoVeiculoVeic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoVeiculoVeic', []);

        return parent::getTipoVeiculoVeic();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoRodadoVeic($tipoRodadoVeic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoRodadoVeic', [$tipoRodadoVeic]);

        return parent::setTipoRodadoVeic($tipoRodadoVeic);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoRodadoVeic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoRodadoVeic', []);

        return parent::getTipoRodadoVeic();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoCarroceriaVeic($tipoCarroceriaVeic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoCarroceriaVeic', [$tipoCarroceriaVeic]);

        return parent::setTipoCarroceriaVeic($tipoCarroceriaVeic);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoCarroceriaVeic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoCarroceriaVeic', []);

        return parent::getTipoCarroceriaVeic();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoPropriedadeVeic($tipoPropriedadeVeic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoPropriedadeVeic', [$tipoPropriedadeVeic]);

        return parent::setTipoPropriedadeVeic($tipoPropriedadeVeic);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoPropriedadeVeic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoPropriedadeVeic', []);

        return parent::getTipoPropriedadeVeic();
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
    public function setCodMot(\Application\Entity\Motorista $codMot = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodMot', [$codMot]);

        return parent::setCodMot($codMot);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodMot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodMot', []);

        return parent::getCodMot();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdEstado(\Application\Entity\Estado $idEstado = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdEstado', [$idEstado]);

        return parent::setIdEstado($idEstado);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEstado', []);

        return parent::getIdEstado();
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