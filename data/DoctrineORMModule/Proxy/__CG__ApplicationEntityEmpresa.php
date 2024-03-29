<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Empresa extends \Application\Entity\Empresa implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'codEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'dataEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'razaoEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'fantEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'enderEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'bairEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'ufEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'tel1Emp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'tel2Emp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'tel3Emp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'faxEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'cepEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'cgcEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'inscEEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'inscMEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'diretEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'diretcpfEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'dtfundEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'contatoEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'emailEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'urlEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'juntaEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'etcEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'numeroEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'pbeginEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'pendEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'logoEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'codMunic'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'codEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'dataEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'razaoEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'fantEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'enderEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'bairEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'ufEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'tel1Emp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'tel2Emp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'tel3Emp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'faxEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'cepEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'cgcEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'inscEEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'inscMEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'diretEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'diretcpfEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'dtfundEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'contatoEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'emailEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'urlEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'juntaEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'etcEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'numeroEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'pbeginEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'pendEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'logoEmp', '' . "\0" . 'Application\\Entity\\Empresa' . "\0" . 'codMunic'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Empresa $proxy) {
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
    public function getCodEmp()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCodEmp();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodEmp', []);

        return parent::getCodEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataEmp($dataEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataEmp', [$dataEmp]);

        return parent::setDataEmp($dataEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataEmp', []);

        return parent::getDataEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setRazaoEmp($razaoEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRazaoEmp', [$razaoEmp]);

        return parent::setRazaoEmp($razaoEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getRazaoEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRazaoEmp', []);

        return parent::getRazaoEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setFantEmp($fantEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFantEmp', [$fantEmp]);

        return parent::setFantEmp($fantEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getFantEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFantEmp', []);

        return parent::getFantEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnderEmp($enderEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnderEmp', [$enderEmp]);

        return parent::setEnderEmp($enderEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnderEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnderEmp', []);

        return parent::getEnderEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setBairEmp($bairEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBairEmp', [$bairEmp]);

        return parent::setBairEmp($bairEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getBairEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBairEmp', []);

        return parent::getBairEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setUfEmp($ufEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUfEmp', [$ufEmp]);

        return parent::setUfEmp($ufEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getUfEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUfEmp', []);

        return parent::getUfEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel1Emp($tel1Emp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel1Emp', [$tel1Emp]);

        return parent::setTel1Emp($tel1Emp);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel1Emp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel1Emp', []);

        return parent::getTel1Emp();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel2Emp($tel2Emp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel2Emp', [$tel2Emp]);

        return parent::setTel2Emp($tel2Emp);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel2Emp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel2Emp', []);

        return parent::getTel2Emp();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel3Emp($tel3Emp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel3Emp', [$tel3Emp]);

        return parent::setTel3Emp($tel3Emp);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel3Emp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel3Emp', []);

        return parent::getTel3Emp();
    }

    /**
     * {@inheritDoc}
     */
    public function setFaxEmp($faxEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFaxEmp', [$faxEmp]);

        return parent::setFaxEmp($faxEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getFaxEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaxEmp', []);

        return parent::getFaxEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setCepEmp($cepEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCepEmp', [$cepEmp]);

        return parent::setCepEmp($cepEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getCepEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCepEmp', []);

        return parent::getCepEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setCgcEmp($cgcEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCgcEmp', [$cgcEmp]);

        return parent::setCgcEmp($cgcEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getCgcEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCgcEmp', []);

        return parent::getCgcEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setInscEEmp($inscEEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInscEEmp', [$inscEEmp]);

        return parent::setInscEEmp($inscEEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getInscEEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInscEEmp', []);

        return parent::getInscEEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setInscMEmp($inscMEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInscMEmp', [$inscMEmp]);

        return parent::setInscMEmp($inscMEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getInscMEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInscMEmp', []);

        return parent::getInscMEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiretEmp($diretEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiretEmp', [$diretEmp]);

        return parent::setDiretEmp($diretEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiretEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiretEmp', []);

        return parent::getDiretEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiretcpfEmp($diretcpfEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiretcpfEmp', [$diretcpfEmp]);

        return parent::setDiretcpfEmp($diretcpfEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiretcpfEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiretcpfEmp', []);

        return parent::getDiretcpfEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtfundEmp($dtfundEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtfundEmp', [$dtfundEmp]);

        return parent::setDtfundEmp($dtfundEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtfundEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtfundEmp', []);

        return parent::getDtfundEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setContatoEmp($contatoEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContatoEmp', [$contatoEmp]);

        return parent::setContatoEmp($contatoEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getContatoEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContatoEmp', []);

        return parent::getContatoEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailEmp($emailEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailEmp', [$emailEmp]);

        return parent::setEmailEmp($emailEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailEmp', []);

        return parent::getEmailEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrlEmp($urlEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrlEmp', [$urlEmp]);

        return parent::setUrlEmp($urlEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrlEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrlEmp', []);

        return parent::getUrlEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setJuntaEmp($juntaEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJuntaEmp', [$juntaEmp]);

        return parent::setJuntaEmp($juntaEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getJuntaEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJuntaEmp', []);

        return parent::getJuntaEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtcEmp($etcEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtcEmp', [$etcEmp]);

        return parent::setEtcEmp($etcEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtcEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtcEmp', []);

        return parent::getEtcEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroEmp($numeroEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroEmp', [$numeroEmp]);

        return parent::setNumeroEmp($numeroEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroEmp', []);

        return parent::getNumeroEmp();
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
    public function setPbeginEmp($pbeginEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPbeginEmp', [$pbeginEmp]);

        return parent::setPbeginEmp($pbeginEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getPbeginEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPbeginEmp', []);

        return parent::getPbeginEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPendEmp($pendEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPendEmp', [$pendEmp]);

        return parent::setPendEmp($pendEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getPendEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPendEmp', []);

        return parent::getPendEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogoEmp($logoEmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogoEmp', [$logoEmp]);

        return parent::setLogoEmp($logoEmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogoEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogoEmp', []);

        return parent::getLogoEmp();
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

}
